@extends('admin.master')

@section('title', 'User Table')

@section('styles')
    <link rel="stylesheet" href="/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">User Table</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Member</a>
                <a class="breadcrumb-item" href="#">User</a>
                <span class="breadcrumb-item active">User Table</span>
            </nav>
        </div>
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
                            <th>User Name</th>
                            <th>Account</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Phone Number</th>
                            <th>Adress</th>
                            <th>Sex</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
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
                                            <img src="/storage/img/users/{{ Auth::user()->avatar }}" alt="">
                                        </div>
                                        <div class="info">
                                            <span class="title">{{ $user->username }}</span>
                                            <span class="sub-title">ID {{ $user->id }}</span>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            @if ($user->account == null)
                                <td> 0 VND</td>
                            @else
                                <td>{{ number_format($user->account) }} VND</td>
                            @endif
                            @if (Auth::user()->inRole('admin'))
                                <td>Admin</td>
                            @else
                                <td>Member</td>
                            @endif
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phonenumber }}</td>
                            <td> {{ $user->address }}</td>
                            @if ($user->sex == 1)
                                <td> Male </td>
                            @else
                                <td> Female </td>
                            @endif
                            <td class="text-center font-size-18">
                                <a href="{{ route('memberEditUser', $user->id) }}" class="text-gray m-r-15"><i
                                        class="ti-pencil"></i></a>

                                <a href="javascript:;" class="text-gray delete" did="{{ $user->id }}"><i
                                        class="ti-trash"></i></a>
                            </td>
                        </tr>
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
    {{-- jquery-ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var id = $('a.delete').attr('did');
            $('.delete').click(function() {
                $(this).closest("tr").remove();
            });
            $.ajax({
                type: "get",
                url: '/admin/user/delete',
                data: {
                    did: id
                },
                dataType: "html",
                success: function(response) {
                    html(data);
                }
            });
        });

    </script>

@endsection
