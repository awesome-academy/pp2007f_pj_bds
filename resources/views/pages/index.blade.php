@extends('layouts.master')

@section('title', 'Kênh thông tin bất động sản - Mua bán nhà đất số 1 Việt Nam')

@section('style-libraries')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./assets/css/filestatic.msvbds.home.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/box.css">
    <link rel="stylesheet" href="./assets/css/filestatic.ver202011110505.msvbds.productlisting.min.css" />
    <link rel="stylesheet" href="/assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <style>
        .select-control {
            width: 200px !important;
        }

        .select-control.city-control {
            width: 200px !important;
        }

        .select-control.district-control {
            width: 200px !important;
        }

        .select-control.price-control {
            width: 140px !important;
        }

        .select-control.area-control {
            width: 170px !important;
        }

        #btnSearch {
            color: white;
        }

    </style> <script src="/assets/js/app.min.js"></script>

<script>
    $(document).ready(function() {
        $('.filter-nha-dat').click(function() {
            $(this).addClass('actived').siblings().removeClass('actived');
        });


        // clear filter
        $('#link-reset').click(function() {
            $('#boxSearchForm')[0].reset();
        })
    });

    $(document).ready(function() {
        $(".lv0").hover(function() {
                $(".lv0 ul").css('display', 'block');
            },
            function() {
                $(".lv0 ul").css('display', 'none');
            });
    });

</script>

<script>

$(document).ready(function() {
$('.filter-nha-dat').click(function() {
    $(this).addClass('actived').siblings().removeClass('actived');
});


// clear filter
$('#link-reset').bind('click', function() {
    $('#filter-province').val('0');
    $('#filter-district').val('0');
    $('#filter-price').val('0');
    $('#filter-area').val('0');
});

$(".province").on('click', function() {
    var id = $(this).val();
    $.ajax({
        type: "get",
        url: "/getDistrict",
        data: {
            parent_code: id
        },
        dataType: "html",
        success: function(data) {

        }
    }).done(function(data) {
        $('.district').html(data);
    });
});

$('.custom-control-label').click(function(){
    if($('.custom-dropbox').hasClass('hiding')){
        $('.custom-dropbox').removeClass('hiding');
    }else{
        $('.custom-dropbox').addClass('hiding');
    }               
})
});
</script>
@endsection


@section('content')
    <!-- Banner & search tool-->
    <div class="new-home-2020">
        <div class="home-center">
            <div class="banner-home-slide">
                <form id="boxSearchForm" action="{{ route('nha_dat_ban') }}" method="get" novalidate="novalidate">
                    <div class="search-bar shadow-lv-1 clearfix">
                        <div class="search-guide" style="left: 1274.5px; top: 64px; display: block;">
                            <div class="icon-guide"><img src="./assets/image/ic_triangle.svg"></div>
                        </div>
                        <ul class="search-bar-tab mar-left-16 pad-top-8 mar-right-16">
                        </ul>
                        <!-- <input data-val="true" data-val-required="The CateId field is required." id="type" name="CateId" type="hidden" value="38"> -->
            
                        <div class="search-bar-suggestion pad-top-8 mar-right-16">
                        <input name="search" type="text" @if (isset($_GET['search'])) value="{{ $_GET['search'] }}" @endif
                             placeholder="Tìm kiếm địa điểm, khu vực" class="search-bar-input ui-autocomplete-input" id="search-suggestion" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                            <span class="icon-close hiding">
                                <img src="./assets/image/ic_close.png">
                            </span>
                        </div>
                        <div class="select-control city-control">
                            <div class="select-control-label">
                                <div class="dropbox-label">Tỉnh, thành phố</div>
                                <br>
                                <select name="province" id="filter-province" class="province">
                                    
                                    <option value="" class="province">Toàn quốc</option>
                                    @foreach($provinces as $province)
                                    <option value="{!! $province->code !!}" id="province-item" class="province"
                                    @if(!isset($_GET['province']) || $_GET['province'] == 0)
                                    @elseif($_GET['province'] == $province->code)
                                    selected
                                    @endif
                                    >{!! $province->name !!}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!-- list tp cu~ -->
                        </div>
                        
                        <div class="select-control district-control">
                            <div class="select-control-label">
                                <div class="dropbox-label">Quận, huyện</div>
                                <select name="district" id="filter-district" class="district">
                                    <option value="" class="district" >Tất cả</option>
                                    @if(!isset($_GET['province']) || $_GET['province'] == 0)
                                    @else
                                    @foreach($districts as $district)
                                    <option value="{!! $district->code !!}" class="district" 
                                    @if(!isset($_GET['district']) || $_GET['district'] == 0)
                                    @elseif($_GET['district'] == $district->code)
                                    selected
                                    @endif
                                    >{!! $district->name !!}</option>
                                    @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="select-control price-control">
                            <div class="select-control-label">
                                <div class="dropbox-label">Mức giá</div>
                                <select name="price" id="filter-price">
                                    <option value=""@if(!isset($_GET['price']) || $_GET['price'] == 0) selected @endif>Tất cả</option>
                                    <option value="12" @if(!isset($_GET['price']) || $_GET['price'] == 0)
                                @elseif($_GET['price'] == 12)
                                    selected
                                @endif >1 - 2 tỷ</option>
                                    <option value="23" @if(!isset($_GET['price']) || $_GET['price'] == 0)
                                @elseif($_GET['price'] == 23)
                                    selected
                                @endif >2 - 3 tỷ</option>
                                    <option value="35" @if(!isset($_GET['price']) || $_GET['price'] == 0)
                                @elseif($_GET['price'] == 35)
                                    selected
                                @endif >3 - 5 tỷ</option>
                                    <option value="57" @if(!isset($_GET['price']) || $_GET['price'] == 0)
                                @elseif($_GET['price'] == 57)
                                    selected
                                @endif >5 - 7 tỷ</option>
                                    <option value="71000" @if(!isset($_GET['price']) || $_GET['price'] == 0)
                                @elseif($_GET['price'] == 71000)
                                    selected
                                @endif >Trên 7 tỷ</option>
                                
                                </select>
                            </div>
                        </div>
                        <div class="select-control area-control">
                            <div class="select-control-label">
                                <div class="dropbox-label">Diện tích</div>
                                <select name="area" id="filter-area">
                                    <option value="" @if(!isset($_GET['area']) || $_GET['area'] == 0)
                                    selected
                                @endif  >Tất cả</option>
                                    <option value="0030" @if(!isset($_GET['area']) || $_GET['area'] == 0)
                                @elseif($_GET['area'] == 0030)
                                    selected
                                @endif  >< 30 m2</option>
                                    <option value="3050" @if(!isset($_GET['area']) || $_GET['area'] == 0)
                                @elseif($_GET['area'] == 3050)
                                    selected
                                @endif  >30 - 50 m2</option>
                                    <option value="5080" @if(!isset($_GET['area']) || $_GET['area'] == 0)
                                @elseif($_GET['area'] == 5080)
                                    selected
                                @endif  >50 - 80 m2</option>
                                    <option value="80100000" @if(!isset($_GET['area']) || $_GET['area'] == 0)
                                @elseif($_GET['area'] == 80100000)
                                    selected
                                @endif  >Trên 80 m2</option>
                                </select>
                            </div>
            
                        </div>
            
                        <input type="submit" id="btnSearch" class="btn-blue-7" value="Tìm kiếm">
                        <div id="link-reset" aria-label="Xóa tiêu chí lọc" data-microtip-position="bottom-left" role="tooltip"><img src="./assets/image/ic_reset.svg"></div>
                    </div>
                </form>

                <div class="loveMoney102" positioncode="BANNER_POSITION_MASTER_HEAD_WEB" style="margin-bottom: 0px">
                    <div
                        class="swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">

                        <div class="row m-t-50">
                            <div class="col-md-12">
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">

                                        <div class="carousel-item active">

                                            @foreach ($banners as $banner)
                                                @if ($loop->first)
                                                    <img class="d-block w-100"
                                                        src="/storage/img/slides/{!!  $banner->link !!}" alt="First slide">
                                                @endif
                                            @endforeach

                                        </div>

                                        @foreach ($banners as $banner)
                                            @continue($loop->first)
                                            <div class="carousel-item">
                                                <img class="d-block w-100" src="/storage/img/slides/{!!  $banner->link !!}"
                                                    alt="First slide">
                                            </div>
                                        @endforeach


                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                        data-slide="prev">
                                        <span class="mdi mdi-chevron-left font-size-35" aria-hidden="true"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                        data-slide="next">
                                        <span class="mdi mdi-chevron-right font-size-35" aria-hidden="true"></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <script type="text/javascript">
                            (function callJQuery() {
                                if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home
                                    .HotNewsGroupBinnova) {
                                    new window.FrontEnd.Home.HotNewsGroupBinnova({
                                        getNewNewsAsHtmlUrl: '/Systems/Home/GetNewNewsAsHtml',
                                        getAdviceNewsAsHtmlUrl: '/Systems/Home/GetAdviceNewsAsHtml',
                                        getFengshuiNewsAsHtmlUrl: '/Systems/Home/GetFengshuiNewsAsHtml'
                                    });
                                } else {
                                    setTimeout(callJQuery, 100)
                                }
                            })();

                        </script>

                        <script src="/assets/js/vendor.js"></script>

                    </div>
                </div>

            </div>
            <!-- Cac control o giua-->
            <div class="home-small" style="margin-top: 85px;">
                <div class="home-small-main">

                    <div class="home-small-heading" id="hometabs">
                        <ul>
                            <li>
                                <h2><a style="cursor: pointer" data-tab="hometab1" class="actived">Tin nổi bật</a></h2>
                            </li>
                            <li>
                                <h2><a style="cursor: pointer" href="javascript:void(0)" data-tab="hometab4">Phong thủy</a>
                                </h2>
                            </li>
                        </ul>
                        <a href="{{ Route('tintucbds') }}" id="tabview" class="home-small-more">Xem thêm tin tức<img
                                src="./assets/image/icon-arrow-right.png"></a>
                        <div class="clear"></div>
                    </div>
                    <div id="news-slide">
                        <div id="hometab1" class="newscontain">
                            <div class="home-small-main-1 news-show">
                                @foreach ($articles as $article)
                                    <div id="hottab-{{ $i++ }}" class="" style="display: none;">
                                        <h3>
                                            <a title="{{ $article->title }}"
                                                href="{!!  Route('tintuc_single_post', $article->id) !!}">
                                                <span>
                                                    <img noloaderror="true" imgerr="1" src="{{ $article->image_link }}"
                                                        is-lazy-image="true" lazy-id="0">
                                                </span>
                                                {{ $article->title }}
                                            </a>
                                        </h3>
                                        <div class="news-time">
                                            <img src="./assets/image/clock.png">{{ $article->hours }} giờ trước
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="home-small-main-2">
                                <div class="list-news">
                                    <ul>
                                        @foreach ($articles as $article)

                                            <li class="">
                                                <h3>
                                                    <a title="{{ $article->title }}" data-index="#hottab-{{ $j++ }}"
                                                        href="{!!  Route('tintuc_single_post', $article->id) !!}">
                                                        {{ $article->title }}
                                                    </a>
                                                </h3>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div id="hometab4" class="hidden newscontain">
                            <div class="home-small-main-1 news-show" javascript-location-value="fengshuiNews">
                                @foreach ($articles as $article)
                                    @if ($loop->first)
                                        <div id="fstab-{{ $k++ }}" class="" style="display: block;">
                                            <h3>
                                                <a title="{{ $article->title }}" href="{{ $article->slug }}">
                                                    <span>
                                                        <img noloaderror="true" imgerr="1" src="{{ $article->image_link }}"
                                                            is-lazy-image="true" lazy-id="0">
                                                    </span>
                                                    {{ $article->title }}
                                                </a>
                                            </h3>
                                            <div class="news-time">
                                                <img src="./assets/image/clock.png">4 giờ trước
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                            <div class="home-small-main-2">
                                <div class="list-news">
                                    <ul>
                                        @foreach ($articles as $article)

                                            <li class="">
                                                <h3>
                                                    <a title="{{ $article->title }}" data-index="#fstab-{{ $l++ }}"
                                                        href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/-infographic-nhung-quy-dinh-phap-ly-khong-the-bo-qua-khi-mua-ban-bat-dong-san-ar103077">
                                                        {{ $article->title }}
                                                    </a>
                                                </h3>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="clear"></div>
                        </div>
                        <div id="hometab3" class="hidden newscontain">
                            <div class="clear"></div>
                        </div>
                        {{-- <div id="hometab4" class="hidden newscontain">
                            <div class="clear"></div>
                        </div> --}}
                    </div>
                    <script src="https://log.batdongsan.com.vn/js/bds/bds-msv-log.min.js?hv=2&amp;dv=2021-01-13"></script>

                </div>
                <div class="home-small-banner">

                    <div class="loveMoney102" positioncode="BANNER_POSITION_RIGHT_2020" style="margin-bottom: 0px">
                        @foreach ($sidebars as $sidebar)
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="/storage/img/slides/{!!  $sidebar->link !!}" class="d-block w-100" alt="...">
                                    <br>
                                </div>

                            </div>
                        @endforeach
                    </div>

                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": 0,
                            "PageId": 189,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 189
                        };
                        var clickBannerUrl = '/Systems/Banner/Click'

                    </script>
                </div>
                <div class="clear"></div>
            </div>



            <div class="home-center bg-grey" id="interestedProductsBinnovaContent">

                <div class="home-product product-4-you">
                    <h2 class="fl">Bất động sản dành cho bạn</h2>
                    <div class="home-more-link">
                        <a href="{{ Route('nha_dat_ban') }}">Tin nhà đất bán mới nhất</a>
                        &nbsp;&nbsp;|&nbsp;&nbsp;
                        <a href="{{ Route('nha_dat_cho_thue') }}">Tin nhà đất cho thuê mới nhất</a>
                    </div>
                    <div class="clear"></div>
                    <link rel="stylesheet" href="./assets/image/microtip.css">
                    <ul>
                        @foreach ($products as $product)


                            <li class="">
                                <div class="vip5 vipaddon" rel="26878040" uid="328276">
                                    <div class="product-thumb ">
                                        <a title="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m"
                                            href="{{ route('nhadatban_single_post', $product->id) }}">
                                            @foreach ($product->image as $image)
                                                @if ($loop->first)
                                                    <img src="{{ $image->link }}" alt="{{ $image->name }}">
                                                @endif
                                            @endforeach

                                        </a>
                                        <span class="product-feature">
                                        </span>
                                        <span class="product-media">{{ $product->image->count() }}</span>
                                    </div>
                                    <div class="home-product-bound">


                                        <div class="p-title textTitle">
                                            <a href="{{ route('nhadatban_single_post', $product->id) }}"
                                                title="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m">{{ $product->title }}</a>
                                        </div>


                                        <div class="product-price">{{ $product->price }} {{ $product->unit }} </div>
                                        <span class="ic_dot">·</span>
                                        <div class="pro-m2">{{ $product->area }} m2</div>
                                        <div class="product-address">
                                            @if (isset($districs->find($product->district_code)->name))
                                                <a href="https://batdongsan.com.vn/ban-dat-thanh-oai-hn"
                                                    title="{{ $districs->find($product->district_code)->name }}">

                                                    {{ $districs->find($product->district_code)->name }}

                                                </a>
                                            @endif

                                            @if (isset($provinces->find($product->province_code)->name))
                                                <a href="https://batdongsan.com.vn/ban-dat-ha-noi"
                                                    title="{{ $provinces->find($product->province_code)->name }}">

                                                    {{ $provinces->find($product->province_code)->name }}

                                                </a>
                                            @endif


                                        </div>
                                        <div class="product-date">
                                            Hôm nay
                                            <span class="tooltip-time">{{ $date }}</span>
                                        </div>

                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                    <div class="clear"></div>
                    <div id="ucHomeProductInterest_pnlViewMore">
                        <div class="home-viewmore">
                            <a href="javascript:void(0)" id="prd-viewmore">
                                Mở rộng&nbsp;&nbsp;<img src="./assets/image/icon-down-blue.png">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.InterestedProductsBinnova) {
                        new window.FrontEnd.Home.InterestedProductsBinnova({
                            getInterestedProductsBinnovaUrl: '/Systems/Home/GetInterestedProductsBinnova'
                        });
                    } else {
                        setTimeout(callJQuery, 100)
                    }
                })();

            </script>

            <div class="home-small">
                <div class="home-product-place">


                    <h2>Bất động sản theo địa điểm</h2>
                    <div>
                        @foreach ($provinceCounts as $provinceCount)
                            @if ($loop->first)
                                <div class="place-big">
                                    <div class="place-img slick-initialized slick-slider">
                                        <div aria-live="polite" class="slick-list draggable">
                                            <div class="slick-track" style="opacity: 1; width: 1680px;" role="listbox"><img
                                                    src="./assets/image/HCM-web-1.jpg" is-lazy-image="true" lazy-id="6"
                                                    class="slick-slide slick-current slick-active" data-slick-index="0"
                                                    aria-hidden="false"
                                                    style="width: 560px; position: relative; left: 0px; top: 0px; z-index: 1000; opacity: 1; transition: opacity 500ms ease 0s;"
                                                    tabindex="-1" role="option" aria-describedby="slick-slide00"><img
                                                    src="./assets/image/HCM-web-2.jpg" is-lazy-image="true" lazy-id="7"
                                                    class="slick-slide" data-slick-index="1" aria-hidden="true"
                                                    style="width: 560px; position: relative; left: -560px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                                    tabindex="-1" role="option" aria-describedby="slick-slide01"><img
                                                    src="./assets/image/HCM-web-3.jpg" is-lazy-image="true" lazy-id="8"
                                                    class="slick-slide" data-slick-index="2" aria-hidden="true"
                                                    style="width: 560px; position: relative; left: -1120px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                                    tabindex="-1" role="option" aria-describedby="slick-slide02"></div>
                                        </div>


                                    </div>
                                    <div class="place-info buy-info">
                                        <h3>
                                            <form id = "my_form2" action="{{ route('nha_dat_ban') }}" method="get" >
                                                <a href="javascript:;" onclick="parentNode.submit();">
                                                    <span class="place-name"> {{ $provinceCount->name }} </span>
                                                    <span class="place-number">{{ $provinceCount->count_posts }} tin đăng</span>
                                                </a>
                                                <input type="hidden" name="province" value = {!! $provinceCount->code !!}>
                                            </form>
                                        </h3>
                                    </div>

                                </div>
                            @endif
                        @endforeach
                        <div class="place-small">
                            @foreach ($provinceCounts as $value=>$provinceCount)
                                
                                @continue($value==0 || $value==4 || $value==3)
                                
                                    <div class="place-item">
                                        <div class="place-img slick-initialized slick-slider">
                                            <div aria-live="polite" class="slick-list draggable">
                                                <div class="slick-track" style="opacity: 1; width: 810px;" role="listbox">
                                                    <img src="./assets/image/HN-web-1.jpg" is-lazy-image="true" lazy-id="9"
                                                        class="slick-slide" data-slick-index="0" aria-hidden="true"
                                                        style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                                        tabindex="-1" role="option" aria-describedby="slick-slide10"><img
                                                        src="./assets/image/HN-web-2.jpg" is-lazy-image="true" lazy-id="10"
                                                        class="slick-slide" data-slick-index="1" aria-hidden="true"
                                                        style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                                        tabindex="-1" role="option" aria-describedby="slick-slide11"><img
                                                        src="./assets/image/HN-web-3.jpg" is-lazy-image="true" lazy-id="11"
                                                        class="slick-slide slick-current slick-active" data-slick-index="2"
                                                        aria-hidden="false"
                                                        style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 999; opacity: 1;"
                                                        tabindex="-1" role="option" aria-describedby="slick-slide12">
                                                </div>
                                            </div>


                                        </div>
                                        <div class="place-info buy-info">
                                            <h3>
                                                <form id = "my_form" action="{{ route('nha_dat_ban') }}" method="get" >
                                                    <a href="javascript:;" onclick="parentNode.submit();">
                                                        <span class="place-name"> {{ $provinceCount->name }} </span>
                                                        <span class="place-number">{{ $provinceCount->count_posts }} tin đăng</span>
                                                    </a>
                                                    <input type="hidden" name="province" value = {!! $provinceCount->code !!}>
                                                </form>
                                            </h3>
                                        </div>

                                    </div>
                                
                            @endforeach
                            @foreach ($provinceCounts as $value=>$provinceCount)
                            @continue($value<3)
                                    <div class="place-item nomargin">
                                        <div class="place-img slick-initialized slick-slider">
                                            <div aria-live="polite" class="slick-list draggable">
                                                <div class="slick-track" style="opacity: 1; width: 540px;" role="listbox">
                                                    <img src="/assets/image/lazy-preview-image-DFE3E8.png"
                                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-1.jpg"
                                                        is-lazy-image="true" lazy-id="15"
                                                        class="slick-slide slick-current slick-active" data-slick-index="0"
                                                        aria-hidden="false"
                                                        style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                                                        tabindex="-1" role="option" aria-describedby="slick-slide30"><img
                                                        src="/assets/image/lazy-preview-image-DFE3E8.png"
                                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-2.jpg"
                                                        is-lazy-image="true" lazy-id="16" class="slick-slide"
                                                        data-slick-index="1" aria-hidden="true"
                                                        style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                                        tabindex="-1" role="option" aria-describedby="slick-slide31"></div>
                                            </div>

                                        </div>
                                        <div class="place-info buy-info">
                                            <h3>
                                                <form id = "my_form1" action="{{ route('nha_dat_ban') }}" method="get" >
                                                    <a href="javascript:;" onclick="parentNode.submit();">
                                                        <span class="place-name"> {{ $provinceCount->name }} </span>
                                                        <span class="place-number">{{ $provinceCount->count_posts }} tin đăng</span>
                                                    </a>
                                                    <input type="hidden" name="province" value = {!! $provinceCount->code !!}>
                                                </form>
                                            </h3>
                                        </div>

                                    </div>
                            @endforeach
                        </div>
                        <div class="clear"></div>
                    </div>

                    <style type="text/css">
                        .rent-info {
                            display: none;
                        }

                    </style>

                    <script type="text/javascript">
                        (function callJQuery() {
                            if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.ProductCountBinnova) {
                                new window.FrontEnd.Home.ProductCountBinnova({});
                            } else {
                                setTimeout(callJQuery, 100)
                            }
                        })();

                    </script>


                </div>
                <!-- Tag -->


                <!-- Banner giua -->
                <div class="home-enterprise m-b-30">
                    <h2 class="fl">Doanh nghiệp tiêu biểu</h2>
                    <div class="home-more-link">
                        <a href="{{ Route('nhamoigioi') }}">Xem thêm&nbsp;&nbsp;<img
                                src="./assets/image/icon-arrow-right.png"></a>
                    </div>
                    <div class="clear"></div>
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                        <ul class="swiper-wrapper"
                            style="transform: translate3d(-3056px, 0px, 0px); transition-duration: 0ms;">
                            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="6"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-12/cong-ty-co-phan-tap-doan-dia-oc-va-ep2773"
                                    title="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN">
                                    <img class="color_flip" alt="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/04/06/PGsxuI1y/20200406083257-058a.jpg"
                                        is-lazy-image="true" lazy-id="36"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="7"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-va-quan-ly-bat-dong-sa-ep2772"
                                    title="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN">
                                    <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/01/03/3ZsSL6gy/20200103145745-1450.jpg"
                                        is-lazy-image="true" lazy-id="37"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="8"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/thi-cong-xay-dung-thu-dau-mot-bd/cong-ty-cp-xay-dung-tu-van-dau-tu-binh-duon-ep75"
                                    title="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)">
                                    <img class="color_flip" alt="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/05/27/hmcVYWuR/20200527142414-6a13.jpg"
                                        is-lazy-image="true" lazy-id="38"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                data-swiper-slide-index="9" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-7/novalan-ep480"
                                    title="Novaland Group">
                                    <img class="color_flip" alt="Novaland Group"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/07/21/n1AwoD7S/20200721151328-207e.jpg"
                                        is-lazy-image="true" lazy-id="39"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                data-swiper-slide-index="10" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/dau-tu-du-an-rach-gia-kg/cong-ty-cpdt-phu-cuong-kie-ep2787"
                                    title="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG">
                                    <img class="color_flip" alt="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/04/22/PGsxuI1y/20200422111005-0350.jpg"
                                        is-lazy-image="true" lazy-id="40"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                data-swiper-slide-index="11" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-5/cong-ty-tnhh-tm-dv-nha-ta-ep2777"
                                    title="CÔNG TY TNHH TM &amp; DV NHÀ TÂN PHÁT">
                                    <img class="color_flip" src="./assets/image/20200110153537-ce21.jpg"
                                        alt="CÔNG TY TNHH TM &amp; DV NHÀ TÂN PHÁT">
                                </a>
                            </li>
                            <li class="swiper-slide" data-swiper-slide-index="0" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-tnhh-dau-tu-dia-oc-thanh-ph-ep1898"
                                    title="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)">
                                    <img class="color_flip" alt="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/10/16/hmcVYWuR/20201016153855-fa63.jpg"
                                        is-lazy-image="true" lazy-id="30"> </a>
                            </li>
                            <li class="swiper-slide" data-swiper-slide-index="1" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-cp-tap-doan-dau-tu-chau-a-thai-bin-ep2818"
                                    title="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương">
                                    <img class="color_flip" alt="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/10/05/hmcVYWuR/20201005135528-83f1.jpg"
                                        is-lazy-image="true" lazy-id="31"> </a>
                            </li>
                            <li class="swiper-slide" data-swiper-slide-index="2" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-ben-cat-bd/cong-ty-tnhh-dau-tu-xay-dung-dich-vu-hoang-th-ep2813"
                                    title="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP">
                                    <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/09/28/PGsxuI1y/20200928152939-aa13.jpg"
                                        is-lazy-image="true" lazy-id="32"> </a>
                            </li>
                            <li class="swiper-slide" data-swiper-slide-index="3" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-dich-vu-bat-dong-san-16-ep2807"
                                    title="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY">
                                    <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/09/15/PGsxuI1y/20200915154813-0430.jpg"
                                        is-lazy-image="true" lazy-id="33"> </a>
                            </li>
                            <li class="swiper-slide" data-swiper-slide-index="4" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-1/cong-ty-cp-tu-van-dau-tu-va-quan-ly-bat-dong-san-saigon-cente-ep2776"
                                    title="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL">
                                    <img class="color_flip"
                                        alt="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/01/09/PGsxuI1y/20200109093229-ce7d.jpg"
                                        is-lazy-image="true" lazy-id="34"> </a>
                            </li>
                            <li class="swiper-slide" data-swiper-slide-index="5" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/thi-cong-xay-dung-ba-dinh/hd-mo-ep2132"
                                    title="HD Mon Holdings">
                                    <img class="color_flip" alt="HD Mon Holdings"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2016/12/17/Nl3mS01v/20161217085942-2e1c.jpg"
                                        is-lazy-image="true" lazy-id="35"> </a>
                            </li>
                            <li class="swiper-slide" data-swiper-slide-index="6" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-12/cong-ty-co-phan-tap-doan-dia-oc-va-ep2773"
                                    title="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN">
                                    <img class="color_flip" alt="CÔNG TY CỔ PHẦN TẬP ĐOÀN ĐỊA ỐC VẠN XUÂN"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/04/06/PGsxuI1y/20200406083257-058a.jpg"
                                        is-lazy-image="true" lazy-id="63"> </a>
                            </li>
                            <li class="swiper-slide" data-swiper-slide-index="7" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-va-quan-ly-bat-dong-sa-ep2772"
                                    title="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN">
                                    <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN DTN"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/01/03/3ZsSL6gy/20200103145745-1450.jpg"
                                        is-lazy-image="true" lazy-id="64"> </a>
                            </li>
                            <li class="swiper-slide" data-swiper-slide-index="8" style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/thi-cong-xay-dung-thu-dau-mot-bd/cong-ty-cp-xay-dung-tu-van-dau-tu-binh-duon-ep75"
                                    title="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)">
                                    <img class="color_flip" alt="Công ty CP Xây dựng Tư vấn Đầu tư Bình Dương (BICONSI)"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/05/27/hmcVYWuR/20200527142414-6a13.jpg"
                                        is-lazy-image="true" lazy-id="65"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-prev" data-swiper-slide-index="9"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-7/novalan-ep480"
                                    title="Novaland Group">
                                    <img class="color_flip" alt="Novaland Group"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/07/21/n1AwoD7S/20200721151328-207e.jpg"
                                        is-lazy-image="true" lazy-id="66"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="10"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/dau-tu-du-an-rach-gia-kg/cong-ty-cpdt-phu-cuong-kie-ep2787"
                                    title="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG">
                                    <img class="color_flip" alt="CÔNG TY CPĐT PHÚ CƯỜNG KIÊN GIANG"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/04/22/PGsxuI1y/20200422111005-0350.jpg"
                                        is-lazy-image="true" lazy-id="67"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="11"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-5/cong-ty-tnhh-tm-dv-nha-ta-ep2777"
                                    title="CÔNG TY TNHH TM &amp; DV NHÀ TÂN PHÁT">
                                    <img class="color_flip" src="./assets/image/20200110153537-ce21.jpg"
                                        alt="CÔNG TY TNHH TM &amp; DV NHÀ TÂN PHÁT">
                                </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-tnhh-dau-tu-dia-oc-thanh-ph-ep1898"
                                    title="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)">
                                    <img class="color_flip" alt="Công ty TNHH Đầu tư Địa ốc Thành phố (CityLand)"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/10/16/hmcVYWuR/20201016153855-fa63.jpg"
                                        is-lazy-image="true" lazy-id="68"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="1"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-1/cong-ty-cp-tap-doan-dau-tu-chau-a-thai-bin-ep2818"
                                    title="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương">
                                    <img class="color_flip" alt="Công ty CP Tập Đoàn Đầu Tư Châu Á Thái Bình Dương"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/10/05/hmcVYWuR/20201005135528-83f1.jpg"
                                        is-lazy-image="true" lazy-id="69"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="2"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-ben-cat-bd/cong-ty-tnhh-dau-tu-xay-dung-dich-vu-hoang-th-ep2813"
                                    title="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP">
                                    <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ XÂY DỰNG DỊCH VỤ HOÀNG THỔ GROUP"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/09/28/PGsxuI1y/20200928152939-aa13.jpg"
                                        is-lazy-image="true" lazy-id="70"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="3"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-2/cong-ty-tnhh-dau-tu-dich-vu-bat-dong-san-16-ep2807"
                                    title="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY">
                                    <img class="color_flip" alt="CÔNG TY TNHH ĐẦU TƯ DỊCH VỤ BẤT ĐỘNG SẢN 168 PROPERTY"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/09/15/PGsxuI1y/20200915154813-0430.jpg"
                                        is-lazy-image="true" lazy-id="71"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="4"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/tu-van-moi-gioi-bat-dong-san-quan-1/cong-ty-cp-tu-van-dau-tu-va-quan-ly-bat-dong-san-saigon-cente-ep2776"
                                    title="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL">
                                    <img class="color_flip"
                                        alt="CÔNG TY CP TƯ VẤN ĐẦU TƯ VÀ QUẢN LÝ BẤT ĐỘNG SẢN SAIGON CENTER REAL"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2020/01/09/PGsxuI1y/20200109093229-ce7d.jpg"
                                        is-lazy-image="true" lazy-id="72"> </a>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="5"
                                style="width: 165px; margin-right: 26px;">
                                <a href="https://batdongsan.com.vn/thi-cong-xay-dung-ba-dinh/hd-mo-ep2132"
                                    title="HD Mon Holdings">
                                    <img class="color_flip" alt="HD Mon Holdings"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/2016/12/17/Nl3mS01v/20161217085942-2e1c.jpg"
                                        is-lazy-image="true" lazy-id="73"> </a>
                            </li>
                        </ul>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                    <div class="clear"></div>
                </div>
                <script type="text/javascript">
                    (function callJQuery() {
                        if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.TypicalEnterpriseBinnova) {
                            new window.FrontEnd.Home.TypicalEnterpriseBinnova({});
                        } else {
                            setTimeout(callJQuery, 100)
                        }
                    })();

                </script>


                <div class="homemain home-social">
                    <h2>Báo chí nói về Batdongsan.com.vn</h2>
                    <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                        <ul class="swiper-wrapper"
                            style="transform: translate3d(-1145px, 0px, 0px); transition-duration: 0ms;">
                            <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="4">
                                <div class="home-social-img">
                                    <a href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-03_DanTri_CondotelLaoDoc.jpg"
                                            is-lazy-image="true" lazy-id="49"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                        is-lazy-image="true" lazy-id="50"> <a
                                        href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                        target="_blank'" rel="nofollow">
                                        Batdongsan.com.vn công bố số liệu về thị trường Condotel 2019
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="5">
                                <div class="home-social-img">
                                    <a href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-08_VietnamMoi.jpg"
                                            is-lazy-image="true" lazy-id="51"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_VietnamMoi.png"
                                        is-lazy-image="true" lazy-id="52"> <a
                                        href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                        target="_blank'" rel="nofollow">
                                        Batdongsan.com.vn công bố giá rao bán bất động sản trên thị trường quý 3/2019
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="6">
                                <div class="home-social-img">
                                    <a href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174136-6f7e.jpg"
                                            is-lazy-image="true" lazy-id="53"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                        is-lazy-image="true" lazy-id="54"> <a
                                        href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                        target="_blank'" rel="nofollow">
                                        Batdongsan.com.vn công bố giao diện trang chủ mới
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate swiper-slide-prev"
                                style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="7">
                                <div class="home-social-img">
                                    <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html"
                                        target="_blank'" rel="nofollow">
                                        <img style="max-height: 173px" src="./assets/image/B-02_BaoXayDung.jpg">
                                    </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px" src="./assets/image/icon_BaoXayDung.png">
                                    <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html"
                                        target="_blank'" rel="nofollow">
                                        Batdongsan.com.vn tổ chức Hội nghị bất động sản Việt nam 2019
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-active" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="0">
                                <div class="home-social-img">
                                    <a href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174140-b87a.jpg"
                                            is-lazy-image="true" lazy-id="41"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png"
                                        is-lazy-image="true" lazy-id="42"> <a
                                        href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn"
                                        target="_blank'" rel="nofollow">
                                        2020: Batdongsan.com.vn và những cải tiến công nghệ
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-next" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="1">
                                <div class="home-social-img">
                                    <a href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-06_TuoiTre.jpg"
                                            is-lazy-image="true" lazy-id="43"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_TuoiTre.png"
                                        is-lazy-image="true" lazy-id="44"> <a
                                        href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm"
                                        target="_blank'" rel="nofollow">
                                        Quy mô thị trường bất động sản việt nam vẫn còn nhỏ so với tiềm năng
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="2">
                                <div class="home-social-img">
                                    <a href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-04_CafeF.jpg"
                                            is-lazy-image="true" lazy-id="45"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png"
                                        is-lazy-image="true" lazy-id="46"> <a
                                        href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                        target="_blank'" rel="nofollow">
                                        Tác động của kinh tế đến thị trường bất động sản theo ghi nhận của Batdongsan.com.vn
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="3">
                                <div class="home-social-img">
                                    <a href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-01_ThoiBaoNganHang.jpg"
                                            is-lazy-image="true" lazy-id="47"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_ThoiBaoNganHang.png"
                                        is-lazy-image="true" lazy-id="48"> <a
                                        href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                        target="_blank'" rel="nofollow">
                                        VRES 2019 – Sự kiện được quan tâm nhất thị trường bất động sản Việt Nam
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="4">
                                <div class="home-social-img">
                                    <a href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-03_DanTri_CondotelLaoDoc.jpg"
                                            is-lazy-image="true" lazy-id="74"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                        is-lazy-image="true" lazy-id="75"> <a
                                        href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                        target="_blank'" rel="nofollow">
                                        Batdongsan.com.vn công bố số liệu về thị trường Condotel 2019
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="5">
                                <div class="home-social-img">
                                    <a href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-08_VietnamMoi.jpg"
                                            is-lazy-image="true" lazy-id="76"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_VietnamMoi.png"
                                        is-lazy-image="true" lazy-id="77"> <a
                                        href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                        target="_blank'" rel="nofollow">
                                        Batdongsan.com.vn công bố giá rao bán bất động sản trên thị trường quý 3/2019
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="6">
                                <div class="home-social-img">
                                    <a href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174136-6f7e.jpg"
                                            is-lazy-image="true" lazy-id="78"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                        is-lazy-image="true" lazy-id="79"> <a
                                        href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                        target="_blank'" rel="nofollow">
                                        Batdongsan.com.vn công bố giao diện trang chủ mới
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate-prev"
                                style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="7">
                                <div class="home-social-img">
                                    <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html"
                                        target="_blank'" rel="nofollow">
                                        <img style="max-height: 173px" src="./assets/image/B-02_BaoXayDung.jpg">
                                    </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px" src="./assets/image/icon_BaoXayDung.png">
                                    <a href="https://baoxaydung.com.vn/dat-nen-van-la-kenh-dau-tu-hap-dan-trong-tuong-lai-269183.html"
                                        target="_blank'" rel="nofollow">
                                        Batdongsan.com.vn tổ chức Hội nghị bất động sản Việt nam 2019
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="0">
                                <div class="home-social-img">
                                    <a href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174140-b87a.jpg"
                                            is-lazy-image="true" lazy-id="80"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png"
                                        is-lazy-image="true" lazy-id="81"> <a
                                        href="http://cafef.vn/batdongsancomvn-chinh-thuc-thay-giao-dien-trang-chu-moi-20200110115000392.chn"
                                        target="_blank'" rel="nofollow">
                                        2020: Batdongsan.com.vn và những cải tiến công nghệ
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="1">
                                <div class="home-social-img">
                                    <a href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-06_TuoiTre.jpg"
                                            is-lazy-image="true" lazy-id="82"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_TuoiTre.png"
                                        is-lazy-image="true" lazy-id="83"> <a
                                        href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm"
                                        target="_blank'" rel="nofollow">
                                        Quy mô thị trường bất động sản việt nam vẫn còn nhỏ so với tiềm năng
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="2">
                                <div class="home-social-img">
                                    <a href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-04_CafeF.jpg"
                                            is-lazy-image="true" lazy-id="84"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png"
                                        is-lazy-image="true" lazy-id="85"> <a
                                        href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                        target="_blank'" rel="nofollow">
                                        Tác động của kinh tế đến thị trường bất động sản theo ghi nhận của Batdongsan.com.vn
                                    </a>
                                </div>
                            </li>
                            <li class="swiper-slide swiper-slide-duplicate" style="width: 261.25px; margin-right: 25px;"
                                data-swiper-slide-index="3">
                                <div class="home-social-img">
                                    <a href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                        target="_blank'" rel="nofollow">
                                        <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-01_ThoiBaoNganHang.jpg"
                                            is-lazy-image="true" lazy-id="86"> </a>
                                </div>
                                <div class="home-social-link">
                                    <img style="max-height: 40px; max-width: 40px"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_ThoiBaoNganHang.png"
                                        is-lazy-image="true" lazy-id="87"> <a
                                        href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                        target="_blank'" rel="nofollow">
                                        VRES 2019 – Sự kiện được quan tâm nhất thị trường bất động sản Việt Nam
                                    </a>
                                </div>
                            </li>
                        </ul>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                    <div class="clear"></div>
                </div>
                <script type="text/javascript">
                    (function callJQuery() {
                        if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.NewsSocialBinnova) {
                            new window.FrontEnd.Home.NewsSocialBinnova({});
                        } else {
                            setTimeout(callJQuery, 100)
                        }
                    })();

                </script>
            </div>
        </div>

        <div class="banner-bottom">
            <div style="float: left; width: 560px">
            </div>
            <div style="float: left; width: 430px; margin-left: 5px">
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="boxLinkFooter ">
            <div class="home-center bg-grey2">
                <div class="home-small">
                    <div class="html-content">
                        <div class="home-list-tag">
                            <div class="footer-middle">
                                <div class="footer-middle-colum1">
                                    <div class="footer-middle-colum1-title">
                                        <h3>
                                            <a href="https://batdongsan.com.vn/nha-dat-ban-tp-hcm">MUA BÁN NHÀ ĐẤT TP
                                                HCM</a>
                                        </h3>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-nha-rieng-quan-1">Bán nhà Quận 1</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quan-2">Bán nhà Quận 2</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quan-3">Bán nhà Quận 3</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quan-4">Bán nhà Quận 4</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quan-5">Bán nhà Quận 5</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quan-6">Bán nhà Quận 6</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-nha-rieng-quan-7">Bán nhà Quận 7</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quan-8">Bán nhà Quận 8</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quan-9">Bán nhà Quận 9</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quan-10">Bán nhà Quận 10</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quan-11">Bán nhà Quận 11</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-nha-mat-pho-quan-12">Bán nhà Quận 12</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-tan-phu">Bán nhà Tân Phú</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-thu-duc">Bán nhà Thủ Đức</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-binh-chanh">Bán nhà Bình Chánh</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-binh-tan">Bán nhà Quận Bình Tân</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-diamond-island">Diamond
                                            Island</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-go-vap">Biệt thự Gò
                                            Vấp</a>
                                    </div>
                                    <div class="clear">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="footer-middle-colum1">
                                    <div class="footer-middle-colum1-title">
                                        <h3>
                                            <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">MUA BÁN NHÀ ĐẤT HÀ
                                                NỘI</a>
                                        </h3>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-nha-rieng-ha-noi">Bán nhà Hà Nội</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/tags/ban/ban-nha-chinh-chu-co-so-do-tai-ha-noi">Bán
                                            nhà chính chủ Hà Nội</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">Mua&nbsp;bán&nbsp;nhà&nbsp;đất
                                            Hà
                                            Nội</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-long-bien">Nhà đất Long Biên</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-ha-dong">Nhà đất Hà Đông</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-ha-noi">Chung cư Hà Nội</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-nha-rieng-bac-tu-liem">Bán nhà Bắc Từ
                                            Liêm</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-noi">Thuê nhà Hà Nội</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-ha-noi">Thuê chung cư Hà
                                            Nội</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-dong">Thuê nhà Hà Đông</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-dong-anh">Nhà đất Đông Anh</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-ha-noi">Cho thuê mặt bằng
                                            Hà
                                            Nội</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-ha-noi">Thuê phòng trọ
                                            Hà
                                            Nội</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-times-city">Time City</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-ocean-park-gia-lam">Vinhomes
                                            Ocean Park</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-smart-city-dai-mo">Vinhomes
                                            Smart City</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-sky-lake">Vinhomes
                                            Sky
                                            Lake</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-nha-mat-pho-go-vap">Nhà Phố Gò Vấp</a>
                                    </div>
                                    <div class="clear">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="footer-middle-colum1">
                                    <div class="footer-middle-colum1-title">
                                        <h3>
                                            <a href="https://batdongsan.com.vn/nha-dat-ban">MUA BÁN NHÀ ĐẤT</a>
                                        </h3>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-hai-phong">Nhà đất Hải Phòng</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-da-nang">Nhà đất Đà Nẵng</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-nam-dinh">Nhà đất Nam Định</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-an-giang">Nhà đất An Giang</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-hai-duong">Nhà đất Hải Dương</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-thai-binh">Nhà đất Thái Bình</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-can-tho">Nhà đất Cần Thơ</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-nha-trang-kh">Nhà đất Nha Trang</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-gia-lai">Nhà đất Gia Lai</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quang-ngai">Nhà đất Quảng Ngãi</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-soc-trang">Nhà đất Sóc Trăng</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-vung-tau-vt">Nhà đất Vũng Tàu</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-binh-duong">Nhà đất Bình Dương</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-bac-ninh">Nhà đất Bắc Ninh</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-kon-tum">Nhà đất Kon Tum</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-quy-nhon-bdd">Nhà đất Quy Nhơn</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-bcons-green-view">Bcons Green
                                            View</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-cityland-park-hills">CityLand
                                            Park Hills</a>
                                    </div>
                                    <div class="clear">
                                        &nbsp;
                                    </div>
                                </div>
                                <div class="footer-middle-colum1">
                                    <div class="footer-middle-colum1-title">
                                        <h3>
                                            <a href="https://batdongsan.com.vn/nha-dat-cho-thue">NHÀ ĐẤT CHO THUÊ</a>
                                        </h3>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-da-nang">Cho thuê nhà Đà
                                            Nẵng</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-noi">Cho thuê nhà Hà
                                            Nội</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-thanh">Cho thuê nhà Bình
                                            Thạnh</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-go-vap">Cho thuê nhà Gò
                                            Vấp</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-thu-duc">Cho thuê nhà Thủ
                                            Đức</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-hai-phong">Cho thuê nhà Hải
                                            Phòng</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-2">Cho thuê nhà Quận
                                            2</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tan-phu">Cho thuê nhà Tân
                                            Phú</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-12">Cho thuê nhà Quận
                                            12</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng">Thuê nhà nguyên căn</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-7">Cho thuê nhà Quận
                                            7</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro">Cho thuê phòng
                                            trọ</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tan-binh">Cho thuê nhà Tân
                                            Bình</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-thanh">Cho thuê nhà Bình
                                            Thạnh</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-10">Cho thuê nhà Quận
                                            10</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-8">Cho thuê nhà Quận
                                            8</a>
                                    </div>
                                    <div class="footer-middle-colum1-link">
                                        <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot">Cho thuê mặt bằng</a>
                                    </div>
                                    <div class="clear">
                                        &nbsp;
                                    </div>
                                </div>
                            </div>
                            <div class="clear">
                                &nbsp;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    @endsection

    @section('scripts')


       
@endsection
