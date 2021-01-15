@extends('admin.master')

@section('title', 'User Table')

@section('styles')
    <link rel="stylesheet" href="/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="page-header">
        <h2 class="d-inline">{{ __('Users') }}</h2>
        <button data-toggle="modal" data-target="#side-modal-r" class="btn btn-success btn-outline">{{ __('Add New') }}</button>
    </div>

    <div class="page-header ">
        <a class="text-dark" href="{{ Route('userIndex') }}">{{ __('All') }}
            <span>({{ $userAlls->count() }}) | </span> </a>
        <a class="text-dark" href="{{ Route('userAdminIndex') }}">{{ __('Adminstrator') }}
            <span>({{ $userAdmins->count() }}) | </span> </a>

        <a class="text-dark" href="{{ Route('userMemberIndex') }}">{{ __('Members') }}
            <span>({{ $userMembers->count() }}) </span></a>

    </div>

    <div class="card">
        <div class="card-body">
            <div class="table-overflow">
                @if (session('mess'))
                    <div class="col-sm-12 bg-success">
                        <p class="">
                            <strong>{{ session('mess') }}</strong>
                        </p>
                    </div>
                @endif
                <table id="dt-opt" class="table table-hover table-xl">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkbox p-0">
                                    <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                    <label for="selectable1"></label>
                                </div>
                            </th>
                            <th>{{ __('User Name') }}</th>
                            <th>{{ __('Account') }}</th>
                            <th>{{ __('Role') }}</th>
                            <th>{{ __('Email') }}</th>

                            <th>{{ __('Posts') }}</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- @if (isset($users))
                            --}}
                            @foreach ($users as $us)
                                {{-- @elseif(isset($userAdmins))
                                --}}
                                {{-- @foreach ($userAdmins as $us)
                                    @else
                                    @foreach ($userMembers as $us)
                                    @endif --}}
                                    <tr>
                                        <td>
                                            <div class="checkbox">
                                                <input id="selectable2" type="checkbox">
                                                <label for="selectable2"></label>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="list-media">
                                                <div class="list-item">
                                                    <div class="media-img">
                                                        <img src="{{ asset("storage/img/users/$us->avatar") }}" alt="">
                                                    </div>
                                                    <div class="info">
                                                        <span class="title">{{ $us->username }}</span>
                                                        <span class="sub-title">ID {{ $us->id }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        @if ($us->account == null)
                                            <td> 0 VND</td>
                                        @else
                                            <td>{{ number_format($us->account) }} VND</td>
                                        @endif
                                        <td>{{ $us->roles->first()->name }}</td>
                                        <td>{{ $us->email }}</td>

                                        <td> {{ $us->products->count() }}</td>

                                        @if (Auth::user()->inRole('admin'))
                                            <td class="text-center font-size-18">
                                                <a href="{{ route('editUser', $us->id) }}" class="text-gray m-r-15"><i
                                                        class="ti-pencil"></i></a>

                                                <a href="javascript:;" class="text-gray delete" did="{{ $us->id }}"><i
                                                        class="ti-trash"></i></a>
                                            </td>
                                        @else

                                            <td class="text-center font-size-18">
                                                <a href="{{ route('memberEditUser', $us->id) }}" class="text-gray m-r-15"><i
                                                        class="ti-pencil"></i></a>

                                                <a href="javascript:;" class="text-gray delete" did="{{ $us->id }}"><i
                                                        class="ti-trash"></i></a>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                <div class="checkbox p-0">
                                    <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                    <label for="selectable1"></label>
                                </div>
                            </th>
                            <th>{{ __('User Name') }}</th>
                            <th>{{ __('Account') }}</th>
                            <th>{{ __('Role') }}</th>
                            <th>{{ __('Email') }}</th>

                            <th>{{ __('Posts') }}</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
    {{-- modal --}}

    <div class="modal modal-right fade" id="side-modal-r" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="side-modal-wrapper">
                    <div class="vertical-align">
                        <div class="table-cell">
                            <div class="modal-body">
                                <div class="p-h-15">
                                    <img class="img-fluid m-b-30"
                                        src="https://staticfile.batdongsan.com.vn/images/Logo/ic_logo_2.svg" alt="">
                                    <h5 class="m-b-30 d-inline m-l-30">Create An Account</h5>
                                    <form role="form" id="form-validation" method="post" action="{{ route('createUser') }}"
                                        enctype="multipart/form-data">

                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">User Name *</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="username"
                                                    placeholder="Enter your user name" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">Email *</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" name="email"
                                                    placeholder="Enter your email" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input id="password" type="password" class="form-control"
                                                    name="inputPassword" placeholder="Enter your password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">Confirm Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" name="inputPasswordConfirm"
                                                    placeholder="Enter your password again">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">Full Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="fullname"
                                                    placeholder="Enter your full name" required>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">Date 0f Birth</label>
                                            <div class="col-sm-10">
                                                <div class="icon-input">
                                                    <i class="mdi mdi-timer"></i>
                                                    <input id="datepicker-1" data-provide="datepicker" type="text"
                                                        class="form-control" name="dateofbirth"
                                                        placeholder="Pick your date of birth">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">Phone Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="phonenumber"
                                                    placeholder="Enter your phone number">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="address"
                                                    placeholder="Enter your address">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">Avatar</label>
                                            <div class="col-sm-10">
                                                <input type="file" class="form-control" name="avatar">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label control-label">Gender</label>
                                            <div class="col-sm-10">
                                                <div class="radio d-inline m-r-15">
                                                    <input id="basicFormRadio1" name="sex" type="radio" checked=""
                                                        value="1">
                                                    <label for="basicFormRadio1">Male</label>
                                                </div>
                                                <div class="radio d-inline m-r-15">
                                                    <input id="basicFormRadio2" name="sex" type="radio" value="0">
                                                    <label for="basicFormRadio2">Female</label>
                                                </div>
                                            </div>
                                        </div>


                                        <input type="submit" class="btn btn-gradient-success" value="Submit">
                                        <p>Already have an account? <a href="#">Sign In</a></p>
                                        <hr>
                                        <small>By signing up you agree to out <a href="#">Terms &amp; Policy</a></small>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <span>Already have an account? <a href="#">Login Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="/assets/vendor/datatables/media/js/jquery.dataTables.js"></script>
    <script src="/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/tables/data-table.js"></script>
    <script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/assets/js/forms/form-validation.js"></script>
    <script src="/assets/vendor/moment/min/moment.min.js"></script>
    <script src="/assets/vendor/selectize/dist/js/standalone/selectize.min.js"></script>
    <script src="/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/forms/form-elements.js"></script>
    {{-- jquery-ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $('.delete').click(function() {
                var id = $(this).attr('did');
                $(this).closest("tr").remove();
                $.ajax({
                    type: "get",
                    url: '/admin/user/deletetrashed/',
                    data: {
                        did: id
                    },
                    dataType: "html",
                    success: function(data) {
                        html(data);
                    }
                });
            });
        });

    </script>

@endsection
