@extends('admin.master')
@section('title', 'Edit Slides')
@section('content')
<div class="page-header">
    <h2 class="header-title">Edit Slides</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="{{ route('Slide') }}">Slides</a>
            <span class="breadcrumb-item active">Edit Slides</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header border bottom">
        <h4 class="card-title">Please fill the infomation</h4>
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
                <form role="form" id="form-validation" action="{!! Route('updateslide', $slide->id) !!}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Name *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Required *" name="name" value="{!! $slide->name !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Image (link) *</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control"  name="link1" multiple >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Slug *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" placeholder="Required *" name="slug" value="{!! $slide->slug !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Type *</label>
                        <div class="col-sm-10">
                            <select type="text" class="custom-select" id="inputGroupSelect01" name="type">
                                <option type="text" selected value="{{ $slide->type }}">{!! $slide->type !!}</option>
                                @foreach($types as $type)
                                <option type="text" value="{!! $type->type !!}">{!! $type->type !!}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Width *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Required *" name="width" value="{!! $slide->width !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Height *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Required *" name="height" value="{!! $slide->height !!}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Order *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" placeholder="Required *" name="order" value="{!! $slide->order !!}">
                        </div>
                    </div>
                    <button class="btn btn-gradient-success" name="btnSubmit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection