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
