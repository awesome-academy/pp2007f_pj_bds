@extends('admin.master')

@section('title', 'Posts Edit')

@section('styles')
<link href="assets/vendor/selectize/dist/css/selectize.default.css" rel="stylesheet">
<link href="assets/vendor/summernote/dist/summernote-bs4.css"  rel="stylesheet">
<link href="assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet">
@endsection

@section('content')

@foreach($post as $posts)
<div class="page-header">
    <h2 class="header-title">{{ __('Edit Post') }}</h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
        <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>{{ __('Home') }}</a>
            <a class="breadcrumb-item" href="#">Tables</a>
            <span class="breadcrumb-item active">Data Table</span>
        </nav>
    </div>
</div>

<form method="POST" action="{{ route('updatePost', $posts->id) }}">
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="title">Title</label>
      <input type="text" class="form-control" id="title" name="title" value="{{ $posts->title }}">
      </div>
    </div>


    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="type">Type</label>
            <select name="cate_name"  id="type" class="form-control category">
            <option selected>{{ $posts->post_type->name }}</option>
            {{-- @foreach($cate as $cat)
            <option type="text" value="{{ $posts->menu_category_id }}" @if($cat->id == $post->menu_category_id) selected @endif>{{ $posts->menu_category->name }}</option>
            @endforeach --}}
          </select>
          </div>
    </div>


    <div class="form-row">
      <div class="form-group col-md-3">
        <label for="price">Price</label>
        <input type="number" name="price" class="form-control" id="price" value="{{ $posts->price }}">
      </div>
      <div class="form-group col-md-3">
        <label for="area">Area</label>
      <input type="number" name="area" class="form-control" id="area" value="{{ $posts->area }}">
      </div>
    </div>


    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">Address</label>
      <input type="text" name="address" class="form-control" id="inputAddress" value="{{ $posts->address }}">
    </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="city">City</label>
            <select id="city" class="form-control">
              <option selected>{{ $posts->province->province_name }}</option>
              @foreach($province as $provinces)
            <option>{{ $provinces->name_with_type }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="district">District</label>
            <select id="district" class="form-control">
              <option selected>{{ $posts->district->district_name }}</option>
              @foreach($district as $districts)
            <option>{{ $districts->name_with_type }}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-3">
            <label for="ward">Ward</label>
            <select id="ward" class="form-control">
              <option selected>{{ $posts->ward->ward_name }}</option>
              @foreach($ward as $wards)
            <option>{{ $wards->name_with_type }}</option>
              @endforeach
            </select>
          </div>
    </div>

    <div class="form-row">
        <div class="form-group col-md-2">
          <label for="bedroom">Number of bedroom</label>
          <input type="number" name="bedroom" class="form-control" id="bedroom" value="{{ $posts->number_of_bedroom }}">
        </div>
        <div class="form-group col-md-2">
            <label for="restroom">Number of restroom</label>
            <input type="number" name="restroom" class="form-control" id="restroom" value="{{ $posts->number_of_restroom }}">
          </div>
        <div class="form-group col-md-2">
          <label for="floor">Number of floor</label>
        <input type="number" name="floor" class="form-control" id="floor" value="{{ $posts->number_of_floor }}">
        </div>
      </div>

      <div class="form-row">
      <div class="form-group col-md-12">
        <label for="content">Content</label>
      <textarea class="form-control rounded-0" name="content" id="content" rows="10">{{ $posts->content }}</textarea>
        </div>
      </div>

    <button type="submit" class="btn btn-primary">Save</button>
    <button type="submit" class="btn btn-light">Cancel</button>

  </form>

@endforeach
@endsection

@section('scripts')
<script src="assets/vendor/moment/min/moment.min.js"></script>
<script src="assets/vendor/selectize/dist/js/standalone/selectize.min.js"></script>
<script src="assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
<script src="assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
<script src="assets/js/forms/form-elements.js"></script>
@endsection