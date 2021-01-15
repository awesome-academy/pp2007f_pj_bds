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
    <div class="card col-sm-12">
        <div class="">
            <div class="row">
                <div class="col-sm-12">
                    @if (session('post_success'))
                        <div class="col-sm-12 bg-success">
                            <p class="">
                                <strong>{{ session('post_success') }}</strong>
                            </p>
                        </div>
                    @endif

                    @if (session('post_error'))
                        <div class="col-sm-12 bg-danger">
                            <p class="">
                                <strong>{{ session('post_error') }}</strong>
                            </p>
                        </div>
                    @endif
                    <form role="form" id="form-validation" method="post" action="{!!  Route('memberStore') !!}"
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
                                        <option class="district" value="1" name="appearance" required>Nhà đất cho thuê
                                        </option>
                                    </select>
                                </div>
                                <label class="col-sm-2 col-form-label control-label m-l-2">Type *</label>
                                <div class="col-sm-4">
                                    <select name="category" class="form-control" id='type'>
                                        @foreach ($categories as $category)
                                            <option class="district" value="{{ $category->id }}">{{ $category->name }}
                                            </option>
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
                                        <option class="district" value="0">District</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label control-label"> Wards </label>
                                <div class="col-sm-4">
                                    <select name="ward" class="form-control" id='wards'>

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
                                    <input type="text" class="form-control acreage" name="acreage"
                                        placeholder="Enter your acreage">
                                </div>
                                <label class="col-sm-1 col-form-label">m2 </label>

                                <label class="col-sm-2 col-form-label control-label">Price</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control price" name="price"
                                        placeholder="Enter your price">
                                </div>

                            </div>


                            <div class="form-group row ">

                                <label class="col-sm-2 col-form-label control-label my-2">Unit</label>
                                <div class="col-sm-4 my-2">
                                    <select name="unit" class="form-control unit" id='type' style="font-size: 20px">
                                        <option class="district" value="tỷ">tỷ</option>
                                        <option class="district" value="triệu">triệu</option>
                                        <option class="district" value="triệu/m2">triệu/m2</option>
                                        <option class="district" value="triệu/m2">tỷ/m2</option>
                                        <option class="district" value="triệu/m2">triệu/tháng</option>

                                    </select>
                                </div>

                                <label class="col-sm-2 col-form-label control-label my-2">
                                    Total price: </label>
                                <div class="col-sm-4 col-form-label control-label mr-0 my-2 text-dark"
                                    style="font-size: 20px">
                                    <span>$</span>
                                    <span id="total"></span>
                                    <span id="unit"></span>
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
                                    <input type="file" name="filename[]" class="custom-file-input" id="customFile" multiple>
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
                                    <select name="post_type" class="form-control post_type" id='type' style="height:45px">
                                        @foreach ($post_types as $post_type)
                                            <option class="district form-control posttype" id="posttype"
                                                price="{{ $post_type->price }}" value="{{ $post_type->id }}">
                                                {{ $post_type->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-sm-4">
                                    <label class="col-sm-4 col-form-label control-label">Start day</label>
                                    <div class="col-sm-10">
                                        <div class="icon-input">
                                            <i class="mdi mdi-timer"></i>
                                            <input id="datepicker-1" data-provide="datepicker" type="text"
                                                class="form-control date date1" name="start_date"
                                                placeholder="Pick date start">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-4">
                                    <label class="col-sm-4 col-form-label control-label">End day</label>
                                    <div class="col-sm-10">
                                        <div class="icon-input">
                                            <i class="mdi mdi-timer"></i>
                                            <input id="datepicker-1" data-provide="datepicker" type="text"
                                                class="form-control date date2" name="end_date" placeholder="Pick date end">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row fs-4">
                                <div class="col-sm-4 text-info">
                                    <label class="col-sm-6 col-form-label control-label text-info">Price:</label>
                                    <label class="col-sm-2 col-form-label control-label text-info" id="type_price">2000</label>
                                    VND
                                </div>
                                <span class="col-sm-2  text-info"></span>
                                <div class="col-sm-2">
                                    <label class="col-sm-12 col-form-label control-label text-right  text-info">Number of days:
                                    </label>
                                </div>
                                <label class="col-sm-4 col-form-label control-label text-info" id="days"></label>
                            </div>

                            <div class="row">

                                <label class="col-sm-1 col-form-label control-label">
                                    <img class="ml-3" alt="biểu tượng vip"
                                        src="https://file4.batdongsan.com.vn/images/Home/images/vip-icon.jpg"
                                        style="width:25px;height:15px;">
                                </label>
                                <label class="col-sm-11 col-form-label control-label">( * ) You should choose to post VIP
                                    news to have higher efficiency, for example: message Vip1 has an average view of 20
                                    times higher than normal news. </label>
                            </div>
                        </div>

                        <div class="card-header border border-secondary  bg-vimeo ">
                            <h4 class="card-title ">Into money</h4>
                        </div>

                        <div class="card-body border border-secondary shadow-sm p-3 mb-2">
                            <div class="form-group row text-center my-3 mx-3 text-info">
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
                                    <label class="col-sm-12 col-form-label control-label text-info" id="total_type"
                                        style="font-size: 55px; color: black; padding-top: 50px;"></label>
                                    <span class="my-10 text-info" style="font-size: 40px;">VND</span>

                                </div>
                                <div class="col-sm-3 border border-secondary mx-5" style="height:200px">
                                    <label class="col-sm-12 col-form-label control-label text-info" id="vat"
                                        style="font-size: 55px; color: black; padding-top: 50px;"></label>
                                        <span class="my-10 text-info" style="font-size: 40px;">VND</span>
                                </div>
                                <div class="col-sm-3 border border-secondary mx-5 text-info" style="height:200px">
                                    <label class="col-sm-12 col-form-label control-label text-info" id="total_price"
                                        style="font-size: 55px; color: black; padding-top: 50px;"></label>
                                        <span class="my-10 text-info" style="font-size: 40px;">VND</span>
                                </div>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-gradient-success" value="Post">
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
                    url: "/user/ajaxDistrict",
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

            $('input').blur(function() {
                let p = parseInt($('.price').val());
                let a = parseInt($('.acreage').val());
                let t = p * a;
                $('#total').html(t);
                // var acreage = $('.acreage').val());
                // var total = price*acreage;
                // alert(total);
            });

            $('.unit').change(function() {
                let u = $(this).val();
                $("#unit").html(u);
            });

            $('.post_type').change(function() {
                let t = $('option:selected', this).attr('price');
                $("#type_price").html(t);
            });

            $('.date').blur(function() {
                let ds = $('.date1').val();
                let dsf = Date.parse(ds);
                let de = $('.date2').val();
                let def = Date.parse(de);
                let d = (def - dsf) / 86400 / 1000;
                $('#days').html(d);
                // var acreage = $('.acreage').val());
                // var total = price*acreage;
                // alert(total);
            });


            $('.date, .post_type').on('change blur', function() {
                let t = $('option:selected', '.post_type').attr('price');
                let ds = $('.date1').val();
                let dsf = Date.parse(ds);
                let de = $('.date2').val();
                let def = Date.parse(de);
                let d = (def - dsf) / 86400 / 1000;
                let f = (d * t);
                let i = f * 0.1;
                let g = f + i;
                $("#total_type").html(f/1000+'.000');
                if(i<1000) {
                $('#vat').html(i);
                } else if(i>1000 && i%1000==0) {
                $('#vat').html(i/1000+'.000');
                }
                else {
                    $('#vat').html(i/1000+'00');
                };

                if(g<1000) {
                $('#total_price').html(g);
                } else if(g>1000 && g%1000==0) {
                $('#total_price').html(g/1000+'.000');
                }
                else {
                    $('#total_price').html(g/1000+'00');
                };

            });


        });

        function selectDistrict(id) {
            $.ajax({
                type: "get",
                url: "/user/ajaxWard",
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
