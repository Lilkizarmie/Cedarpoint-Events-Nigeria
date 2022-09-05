<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <div class="title" style="margin-right: 0; border-right: none; padding-right: 0;">
                <h3>Albums</h3>
            </div>
        </nav>
        <button id="add-list" wire:click.prevent='clear' class="btn btn-primary" data-toggle="modal"
            data-target="#addModal">Add Album</button>
    </div>
    <div class="row" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive">
                    <table id="" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                {{-- <th class="checkbox-column"> Record no. </th> --}}
                                <th>Album Title</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($albums as $album)
                                <tr>

                                    <td>
                                        {{-- <div class="d-flex">
                                            <div class="usr-img-frame mr-2 rounded-circle">
                                                <img alt="avatar" class="img-fluid rounded-circle"
                                                    src="{{ asset('images/' . $album->photo) }}">
                                            </div>
                                            <p class="align-self-center mb-0 user-name"> {{ $album->title }} </p>
                                        </div> --}}
                                        <span class="user-name">{{ $album->title }}</span>
                                    </td>

                                    <td class="text-center">
                                        <ul class="table-controls">
                                            <li>
                                                <a href="{{ route('album.view', $album->slug) }}"
                                                    class="btn btn-outline-info"><svg xmlns="http://www.w3.org/2000/svg"
                                                        style="color: inherit" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-upload">
                                                        <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                                        <polyline points="17 8 12 3 7 8"></polyline>
                                                        <line x1="12" y1="3" x2="12"
                                                            y2="15"></line>
                                                    </svg> Upload to Album</a>
                                            </li>
                                            <li><a href="javascript:void(0);" class="mx-2" data-toggle="modal"
                                                    data-target="#editModal" wire:click='editId({{ $album->id }})'
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
                                                    wire:click='deleteId({{ $album->id }})' data-toggle="modal"
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
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="mx-auto">
            {{ $albums->links() }}
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Album?</h5>
                    <button type="button" wire:click.prevent='clear' class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="">If you delete this album it will be gone forever. Are you sure you want
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
                            <h5 class="add-event-title modal-title">Add Album</h5>
                            {{-- <h5 class="edit-event-title modal-title">Edit Events</h5> --}}

                            <form class="">

                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="role-name" class="">Album Title</label>
                                        <div class="event-title">
                                            <input wire:model='title' id="role-name" type="text"
                                                placeholder="Enter Album Title" class="form-control" required>
                                            @error('title')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="-name" class="">Event Date</label>
                                        <div class="event-title">
                                            <input wire:model='event_date' id="-name" type="text"
                                                placeholder="Enter Event Date" class="form-control" required>
                                            @error('event_date')
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
                                                <div wire:loading wire:target="photo"
                                                    class="spinner-border text-success align-self-center loader-lg">
                                                </div>
                                                @if ($photo)
                                                    <img style="width: 60%; height: 150px" class="mx-auto w-52 h-52"
                                                        src="{{ $photo->temporaryUrl() }}">
                                                @else
                                                    <svg wire:loading.remove wire:target="photo"
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
                                                <input type="file" wire:model='photo' class="form-control"
                                                    required style="color:transparent; display: none;"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif" />
                                                <a
                                                    style="cursor: pointer; font-size: 18px; color: blue; font-weight:600">
                                                    Choose Images to upload</a>
                                                <p>PNG, JPG, GIF up to 10MB</p>
                                                @error('photo')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </label>
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
                    <button id="add-e" wire:click.prevent='addAlbum' class="btn">Add Album</button>
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
                            <h5 class="add-event-title modal-title">Edit Album</h5>
                            {{-- <h5 class="edit-event-title modal-title">Edit Events</h5> --}}

                            <form class="">

                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="role-name" class="">Album Title</label>
                                        <div class="event-title">
                                            <input wire:model='title' id="role-name" type="text"
                                                placeholder="Enter Album Title" class="form-control" required>
                                            @error('title')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label for="-name" class="">Event Date</label>
                                        <div class="event-title">
                                            <input wire:model='event_date' id="-name" type="text"
                                                placeholder="Enter Event Date" class="form-control" required>
                                            @error('event_date')
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
                                                <div wire:loading wire:target="photo"
                                                    class="spinner-border text-success align-self-center loader-lg">
                                                </div>
                                                @if ($photo)
                                                    <img style="width: 60%; height: 150px" class="mx-auto w-52 h-52"
                                                        src="{{ $photo->temporaryUrl() }}">
                                                @else
                                                <img style="width: 60%; height: 150px" class="mx-auto w-52 h-52"
                                                src="{{ asset('images/' . $editphoto) }}">
                                                @endif
                                            </div>
                                            <label>
                                                <input type="file" wire:model='photo' class="form-control"
                                                    required style="color:transparent; display: none;"
                                                    accept="image/png, image/jpeg, image/jpg, image/gif" />
                                                <a
                                                    style="cursor: pointer; font-size: 18px; color: blue; font-weight:600">
                                                    Choose Images to upload</a>
                                                <p>PNG, JPG, GIF up to 10MB</p>
                                                @error('photo')
                                                    <span class="error">{{ $message }}</span>
                                                @enderror
                                            </label>
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
                    {{-- <button id="add-e" wire:click.prevent='addSchool' class="btn">Add School</button> --}}
                    <button id="edit-event" wire:click.prevent='editAlbum' class="btn">Save
                        Changes</button>
                </div>
            </div>
        </div>
    </div>

</div>
