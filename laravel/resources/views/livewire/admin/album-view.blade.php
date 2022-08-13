<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <div class="title" style="margin-right: 0; border-right: none; padding-right: 0;">
                <h2>
                    {{ $album->title }}
                </h2>
            </div>
        </nav>
        {{-- <button id="add-list" wire:click.prevent='clear' class="btn btn-primary" data-toggle="modal"
            data-target="#addModal">Add Album</button> --}}
    </div>
    <div class="row" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
            <form wire:submit.prevent='upload' class=" text-center mx-auto">
                <div class="col-md-8 offset-md-2">

                    <div
                        style="align-items: center;justify-content:center; padding-left:1.5rem; padding-right:1.5rem; padding-top:1.5rem; padding-bottom:1.5rem; border-color:gray; border-style:dashed; border-width:2px; border-radius:8px; ">
                        <div>
                            {{-- <div  class="loader multi-loader mx-auto"></div> --}}
                            <div wire:loading wire:target="photos" class="spinner-border text-success align-self-center loader-lg"></div>
                            @if ($photos)
                                @foreach ($photos as $photo)
                                    <img style="width: 30%; height: 150px" class="mx-auto w-52 h-52"
                                        src="{{ $photo->temporaryUrl() }}">
                                @endforeach
                            @else
                                <svg wire:loading.remove wire:target="photos" style="width: 3rem; height: 3rem" class="w-12 h-12 mx-auto text-gray-400"
                                    stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                    <path
                                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            @endif
                        </div>
                        <label>
                            <input type="file" wire:model='photos' class="form-control" multiple="" required
                                style="color:transparent; display: none;" accept="image/png, image/jpeg, image/jpg, image/gif" />
                            <a style="cursor: pointer; font-size: 18px; color: blue; font-weight:600"> Choose Images to upload</a>
                            <p>PNG, JPG, GIF up to 10MB</p>
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4 btn-lg">
                    <span wire:loading wire:target="upload" class="spinner-border text-white mr-2 align-self-center loader-sm "></span>
                    Upload Images
                </button>
            </form>
        </div>

        @forelse ($album->photos as $photo)
            <div class="col-xl-4 col-lg-4 col-sm-6 layout-spacing">
                <div class="card component-card_9">
                    <img src="{{ asset('images/' . $photo->photo) }}" class="card-img-top" alt="widget-card-2">
                    <div class="card-body">
                        <div class="mx-auto text-center">
                            <a href="javascript:void(0);" class="mx-auto btn btn-danger"
                                wire:click='deleteId({{ $photo->id }})' data-toggle="modal"
                                data-target="#deleteConformation" title="Delete"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash-2">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
                <div class="mx-auto text-center">
                    {{-- <img src="{{asset('img/searching.gif')}}" alt=""> --}}
                    @include('partials.searching')
                    <h2>No photo in this album</h2>
                </div>
            </div>
        @endforelse


        <div class="mx-auto">
            {{-- {{ $albums->links() }} --}}
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
                    <h5 class="modal-title" id="exampleModalLabel">Delete Photo?</h5>
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






</div>
