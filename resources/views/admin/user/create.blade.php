@extends('admin.master')

@section('title', 'Create User')

@section('styles')
    <link href="/assets/vendor/selectize/dist/css/selectize.default.css" rel="stylesheet">
    <link href="/assets/vendor/summernote/dist/summernote-bs4.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet">
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Create User</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Admin</a>
                <a class="breadcrumb-item" href="#">Create</a>
                <span class="breadcrumb-item active">Create User</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-header border bottom">
            <h4 class="card-title">Create User</h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-8">

                    <form role="form" id="form-validation" method="post" action="{!!  Route('storeUser') !!}">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">User Name *</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" placeholder="Enter your user name"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Email *</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" placeholder="Enter your email"
                                    required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Password</label>
                            <div class="col-sm-10">
                                <input id="password" type="password" class="form-control" name="inputPassword"
                                    placeholder="Enter your password">
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
                                <input type="text" class="form-control" name="fullname" placeholder="Enter your full name"
                                    required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Date 0f Birth</label>
                            <div class="col-sm-10">
                                <div class="icon-input">
                                    <i class="mdi mdi-timer"></i>
                                    <input id="datepicker-1" data-provide="datepicker" type="text" class="form-control"
                                        name="dateofbirth" placeholder="Pick your date of birth">
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
                                <input type="text" class="form-control" name="address" placeholder="Enter your address">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Content</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control" name="avatar" placeholder="Enter your address">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label control-label">Gender</label>
                            <div class="col-sm-10">
                                <div class="radio d-inline m-r-15">
                                    <input id="basicFormRadio1" name="sex" type="radio" checked="" value="1">
                                    <label for="basicFormRadio1">Male</label>
                                </div>
                                <div class="radio d-inline m-r-15">
                                    <input id="basicFormRadio2" name="sex" type="radio" value="0">
                                    <label for="basicFormRadio2">Female</label>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn btn-gradient-success" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/assets/js/forms/form-validation.js"></script>
    <script src="/assets/vendor/moment/min/moment.min.js"></script>
    <script src="/assets/vendor/selectize/dist/js/standalone/selectize.min.js"></script>
    <script src="/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/forms/form-elements.js"></script>

    {{-- Ckey edit --}}

@endsection
