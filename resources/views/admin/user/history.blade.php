@extends('admin.master')

@section('title', 'User Table')

@section('styles')
    <link rel="stylesheet" href="/assets/vendor/datatables/media/css/dataTables.bootstrap4.min.css">
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">{{ __('Transaction History') }}</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Admin</a>
                <a class="breadcrumb-item" href="#">{{ __('Users') }}</a>
                <span class="breadcrumb-item active">{{ __('User Table') }}</span>
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
                            <th>{{ __('User Name') }}</th>
                            <th>{{ __('Change Acount') }}</th>
                            <th>{{ __('Explain') }}</th>
                            <th>{{ __('Created at') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($transactionHistory as $us)
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
                                                <img src="{{ asset("storage/img/users/$us->user->avatar") }}" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title">{{ $us->user->username }}</span>
                                                <span class="sub-title">ID {{ $us->user->id }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @if ($us->change_account == null)
                                    <td> 0 </td>
                                @else
                                    <td>{{ number_format($us->change_account) }} VND</td>
                                @endif
                                <td>{{ $us->explain }}</td>
                                <td>{{ $us->created_at }}</td>
                                
                                @if (Auth::user()->inRole('admin'))
                                    <td class="text-center font-size-18">
                                        <a href="{{ route('editUser', $us->id) }}" class="text-gray m-r-15"><i
                                                class="ti-pencil"></i></a>

                                        <a href="javascript:;" class="text-gray delete" did="{{ $us->id }}"><i
                                                class="ti-trash"></i></a>
                                    </td>
                                @endif
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
