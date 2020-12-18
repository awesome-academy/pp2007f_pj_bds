@extends('layouts.master')

@section('title', 'Mua Bán Nhà Đất Việt Nam Giá Rẻ, Mới Nhất 2020')

@section('styles')
<link rel="stylesheet" href="./assets/css/filestatic.ver202011110505.msvbds.productlisting.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
    .select-control {
        width: 200px !important;
    }

    .select-control.city-control {
        width: 14% !important;
    }

    .select-control.district-control {
        width: 200px !important;
    }

    .district{
        width: 100%;
    }

    .select-control.price-control {
        width: 140px !important;
    }

    .select-control.area-control {
        width: 170px !important;
    }

    #btnSearch{
        color: white;
    }

</style>
@endsection

@section('content')

<body class="bg-site">

    <form id="boxSearchForm" action="{{ route('nha_dat_ban') }}" method="get" novalidate="novalidate">
        @csrf
        <div class="search-bar shadow-lv-1 clearfix">
            <div class="search-guide" style="left: 1274.5px; top: 64px; display: block;">
                <div class="icon-guide"><img src="./assets/image/ic_triangle.svg"></div>
            </div>
            <ul class="search-bar-tab mar-left-16 pad-top-8 mar-right-16">
                <li class="filter-nha-dat actived" ptype="38" style="width: 70px;" name="nha-dat-ban">Bán</li>
                <li class="filter-nha-dat" ptype="49" style="width: 100px;" name="nha-dat-cho-thue">Cho thuê</li>
            </ul>
            <!-- <input data-val="true" data-val-required="The CateId field is required." id="type" name="CateId" type="hidden" value="38"> -->

            <div class="search-bar-suggestion pad-top-8 mar-right-16">
                <input type="hidden" id="suggestionTemp">
                <input id="Keyword" name="Keyword" type="hidden" value="">
                <input type="text" placeholder="Tìm kiếm địa điểm, khu vực" class="search-bar-input ui-autocomplete-input" id="search-suggestion" autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true">
                <span class="icon-close hiding">
                    <img src="./assets/image/ic_close.png">
                </span>
            </div>
            <div class="select-control city-control">
                <div class="select-control-label">
                    <div class="dropbox-label">Khu vực</div>
                    <select name="province" id="filter-province" class="province">
                        <option value="0"  selected>Toàn quốc</option>
                        @foreach($result as $province)
                        <option value="{!! $province->code !!}">{!! $province->name !!}</option>
                        @endforeach
                    </select>
                </div>
                <!-- list tp cu~ -->
            </div>
            <div class="select-control district-control">
                <div class="select-control-label">
                    <div class="dropbox-label">Quận, huyện</div>
                    <select name="district" id="filter-district" class="district">
                        <option value="0" class="district" >Tất cả</option>
                    </select>
                </div>
            </div>
            <div class="select-control price-control">
                <div class="select-control-label">
                    <div class="dropbox-label">Mức giá</div>
                    <select name="price">
                        <option value="0"  selected>Tất cả</option>
                        <option value="1">1 - 2 tỷ</option>
                        <option value="2">2 - 3 tỷ</option>
                        <option value="3">3 - 5 tỷ</option>
                        <option value="4">5 - 7 tỷ</option>
                        <option value="5">7 - 10 tỷ</option>
                    </select>
                </div>
            </div>
            <div class="select-control area-control">
                <div class="select-control-label">
                    <div class="dropbox-label">Diện tích</div>
                    <select name="area" id="filter-area">
                        <option value="0" selected>Tất cả</option>
                        <option value="1">< 30 m2</option>
                        <option value="[30,50]">30 - 50 m2</option>
                        <option value="3">50 - 80 m2</option>
                        <option value="4">80 - 100 m2</option>
                        <option value="5">100 - 150 m2</option>
                        <option value="6">150 - 200 m2</option>
                    </select>
                </div>

            </div>

            <input type="submit" id="btnSearch" class="btn-blue-7" value="Tìm kiếm">
            <div id="link-reset" aria-label="Xóa tiêu chí lọc" data-microtip-position="bottom-left" role="tooltip"><img src="./assets/image/ic_reset.svg"></div>
        </div>
    </form>
    <script type="text/javascript">
                ///<reference path='../../../../../../../../DVG.BDS.WebApp.FrontEnd.StaticFiles/wwwroot/js/Common/FrontEnd.BoxSearch.js' />
                (function getData() {
                    if (window.FrontEnd && window.FrontEnd.BoxSearch) {
                        var boxSearchServices = new FrontEnd.BoxSearch({
                            boxSearchDataCacheKey: 'BoxSearchData',
                            boxSearchDataCacheTime: 120,
                            getDataForBoxSearchUrl: '/Systems/Home/GetDataForBoxSearch'
                        })
                        boxSearchServices.GetData().then(function(data) {
                            (function callJQuery() {
                                if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home
                                    .BoxSearchBinnova) {
                                    new window.FrontEnd.Home.BoxSearchBinnova({
                                        cities: data.cities,
                                        cateList: data.cateList,
                                        priceLevels: data.priceLevels
                                    });
                                } else {
                                    setTimeout(callJQuery, 100)
                                }
                            })();
                        })
                    } else {
                        setTimeout(getData, 100);
                    }
                })();
            </script>

    <div class="popupMarking  save" style="display: none">
        <img src="./assets/image/ic_unsave.svg">
        <span> Lưu tin thành công</span>
    </div>
    <div class="popupMarking  unsave" style="display: none">
        <img src="./assets/image/ic_save.svg">
        <span> Đã bỏ lưu tin</span>
    </div>



    <input type="hidden" value="1" id="activeTxtSelect">
    <div>
    </div>
    <div class="main-container clearfix">
        <div class="main-left">
            <!--Product List Binnova-->


            <!-- Header listing-->
            <div class="breadcrumb all-grey-7 link-hover-blue">
                <a href="{{ route('nha_dat_ban') }}" level="1" title="Nhà đất bán tại Việt Nam">Bán</a><span>/</span><a href=
                "@if(isset($_GET['province']))
                ?province={{$_GET['province']}}
                @else
                @endif" level="2" title="Nhà đất bán tại Việt Nam">
                    @if(isset($_GET['province']))
                {!! $_GET['province'] !!}
                @else
                    toan-quoc
                    @endif
                </a>
            </div>
            <script type="text/javascript">
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.Breadcrumbs) {
                        new FrontEnd.Product.Breadcrumbs({});
                    } else {
                        setTimeout(callJQuery, 100);
                    }
                })();
            </script>
            <div class="product-list-header pad-top-8">
                <h1>
                    @if(isset($_GET['province']))
                    Mua bán nhà đất {!! $_GET['province'] !!}
                    @else
                    Mua bán nhà đất toàn quốc
                    @endif
                </h1>
                <div class="product-lists-count all-grey-7 pad-top-8 pad-bot-8">Hiện có <span id="count-number">count</span> bất động sản.</div>


            </div>

            <div class="product-nav-bar pad-top-8 clearfix">
                <ul class="ul-tab fl mar-right-16">
                    <li class="list-display actived">Danh sách</li>
                    <!-- phần này xử lý bỏ tabIndex. xử lý ở đây để về sau nếu sửa page bản đồ thì sẽ bỏ phần ở đây cho đơn giản, kg cam thiệt vào code trong controller -->
                    <li><a title="Xem trên bản đồ" href="https://batdongsan.com.vn/ban-do-nha-dat-ban">Bản đồ</a></li>
                </ul>
                <div class="fr">
                    <div class="custom-drop-control sort-control">
                        <div class="custom-control-label">
                            Sắp xếp
                        </div>
                        <div class="custom-dropbox hiding" id="divSort">
                            <div id="divSortOptions">
                                <ul class="advance-options">
                                    <li vl="0" class="actived">Thông thường</li>
                                    <li vl="1">Tin mới nhất</li>
                                    <li vl="2">Giá thấp đến cao</li>
                                    <li vl="3">Giá cao đến thấp</li>
                                    <li vl="4">Diện tích bé đến lớn</li>
                                    <li vl="5">Diện tích lớn đến bé</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-lists mar-top-16" id="product-lists-web" style="display:block">

                @foreach ($result as $product)
                <div class="vip0 product-item clearfix" uid="649852">
                    <div class="product-image ">
                        <a class="product-avatar" href="{!! Route('nhadatban_single_post', $product->id) !!}" title="{!! $product->title !!}" onclick="">
                            
                            <img class="product-avatar-img" alt="{!! $product->title !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" src=" {!! $product->link !!}" is-lazy-image="true" lazy-id="0" >
                        </a>
                        <span class="product-feature">
                        </span>
                    </div>
                    <div class="product-main">
                        <h3 class="product-title">
                            @if ($product->post_type_id == 4)
                            <i class="fa fa-star" style="font-size:20px;color:orange;">
                            </i>
                            @endif
                            <a href="{!! Route('nhadatban_single_post', $product->id) !!}" title="{!! $product->title !!}" class="vipZero product-link">
                                {!! $product->title !!}
                                
                            </a>
                        </h3>
                        <div class="product-info">
                            <span class="price">{!! $product->price !!} {!! $product->unit !!}</span>
                            <span class="dot">·</span>
                            <span class="area">{!! $product->area !!} m²</span>
                            <span class="dot">·</span>
                            <span class="location">
                                chua lay dc quan, tp                                
                            </span>
                        </div>
                        <div class="product-content">
                            {!! $product->content !!}
                        </div>
                        <div class="product-wrap clearfix">
                            <div class="product-uptime">
                                <span class="product-labeltime">
                                    {{ \Carbon\Carbon::parse($product->created_at)->format('d/m/Y')}}
                                    <span class="tooltip-time">{{ \Carbon\Carbon::parse($product->created_at)->format('d/m/Y')}}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

                <div class="text-center">
                    <div class="paginate">
                        chua lay dc paginate
                    </div>

                </div>
            </div>






            <div class="divide">&nbsp;</div>
            <div class="product-seo-tag">
                <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>
                <ul class="ul-round clearfix">
                    <li><a title="Bán đất gần làng đại học Thủ Đức" href="https://batdongsan.com.vn/tags/ban/ban-dat-gan-lang-dai-hoc-thu-duc">Bán đất gần làng đại học Thủ Đức</a></li>
                    <li><a title="Bán nhà chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-nha-chinh-chu">Bán nhà chính chủ</a></li>
                    <li><a title="Bán nhà gần công viên Lê Thị Riêng" href="https://batdongsan.com.vn/tags/ban/ban-nha-gan-cong-vien-le-thi-rieng">Bán nhà gần công viên Lê Thị Riêng</a></li>
                    <li><a title="Bán chung cư chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-chung-cu-chinh-chu">Bán chung cư chính chủ</a></li>
                    <li><a title="Bán đất chính chủ" href="https://batdongsan.com.vn/tags/ban/ban-dat-chinh-chu">Bán đất chính chủ</a></li>
                    <li><a title="Bán nhà mặt phố gIÁ RẺ" href="https://batdongsan.com.vn/tags/ban/ban-nha-mat-pho-gia-re">Bán nhà mặt phố gIÁ RẺ</a></li>
                </ul>
            </div>
            <div class="divide">&nbsp;</div>
            <div class="product-seo-text">
                <div>Hàng nghìn tin đăng <strong>mua bán nhà đất tại Việt Nam</strong> được rao trên <strong>Batdongsan.com.vn</strong>
                    với đầy đủ các tiêu chí tìm kiếm của người mua và bán.
                    Các thông tin mua bán nhà đất khu vực
                    Việt Nam được tổng hợp từ các nguồn tin rao về nhà đất bao gồm tin đăng
                    chính chủ và tin đăng qua môi giới,
                    giúp đa dạng nguồn thông tin và sự lựa
                    chọn đối với bất động sản đang quan tâm.</div>
                <div>Bằng những tiện ích mà
                    Batdongsan.com.vn mang đến cho người dùng, bạn có thể dễ dàng thao tác
                    và tìm kiếm thông tin bất động sản bạn đang quan tâm chỉ trong vài click
                    chuột.
                    Batdongsan.com.vn sẽ là cầu nối giúp bạn
                    tương tác và trao đổi với nhà cung cấp bất động sản bằng việc cung cấp
                    thông tin chính xác, nhanh chóng...,
                    cùng với đó là đội ngũ nhân viên tư vấn
                    chuyên nghiệp. Chắc chắn bạn sẽ thực sự hài lòng về kênh thông tin và
                    dịch vụ của <strong>Batdongsan.com.vn</strong>!</div>
            </div>
            <form id="productListBinnova" method="post">
                <input id="hashAlias" type="hidden" value="48f0d40b1731d909212598242194556c2306f2dde9c6827fab303276aa8fec92">
            </form>
            <script type="text/javascript">
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Product && window.FrontEnd.Product.ProductListBinnova) {
                        var ctrl = new window.FrontEnd.Product.ProductListBinnova({
                            getTabProjectUrl: '/Product/ProductListing/GetTabProject?projectId=0',
                            model: {
                                typeOfProduct: 38,
                                categoryId: 0,
                                cityCode: 'CN',
                                districtId: 0,
                                projectId: 0,
                                wardId: 0,
                                streetId: 0
                            }
                        });
                    } else {
                        setTimeout(callJQuery, 100);
                    }
                })();
            </script>
        </div>
        <div class="main-right">

            <div class="box-common box-common-border box-price fixgradient">
                <h4 class="box-title">Lọc theo khoảng giá</h4>
                <div class="box-content">
                    <ul class="link-hover-blue">
                        <li><a href="?price=1" title="Nhà đất cho thuê toàn quốc giá 1 - 2 tỷ">1 - 2 tỷ</a></li>
                        <li><a href="?price=2" title="Nhà đất cho thuê toàn quốc giá 2 - 3 tỷ">2 - 3 tỷ</a></li>
                        <li><a href="?price=3" title="Nhà đất cho thuê toàn quốc giá 3 - 5 tỷ">3 - 5 tỷ</a></li>
                        <li><a href="?price=4" title="Nhà đất cho thuê toàn quốc giá 5 - 7 tỷ">5 - 7 tỷ</a></li>
                        <li><a href="?price=5" title="Nhà đất cho thuê toàn quốc giá 7 - 10 tỷ">7 - 10 tỷ</a></li>
                    </ul>
                </div>
            </div>



            <div class="box-common box-common-border box-price fixgradient">
                <h4 class="box-title">Lọc theo diện tích</h4>
                <div class="box-content">
                    <ul class="link-hover-blue">
                        <li><a href="?area=1" title="Nhà đất cho thuê toàn quốc diện tích <= 30 m2">&lt;= 30 m2</a></li>
                        <li><a href="?area=2" title="Nhà đất cho thuê toàn quốc diện tích 30 - 50 m2">30 - 50 m2</a></li>
                        <li><a href="?area=3" title="Nhà đất cho thuê toàn quốc diện tích 50 - 80 m2">50 - 80 m2</a></li>
                        <li><a href="?area=4" title="Nhà đất cho thuê toàn quốc diện tích 80 - 100 m2">80 - 100 m2</a></li>
                        <li><a href="?area=5" title="Nhà đất cho thuê toàn quốc diện tích 100 - 150 m2">100 - 150 m2</a></li>
                        <li><a href="?area=6" title="Nhà đất cho thuê toàn quốc diện tích 150 - 200 m2">150 - 200 m2</a></li>
                    </ul>
                </div>
            </div>



            <div class="divide-full"></div>
            <div class="box-common box-common-filled box-max-item-cate">
                <h2 class="box-title">Mua bán nhà đất</h2>

                <div class="box-content link-hover-blue">
                    <ul>
                        @foreach($result as $province)
                        <li>
                            <h3>
                                <a href="?province={!! $province->code!!}" title="{{$province->name}}">
                                    {!! $province->name !!} ({!! $province->count_posts !!})
                                </a>
                            </h3>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>



            <div class="box-common box-common-filled box-utility link-hover-blue">
                <h4 class="box-title">Hỗ trợ tiện ích</h4>
                <div class="box-content">
                    <ul>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-xem-huong-nha" title="Tư vấn phong thủy" rel="nofollow">
                                Tư vấn phong thủy
                            </a>
                        </li>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-du-toan-chi-tiet" title="Dự tính chi phí làm nhà" rel="nofollow">
                                Dự tính chi phí làm nhà
                            </a>
                        </li>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-tinh-lai-suat" title="Tính lãi suất" rel="nofollow">
                                Tính lãi suất
                            </a>
                        </li>
                        <li>
                            <a href="/quy-trinh-xay-nha" title="Quy trình xây nhà" rel="nofollow">Quy trình xây nhà</a>
                        </li>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tuổi làm nhà" rel="nofollow">Xem tuổi làm nhà</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="divide-full"></div>

    
    </div>
    </div>
    <div class="banner-bottom">
        <div style="float: left; width: 560px">
        </div>
        <div style="float: left; width: 430px; margin-left: 5px">
        </div>
    </div>
    <div class="banner-bottom">
        <div style="float: left; width: 560px">
        </div>
        <div style="float: left; width: 430px; margin-left: 5px">
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="boxLinkFooter newLayout">



    </div>

    <div id="SiteRight" class="banner-right clearfix">

    </div>
    @endsection
    @section('scripts')
    <script>

        $(document).ready(function() {
            $('.filter-nha-dat').click(function() {
                $(this).addClass('actived').siblings().removeClass('actived');
            });


            // clear filter
            $('#link-reset').click(function() {
                $('#boxSearchForm')[0].reset();
            });

            $(".province").on('change', function() {
                
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
        });
        
    </script>
    @endsection