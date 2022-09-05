<div class="layout-px-spacing">
    <div class="page-header">
        <nav class="breadcrumb-one" aria-label="breadcrumb">
            <div class="title" style="margin-right: 0; border-right: none; padding-right: 0;">
                <h3>Users</h3>
            </div>
        </nav>
        <button id="add-list" wire:click.prevent='clear' class="btn btn-primary" data-toggle="modal"
            data-target="#addModal">Add User</button>
    </div>
    <div class="row" id="cancel-row">
        <div class="col-xl-12 col-lg-12 col-sm-12 layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive">
                    <table id="" class="table table-hover" style="width:100%">
                        <thead>
                            <tr>
                                {{-- <th class="checkbox-column"> Record no. </th> --}}
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Role</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    {{-- <td class="checkbox-column"> 1 </td> --}}
                                    {{-- <td><span class="user-name">{{ $user->name }}</span></a></td> --}}
                                    <td>
                                        <div class="d-flex">
                                            {{-- <div class="usr-img-frame mr-2 rounded-circle">
                                        <img alt="avatar" class="img-fluid rounded-circle"
                                            src="assets/img/profile-12.jpg">
                                    </div> --}}
                                            <p class="align-self-center my-3 user-name"> {{ $user->name }}
                                            </p>
                                        </div>
                                    </td>
                                    <td><span class="inv-email"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-mail">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg> {{ $user->email }}
                                        </span>
                                    </td>
                                    <td><span class="inv-amount"> {{ $user->phone }}</span></td>
                                    <td>
                                        @foreach ($user->getRoleNames() as $item)
                                            <span class="badge badge-success inv-status">{{ $item }}</span>
                                        @endforeach
                                    </td>



                                    <td>
                                        <ul class="table-controls">
                                            <li><a href="javascript:void(0);" class="mx-2" data-toggle="modal"
                                                    data-target="#editModal" wire:click='editId({{ $user->id }})'
                                                    title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
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
                                                    wire:click='deleteId({{ $user->id }})' data-toggle="modal"
                                                    data-target="#deleteConformation" title="Delete"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2 text-danger">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10" y2="17"></line>
                                                        <line x1="14" y1="11" x2="14" y2="17"></line>
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
            {{ $users->links() }}
        </div>
    </div>

    <!--Delete Modal -->
    <div class="modal fade" wire:ignore.self id="deleteConformation" tabindex="-1" role="dialog"
        aria-labelledby="deleteConformationLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" id="deleteConformationLabel">
                <div class="modal-header">
                    <div class="icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-trash-2">
                            <polyline points="3 6 5 6 21 6"></polyline>
                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                            </path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                    </div>
                    <h5 class="modal-title" id="exampleModalLabel">Delete User?</h5>
                    <button type="button" wire:click.prevent='clear' class="close" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="">If you delete this User it will be gone forever. Are you sure you want
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
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-x close" data-dismiss="modal">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></span>

                    <div class="add-edit-event-box">
                        <div class="add-edit-event-content">
                            <h5 class="add-event-title modal-title">Add User</h5>
                            {{-- <h5 class="edit-event-title modal-title">Edit Events</h5> --}}

                            <form class="">

                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="name" class="">Full Name</label>
                                        <div class="event-title">
                                            <input wire:model='name' id="name" type="text" placeholder="Enter Full Name"
                                                class="form-control" required>
                                            @error('name')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="email" class="">Email</label>
                                        <div class="event-title">
                                            <input wire:model='email' id="email" type="email" placeholder="Enter Email"
                                                class="form-control" required>
                                            @error('email')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <label for="phone-number" class="">Phone Number</label>
                                        <div class="event-title">
                                            <input wire:model='phone' id="phone-number" type="number"
                                                placeholder="Enter Phone Number" class="form-control" required>
                                            @error('phone')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="role" class="">User Role</label>
                                        <div class="event-title">
                                            <select wire:model='role' id="role" class="form-control" required>
                                                <option value="" selected>Add a Role to User</option>
                                                @foreach ($roles as $role)
                                                    <option value='{{ $role->name }}'>{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('role')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <label for="password" class="">Password</label>
                                        <div class="event-title">
                                            <input wire:model='password' id="password" type="password"
                                                placeholder="*******" class="form-control" required>
                                            @error('password')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

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
                    <button id="add-e" wire:click.prevent='addUser' class="btn">Add User</button>
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
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                            class="feather feather-x close" data-dismiss="modal">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></span>

                    <div class="add-edit-event-box">
                        <div class="add-edit-event-content">
                            <h5 class="add-event-title modal-title">Edit User</h5>
                            {{-- <h5 class="edit-event-title modal-title">Edit Events</h5> --}}

                            <form class="">

                                <div class="row">

                                    <div class="col-md-12">
                                        <label for="name" class="">Full Name</label>
                                        <div class="event-title">
                                            <input wire:model='name' id="name" type="text" placeholder="Enter Full Name"
                                                class="form-control" required>
                                            @error('name')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="email" class="">Email</label>
                                        <div class="event-title">
                                            <input wire:model='email' id="email" type="email" placeholder="Enter Email"
                                                class="form-control" required>
                                            @error('email')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="phone-number" class="">Phone Number</label>
                                        <div class="event-title">
                                            <input wire:model='phone' id="phone-number" type="number"
                                                placeholder="Enter Phone Number" class="form-control" required>
                                            @error('phone')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label for="role" class="">User Role</label>
                                        <div class="event-title">
                                            <select wire:model='role' id="role" class="form-control" required>
                                                <option value="" selected>Add a Role to User</option>
                                                @foreach ($roles as $role)
                                                    <option value='{{ $role->name }}'>{{ $role->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('role')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <label for="password" class="">Password</label>
                                        <div class="event-title">
                                            <input wire:model='password' id="password" type="password"
                                                placeholder="*******" class="form-control" required>
                                            @error('password')
                                                <div class="error-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror

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
                    <button id="edit-event" wire:click.prevent='editUser' class="btn">Save
                        Changes</button>
                </div>
            </div>
        </div>
    </div>

</div>