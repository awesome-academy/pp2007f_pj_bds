@extends('admin.master')

@section('title','User Table')
    
@section('styles')
    <link rel="stylesheet" href="/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">User Table</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Admin</a>
                <a class="breadcrumb-item" href="#">User</a>
                <span class="breadcrumb-item active">User Table</span>
            </nav>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="table-overflow">
                <table id="dt-opt" class="table table-hover table-xl">
                    <thead>
                        <tr>
                            <th>
                                <div class="checkbox p-0">
                                    <input id="selectable1" type="checkbox" class="checkAll" name="checkAll">
                                    <label for="selectable1"></label>
                                </div>
                            </th>
                            <th>Name</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Adress</th>
                            <th>Sex</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
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
                                            <img src="{{ $user->avatar }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">{{ $user->fullname }}</span>
                                            <span class="sub-title">ID {{ $user->id }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>{{ $user->username }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phonenumber }}</td>
                            <td> {{ $user->address }}</td>
                            @if($user->sex == 1)
                            <td> Male </td>
                            @else
                            <td> Female </td>
                            @endif
                            <td class="text-center font-size-18">
                                <a href="{{  route('editUser',$user->id) }}" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                <a href="{{  route('deleteUser',$user->id) }}" class="text-gray"><i class="ti-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="/assets/vendor/datatables/media/js/jquery.dataTables.js"></script>
    <script src="/assets/vendor/datatables/media/js/dataTables.bootstrap4.min.js"></script>
    <script src="/assets/js/tables/data-table.js"></script>
@endsection
