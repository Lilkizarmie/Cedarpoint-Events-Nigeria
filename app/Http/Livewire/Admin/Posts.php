<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $deleteId, $editId, $post, $title, $image, $body, $teaser, $published, $slug, $editphoto;

    protected $rules = [
        'title' => 'required',
        'body' => 'required',
        'image' => 'required',
        // 'password' => 'required',
        // 'school' => 'required',
        // 'role' => 'required',
    ];


//     public function dehydrate() {
//         $this->dispatchBrowserEvent('mde');
//    }

    public function clear()
    {
        $this->reset('title', 'body', 'slug', 'image', 'published', 'editId', 'deleteId', 'editphoto');
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }

    public function addPost()
    {

        $this->validate();
        if ($this->image) {

            $filename = uniqid() . '.' . $this->image->getClientOriginalExtension();
            $location = 'images/' . $filename;

            Image::make($this->image)->resize(700, 700, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->sharpen(7)->save($location);

        }
        $post = Post::create([
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'image' => $filename,
            'published' => $this->published,
        ]);

        $this->reset('title', 'body', 'slug', 'image', 'published');
        $this->dispatchBrowserEvent('added');
    }

    public function editId(Post $post)
    {
        $this->post = $post;
        $this->title = $post->title;
        $this->slug = $post->slug;
        $this->body = $post->body;
        $this->published = $post->published;
        $this->editphoto = $post->image;

        $this->dispatchBrowserEvent('ck');
    }

    public function editPost()
    {
        $this->validate(['title' => 'required',
            'body' => 'required',
            'slug' => 'required',
            'published' => 'required',]);

        if ($this->image) {

            $filename = uniqid() . '.' . $this->image->getClientOriginalExtension();
            $location = 'images/' . $filename;

            Image::make($this->image)->resize(700, 700, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->sharpen(7)->save($location);
            $this->post->update([
                'title' => $this->title,
                'slug' => $this->slug,
                'body' => $this->body,
                'image' => $filename,
                'published' => $this->published,
            ]);

        }

        $this->post->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'body' => $this->body,
            'published' => $this->published,
        ]);
        $this->reset('title', 'body', 'slug', 'image', 'published', 'editphoto');

        $this->dispatchBrowserEvent('edited');

    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        // Post::destroy($this->deleteId);
        $post = Post::Find($this->deleteId);
        File::delete('images/' . $post->image);
        $post->delete();
        $this->dispatchBrowserEvent('deleted');
    }

    public function render()
    {
        $posts = Post::latest()->paginate(25);
        return view('livewire.admin.posts', compact('posts'));
    }
}
