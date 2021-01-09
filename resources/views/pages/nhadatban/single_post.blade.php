@extends('layouts.master')


@section('title')
{!! $products['title'] !!}
@endsection

@section('styles')
<link rel="stylesheet" href="/assets/css/bien_hoa1.css">
<link rel="stylesheet" href="/assets/css/bien_hoa2.css">
<link rel="stylesheet" href="/assets/css/filestatic.ver202011121105.msvbds.FrontEnd.Product.ProductDetails.min.css">
<link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon">
<style type="text/css">iframe#_hjRemoteVarsFrame {display: none !important; width: 1px !important; height: 1px !important; opacity: 0 !important; pointer-events: none !important;}</style>
<style media="print" class="jx_ui_StyleSheet" __jx__id="___$_2" type="text/css">.zopim { display: none !important }</style>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                    <div class="dropbox-label">Tỉnh, thành phố</div>
                    <select name="province" id="filter-province" class="province">
                        
                        <option value="0" class="province">Toàn quốc</option>
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
                        <option value="0" class="district" >Tất cả</option>
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
                        <option value="0"@if(!isset($_GET['price']) || $_GET['price'] == 0) selected @endif>Tất cả</option>
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
                        <option value="710" @if(!isset($_GET['price']) || $_GET['price'] == 0)
                    @elseif($_GET['price'] == 710)
                        selected
                    @endif >7 - 10 tỷ</option>
                    
                    </select>
                </div>
            </div>
            <div class="select-control area-control">
                <div class="select-control-label">
                    <div class="dropbox-label">Diện tích</div>
                    <select name="area" id="filter-area">
                        <option value="0" @if(!isset($_GET['area']) || $_GET['area'] == 0)
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
                        <option value="80100" @if(!isset($_GET['area']) || $_GET['area'] == 0)
                    @elseif($_GET['area'] == 80100)
                        selected
                    @endif  >80 - 100 m2</option>
                        <option value="100150" @if(!isset($_GET['area']) || $_GET['area'] == 0)
                    @elseif($_GET['area'] == 100150)
                        selected
                    @endif  >100 - 150 m2</option>
                        <option value="150200" @if(!isset($_GET['area']) || $_GET['area'] == 0)
                    @elseif($_GET['area'] == 150200)
                        selected
                    @endif  >150 - 200 m2</option>
                    </select>
                </div>

            </div>

            <input type="submit" id="btnSearch" class="btn-blue-7" value="Tìm kiếm">
            <div id="link-reset" aria-label="Xóa tiêu chí lọc" data-microtip-position="bottom-left" role="tooltip"><img src="./assets/image/ic_reset.svg"></div>
        </div>
    </form>

        <div class="popupMarking  save" style="display: none">
            <img src="/assets/image/ic_unsave.svg">
            <span> Lưu tin thành công</span>
        </div>
        <div class="popupMarking  unsave" style="display: none">
            <img src="/assets/image/ic_save.svg">
            <span> Đã bỏ lưu tin</span>
        </div>




<!-- Product-detail-->
<div class="main-container clearfix">
    <div class="main-left">
        <section class="product-detail">
            <!--start slide-product-->
            <!--end slide-product-->
            <!--start description-->
            
    <div class="slide-product" tabindex="0">

            <!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        @foreach ($images as $key=>$image)
      <div class="carousel-item {{$key == 0 ? 'active' : '' }}">
        <div class="view">
          <img class="d-block w-100" src="{!! $image->link !!}">
          <div class="mask rgba-black-light"></div>
        </div>
      </div>
      @endforeach
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
  </div>
  <!--/.Carousel Wrapper-->
    </div>

<div class="description" id="product-detail-web">
    <h1 class="tile-product"> {!! $products['title'] !!}</h1>
    <div class="short-detail">
        {!! $products->ward['path_with_type'] !!}
    </div>
    <div class="divide">&nbsp;</div>
    <div class="short-detail-wrap">
        <ul class="short-detail-2 clearfix pad-16">
            <li><span class="sp1">Mức giá:</span><span class="sp2">{!! $products['price'] !!} tỷ</span></li>
                <li><span class="sp1">Diện tích:</span><span class="sp2">{!! $products['area'] !!} m²</span></li>
                    </ul>
        <div class="repost">
            <span class="product-share">Chia sẻ <span class="ic_share">&nbsp;</span></span>
            <div class="box-share hidden">
                <ul>
                    <li>
                        <a id="facebook" target="_blank" rel="nofollow" href="https://www.facebook.com/sharer/sharer.php?u=https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072&amp;t=Kh%C3%A1ch%20k%E1%BA%B9t%20ti%E1%BB%81n%20c%E1%BA%A7n%20b%C3%A1n%20nhanh%20l%C3%B4%20%C4%91%E1%BA%A5t%20Bi%C3%AAn%20H%C3%B2a%20New%20City,%20DT%205%20x%2020m,%206%20x%2020m,%2012%20x%2020m,%20%C4%91%C3%A3%20nh%E1%BA%ADn%20s%E1%BB%95"><img src="/assets/image/ic_facebook.png">Facebook</a>
                    </li>
                    <li>
                        <div class="zalo-share-button" data-href="" data-oaid="579745863508352884" data-layout="2" data-color="blue" data-customize="true"><img src="/assets/image/ic_zalo.png">Zalo<iframe frameborder="0" allowfullscreen="" scrolling="no" width="0px" height="0px" src="/assets/image/share.html" style="position: absolute;"></iframe></div>
                    </li>
                    <li>
                        <a id="copyLink"><img src="/assets/image/ic_link.png">Sao chép liên kết</a>
                    </li>
                </ul>
            </div>
            <span class="product-save iconSave" data-productid="27748072" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Kh&amp;#225;ch kẹt tiền cần b&amp;#225;n nhanh l&amp;#244; đất Bi&amp;#234;n H&amp;#242;a New City, DT 5 x 20m, 6 x 20m, 12 x 20m, đ&amp;#227; nhận sổ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/11/20201111095750-3277_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/11/20201111095750-3277_wm.jpg" data-vipclass="vip0" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="{!! $products['title'] !!}" data-price="1.45 tỷ" data-area="100 m²" data-pricesort="1450000000" data-areasort="100" data-room="" data-toilets="" data-address="Biên Hòa, Đồng Nai" data-description="Khách kẹt tiền muốn đẩy nhanh một số Lô Biên Hòa New City ở sân golf Long Thành. DT: 5 x 20m. 6 x 18m. 9 x 20 m. 12 x 20 m. Giá: 1.450 tỷ bao sang tên và ra sổ hồng. Tất cả đã có sổ hồng từng nền, mặ" data-duration="2 ngày trước" data-updatedtime="11/11/2020" data-datesort="11/11/2020 09:58:51" data-contactname="Thái Bá Lợi" data-contactmobile="0946722227" data-totalmedia="3" data-url="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" data-createbyuser="649852">Lưu tin <span class="ic_save">&nbsp;</span></span>
        </div>
    </div>

    <div class="divide">&nbsp;</div>
    <div class="detail-product">
        <div class="detail-1 pad-bot-16">
            <span class="title-detail">Thông tin mô tả</span>
            <div class="des-product" style="overflow: visible;">
                {!! $products['content'] !!}
            </div>
            <div class="box-view-more hidden">
                <div class="gradient">&nbsp;</div>
                <div class="view-more">Xem thêm<img src="/assets/image/ic_caret_down.svg"></div>
            </div>
        </div>
        <div class="detail-2 pad-16">
            <span class="title-detail">Đặc điểm bất động sản</span>
            <div class="box-round-grey3">
                <div class="row-1"><span class="r1">Loại tin đăng:</span><span class="r2">{!! $products->menu_category['name'] !!}</span></div>
                <div class="row-1"><span class="r1">Địa chỉ:</span><span class="r2">{!! $products['address'] !!}, {!! $products->ward['path_with_type'] !!}</span></div>
                                    <div class="row-1"><span class="r1">Số phòng ngủ:</span><span class="r2">{!! $products['number_of_bedroom'] !!}</span></div>
                                   <div class="row-1"><span class="r1">Số nhà vệ sinh:</span><span class="r2">{!! $products['number_of_restroom'] !!}</span></div>
                                   <div class="row-1"><span class="r1">Tầng số:</span><span class="r2">{!! $products['number_of_floor'] !!}</span></div>
                                </div>
        </div>
            <div class="tablet-box-contact clearfix">
        <h4 class="tablet-box-contact-title">Liên hệ</h4>
            <div class="avatar">
                        <span>L</span>
            </div>
        <div class="tablet-name">
            <div class="tablet-cell">
                    <div class="name" title="Thái Bá Lợi">
                        Thái Bá Lợi
                    </div>
                                    <div class="info">
                        <a href="https://batdongsan.com.vn/tin-rao-cung-nguoi-dang-nha-dat-ban-us649852">Xem thêm 1 tin khác</a>
                </div>
            </div>
        </div>
        <div class="btn-border-grey text-center"><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#divSendContact" id="btnSendContact">Yêu cầu liên hệ lại</a></div>               
    </div>       

        <!--start product seo tag-->
            <div class="product-seo-tag">
                <h4 class="seo-tag-title">Tìm kiếm theo từ khóa</h4>
                <ul class="ul-round clearfix">
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gan-cong-vien-xanh-tuoi-mat-thanh-pho-bien-hoa" title="Bán đất nền gần công viên xanh tươi mát Thành phố Biên Hòa">Bán đất nền gần công viên xanh tươi mát Thành phố Biên Hòa</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gan-cau-dong-nai-thanh-pho-bien-hoa" title="Bán đất nền gần Cầu Đồng Nai Thành phố Biên Hòa">Bán đất nền gần Cầu Đồng Nai Thành phố Biên Hòa</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-bien-hoa-new-city" title="Bán đất nền Biên Hòa New City">Bán đất nền Biên Hòa New City</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-thanh-pho-bien-hoa" title="Bán đất nền Thành phố Biên Hòa">Bán đất nền Thành phố Biên Hòa</a></li>
                        <li><a href="https://batdongsan.com.vn/tags/ban/ban-dat-nen-gan-cau-vam-thanh-pho-bien-hoa" title="Bán đất nền gần Cầu Vàm Thành phố Biên Hòa">Bán đất nền gần Cầu Vàm Thành phố Biên Hòa</a></li>
                </ul>
            </div>
        <!--end product seo tag-->
        <div class="divide">&nbsp;</div>
        <div class="product-config pad-16">
            <ul class="short-detail-2 list2 clearfix">
                <li><span class="sp1">Ngày đăng:</span><span class="sp3">{{ \Carbon\Carbon::parse($products['created_at'])->format('d/m/Y')}}</span></li>
                <li><span class="sp1">Ngày hết hạn:</span><span class="sp3">21/11/2020</span></li>
                <li><span class="sp1">Loại tin:</span><span class="sp3">{!! $products->post_type['name'] !!}</span></li>
                <li><span class="sp1">Mã tin:</span><span class="sp3">{!! $products['id'] !!}</span></li>
            </ul>
            <div class="repost"><a id="report">Báo cáo<span class="ic_report">&nbsp;</span></a></div>
            <div class="pl-popup fb-popup" id="popup_feedback" style="display: none;">
    <div class="pl-popup-title fb-popup">
        <span class="fb-popup">Tin rao có các thông tin không đúng:</span>
        <div id="pl-popup-close" class="fb-popup">X</div>
    </div>
    <div class="pl-popup-tab fb-popup">
        <div class="button current fb-popup" rel="info">Tin rao</div>
        <div class="button fb-popup" rel="map">Bản đồ</div>
        <div class="pl-popup-tab-content tab-info fb-popup">
            <label for="info-1" class="fb-popup">
                <input type="checkbox" id="info-1" class="fb-popup" value="Địa chỉ của bất động sản">Địa chỉ của bất động sản
            </label>
            <label for="info-2" class="fb-popup">
                <input type="checkbox" id="info-2" class="fb-popup" value=" Các thông tin về đặc điểm: giá, diện tích, mô tả ....">Các thông tin về đặc điểm: giá, diện tích, mô tả ....
            </label>
            <label for="info-3" class="fb-popup">
                <input type="checkbox" id="info-3" class="fb-popup" value="Ảnh">Ảnh
            </label>
            <label for="info-4" class="fb-popup">
                <input type="checkbox" id="info-4" class="fb-popup" value="Trùng với tin rao khác">Trùng với tin rao khác
            </label>
            <label for="info-5" class="fb-popup">
                <input type="checkbox" id="info-5" class="fb-popup" value="Không liên lạc được">Không liên lạc được
            </label>
            <label for="info-6" class="fb-popup">
                <input type="checkbox" id="info-7" class="fb-popup" value="Tin không có thật">Tin không có thật
            </label>
            <label for="info-7" class="fb-popup">
                <input type="checkbox" id="info-8" class="fb-popup" value="Bất động sản đã bán">Bất động sản đã bán
            </label>
            <label class="fb-popup">Phản hồi khác:</label>
            <textarea cols="20" rows="5" id="info-9" class="fb-popup"></textarea>
        </div>
        <div class="pl-popup-tab-content tab-map fb-popup">
            <label for="map-1" class="fb-popup">
                <input type="checkbox" id="map-1" class="fb-popup" value="Tốc độ load chậm">Tốc độ load chậm
            </label>
            <label for="map-2" class="fb-popup">
                <input type="checkbox" id="map-2" class="fb-popup" value="Vị trí bất động sản chưa chính xác">Vị trí bất động sản chưa chính xác
            </label>
            <label for="map-3" class="fb-popup">
                <input type="checkbox" id="map-3" class="fb-popup" value="Vị trí tiện ích chưa chính xác">Vị trí tiện ích chưa chính xác
            </label>
            <label for="map-4" class="fb-popup">
                <input type="checkbox" id="map-4" class="fb-popup" value="Bản đồ lỗi">Bản đồ lỗi
            </label>
            <label class="fb-popup">Phản hồi khác:</label>
            <textarea cols="20" rows="5" id="map-5" class="fb-popup"></textarea>
        </div>
        <div class="pl-popup-captcha fb-popup">
            <div class="fb-input"><span>Họ và tên </span><input type="text" value="" id="userFullName" class="fb-popup"></div>
            <div class="fb-input"><span>Email <i>*</i></span><input type="text" id="userEmail" value="" class="fb-popup"></div>
            <div class="fb-input"><span>SDT <i>*</i></span><input type="text" id="userMobile" value="" class="fb-popup"></div>
        </div>
        <div class="pl-popup-message"></div>
        <div class="btn-green fb-popup">
            <span class="fb-popup">
                <span class="fb-popup">
                    <div><div class="grecaptcha-badge" data-style="bottomright" style="width: 256px; height: 60px; display: block; transition: right 0.3s ease 0s; position: fixed; bottom: 14px; right: -186px; box-shadow: gray 0px 0px 5px; border-radius: 2px; overflow: hidden;"><div class="grecaptcha-logo"><iframe src="/assets/image/anchor.html" width="256" height="60" role="presentation" name="a-dden5yvkd606" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div><button class="btn-sendfeedback fb-popup g-recaptcha" rel="nofollow" href="javascript:void(0)" data-sitekey="6Lf-hbgZAAAAAGWhpwOnaSnHeERaH7lqJ065rGM4" data-callback="onSubmit_FrontEnd_Product_Details_DetailsBinnova_SendFeedback" data-action="submit">
                        Gửi
                    </button>
                </span>
            </span>
        </div>
    </div>
</div>
            <div id="divSendContact">
    <div class="sendContactContent">
        <div class="title">Thông tin liên hệ</div>
        <div class="note1">Yêu cầu người đăng tin liên hệ theo thông tin dưới đây.</div>
        <div class="contact-result"></div>
        <div class="row">
            <div class="colleft">Họ và tên</div>
            <div class="colright"><input type="text" id="txtSenderName"></div>
        </div>
        <div class="row">
            <div class="colleft">Số điện thoại <span class="redfont">(*)</span></div>
            <div class="colright"><input type="text" id="txtSenderMobile"></div>
        </div>
        <div class="row">
            <div class="colleft">Email</div>
            <div class="colright"><input type="text" id="txtSenderEmail"></div>
        </div>
        <div class="row">
            <div class="colleft">Lời nhắn</div>
            <div class="colright">
                <textarea id="txtSenderContent" maxlength="160">Tôi có quan tâm đến bất động sản này.</textarea>
            </div>
        </div>

        <div class="row text-center">
            <div><div class="grecaptcha-badge" data-style="none" style="width: 256px; height: 60px; position: fixed; visibility: hidden;"><div class="grecaptcha-logo"><iframe src="/assets/image/anchor(1).html" width="256" height="60" role="presentation" name="a-3u4gfsgp33hz" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><div class="grecaptcha-error"></div><textarea id="g-recaptcha-response-1" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="/assets/image/saved_resource(7).html"></iframe></div><button class="g-recaptcha" data-sitekey="6Lf-hbgZAAAAAGWhpwOnaSnHeERaH7lqJ065rGM4" data-callback="onSubmit_FrontEnd_Product_Details_ContactBox_SendRequest" data-action="submit" onmouseover="this.style.cursor=&#39;pointer&#39;" id="btnSendRequest">Gửi yêu cầu</button>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
<input type="hidden" value="0" id="vipOrder">
    <div class="divide divide-full">&nbsp;</div>
    <div class="list-product list-product-area pad-16">
        <div class="title-list">Bất động sản cùng khu vực</div>
        <div class="list-product-slide">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-free-mode">
                <ul class="ul-list-product swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">

                    @foreach ($products_area as $product)
                        <li class="vip5 swiper-slide swiper-slide-visible swiper-slide-active" uid="783243">
                            <div class="img-product">
                                <a href="{!! Route('nhadatban_single_post', $product['id']) !!}">
                                    @foreach($product->image as $images)
                                    <img alt="{!! $product['title'] !!}" error-image-src="https://staticfile.batdongsan.com.vn/images/no-image.png" imgerr="3" src="{!! $images['link'] !!}" src-lazy="{!! $images['link'] !!}" is-lazy-image="true" lazy-id="12">
                                    @break
                                    @endforeach
                                </a>
                                <span class="product-feature"></span>
                            </div>
                            <div class="info-product">
                                <h3 class="p-title">
                                    <a href="{!! Route('nhadatban_single_post', $product['id']) !!}" title="{!! $product['title'] !!}" style="overflow: visible;">{!! $product['title'] !!} <span class="hidden-mobile m-on-title" raw="0931113767"></span></a>
                                </h3>
                                <div class="pro-price">{!! $product['price'] !!} {!! $product['unit'] !!} </div>
                                    <span class="ic_dot">·</span>
                                    <div class="pro-m2">{!! $product['area'] !!} m²</div>
                                <div class="pro-adress"> {!! $product->district['path_with_type'] !!}</div>
                                <div class="date">
                                    {{ \Carbon\Carbon::parse($product['created_at'])->format('d/m/Y')}}
                                    <span class="tooltip-time">{{ \Carbon\Carbon::parse($product['created_at'])->format('d/m/Y')}}</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="top" role="tooltip">
                                    <i class="iconSave" data-productid="27605272" data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ t&amp;#244;i cần b&amp;#225;n gấp l&amp;#244; Bi&amp;#234;n Ho&amp;#224; New City, 100m2, gi&amp;#225; 1,4 tỷ, cho vay 70% gi&amp;#225; trị, 0931113767&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://staticfile.batdongsan.com.vn/images/icons/lazy-preview-image-DFE3E8.png&quot; src-lazy=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/30/20201030115255-63bf_wm.jpg&quot; is-lazy-image=&quot;true&quot;/&gt;" data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/10/30/20201030115255-63bf_wm.jpg" data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false" data-hasvideo="false" data-title="Bán đất nền dự án dự án Biên Hòa New City" data-price="1.4 tỷ" data-area="100 m²" data-pricesort="1400000000" data-areasort="100" data-room="Undefined" data-toilets="0" data-address="Biên Hòa, Đồng Nai" data-description="Tôi chính chủ cần tiền làm ăn cần bán 2 nền 100m2 dự án Biên Hòa New City, liền kề sân golf đã có sổ đỏ riêng từng nền.Giá bán chỉ 1,4 tỷ/nền.Hạ tầng hoàn thiện 100%.Ngân hàng hỗ trợ vay - thủ tục nh" data-duration="Hôm nay" data-updatedtime="13/11/2020" data-datesort="11/13/2020 13:54:33" data-contactname="Trần Thụy Như Hoàng" data-contactmobile="0931113767" data-url="/ban-dat-nen-du-an-duong-quoc-lo-51-phuong-phuoc-tan-prj-bien-hoa-new-city/chinh-chu-toi-can-ban-gap-100m2-gia-1-4-ty-cho-vay-70-gia-tri-0931113767-pr27605272" data-totalmedia="8" data-createbyuser="783243"></i>
                                </span>
                            </div>
                        </li>             
                        @endforeach

                </ul>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="swiper-button-next slide-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false"><img src="/assets/image/slide-next.png"></div>
            <div class="swiper-button-prev slide-prev swiper-button-disabled" tabindex="0" role="button" aria-label="Previous slide" aria-disabled="true"><img src="/assets/image/slide-prev.png"></div>
        </div>
    </div>


            <!--end description-->
            <!--start product-area-->
            <!--end product area-->
            <!--start product history-->
            <!--end product history-->
            <div class="divide divide-full">&nbsp;</div>
            <div class="note pad-16">
            Quý vị đang xem nội dung tin rao "{!! $products['title'] !!}" - <strong style="font-weight: bold">Mã tin {{ $products['id'] }}</strong>.
                Mọi thông tin, nội dung liên quan tới tin rao này là do người đăng tin đăng tải và chịu trách nhiệm.
                Batdongsan.com.vn luôn cố gắng để các thông tin được hữu ích nhất cho quý vị tuy nhiên Batdongsan.com.vn không đảm bảo và không chịu trách nhiệm về bất kỳ thông tin, nội dung nào liên quan tới tin rao này.
                Trường hợp phát hiện nội dung tin đăng không chính xác, Quý vị hãy thông báo và cung cấp thông tin cho Ban quản trị Batdongsan.com.vn theo <strong style="font-weight: bold">Hotline 19001881</strong> để được hỗ trợ nhanh và kịp thời nhất.
            </div>
        </section>


    </div>
    <div class="main-right">   
        <div class="box-contact">
            <div class="user">
                    <div class="avatar">
                            <img src="{!! $products->user['avatar'] !!}">
                    </div>
                                    <div class="name" title="{!! $products->user['name'] !!}">
                                        {!! $products->user['name'] !!}
                    </div>
                                <div class="phone text-center"><span>{!! $products->user['phonenumber'] !!}</span></div>
                    <div class="mail btn-border-grey text-center">
                        <a id="email" class="email-copy">{!! $products->user['email'] !!}</a>
                    </div>
                <div class="btn-border-grey text-center div-send-contact"><a href="#divSendContact" id="btnSendContact">Yêu cầu liên hệ lại</a></div>
            </div>
        </div> 
        
    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-max-item-cate">
        <h2 class="box-title">Bán đất nền dự án theo dự án tại Thành phố Biên Hòa</h2>

        <div class="box-content link-hover-blue">
            <ul>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-golden-town" title="Bán đất nền dự án Biên Hòa Golden Town">
                                Biên Hòa Golden Town (12)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-new-city" title="Bán đất nền dự án Biên Hòa New City">
                                Biên Hòa New City (184)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-new-town" title="Bán đất nền dự án Biên Hòa New Town">
                                Biên Hòa New Town (16)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-dreamland-city" title="Bán đất nền dự án Dreamland City">
                                Dreamland City (45)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-golden-center-city-3" title="Bán đất nền dự án Golden Center City 3">
                                Golden Center City 3 (20)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-khu-dan-cu-duong-5-noi-dai" title="Bán đất nền dự án Khu dân cư đường 5 nối dài">
                                Khu dân cư đường 5 nối dài (27)
                            </a>
                        </h3>
                    </li>
                    <li>
                        <h3>
                            <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-paradise-riverside" title="Bán đất nền dự án Paradise Riverside">
                                Paradise Riverside (30)
                            </a>
                        </h3>
                    </li>
            </ul>
        </div>
    </div>

        
    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-max-item-keyword">
        <h4 class="box-title">Bất động sản nổi bật</h4>

        <div class="box-content link-hover-blue">
            <ul>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-ba-dinh" title="Nhà đất Ba Đình">
                                    Nhà đất Ba Đình
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-bien-hoa-dna" title="Nhà đất Biên Hòa">
                                    Nhà đất Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-kho-nha-xuong-bien-hoa-dna" title="Bán nhà xưởng Biên Hòa">
                                    Bán nhà xưởng Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-kho-nha-xuong-dat-bien-hoa-dna" title="Cho thuê kho xưởng Biên Hòa">
                                    Cho thuê kho xưởng Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-bien-hoa-dna" title="Cho thuê phòng trọ Biên Hòa">
                                    Cho thuê phòng trọ Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-hai-duong" title="Mua bán nhà đất Hải Dương">
                                    Mua bán nhà đất Hải Dương
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-bien-hoa-dna" title="Bán đất nền Biên Hòa">
                                    Bán đất nền Biên Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-duong-pham-van-thuan-245" title="Cho thuê cửa hàng Phạm Văn Thuận">
                                    Cho thuê cửa hàng Phạm Văn Thuận
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-quan-1" title="Bán nhà Quận 1">
                                    Bán nhà Quận 1
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-xa-an-hoa-10" title="Bán nhà An Hòa">
                                    Bán nhà An Hòa
                                </a>
                            </h3>
                        </li>
                        <li>
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-phuong-24" title="Bán nhà Phường 24 Bình Thạnh">
                                    Bán nhà Phường 24 Bình Thạnh
                                </a>
                            </h3>
                        </li>
                                            </ul>
        </div>
    </div>

        <div class="box-common box-common-filled box-utility link-hover-blue">
    <h4 class="box-title">Hỗ trợ tiện ích</h4>
    <div class="box-content">
        <ul>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-huong-nha" title="Tư vấn phong thủy" rel="nofollow">
                    Tư vấn phong thủy
                </a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-du-toan-chi-tiet" title="Dự tính chi phí làm nhà" rel="nofollow">
                    Dự tính chi phí làm nhà
                </a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-tinh-lai-suat" title="Tính lãi suất" rel="nofollow">
                    Tính lãi suất
                </a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/quy-trinh-xay-nha" title="Quy trình xây nhà" rel="nofollow">Quy trình xây nhà</a>
            </li>
            <li>
                <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tuổi làm nhà" rel="nofollow">Xem tuổi làm nhà</a>
            </li>
        </ul>
    </div>
</div>
                <div class="product-detail-scroll" style="opacity: 0; top: 0px; display: none;">
            <div class="scroll-wrap clearfix">
                <div class="scroll-info" style="width: auto;">
                    <label>1.45 tỷ</label>
                        <span class="dot">·</span><label>100 m²</label>
                                        <div class="scroll-address ellipsis">Dự án Biên Hòa New City, Phố Nam Cao, Phường Phước Tân, Biên Hòa, Đồng Nai</div>
                </div>
                <div class="scroll-contact clearfix" style="">
                        <div class="avatar">
                                    <span>L</span>
                        </div>
                                            <div class="name" title="Thái Bá Lợi">
                            Lợi
                        </div>
                    <div class="btn-border-grey"><a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#divSendContact" id="btnSendContact">Yêu cầu liên hệ lại</a></div>
                    <div class="phone phoneEvent" raw="0946722227" moblie="0946 722 *** · Hiện số09467222270946722227">0946 722 ***&nbsp;·&nbsp;Hiện số</div>
                </div>
            </div>
        </div>
        <div class="product-detail-fix">
            <div class="fix-wrap">
                    <a href="mailto:bdscamranh@gmail.com?subject=Kha%CC%81ch%20ha%CC%80ng%20Batdongsan.com%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng&amp;body=T%C3%B4i%20co%CC%81%20quan%20t%C3%A2m%20t%C6%A1%CC%81i%20tin%20%C4%91%C4%83ng%20na%CC%80y%20https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" class="link_mail" target="_blank" rel="nofollow">
                        Gửi email
                    </a>
                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072#" data-href="sms://0946722227/?body=Toi co quan tam den tin dang nay https://batdongsan.com.vn/ban-dat-nen-du-an-pho-nam-cao-phuong-phuoc-tan-prj-bien-hoa-new-city/khach-ket-tien-can-ban-nhanh-lo-dt-5-x-20-6-x-20-12-x-20-da-nhan-so-pr27748072" rel="nofollow" class="link_sms">Nhắn tin</a>
            </div>
            <div class="phone text-center"><span class="phoneEvent" raw="0946722227" moblie="0946 722 *** · Hiện số0946 722 *** · Hiện số0946722227">0946 722 ***&nbsp;·&nbsp;Hiện số</span></div>
        </div>

        

    <div class="divide-full"></div>
    <div class="box-common box-common-filled box-broker">
        <h4 class="box-title">Nhà môi giới trong khu vực</h4>
        <div class="box-content">
            <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                <div class="swiper-wrapper" style="transition-duration: 0ms; transform: translate3d(-928px, 0px, 0px);"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="3" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">
                                                                            <img src="/assets/image/20190531173625-b770.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">C TY TNHH XÂY DỰNG THƯƠNG MẠI MÔI GIỚI BẤT ĐỘNG SẢN ĐẤT VIỆT</a></div>
                                <div class="broker-phone">0914920202</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">
                                                                            <img src="/assets/image/20180104105026-5581.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">Công ty Cổ phần DV-TM &amp; XD Địa Ốc Kim Oanh</a></div>
                                <div class="broker-phone">0933733655</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">
                                                                            <img src="/assets/image/20170825163101-f2fb.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">Công Ty Cổ Phần Đầu Tư Việt Hưng Phát</a></div>
                                <div class="broker-phone"></div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">
                                                                            <img src="/assets/image/thumb200x200.2306.cong-ty-tnhh-dich-vu-bat-dong-san-dong-a.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">Công ty TNHH Dịch vụ Bất động sản Đông Á</a></div>
                                <div class="broker-phone">0919951010</div>
                            </div>
                        </div></div>
                        <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">
                                                                            <img src="/assets/image/20180817111042-29df.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">Công ty CP Kinh doanh Địa ốc Đất Mới</a></div>
                                <div class="broker-phone">0934579676</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">
                                                                            <img src="/assets/image/20180618174008-4ee6.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">VPĐD Công ty CPPT Địa Ốc Vạn Xuân</a></div>
                                <div class="broker-phone">0937437613</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">
                                                                            <img src="/assets/image/20180510151049-8b4b.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">Sàn giao dịch Dohuhappyland</a></div>
                                <div class="broker-phone">0906031033</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">
                                                                            <img src="/assets/image/20180510142917-d740.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">Sàn giao dịch Dohuinternational</a></div>
                                <div class="broker-phone">0938150151</div>
                            </div>
                        </div></div>
                        
                        
                        
                        <div class="swiper-slide" data-swiper-slide-index="1" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohudona-eb2510" rel="nofollow">
                                                                            <img src="/assets/image/20180510141326-909b.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohudona-eb2510" rel="nofollow">Sàn giao dịch Dohudona</a></div>
                                <div class="broker-phone">0939233433</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhousing-eb2509" rel="nofollow">
                                                                            <img src="/assets/image/20180510141042-e71d.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhousing-eb2509" rel="nofollow">Sàn giao dịch Dohuhousing</a></div>
                                <div class="broker-phone">0932086088</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhcm-eb2508" rel="nofollow">
                                                                            <img src="/assets/image/20180510140751-1857.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhcm-eb2508" rel="nofollow">Sàn giao dịch Dohuhcm</a></div>
                                <div class="broker-phone">0938967796</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohumiennam-eb2507" rel="nofollow">
                                                                            <img src="/assets/image/20180510140422-59d2.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohumiennam-eb2507" rel="nofollow">Sàn giao dịch Dohumiennam</a></div>
                                <div class="broker-phone">0915565639</div>
                            </div>
                        </div></div>
                        
                        
                        
                        <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="2" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohumiendong-eb2506" rel="nofollow">
                                                                            <img src="/assets/image/20180510120438-a0e5.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohumiendong-eb2506" rel="nofollow">Sàn giao dịch Dohumiendong</a></div>
                                <div class="broker-phone">0901890891</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohureal-eb2505" rel="nofollow">
                                                                            <img src="/assets/image/20180510113359-da64.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohureal-eb2505" rel="nofollow">Sàn giao dịch Dohureal</a></div>
                                <div class="broker-phone">0934077477</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuland-eb1100" rel="nofollow">
                                                                            <img src="/assets/image/20180510143557-2bfd.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuland-eb1100" rel="nofollow">Sàn giao dịch Dohuland</a></div>
                                <div class="broker-phone">0937777247</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2762" rel="nofollow">
                                                                            <img src="/assets/image/20191207111310-b5e7.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2762" rel="nofollow">CÔNG TY TNHH XÂY DỰNG THƯƠNG MẠI MÔI GIỚI BẤT ĐỘNG SẢN ĐẤT VIỆT</a></div>
                                <div class="broker-phone">0914920202</div>
                            </div>
                        </div></div>
                        
                        
                        
                        <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="3" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">
                                                                            <img src="/assets/image/20190531173625-b770.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/c-ty-tnhh-xay-dung-thuong-mai-moi-gioi-bat-dong-san-dat-viet-eb2712" rel="nofollow">C TY TNHH XÂY DỰNG THƯƠNG MẠI MÔI GIỚI BẤT ĐỘNG SẢN ĐẤT VIỆT</a></div>
                                <div class="broker-phone">0914920202</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">
                                                                            <img src="/assets/image/20180104105026-5581.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dv-tm-xd-dia-oc-kim-oanh-eb2466" rel="nofollow">Công ty Cổ phần DV-TM &amp; XD Địa Ốc Kim Oanh</a></div>
                                <div class="broker-phone">0933733655</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">
                                                                            <img src="/assets/image/20170825163101-f2fb.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-co-phan-dau-tu-viet-hung-phat-eb2420" rel="nofollow">Công Ty Cổ Phần Đầu Tư Việt Hưng Phát</a></div>
                                <div class="broker-phone"></div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">
                                                                            <img src="/assets/image/thumb200x200.2306.cong-ty-tnhh-dich-vu-bat-dong-san-dong-a.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-tnhh-dich-vu-bat-dong-san-dong-a-eb946" rel="nofollow">Công ty TNHH Dịch vụ Bất động sản Đông Á</a></div>
                                <div class="broker-phone">0919951010</div>
                            </div>
                        </div></div>
                        
                        
                        
                <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 232px;"><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">
                                                                            <img src="/assets/image/20180817111042-29df.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/cong-ty-cp-kinh-doanh-dia-oc-dat-moi-eb2588" rel="nofollow">Công ty CP Kinh doanh Địa ốc Đất Mới</a></div>
                                <div class="broker-phone">0934579676</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">
                                                                            <img src="/assets/image/20180618174008-4ee6.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/vpdd-cong-ty-cppt-dia-oc-van-xuan-eb2538" rel="nofollow">VPĐD Công ty CPPT Địa Ốc Vạn Xuân</a></div>
                                <div class="broker-phone">0937437613</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">
                                                                            <img src="/assets/image/20180510151049-8b4b.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuhappyland-eb2512" rel="nofollow">Sàn giao dịch Dohuhappyland</a></div>
                                <div class="broker-phone">0906031033</div>
                            </div>
                        </div><div class="broker-wrap">
                            <div class="broker-avatar">
                                <a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">
                                                                            <img src="/assets/image/20180510142917-d740.jpg">
                                </a>
                            </div>
                            <div class="broker-info">
                                <div class="broker-name"><a href="https://batdongsan.com.vn/san-giao-dich-dohuinternational-eb2511" rel="nofollow">Sàn giao dịch Dohuinternational</a></div>
                                <div class="broker-phone">0938150151</div>
                            </div>
                        </div></div></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
            <div class="broker-pagination">
                <!-- Add Pagination -->
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                <!-- Add Arrows -->
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- end product-detail-->

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
