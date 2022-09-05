<?php

namespace App\Http\Livewire\Admin;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Albums extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $deleteId, $editId, $album, $title, $photo, $event_date, $editphoto;

    protected $rules = [
        'title' => 'required',
        'photo' => 'required',
        'event_date' => 'required',
    ];

    public function clear()
    {
        $this->reset('title', 'photo', 'event_date', 'editId', 'deleteId');
    }

    public function addAlbum()
    {
        $this->validate();
        $slug = Str::slug($this->title);
        if ($this->photo) {

            $filename = uniqid() . '.' . $this->photo->getClientOriginalExtension();
            $location = 'images/' . $filename;

            Image::make($this->photo)->resize(1900, 1900, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->sharpen(7)->save($location);

        }
        Album::create([
            'title' => $this->title,
            'slug' => $slug,
            'photo' => $filename,
            'event_date' => $this->event_date,
        ]);
        $this->reset('title', 'photo', 'event_date');
        $this->dispatchBrowserEvent('added');
    }

    public function editId(Album $album)
    {
        $this->album = $album;
        $this->title = $album->title;
        $this->event_date = $album->event_date;
        $this->editphoto = $album->photo;

    }

    public function editAlbum()
    {
        $this->validate(['title' => 'required',
            'event_date' => 'required']);
        $slug = Str::slug($this->title);
        if ($this->photo) {

            $filename = uniqid() . '.' . $this->photo->getClientOriginalExtension();
            $location = 'images/' . $filename;

            Image::make($this->photo)->resize(1900, 1900, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->sharpen(7)->save($location);
            $this->album->update([
                'title' => $this->title,
                'slug' => $slug,
                'event_date' => $this->event_date,
                'photo' => $filename,
            ]);

        }
        $this->album->update([
            'title' => $this->title,
            'slug' => $slug,
            'event_date' => $this->event_date,
        ]);
        $this->reset('title', 'photo', 'event_date');
        $this->dispatchBrowserEvent('edited');

    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        // Album::destroy($this->deleteId);
        $album = Album::Find($this->deleteId);
        if ($album->photos()) {
            foreach ($album->photos as $photo) {
                // $todeletephoto = Photo::Find($photo->id);
                File::delete('images/' . $photo->photo);
                $photo->delete();
            }
        }
        File::delete('images/' . $album->photo);
        $album->delete();
        $this->dispatchBrowserEvent('deleted');
    }

    public function render()
    {
        $albums = Album::latest()->paginate(25);
        return view('livewire.admin.albums', compact('albums'));
    }
}
