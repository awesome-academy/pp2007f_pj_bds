@extends('admin.master')
@section('title', 'Create New Slides')
@section('content')
<div class="page-header">
    <h2 class="header-title">Create New Slide</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="{{ route('Slide') }}">Slides</a>
            <span class="breadcrumb-item active">Create New Slide</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header border bottom">
        <h4 class="card-title">Please fill in the information</h4>
    </div>
    @if(isset($mess))
        <p class="alert alert-success">{!! $mess !!}</p>
    @endif

    @if(isset($errors))
        @foreach($errors->all() as $error)
        <p class="alert alert-danger">{{ $error }}</p>
        @endforeach
    @endif
    <div class="card-body">
        <div class="row">
            <div class="col-sm-8">
                <form role="form" id="form-validation" action="{!! route('storeSlide') !!}" method="post">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Name *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Link *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="link">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Slug *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control"  name="slug">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Type *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="type">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Width *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="width">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">height *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control"  name="height">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Order *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control"  name="order">
                        </div>
                    </div>

                    <input class="btn btn-success" value="Create" type="submit" name="btnsubmit">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
