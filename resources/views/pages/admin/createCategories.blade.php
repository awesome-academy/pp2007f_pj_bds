@extends('admin.master')
@section('title', 'Create New Categories')
@section('content')
<div class="page-header">
    <h2 class="header-title">Create New Category</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Home</a>
            <a class="breadcrumb-item" href="{{ route('categoryIndex') }}">Categories</a>
            <span class="breadcrumb-item active">Create New Categories</span>
        </nav>
    </div>
</div>
<div class="card">
    <div class="card-header border bottom">
        <h4 class="card-title">Create New Category</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-sm-8">
                <form role="form" id="form-validation">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Name *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inputRequired" placeholder="Required *">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Price *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="inputRequired" placeholder="Required *">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Unit *</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="inputRequired" placeholder="Required *">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label control-label">Days *</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" name="inputRequired" placeholder="Required *">
                        </div>
                    </div>
                    <button class="btn btn-gradient-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection