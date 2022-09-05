<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <div class="title" style="margin-right: 0; border-right: none; padding-right: 0;">
                <h3>Posts</h3>
            </div>
        </nav>
        <button id="add-list" wire:click.prevent='clear' class="btn btn-primary" data-toggle="modal"
            data-target="#addModal">Add Post</button>
    </div>
    <div class="row" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive">
                    <table id="" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                {{-- <th class="checkbox-column"> Record no. </th> --}}
                                <th>Post Title</th>
                                {{-- <th>Contact Name</th>
                                <th>Contact Email</th>
                                <th>Contact Phone</th> --}}
                                <th>Date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    {{-- <td class="checkbox-column"> 1 </td> --}}
                                    <td><span class="user-name">{{ $post->title }}</span></a></td>
                                    {{-- <td>
                                        <div class="d-flex">
                                            <div class="usr-img-frame mr-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle"
                                            src="assets/img/profile-12.jpg">
                                    </div>
                                            <p class="align-self-center my-3 user-name"> {{ $school->contact_name }}
                                            </p>
                                        </div>
                                    </td> --}}
                                    {{-- <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-mail">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg> {{ $school->contact_email }}</span></td> --}}
                                    {{-- <td><span class="inv-amount"> {{ $school->contact_phone }}</span></td> --}}
                                    <td><span class="inv-date"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-calendar">
                                                <rect x="3" y="4" width="18" height="18"
                                                    rx="2" ry="2"></rect>
                                                <line x1="16" y1="2" x2="16" y2="6">
                                                </line>
                                                <line x1="8" y1="2" x2="8" y2="6">
                                                </line>
                                                <line x1="3" y1="10" x2="21" y2="10">
                                                </line>
                                            </svg> {{ date('j M Y', strtotime($post->created_at)) }}</span></td>

                                    <td>
                                        @if ($post->published == 1)
                                            <span class="badge badge-success inv-status">Published</span>
                                        @else
                                            <span class="badge badge-danger inv-status">Not Published</span>
                                        @endif
                                    </td>
                                    <td class="">
                                        <ul class="table-controls">
                                            <li><a href="javascript:void(0);" class="mx-2" data-toggle="modal"
                                                    data-target="#editModal" wire:click='editId({{ $post->id }})'
                                                    title="Edit"><svg xmlns="http://www.w3.org/2000/svg"
                                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class="feather feather-edit-2 text-success">
                                                        <path
                                                            d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                        </path>
                                                    </svg>
                                                </a>
                                            </li>
                                            <li><a href="javascript:void(0);" class="mx-2"
                                                    wire:click='deleteId({{ $post->id }})' data-toggle="modal"
                                                    data-target="#deleteConformation" title="Delete"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2 text-danger">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                </a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="mx-auto">
            {{ $posts->links() }}
        </div>
    </div>

    <!--Delete Modal -->
    <div class="modal fade" wire:ignore.self id="deleteConformation" tabindex="-1" role="dialog"
        aria-labelledby="deleteConformationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="deleteConformationLabel">
                <div class="modal-header">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-trash-2">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                    </div>
                    <h5 class="modal-title" id="exampleModalLabel">Delete Post?</h5>
                    <button type="button" wire:click.prevent='clear' class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="">If you delete this Post it will be gone forever. Are you sure you want
                        to proceed?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" wire:click.prevent='clear' class="btn"
                        data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger" wire:click.prevent='delete'
                        data-remove="task">Delete</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Add Modal -->
    <div wire:ignore.self id="addModal" class="modal animated fadeIn">

        <div class="modal-dialog modal-dialog-centered">

            <!-- Modal content -->
            <div class="modal-content">

                <div class="modal-body">

                    <span data-dismiss="modal" wire:click.prevent='clear' class="close"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></span>

                    <div class="add-edit-event-box">
                        <div class="add-edit-event-content">
                            <h5 class="add-event-title modal-title">Add Post</h5>
                            {{-- <h5 class="edit-event-title modal-title">Edit Events</h5> --}}

                            <form class="">

                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="post-title" class="">Post Title</label>
                                        <div class="event-title">
                                            <input wire:model='title' id="post-title" type="text"
                                                placeholder="Enter Post Title" class="form-control" required>
                                            @error('title')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="slug" class="">Post Slug</label>
                                        <div class="event-title">
                                            <input wire:model='slug' id="slug" type="text" placeholder=""
                                                class="form-control" required>
                                            @error('slug')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">

                                        <div class='text-center'
                                            style="align-items: center;justify-content:center; padding-left:1.5rem; padding-right:1.5rem; padding-top:1.5rem; padding-bottom:1.5rem; border-color:gray; border-style:dashed; border-width:2px; border-radius:8px; ">
                                            <div>
                                                {{-- <div  class="loader multi-loader mx-auto"></div> --}}
                                                <div wire:loading wire:target="image"
                                                    class="spinner-border text-success align-self-center loader-lg">
                                                </div>
                                                @if ($image)
                                                    <img style="width: 60%; height: 150px" class="mx-auto w-52 h-52"
                                                        src="{{ $image->temporaryUrl() }}">
                                                @else
                                                    <svg wire:loading.remove wire:target="image"
                                                        style="width: 3rem; height: 3rem"
                                                        class="w-12 h-12 mx-auto text-gray-400" stroke="currentColor"
                                                        fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                                        <path
                                                            d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </svg>
                                                @endif
                                            </div>
                                            <label>
                                                <input type="file" wire:model='image' class="form-control"
                                                    required style="color:transparent; display: none;"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif" />
                                                <a
                                                    style="cursor: pointer; font-size: 18px; color: blue; font-weight:600">
                                                    Choose Post Image</a>
                                                <p>PNG, JPG, GIF up to 10MB</p>
                                                @error('image')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>

                                    {{-- <textarea wire:model='body' id="demo2"></textarea> --}}

                                </div>

                                <div class="row">
                                    <div class="col-md-12" wire:ignore>
                                        <label for="body" class="mt-3">Post Body</label>

                                        <textarea wire:model='body' rows="5" id="body"></textarea>
                                        @error('body')
                                            <span class="error">{{ $message }}</span>
                                        @enderror

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="event-badge">
                                            <p class="">Publish Status</p>
                                            <div class="d-sm-flex d-block">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-success">
                                                        <input wire:model='published' type="radio"
                                                            class="new-control-input" name="marker" value="1"
                                                            required>
                                                        <span class="new-control-indicator"></span>Published
                                                    </label>
                                                </div>

                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-danger">
                                                        <input wire:model='published' type="radio"
                                                            class="new-control-input" name="marker" value="0"
                                                            required>
                                                        <span class="new-control-indicator"></span>Not Published
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button id="discard" wire:click.prevent='clear' class="btn"
                        data-dismiss="modal">Discard</button>
                    <button id="add-e" wire:click.prevent='addPost' class="btn">Add Post</button>
                    {{-- <button id="edit-event" class="btn">Save</button> --}}
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div wire:ignore.self id="editModal" class="modal animated fadeIn">

        <div class="modal-dialog modal-dialog-centered">

            <!-- Modal content -->
            <div class="modal-content">

                <div class="modal-body">

                    <span wire:click.prevent='clear' data-dismiss="modal" class="close"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="feather feather-x close" data-dismiss="modal">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></span>

                    <div class="add-edit-event-box">
                        <div class="add-edit-event-content">
                            <h5 class="add-event-title modal-title">Edit Post</h5>
                            {{-- <h5 class="edit-event-title modal-title">Edit Events</h5> --}}

                            <form class="">

                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="post-title" class="">Post Title</label>
                                        <div class="event-title">
                                            <input wire:model='title' id="post-title" type="text"
                                                placeholder="Enter Post Title" class="form-control" required>
                                            @error('title')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="slug" class="">Post Slug</label>
                                        <div class="event-title">
                                            <input wire:model='slug' id="slug" type="text" placeholder=""
                                                class="form-control" required>
                                            @error('slug')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">

                                        <div class='text-center'
                                            style="align-items: center;justify-content:center; padding-left:1.5rem; padding-right:1.5rem; padding-top:1.5rem; padding-bottom:1.5rem; border-color:gray; border-style:dashed; border-width:2px; border-radius:8px; ">
                                            <div>
                                                {{-- <div  class="loader multi-loader mx-auto"></div> --}}
                                                <div wire:loading wire:target="image"
                                                    class="spinner-border text-success align-self-center loader-lg">
                                                </div>
                                                @if ($image)
                                                    <img style="width: 60%; height: 150px" class="mx-auto w-52 h-52"
                                                        src="{{ $image->temporaryUrl() }}">
                                                @else
                                                    <img style="width: 60%; height: 150px" class="mx-auto w-52 h-52"
                                                        src="{{ asset('images/' . $editphoto) }}">
                                                @endif
                                            </div>
                                            <label>
                                                <input type="file" wire:model='image' class="form-control"
                                                    required style="color:transparent; display: none;"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif" />
                                                <a
                                                    style="cursor: pointer; font-size: 18px; color: blue; font-weight:600">
                                                    Choose Images to upload</a>
                                                <p>PNG, JPG, GIF up to 10MB</p>
                                                @error('image')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </label>
                                        </div>
                                    </div>

                                    {{-- <textarea wire:model='body' id="demo2"></textarea> --}}

                                </div>
                                <div class="row">
                                    <div class="col-md-12" wire:ignore>
                                        <label for="body_" class="mt-3">Post Body</label>
                                        <textarea wire:model='body' rows="7" id="body_"></textarea>
                                        @error('body')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="event-badge">
                                            <p class="">Publish Status</p>
                                            <div class="d-sm-flex d-block">
                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-success">
                                                        <input wire:model='published' type="radio"
                                                            class="new-control-input" name="marker" value="1"
                                                            required>
                                                        <span class="new-control-indicator"></span>Published
                                                    </label>
                                                </div>

                                                <div class="n-chk">
                                                    <label class="new-control new-radio radio-danger">
                                                        <input wire:model='published' type="radio"
                                                            class="new-control-input" name="marker" value="0"
                                                            required>
                                                        <span class="new-control-indicator"></span>Not Published
                                                    </label>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button id="discard" wire:click.prevent='clear' class="btn"
                        data-dismiss="modal">Discard</button>
                    {{-- <button id="add-e" wire:click.prevent='addPost' class="btn">Add School</button> --}}
                    <button id="edit-event" wire:click.prevent='editPost' class="btn">Save
                        Changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
@push('scripts')
    <script>
        ClassicEditor
            .create(document.querySelector('#body'))
            .then(editor => {
                editor.model.document.on('change:data', () => {
                    @this.set('body', editor.getData());
                })
            })
            .catch(error => {
                console.error(error);
            });

        ClassicEditor
            .create(document.querySelector('#body_'))
            .then(editor => {

                ckeditor = editor
                editor.model.document.on('change:data', () => {
                    @this.set('body', editor.getData());
                })

            })
            .catch(error => {
                console.error(error);
            });

        window.addEventListener('ck', event => {
            ckeditor.setData(@this.body)
        })
    </script>
@endpush
