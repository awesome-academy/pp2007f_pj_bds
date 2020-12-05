@extends('admin.master')

@section('title', 'Post')

@section('styles')
    <link href="/assets/vendor/selectize/dist/css/selectize.default.css" rel="stylesheet">
    <link href="/assets/vendor/summernote/dist/summernote-bs4.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet">
@endsection

@section('content')
    <div class="page-header">
        <h2 class="header-title">Post</h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="#" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Admin</a>
                <a class="breadcrumb-item" href="#">User</a>
                <span class="breadcrumb-item active">Post</span>
            </nav>
        </div>
    </div>
    <div class="card col-sm-8">
        <div class="">
            <div class="row">
                <div class="col-sm-12">
                    <form role="form" id="form-validation" method="post" action="{!!  Route('postUser') !!}"
                        enctype="multipart/form-data">

                        @csrf
                        <div class="card-header border border-secondary  bg-vimeo ">
                            <h4 class="card-title ">Basic information</h4>
                        </div>
                        <div class="card-body border border-secondary shadow-sm p-3 mb-2">
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Subject *</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="title" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Appearance *</label>
                                <div class="col-sm-4">
                                    <select name="appearance" class="form-control" id='appearance'>
                                        <option class="district" value="0" name="appearance" required>Nhà đất bán</option>
                                        <option class="district" value="1" name="appearance" required>Nhà đất cho thuê</option>
                                    </select>
                                </div>
                                <label class="col-sm-2 col-form-label control-label m-l-2">Type *</label>
                                <div class="col-sm-4">
                                    <select name="category" class="form-control" id='type'>
                                        @foreach ($categories as $category)
                                        <option class="district" value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Province / City *</label>
                                <div class="col-sm-4">
                                    <select name="province" class="form-control" id='provices'>
                                        <option class="provice" value="0"> --Province / City-- </option>
                                        @foreach ($provinces as $provice)
                                            <option class="provice" value="{{ $provice->code }}"> {{ $provice->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-sm-2 col-form-label control-label m-l-2">County / District *</label>
                                <div class="col-sm-4">
                                    <select name="district" class="form-control" id='districts'>
                                        @foreach ($districts as $district)
                                        <option class="district" value="{{ $district->code }}">{{ $district->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label"> Wards </label>
                                <div class="col-sm-4">
                                    <select name="ward" class="form-control" id='wards'>
                                        @foreach ($wards as $ward)
                                        <option value="{{ $ward->code }}" class="ward">{{ $ward->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <label class="col-sm-2 col-form-label control-label m-l-2">Street </label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="email" placeholder="--Street--" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label">Acreage </label>
                                <div class="col-sm-3">
                                    <input type="text" class="form-control" name="acreage" placeholder="Enter your acreage">
                                </div>
                                <label class="col-sm-1 col-form-label">m2 </label>

                                <label class="col-sm-2 col-form-label control-label">Price</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control price" name="price" placeholder="Enter your price">
                                </div>

                            </div>


                            <div class="form-group row ">

                                <label class="col-sm-2 col-form-label control-label my-2">Unit</label>
                                <div class="col-sm-4 my-2">
                                    <select name="unit" class="form-control" id='type' style="font-size: 20px">
                                        <option class="district" value="tỷ">tỷ</option>
                                        <option class="district" value="triệu">triệu</option>
                                        <option class="district" value="triệu/m2">triệu/m2</option>
                                        <option class="district" value="triệu/m2">tỷ/m2</option>
                                        <option class="district" value="triệu/m2">triệu/tháng</option>
                                        
                                    </select>
                                </div>

                                <label class="col-sm-2 col-form-label control-label my-2">
                                    Total price: </label>
                                <div class="col-sm-4 col-form-label control-label mr-0 my-2 text-dark"style="font-size: 20px">
                                    <span>$</span>
                                    <span >3 </span>
                                    <span >trieu/VND</span>
                                </div>


                            </div>
                        </div>

                        <div class="card-header border border-secondary  bg-vimeo ">
                            <h4 class="card-title ">Description information</h4>
                        </div>

                        <div class="card-body border border-secondary shadow-sm p-3 mb-2">
                            <div class="form-group">
                                <label class="control-label col-sm-12">( * ) Maximum only 3000 characters </label>

                                <div class="form-group control-label row">
                                    <div class="col-sm-8 ml-5">
                                        <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"
                                            name="content"></textarea>
                                    </div>
                                    <p class="ml-4 col-sm-3">
                                        A general introduction to your property. For example: The house has a convenient
                                        location: Near the park, near a school ... Total area 52m2, driveway to the door.
                                        Note: the listing is for denominations of Vietnamese Dong only.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="card-header border border-secondary  bg-vimeo ">
                            <h4 class="card-title ">Other information</h4>
                        </div>

                        <div class="card-body border border-secondary shadow-sm p-3 mb-2">
                            <div class="form-group">
                                <label class="control-label col-sm-12">( * ) You should complete the following fields to
                                    make your posting
                                    more effective </label>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">
                                        The direction of the house</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id='type'>
                                            <option class="district" value="0">--UDF--</option>
                                        </select>
                                    </div>
                                    <label class="col-sm-2 col-form-label control-label m-l-2">Balcony direction</label>
                                    <div class="col-sm-4">
                                        <select class="form-control" id='type'>
                                            <option class="district" value="0">--UDF--</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">Number of floors </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="floors"
                                            placeholder="Enter your floors">
                                    </div>

                                    <label class="col-sm-2 col-form-label control-label">
                                        Number of bedrooms </label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="bedrooms"
                                            placeholder="Enter your bedrooms">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">
                                        Furniture </label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" name="furniture"
                                            rows="4"></textarea>
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label control-label">
                                        Legal information </label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                            placeholder="Example: Red book is available.  Has pink book.  Approved investment decision ..."
                                            name="legalInformation"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-header border border-secondary  bg-vimeo ">
                            <h4 class="card-title ">Photos</h4>
                        </div>

                        <div class="card-body border border-secondary shadow-sm p-3 mb-2">
                            <div class="form-group">
                                <label class="control-label col-sm-12">( * ) Maximum number of photos by types of news:
                                    Special VIP - 24
                                    photos, VIP1 - 20 photos, VIP2 & VIP 3 - 18 photos, VIP Offer - 16 photos, Rewards - 8
                                    photos. Maximum of 2MB each </label>
                                <label class="control-label col-sm-12">( * ) Ads with pictures get 10 times more views and 5
                                    times more
                                    people call than ads without pictures. Post a picture to get a quick transaction!
                                </label>
                                <div class="custom-file col-sm-3">
                                    <input type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose images</label>
                                </div>

                            </div>
                        </div>

                        <div class="card-header border border-secondary  bg-vimeo ">
                            <h4 class="card-title ">Posting schedule</h4>
                        </div>

                        <div class="card-body border border-secondary shadow-sm p-3 mb-2">
                            <div class="form-group row">
                                <div class="col-sm-4">
                                    <label class="col-sm-12 col-form-label control-label">Ad type</label>
                                    <select name="post_type" class="form-control" id='type' style="height:45px">
                                        @foreach ($post_types as $post_type)
                                        <option class="district form-control" value="{{ $post_type->id }}">{{ $post_type->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label class="col-sm-4 col-form-label control-label">Start day</label>
                                    <div class="col-sm-10">
                                        <div class="icon-input">
                                            <i class="mdi mdi-timer"></i>
                                            <input id="datepicker-1" data-provide="datepicker" type="text"
                                                class="form-control" name="dateofbirth" placeholder="Pick date start">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="col-sm-4 col-form-label control-label">End day</label>
                                    <div class="col-sm-10">
                                        <div class="icon-input">
                                            <i class="mdi mdi-timer"></i>
                                            <input id="datepicker-1" data-provide="datepicker" type="text"
                                                class="form-control" name="dateofbirth" placeholder="Pick date end">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <label class="col-sm-6 col-form-label control-label">Final unit price:</label>
                                </div>
                                <span class="col-sm-2"></span>
                                <div class="col-sm-4">
                                    <label class="col-sm-6 col-form-label control-label">Number of days: </label>
                                </div>
                                <span class="col-sm-2"></span>
                                <label class="col-sm-1 col-form-label control-label">
                                    <img class="ml-3" alt="biểu tượng vip"
                                        src="https://file4.batdongsan.com.vn/images/Home/images/vip-icon.jpg"
                                        style="width:25px;height:15px;">
                                </label>
                                <label class="col-sm-11 col-form-label control-label">( * ) You should choose to post VIP
                                    news to have higher efficiency, for example: message Vip1 has an average view of 20
                                    times higher than normal news. </label>
                                </>
                            </div>
                        </div>

                        <div class="card-header border border-secondary  bg-vimeo ">
                            <h4 class="card-title ">Into money</h4>
                        </div>

                        <div class="card-body border border-secondary shadow-sm p-3 mb-2">
                            <div class="form-group row text-center my-3 mx-3">
                                <div class="col-sm-3 border border-secondary bg-success mx-5">
                                    <label class="col-sm-12 col-form-label control-label ">Posting fee</label>

                                </div>
                                <div class="col-sm-3 border border-secondary bg-success mx-5">
                                    <label class="col-sm-12 col-form-label control-label ">VAT ( 10% )</label>
                                </div>
                                <div class="col-sm-3 border border-secondary bg-success mx-5">
                                    <label class="col-sm-12 col-form-label control-label">Into money</label>
                                </div>
                                <div class="col-sm-3 border border-secondary mx-5" style="height:200px">
                                    <label class="col-sm-12 col-form-label control-label "></label>

                                </div>
                                <div class="col-sm-3 border border-secondary mx-5" style="height:200px">
                                    <label class="col-sm-12 col-form-label control-label "></label>
                                </div>
                                <div class="col-sm-3 border border-secondary mx-5" style="height:200px">
                                    <label class="col-sm-12 col-form-label control-label"></label>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-gradient-success" value="Submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script src="/assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="/assets/js/forms/form-validation.js"></script>
    <script src="/assets/vendor/moment/min/moment.min.js"></script>
    <script src="/assets/vendor/selectize/dist/js/standalone/selectize.min.js"></script>
    <script src="/assets/vendor/summernote/dist/summernote-bs4.min.js"></script>
    <script src="/assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.js"></script>
    <script src="/assets/js/forms/form-elements.js"></script>
    {{-- jquery-ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // province
            $(".provice").click(function() {
                var id = $(this).val();
                $.ajax({
                    type: "get",
                    url: "/admin/user/ajaxDistrict",
                    data: {
                        parent_code: id
                    },
                    dataType: "html",
                    success: function(data) {

                    }
                }).done(function(data) {
                    $('#districts').html(data);

                });
            });
            // total basic

            $('.price').click(function(){
                alert($(this).val());
            });

        });

        function selectDistrict(id) {
            $.ajax({
                type: "get",
                url: "/admin/user/ajaxWard",
                data: {
                    parent_code: id
                },
                dataType: "html",
                success: function(data) {

                }
            }).done(function(data) {
                $('#wards').html(data);

            });
        }

    </script>


@endsection
