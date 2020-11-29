@extends('admin.master')
@section('title', 'Categories')
@section('content')
<div class="page-header">
                            <h2 class="header-title">Post Category Table</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
                                    <a class="breadcrumb-item" href="#">Tables</a>
                                    <span class="breadcrumb-item active">Post Category Table</span>
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
                                                <th>Category</th>
                                                <th>Price</th>
                                                <th>Unit</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($categories as $category)
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
                                                                <span class="title">{!! $category->category_name !!}</span>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{!! $category->category_price !!}</td>
                                                <td>{!! $category->category_unit !!}</td>
                                                <td class="text-center font-size-18">
                                                    <a href="#" class="text-gray m-r-15"><i class="ti-pencil"></i></a>
                                                    <a href="#" class="text-gray"><i class="ti-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div> 
                            </div>       
                        </div>                   
@endsection
