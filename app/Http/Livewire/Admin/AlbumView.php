<?php

namespace App\Http\Livewire\Admin;

use App\Models\Album;
use App\Models\Photo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class AlbumView extends Component
{
    use WithFileUploads;

    protected $listeners = ['render'];

    public Album $album;
    public $photos = [];
    public $deleteId;

    protected $rules = [
        'photos' => 'required',
    ];

    public function upload()
    {
        $this->validate();

        if($this->photos){

            foreach ($this->photos as $photo) {

                $filename = uniqid() . '.' . $photo->getClientOriginalExtension();
                $location = 'images/' . $filename;

                // GlideImage::create($photo)->modify(['w' => 500, 'h' => 500, 'fit' => 'contain', 'sharp' => '7'])->save($location);

                Image::make($photo)->resize(900, 900, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })->sharpen(7)->save($location);

                Photo::create([
                    'photo' => $filename,
                    'album_id' => $this->album->id,
                ]);
            }
        }

        $this->emitSelf('render');
        $this->reset('photos');


    }

    public function clear()
    {
        $this->reset('photos', 'deleteId');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        // Album::destroy($this->deleteId);
        $photo = Photo::Find($this->deleteId);
        File::delete('images/' .$photo->photo);
        // unlink('images/' .$photo->photo);
        $photo->delete();
        $this->emitSelf('render');
        $this->dispatchBrowserEvent('deleted');
    }

    public function render()
    {
        return view('livewire.admin.album-view');
    }
}
