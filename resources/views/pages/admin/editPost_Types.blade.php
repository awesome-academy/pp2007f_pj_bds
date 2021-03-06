@extends('admin.master')
@section('title', 'Edit Post Type')
@section('content')
<div class="page-header">
    <h2 class="header-title">Edit Post Type</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="http://127.0.0.1:8000/admin/master" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="{{ route('postTypeIndex') }}">Post Types</a>
            <span class="breadcrumb-item active">Edit Post Type</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header border bottom">
        <h4 class="card-title">Edit Post Type</h4>
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
                <form role="form" id="form-validation" action="{!! route('updatePostType', $post_types->id)!!}" method="POST">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Name *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Required *" name="name" value="{!! $post_types->name !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Price *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Required *" name="price" value="{!! $post_types->price !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Unit *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Required *" name="unit" value="{!! $post_types->unit !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Days *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Required *" name="days" value="{!! $post_types->days !!}">
                        </div>
                    </div>
                    <button class="btn btn-gradient-success" name="btnSubmit">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection