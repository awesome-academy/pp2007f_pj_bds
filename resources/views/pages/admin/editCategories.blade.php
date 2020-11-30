@extends('admin.master')
@section('title', 'Edit Categories')
@section('styles')

@endsection
@section('content')
<div class="page-header">
    <h2 class="header-title">Edit Category</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="{{ route('categoryIndex') }}">Categories</a>
            <span class="breadcrumb-item active">Edit Categories</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header border bottom">
        <h4 class="card-title">Edit Category</h4>
    </div>
    @if(isset($mess))
    <div class="alert alert-success">
        {!! $mess !!}
    </div>
    @endif

    @if(isset($errors))
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {!! $error !!}
    </div>
    @endforeach
    @endif
    <div class="card-body">
        <div class="row">
            <div class="col-sm-8">
                <form role="form" id="form-validation" action="{!! route('updateCategory', $categories->id)!!}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Name *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Required *" name="name" value="{!! $categories->category_name !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Price *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Required *" name="price" value="{!! $categories->category_price !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Unit *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Required *" name="unit" value="{!! $categories->category_unit !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Days *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Required *" name="days" value="{!! $categories->category_days !!}">
                        </div>
                    </div>
                    <button class="btn btn-gradient-success" name="btnSubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection