@extends('layouts.master')

@section('styles')
    <link rel="stylesheet"
        href="https://staticfile.batdongsan.com.vn/css/filestatic.ver202011191123.msvbds.FrontEnd.min.css" />
@endsection

@section('content')
    <div class="site-center">


        <input type="hidden" value="3" id="activeTxtSelect" />
        <link rel="stylesheet" type="text/css" href="https://staticfile.batdongsan.com.vn/css/box.css" />
        <div id="MiddleSubMenu">
            <div class="home-top-search" style="padding-bottom: 10px !important;">
                <div class="home-top-search-keyword">
                    <input type="text" placeholder="Nhập từ khóa để tìm theo cụm từ" id="txt1" class="txtKeyword">
                </div>
                <div class="advance-select-box" id="home-top-search">
                    <span class="select-text hasvalue">
                        <span class="select-text-content" style="width: 100px;">Hỏi đáp</span>
                    </span>
                    <input type="hidden" id="cboTypeSearch" value="4">
                </div>
                <div id="home-top-search-otions" class="advance-select-options advance-options" hddvalue="cboTypeSearch"
                    ddlid="home-top-search" style="">
                    <ul class="advance-options" style="min-width: 125px;">
                        <li vl="1" class="advance-options" style="min-width: 93px;">Nhà đất bán</li>
                        <li vl="2" class="advance-options" style="min-width: 93px;">Nhà đất cho thuê</li>
                        <li vl="3" class="advance-options" style="min-width: 93px;">Tin tức</li>
                        <li vl="5" class="advance-options" style="min-width: 93px;">Dự án</li>
                        <li vl="6" class="advance-options" style="min-width: 93px;">Doanh nghiệp</li>
                        <li vl="7" class="advance-options" style="min-width: 93px;">Môi giới</li>
                    </ul>
                </div>
                <img src="https://file4.batdongsan.com.vn/images/header-bottom-button.jpg" onclick="SearchKeyword();"
                    class="fg-button fg-button-bg-default fg-button-toggleable ui-corner-all" alt="Tìm kiếm"
                    name="btnSearch" id="btnSearch">
            </div>
            <div id="gglbody"></div>
            <div class="clear"></div>
        </div>
        <div id="MainContent"></div>
        <div class="clear"></div>
        <div class="body-left">
            <div id="Breadcrumb"></div>
            <div id="TopContent"></div>
            <div>
                <div id="TopContentLeft" class="SubTopContent"></div>
                <div id="TopContentRight" class="SubTopContent"></div>
            </div>
            <div style="clear: both;"></div>

            <div class="container-default">

                <div class="container-default">
                    <div>
                        <div id="product-detail" uid="153939">
                            <div class="pm-title">
                                <h1>
                                    C&#x1EA7;n t&#xEC;m mua nh&#xE0; ch&#xED;nh ch&#x1EE7; gi&#xE1; t&#x1ED1;t t&#x1EA1;i
                                    c&#xE1;c qu&#x1EAD;n TP HCM
                                </h1>
                            </div>
                            <div class="kqchitiet">
                                <span class="diadiem - title mar - right - 15"><b> Khu vực:&nbsp;</b><strong
                                        class="greencolor">Mua nhà mặt phố</strong> tại <a
                                        href="/mua-nha-mat-pho-binh-thanh"
                                        title="Bình Thạnh">{{ $buyerSeller->district->name }}</a> {{ $buyerSeller->district->path }}</span></br><span style="display: inline-block;"><span
                                        class="gia-title mar-right-15"><b>Giá: </b><strong>{{ $buyerSeller->price }} </strong> tỷ</span>
                                        <span class="gia-title"><b>Diện tích: </b><strong>{{ $buyerSeller->buyerSellerArea->name }}</strong></span></span>
                            </div>
                            <div class="pm-mota">
                                Thông tin mô tả
                            </div>
                            <div class="pm-content stat" ct="2" ac="2" cid="54199">
                                <div class="pm-desc">
                                    {{ $buyerSeller->content }}
                                </div>
                            </div>
                            <!-- begin content-detail-->
                            <div class="pm-content-detail">
                                <table border="0" cellspacing="5" width="100%">
                                    <tbody>
                                        <tr>
                                            <td style="width: 360px; border: 1px solid #D7D7D7; vertical-align: top">
                                                <!--begin left-->
                                                <div class="left">
                                                    <div class="left-title" style="padding: 5px 0 5px 10px;">
                                                        Đặc điểm bất động sản
                                                    </div>
                                                    <div class="left-detail">
                                                        <div style="padding: 5px 0 5px 10px;">
                                                            <div class="left">
                                                                Địa chỉ
                                                            </div>
                                                            <div class="right">
                                                                {{ $buyerSeller->district->path }}
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div style="background: #ededed; padding: 5px 0 5px 10px;">
                                                            <div class="left">
                                                                Mã số 
                                                            </div>
                                                            <div class="right">
                                                                {{ $buyerSeller->id }}
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div style="padding: 5px 0 5px 10px;">
                                                            <div class="left">
                                                                Loại tin rao
                                                            </div>
                                                            <div class="right">
                                                                Mua nh&#xE0; m&#x1EB7;t ph&#x1ED1; (nh&#xE0; m&#x1EB7;t
                                                                ti&#x1EC1;n tr&#xEA;n c&#xE1;c tuy&#x1EBF;n ph&#x1ED1;)
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div style="background: #ededed; padding: 5px 0 5px 10px;">
                                                            <div class="left">
                                                                Ngày đăng tin
                                                            </div>
                                                            <div class="right">
                                                                {{ $buyerSeller->start }}
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                        <div style="padding: 5px 0 5px 10px;">
                                                            <div class="left">
                                                                Ngày hết hạn
                                                            </div>
                                                            <div class="right">
                                                                {{ $buyerSeller->stop }}
                                                            </div>
                                                            <div style="clear: both"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end left-->
                                            </td>
                                            <td style="width: 365px; border: 4px solid #EDEDED; vertical-align: top">
                                                <!--begin right-->
                                                <div id="divCustomerInfoAd">
                                                    <div id="LeftMainContent__detail_contactInfo" class="right-title">
                                                        Liên hệ
                                                    </div>

                                                    <div class="right-content">
                                                        <div class="normalblue left">
                                                            Tên liên lạc
                                                        </div>
                                                        <div class="right">
                                                            Xu&#xE2;n Ph&#xE1;t
                                                        </div>
                                                    </div>
                                                    <div style="clear: both"></div>



                                                    <div class="right-content">
                                                        <div class="normalblue left">
                                                            Mobile
                                                        </div>
                                                        <div class="right">
                                                            0934868414
                                                        </div>
                                                    </div>
                                                    <div style="clear: both"></div>

                                                    <div class="right-content">
                                                        <div class="normalblue left">
                                                            Email
                                                        </div>
                                                        <div class="right">
                                                            <a rel="nofollow"
                                                                href="mailto:xuantam88xd@gmail.com">xuantam88xd@gmail.com</a>
                                                            <noscript><em>Địa chỉ email này được bảo vệ bởi
                                                                    JavaScript.<BR>Bạn cần kích hoạt Javascript để có thể
                                                                    xem.</em></noscript>
                                                        </div>
                                                    </div>
                                                    <div style="clear: both"></div>

                                                    <div style="display: none">
                                                        <div id="LeftMainContent__detail_dottedLine"
                                                            style="border-bottom: 1px dotted #d7d7d7; margin-top: 5px;">
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end right-->
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div style="clear: both"></div>
                            </div>
                            <!--end content-detail-->
                            <!--begin bottom-->
                            <div class="bottom">
                                <div style="">
                                    <a id="emailregister" class="fancybox.iframe" rel="nofollow">
                                        <img src="https://file4.batdongsan.com.vn/images/opt/btnClick.png"
                                            alt="Click here to show popup">
                                    </a>
                                </div>
                                <div class="" style="text-align: justify">
                                    <div style="font-size: 13px; font-weight: bold;">
                                        Lưu ý
                                    </div>
                                    Quý vị đang xem nội dung tin rao ''C&#x1EA7;n t&#xEC;m mua nh&#xE0; ch&#xED;nh
                                    ch&#x1EE7; gi&#xE1; t&#x1ED1;t t&#x1EA1;i c&#xE1;c qu&#x1EAD;n TP HCM''.
                                    Mọi thông tin liên quan tới tin rao này là do người đăng tin đăng tải và chịu trách
                                    nhiệm.
                                    Chúng tôi luôn cố gắng để có chất lượng thông tin tốt nhất, nhưng chúng tôi không đảm
                                    bảo và không chịu trách nhiệm về bất kỳ nội dung nào liên quan tới tin rao này.
                                    Nếu quý vị phát hiện có sai sót hay vấn đề gì xin hãy
                                    <a id="lnkDemandSendEmail" class="openFancy fancybox.iframe" href="javascript:void(0)"
                                        rel="nofollow">thông báo cho chúng tôi.</a>
                                </div>
                                <div class="bottom-right">
                                    <div class="bottom-right-item">
                                        <div class="bottom-right-icon">
                                            <img src="https://file4.batdongsan.com.vn/images/opt/quaylai.jpg"
                                                alt="Quay lại trang trước">
                                        </div>
                                        <div class="bottom-right-link">
                                            <a rel="nofollow" href="javascript:window.history.back();">Quay lại</a>
                                        </div>
                                        <div style="clear: both"></div>
                                    </div>
                                    <div class="bottom-right-item">
                                        <div class="bottom-right-icon">
                                            <img src="https://file4.batdongsan.com.vn/images/opt/in.jpg" alt="In trang này">
                                        </div>
                                        <div class="bottom-right-link">
                                            <a onclick="javascript:window.print();" rel="nofollow"
                                                href="javascript:void(0)">
                                                In
                                                bài này
                                            </a>
                                        </div>
                                        <div style="clear: both"></div>
                                    </div>
                                    <div class="bottom-right-item">
                                        <div class="bottom-right-icon">
                                            <img src="https://file4.batdongsan.com.vn/images/guimail.jpg"
                                                alt="Gửi mail chia sẻ tới bạn bè">
                                        </div>
                                        <div class="bottom-right-link">
                                            <a id="lnkSendEmail" href="javascript:void(0)" class="openFancy fancybox.iframe"
                                                rel="nofollow">Gửi tin này cho bạn bè</a>
                                        </div>
                                        <div style="clear: both"></div>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div style="clear: both"></div>
                                <div class="bottom-right">
                                    <div class="bottom-right-item">
                                        <div class="bottom-right-link">
                                            <a href="javascript:void(0)" rel="nofollow">Chia Sẻ</a>
                                        </div>
                                        <div class="bottom-right-icon">
                                            <a id="facebook" target="_blank" rel="nofollow">
                                                <img src="https://file4.batdongsan.com.vn/images/opt/chiase.jpg">
                                            </a>
                                        </div>
                                        <div class="bottom-right-icon">
                                            <a id="twitter" target="_blank" rel="nofollow">
                                                <img src="https://file4.batdongsan.com.vn/images/opt/icon1.jpg">
                                            </a>
                                        </div>
                                        <div class="bottom-right-icon">
                                            <a id="googleBookmark" target="_blank" rel="nofollow">
                                                <img src="https://file4.batdongsan.com.vn/images/opt/icon2.jpg">
                                            </a>
                                        </div>
                                        <div style="clear: both"></div>
                                    </div>
                                    <div style="clear: both"></div>
                                </div>
                                <div style="clear: both"></div>
                                <!--end bottom-->
                            </div>
                        </div>
                    </div>
                </div>

                <div id="product-detail" uid="153939">

                    <div class="pm-footer-left">
                    </div>
                    <div class="pm-footer-center">
                        <div
                            style="width: 730px; text-align: center; line-height: 36px; vertical-align: middle; padding-top: 13px;">
                            <div class="pm-footer-center-left">
                            </div>
                            <div class="pm-footer-center-center">
                                <div style="float: left; padding-top: 5px;">
                                    <a href="#">
                                        <img src="https://file4.batdongsan.com.vn/images/icon6.png">
                                    </a>
                                </div>
                                <div style="float: left; padding-left: 10px;">
                                    <a style="font-weight: bold" rel="nofollow"
                                        href="/tin-rao-cung-nguoi-dang-nha-dat-can-mua-us153939">
                                        Tin cùng người đăng (14)
                                    </a>
                                </div>
                                <div style="clear: both">
                                </div>
                            </div>
                            <div class="pm-footer-center-right">
                            </div>
                            <div style="clear: both">
                            </div>
                        </div>
                    </div>
                    <div class="pm-footer-right">
                    </div>
                    <div style="clear: both">
                    </div>

                </div>
            </div>

            <div>

                <div class="product-list other-product">
                    <div class="viewmore">
                        Xem thêm các bất động sản khác
                    </div>
                </div>
                <div class="container-default">
                    <div>
                        <div class="product-list product-list-page other-product">
                            <div class="Main">
                                <div class="Header">
                                    <div class="Left">
                                    </div>
                                    <div class="Repeat">
                                        <h2>
                                            Mua nhà mặt phố tại {{ $buyerSeller->district->path }}
                                        </h2>
                                    </div>
                                    <div class="Right">
                                    </div>
                                </div>
                                @foreach ($buyerSellers as $buyerSeller)


                                <div class="vip1" uid="217282">
                                    <div class="p-title">
                                        <a href="{{ route('buyersellerpost',$buyerSeller->id) }}"
                                            title="{{ $buyerSeller->title }}">{{ $buyerSeller->title }}</a>
                                    </div>
                                    <div class="p-main">
                            
                            
                                        <div class="p-main-image-crop">
                                            <a
                                                href="{{ route('buyersellerpost',$buyerSeller->id) }}">
                            
                            
                                                @forelse ($buyerSeller->imageDemo as $item)
                                                @if ($loop->first)
                                                    <img class="product-avatar-img" src="{{ $item->link }}"
                                                        alt="Cần mua đất khu vực Mỹ Phước 1 - 2 - 3 - 4, TPM Bình Dương, Vsip 1 - 2, tdm, mua nhanh, giá cao">
                                                @endif
                                                @empty
                                                    <img class="product-avatar-img"
                                                        src="https://staticfile.batdongsan.com.vn/images/nophoto-175x116.jpg"
                                                        alt="Cần mua đất khu vực Mỹ Phước 1 - 2 - 3 - 4, TPM Bình Dương, Vsip 1 - 2, tdm, mua nhanh, giá cao">
                                                @endforelse
                                            </a>
                            
                                        </div>
                            
                                        <div class="p-content pos-relative">
                                            <div class="p-main-tex mar-bot-8">{{ $buyerSeller->content }}</div>
                                            <div>
                                                <div class="floatleft">
                                                    Giá: <span class="product-price">{{ $buyerSeller->price }}
                                                        tỷ</span>&nbsp;
                                                    Diện tích: <span class="product-area">{{ $buyerSeller->buyerSellerArea->name }}</span><br>
                                                    Quận/Huyện: <span class="product-city-dist">{{ $buyerSeller->district->name }}</span>
                                                    @foreach ($provinces->where('code',$buyerSeller->district->parent_code) as $province)
                                                    <span class="inline-blk">
                                                        
                                                        
                                                        Tỉnh/TP: <span class="product-city-dist">{{  $province->name }}</span>
                                                    </span>
                                                    @endforeach
                            
                                                </div>
                                                <div class="floatright mar-right-10 bot-right-abs">
                                                    {{ $buyerSeller->start }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clear10"></div>
                                </div>
                            @endforeach
                            


                                <div class="clear"></div>
                            </div>
                            <div class="clear"></div>
                            <div class="separable"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="body-right" id="RightMainContent">
            <div>
                <div class="container-common">
                    <div>
                        <div>
                            <div class="newsletter-form-small">
                                <div class="mb5">
                                    <div class="fl">
                                        <img src="https://file4.batdongsan.com.vn/images/icon-newsletter-small.jpg">
                                    </div>
                                    <div class="fl news-text">Nhận bản tin từ Batdongsan.com.vn</div>
                                    <div class="clear"></div>
                                </div>
                                <div class="newsletter-content">
                                    <div class="newsletter-bound">
                                        <div class="fl input">
                                            <input type="text" id="email" placeholder="Nhập email của bạn">
                                        </div>
                                        <div class="fl a"><a href="#" class="newsletter-register"
                                                id="newsletterRegister">Đăng ký</a></div>
                                        <div class="clear">&nbsp;</div>
                                        <div id="emailValid"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div style="clear:both;"></div>
            <div id="content-main-right">
                <div id="column-right">


                    <div>
                        <div id="product_search" class="box-left">
                            <div class="box-title">
                                Tìm kiếm tin rao cần mua, cần thuê
                            </div>
                            <div id="searchcp" class="search-form">
                                <form action="/microservice-architecture-router/Demand/DemandSearch/Index" method="post">
                                    <div class="result"></div>
                                    <div id="divCategory" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content">--Chọn loại tin rao--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The CateId field is required."
                                            id="hdCboCatagory" name="CateId" type="hidden" value="400" />
                                    </div>
                                    <div id="divCatagoryOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCatagory" ddlid="divCategory" style="">
                                        <ul class="advance-options">
                                            <li vl="-1">--Chọn loại tin rao--</li>
                                            <li vl="400" class="current">Nh&#xE0; &#x111;&#x1EA5;t C&#x1EA7;n mua</li>
                                            <li vl="401" class="">Nh&#xE0; &#x111;&#x1EA5;t C&#x1EA7;n thu&#xEA;</li>
                                        </ul>
                                    </div>

                                    <div id="divCategoryRe" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 193px;">--Chọn Loại nhà
                                                đất--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The SubCateId field is required."
                                            id="hdCboCatagoryRe" name="SubCateId" type="hidden" value="405" />
                                    </div>
                                    <div id="divCatagoryReOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCatagoryRe" ddlid="divCategoryRe" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0">--Chọn loại nhà đất--</li>
                                            <li vl="402" class="">Mua c&#x103;n h&#x1ED9; chung c&#x1B0;</li>
                                            <li vl="403" class="">Mua nh&#xE0; ri&#xEA;ng</li>
                                            <li vl="404" class="">Mua nh&#xE0; bi&#x1EC7;t th&#x1EF1;, li&#x1EC1;n k&#x1EC1;
                                            </li>
                                            <li vl="405" class="current">Mua nh&#xE0; m&#x1EB7;t ph&#x1ED1;</li>
                                            <li vl="406" class="">Mua &#x111;&#x1EA5;t n&#x1EC1;n d&#x1EF1; &#xE1;n</li>
                                            <li vl="407" class="">Mua &#x111;&#x1EA5;t</li>
                                            <li vl="408" class="">Mua trang tr&#x1EA1;i, khu ngh&#x1EC9; d&#x1B0;&#x1EE1;ng
                                            </li>
                                            <li vl="409" class="">Mua kho, nh&#xE0; x&#x1B0;&#x1EDF;ng</li>
                                            <li vl="410" class="">Mua lo&#x1EA1;i b&#x1EA5;t &#x111;&#x1ED9;ng s&#x1EA3;n
                                                kh&#xE1;c</li>
                                        </ul>
                                    </div>

                                    <div id="divCity" class="searchrow advance-select-box">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn Tỉnh/Thành phố--" placeholder="--Chọn Tỉnh/Thành phố--"
                                                style="width: 193px;"></span>
                                        <input id="hdCboCity" name="CityCode" type="hidden" value="SG" />
                                    </div>
                                    <div id="divCityOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboCity" ddlid="divCity" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="CN" class="advance-options" style="min-width: 186px;">--Chọn Tỉnh/Thành
                                                phố--</li>
                                            <li vl="SG" class="advance-options current" style="min-width: 186px;">H&#x1ED3;
                                                Ch&#xED; Minh</li>
                                            <li vl="HN" class="advance-options " style="min-width: 186px;">H&#xE0;
                                                N&#x1ED9;i</li>
                                            <li vl="DDN" class="advance-options " style="min-width: 186px;">&#x110;&#xE0;
                                                N&#x1EB5;ng</li>
                                            <li vl="BD" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                D&#x1B0;&#x1A1;ng</li>
                                            <li vl="DNA" class="advance-options " style="min-width: 186px;">
                                                &#x110;&#x1ED3;ng Nai</li>
                                            <li vl="KH" class="advance-options " style="min-width: 186px;">Kh&#xE1;nh
                                                H&#xF2;a</li>
                                            <li vl="HP" class="advance-options " style="min-width: 186px;">H&#x1EA3;i
                                                Ph&#xF2;ng</li>
                                            <li vl="LA" class="advance-options " style="min-width: 186px;">Long An</li>
                                            <li vl="QNA" class="advance-options " style="min-width: 186px;">Qu&#x1EA3;ng Nam
                                            </li>
                                            <li vl="VT" class="advance-options " style="min-width: 186px;">B&#xE0;
                                                R&#x1ECB;a V&#x169;ng T&#xE0;u</li>
                                            <li vl="DDL" class="advance-options " style="min-width: 186px;">&#x110;&#x1EAF;k
                                                L&#x1EAF;k</li>
                                            <li vl="CT" class="advance-options " style="min-width: 186px;">C&#x1EA7;n
                                                Th&#x1A1;</li>
                                            <li vl="BTH" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                Thu&#x1EAD;n </li>
                                            <li vl="LDD" class="advance-options " style="min-width: 186px;">L&#xE2;m
                                                &#x110;&#x1ED3;ng</li>
                                            <li vl="TTH" class="advance-options " style="min-width: 186px;">Th&#x1EEB;a
                                                Thi&#xEA;n Hu&#x1EBF;</li>
                                            <li vl="KG" class="advance-options " style="min-width: 186px;">Ki&#xEA;n Giang
                                            </li>
                                            <li vl="BN" class="advance-options " style="min-width: 186px;">B&#x1EAF;c Ninh
                                            </li>
                                            <li vl="QNI" class="advance-options " style="min-width: 186px;">Qu&#x1EA3;ng
                                                Ninh</li>
                                            <li vl="TH" class="advance-options " style="min-width: 186px;">Thanh H&#xF3;a
                                            </li>
                                            <li vl="NA" class="advance-options " style="min-width: 186px;">Ngh&#x1EC7; An
                                            </li>
                                            <li vl="HD" class="advance-options " style="min-width: 186px;">H&#x1EA3;i
                                                D&#x1B0;&#x1A1;ng</li>
                                            <li vl="GL" class="advance-options " style="min-width: 186px;">Gia Lai</li>
                                            <li vl="BP" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                Ph&#x1B0;&#x1EDB;c</li>
                                            <li vl="HY" class="advance-options " style="min-width: 186px;">H&#x1B0;ng
                                                Y&#xEA;n</li>
                                            <li vl="BDD" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                &#x110;&#x1ECB;nh</li>
                                            <li vl="TG" class="advance-options " style="min-width: 186px;">Ti&#x1EC1;n Giang
                                            </li>
                                            <li vl="TB" class="advance-options " style="min-width: 186px;">Th&#xE1;i
                                                B&#xEC;nh</li>
                                            <li vl="BG" class="advance-options " style="min-width: 186px;">B&#x1EAF;c Giang
                                            </li>
                                            <li vl="HB" class="advance-options " style="min-width: 186px;">H&#xF2;a
                                                B&#xEC;nh</li>
                                            <li vl="AG" class="advance-options " style="min-width: 186px;">An Giang</li>
                                            <li vl="VP" class="advance-options " style="min-width: 186px;">V&#x129;nh
                                                Ph&#xFA;c</li>
                                            <li vl="TNI" class="advance-options " style="min-width: 186px;">T&#xE2;y Ninh
                                            </li>
                                            <li vl="TN" class="advance-options " style="min-width: 186px;">Th&#xE1;i
                                                Nguy&#xEA;n</li>
                                            <li vl="LCA" class="advance-options " style="min-width: 186px;">L&#xE0;o Cai
                                            </li>
                                            <li vl="NDD" class="advance-options " style="min-width: 186px;">Nam
                                                &#x110;&#x1ECB;nh</li>
                                            <li vl="QNG" class="advance-options " style="min-width: 186px;">Qu&#x1EA3;ng
                                                Ng&#xE3;i</li>
                                            <li vl="BTR" class="advance-options " style="min-width: 186px;">B&#x1EBF;n Tre
                                            </li>
                                            <li vl="DNO" class="advance-options " style="min-width: 186px;">&#x110;&#x1EAF;k
                                                N&#xF4;ng</li>
                                            <li vl="CM" class="advance-options " style="min-width: 186px;">C&#xE0; Mau</li>
                                            <li vl="VL" class="advance-options " style="min-width: 186px;">V&#x129;nh Long
                                            </li>
                                            <li vl="NB" class="advance-options " style="min-width: 186px;">Ninh B&#xEC;nh
                                            </li>
                                            <li vl="PT" class="advance-options " style="min-width: 186px;">Ph&#xFA;
                                                Th&#x1ECD;</li>
                                            <li vl="NT" class="advance-options " style="min-width: 186px;">Ninh Thu&#x1EAD;n
                                            </li>
                                            <li vl="PY" class="advance-options " style="min-width: 186px;">Ph&#xFA; Y&#xEA;n
                                            </li>
                                            <li vl="HNA" class="advance-options " style="min-width: 186px;">H&#xE0; Nam</li>
                                            <li vl="HT" class="advance-options " style="min-width: 186px;">H&#xE0;
                                                T&#x129;nh</li>
                                            <li vl="DDT" class="advance-options " style="min-width: 186px;">
                                                &#x110;&#x1ED3;ng Th&#xE1;p</li>
                                            <li vl="ST" class="advance-options " style="min-width: 186px;">S&#xF3;c
                                                Tr&#x103;ng</li>
                                            <li vl="KT" class="advance-options " style="min-width: 186px;">Kon Tum</li>
                                            <li vl="QB" class="advance-options " style="min-width: 186px;">Qu&#x1EA3;ng
                                                B&#xEC;nh</li>
                                            <li vl="QT" class="advance-options " style="min-width: 186px;">Qu&#x1EA3;ng
                                                Tr&#x1ECB;</li>
                                            <li vl="TV" class="advance-options " style="min-width: 186px;">Tr&#xE0; Vinh
                                            </li>
                                            <li vl="HGI" class="advance-options " style="min-width: 186px;">H&#x1EAD;u Giang
                                            </li>
                                            <li vl="SL" class="advance-options " style="min-width: 186px;">S&#x1A1;n La</li>
                                            <li vl="BL" class="advance-options " style="min-width: 186px;">B&#x1EA1;c
                                                Li&#xEA;u</li>
                                            <li vl="YB" class="advance-options " style="min-width: 186px;">Y&#xEA;n B&#xE1;i
                                            </li>
                                            <li vl="TQ" class="advance-options " style="min-width: 186px;">Tuy&#xEA;n Quang
                                            </li>
                                            <li vl="DDB" class="advance-options " style="min-width: 186px;">
                                                &#x110;i&#x1EC7;n Bi&#xEA;n</li>
                                            <li vl="LCH" class="advance-options " style="min-width: 186px;">Lai Ch&#xE2;u
                                            </li>
                                            <li vl="LS" class="advance-options " style="min-width: 186px;">L&#x1EA1;ng
                                                S&#x1A1;n</li>
                                            <li vl="HG" class="advance-options " style="min-width: 186px;">H&#xE0; Giang
                                            </li>
                                            <li vl="BK" class="advance-options " style="min-width: 186px;">B&#x1EAF;c
                                                K&#x1EA1;n</li>
                                            <li vl="CB" class="advance-options " style="min-width: 186px;">Cao B&#x1EB1;ng
                                            </li>
                                        </ul>
                                    </div>


                                    <div id="divDistrict" class="searchrow advance-select-box" title="">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn Quận/Huyện--" placeholder="--Chọn Quận/Huyện--"
                                                style="width: 193px;"></span>
                                        <input data-val="true" data-val-required="The DistrictId field is required."
                                            id="hdCboDistrict" name="DistrictId" type="hidden" value="66" />
                                    </div>
                                    <div id="divDistrictOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboDistrict" ddlid="divDistrict" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options " style="min-width: 186px;">--Chọn
                                                Quận/Huyện--</li>
                                            <li vl="53" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 1
                                            </li>
                                            <li vl="54" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 2
                                            </li>
                                            <li vl="55" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 3
                                            </li>
                                            <li vl="56" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 4
                                            </li>
                                            <li vl="57" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 5
                                            </li>
                                            <li vl="58" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 6
                                            </li>
                                            <li vl="59" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 7
                                            </li>
                                            <li vl="60" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 8
                                            </li>
                                            <li vl="61" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 9
                                            </li>
                                            <li vl="62" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 10
                                            </li>
                                            <li vl="63" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 11
                                            </li>
                                            <li vl="64" class="advance-options " style="min-width: 186px;">Qu&#x1EAD;n 12
                                            </li>
                                            <li vl="65" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                T&#xE2;n</li>
                                            <li vl="66" class="advance-options current" style="min-width: 186px;">B&#xEC;nh
                                                Th&#x1EA1;nh</li>
                                            <li vl="67" class="advance-options " style="min-width: 186px;">G&#xF2;
                                                V&#x1EA5;p</li>
                                            <li vl="68" class="advance-options " style="min-width: 186px;">Ph&#xFA;
                                                Nhu&#x1EAD;n</li>
                                            <li vl="69" class="advance-options " style="min-width: 186px;">T&#xE2;n
                                                B&#xEC;nh</li>
                                            <li vl="70" class="advance-options " style="min-width: 186px;">T&#xE2;n Ph&#xFA;
                                            </li>
                                            <li vl="71" class="advance-options " style="min-width: 186px;">Th&#x1EE7;
                                                &#x110;&#x1EE9;c</li>
                                            <li vl="72" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                Ch&#xE1;nh</li>
                                            <li vl="73" class="advance-options " style="min-width: 186px;">C&#x1EA7;n
                                                Gi&#x1EDD;</li>
                                            <li vl="74" class="advance-options " style="min-width: 186px;">C&#x1EE7; Chi
                                            </li>
                                            <li vl="75" class="advance-options " style="min-width: 186px;">H&#xF3;c M&#xF4;n
                                            </li>
                                            <li vl="76" class="advance-options " style="min-width: 186px;">Nh&#xE0; B&#xE8;
                                            </li>
                                        </ul>
                                    </div>


                                    <div id="divArea" class="searchrow advance-select-box ">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 193px;">--Chọn Diện
                                                tích--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The AreaId field is required."
                                            id="hdCboArea" name="AreaId" type="hidden" value="0" />
                                    </div>
                                    <div id="divAreaOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        minvalue="txtAreaMinValue" maxvalue="txtAreaMaxValue" unit="area"
                                        hddvalue="hdCboArea" ddlid="divArea" style="">
                                        <table class="header-options options">
                                            <tbody>
                                                <tr class="advance-options">
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtAreaMinValue" name="MinArea"
                                                            placeholder="Từ" class="min-value advance-options" maxlength="6"
                                                            numbersonly="true" decimal="false" value="">
                                                    </td>
                                                    <td class="advance-options"><span class="advance-options">- </span></td>
                                                    <td class="advance-options">
                                                        <input value="" type="text" id="txtAreaMaxValue" name="MaxArea"
                                                            placeholder="Đến" class="max-value advance-options"
                                                            maxlength="6" numbersonly="true" decimal="false" value="">
                                                    </td>
                                                    <td class="advance-options"><span class="advance-options">m2</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="-1" class="advance-options" style="min-width: 186px;">--Chọn Diện tích--
                                            </li>
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">Ch&#x1B0;a
                                                x&#xE1;c &#x111;&#x1ECB;nh</li>
                                            <li vl="1" class="advance-options " style="min-width: 186px;">&lt;= 30 m2</li>
                                            <li vl="2" class="advance-options " style="min-width: 186px;">30 - 50 m2</li>
                                            <li vl="3" class="advance-options " style="min-width: 186px;">50 - 80 m2</li>
                                            <li vl="4" class="advance-options " style="min-width: 186px;">80 - 100 m2</li>
                                            <li vl="5" class="advance-options " style="min-width: 186px;">100 - 150 m2</li>
                                            <li vl="6" class="advance-options " style="min-width: 186px;">150 - 200 m2</li>
                                            <li vl="7" class="advance-options " style="min-width: 186px;">200 - 250 m2</li>
                                            <li vl="8" class="advance-options " style="min-width: 186px;">250 - 300 m2</li>
                                            <li vl="9" class="advance-options " style="min-width: 186px;">300 - 500 m2</li>
                                            <li vl="10" class="advance-options " style="min-width: 186px;">&gt;= 500 m2</li>
                                        </ul>
                                    </div>

                                    <div id="divPrice" class="searchrow advance-select-box">
                                        <span class="select-text">
                                            <span class="select-text-content" style="width: 193px;">--Chọn mức giá--</span>
                                        </span>
                                        <input data-val="true" data-val-required="The PriceId field is required."
                                            id="hdCboPrice" name="PriceId" type="hidden" value="0" />
                                    </div>
                                    <div id="divPriceOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money"
                                        lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" ddlid="divPrice"
                                        style="">
                                        <table class="header-options options">
                                            <tbody>
                                                <tr class="advance-options">
                                                    <td class="advance-options">
                                                        <input value="1000" type="text" id="txtPriceMinValue"
                                                            name="MinPrice" placeholder="Từ"
                                                            class="min-value advance-options" maxlength="6"
                                                            numbersonly="true" decimal="true" value="">
                                                        <div id="lblPriceMin"></div>
                                                    </td>
                                                    <td class="advance-options"><span class="advance-options">- </span></td>
                                                    <td class="advance-options">
                                                        <input value="10000" type="text" id="txtPriceMaxValue"
                                                            name="MaxPrice" placeholder="Đến"
                                                            class="max-value advance-options" maxlength="6"
                                                            numbersonly="true" decimal="true" value="">
                                                        <div id="lblPriceMax"></div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="-1" class="advance-options" style="min-width: 186px;">--Chọn mức giá--
                                            </li>
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">Th&#x1ECF;a
                                                thu&#x1EAD;n</li>
                                            <li vl="1" class="advance-options " style="min-width: 186px;">&lt; 500
                                                tri&#x1EC7;u</li>
                                            <li vl="2" class="advance-options " style="min-width: 186px;">500 - 800
                                                tri&#x1EC7;u</li>
                                            <li vl="3" class="advance-options " style="min-width: 186px;">800 tri&#x1EC7;u -
                                                1 t&#x1EF7;</li>
                                            <li vl="4" class="advance-options " style="min-width: 186px;">1 - 2 t&#x1EF7;
                                            </li>
                                            <li vl="5" class="advance-options " style="min-width: 186px;">2 - 3 t&#x1EF7;
                                            </li>
                                            <li vl="6" class="advance-options " style="min-width: 186px;">3 - 5 t&#x1EF7;
                                            </li>
                                            <li vl="7" class="advance-options " style="min-width: 186px;">5 - 7 t&#x1EF7;
                                            </li>
                                            <li vl="8" class="advance-options " style="min-width: 186px;">7 - 10 t&#x1EF7;
                                            </li>
                                            <li vl="9" class="advance-options " style="min-width: 186px;">10 - 20 t&#x1EF7;
                                            </li>
                                            <li vl="10" class="advance-options " style="min-width: 186px;">20 - 30 t&#x1EF7;
                                            </li>
                                            <li vl="11" class="advance-options " style="min-width: 186px;">&gt; 30 t&#x1EF7;
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="divWard" class="searchrow adv-search advance-select-box" title=""
                                        style="display: none; width:218px;">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn Phường/Xã--" placeholder="--Chọn Phường/Xã--"
                                                style="width: 193px;"></span>
                                        <input data-val="true" data-val-required="The WardId field is required."
                                            id="hdCboWard" name="WardId" type="hidden" value="-1" />
                                    </div>
                                    <div id="divWardOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboWard" ddlid="divWard" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn
                                                Phường/Xã--</li>
                                            <li vl="8881" class="advance-options " style="min-width: 186px;">1</li>
                                            <li vl="8883" class="advance-options " style="min-width: 186px;">2</li>
                                            <li vl="8884" class="advance-options " style="min-width: 186px;">3</li>
                                            <li vl="8885" class="advance-options " style="min-width: 186px;">5</li>
                                            <li vl="8886" class="advance-options " style="min-width: 186px;">6</li>
                                            <li vl="8887" class="advance-options " style="min-width: 186px;">7</li>
                                            <li vl="8889" class="advance-options " style="min-width: 186px;">11</li>
                                            <li vl="8890" class="advance-options " style="min-width: 186px;">12</li>
                                            <li vl="8891" class="advance-options " style="min-width: 186px;">13</li>
                                            <li vl="8892" class="advance-options " style="min-width: 186px;">14</li>
                                            <li vl="8893" class="advance-options " style="min-width: 186px;">15</li>
                                            <li vl="8894" class="advance-options " style="min-width: 186px;">17</li>
                                            <li vl="8895" class="advance-options " style="min-width: 186px;">19</li>
                                            <li vl="8897" class="advance-options " style="min-width: 186px;">21</li>
                                            <li vl="8898" class="advance-options " style="min-width: 186px;">22</li>
                                            <li vl="8899" class="advance-options " style="min-width: 186px;">24</li>
                                            <li vl="8900" class="advance-options " style="min-width: 186px;">25</li>
                                            <li vl="8901" class="advance-options " style="min-width: 186px;">26</li>
                                            <li vl="8902" class="advance-options " style="min-width: 186px;">27</li>
                                            <li vl="8903" class="advance-options " style="min-width: 186px;">28</li>
                                        </ul>
                                    </div>

                                    <div id="divStreet" class="searchrow adv-search advance-select-box" title=""
                                        style="display: none;width:218px;">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn Đường/Phố--" placeholder="--Chọn Đường/Phố--"
                                                style="width: 193px;"></span>
                                        <input data-val="true" data-val-required="The StreetId field is required."
                                            id="hdCboStreet" name="StreetId" type="hidden" value="-1" />
                                    </div>
                                    <div id="divStreetOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboStreet" ddlid="divStreet" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn
                                                Đường/Phố--</li>
                                            <li vl="66" class="advance-options " style="min-width: 186px;">&#x110;inh
                                                Ti&#xEA;n Ho&#xE0;ng</li>
                                            <li vl="123" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Th&#xE1;i H&#x1ECD;c</li>
                                            <li vl="126" class="advance-options " style="min-width: 186px;">Phan B&#x1ED9;i
                                                Ch&#xE2;u</li>
                                            <li vl="146" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                X&#xED;</li>
                                            <li vl="147" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Thi&#x1EC7;n Thu&#x1EAD;t</li>
                                            <li vl="204" class="advance-options " style="min-width: 186px;">
                                                L&#x1B0;&#x1A1;ng Ng&#x1ECD;c Quy&#x1EBF;n</li>
                                            <li vl="212" class="advance-options " style="min-width: 186px;">Ph&#x1EA1;m
                                                Ng&#x169; L&#xE3;o</li>
                                            <li vl="256" class="advance-options " style="min-width: 186px;">
                                                &#x110;i&#x1EC7;n Bi&#xEA;n Ph&#x1EE7;</li>
                                            <li vl="315" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Huy T&#x1B0;&#x1EDF;ng</li>
                                            <li vl="337" class="advance-options " style="min-width: 186px;">Ho&#xE0;ng
                                                V&#x103;n Th&#x1EE5;</li>
                                            <li vl="346" class="advance-options " style="min-width: 186px;">Cao Th&#x1EAF;ng
                                            </li>
                                            <li vl="350" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Th&#x1B0;&#x1EE3;ng Hi&#x1EC1;n</li>
                                            <li vl="379" class="advance-options " style="min-width: 186px;">L&#xEA;
                                                Tr&#x1EF1;c</li>
                                            <li vl="381" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Khuy&#x1EBF;n</li>
                                            <li vl="382" class="advance-options " style="min-width: 186px;">Phan V&#x103;n
                                                Tr&#x1ECB;</li>
                                            <li vl="386" class="advance-options " style="min-width: 186px;">Tr&#x1EA7;n
                                                Qu&#xFD; C&#xE1;p</li>
                                            <li vl="388" class="advance-options " style="min-width: 186px;">V&#x169;
                                                Ng&#x1ECD;c Phan</li>
                                            <li vl="390" class="advance-options " style="min-width: 186px;">Tr&#x1ECB;nh
                                                Ho&#xE0;i &#x110;&#x1EE9;c</li>
                                            <li vl="395" class="advance-options " style="min-width: 186px;">Ng&#xF4;
                                                T&#x1EA5;t T&#x1ED1;</li>
                                            <li vl="416" class="advance-options " style="min-width: 186px;">Ph&#x1EA1;m
                                                Ng&#x1ECD;c Th&#x1EA1;ch</li>
                                            <li vl="433" class="advance-options " style="min-width: 186px;">Nguy&#xEA;n
                                                H&#x1ED3;ng</li>
                                            <li vl="457" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n An
                                                Ninh</li>
                                            <li vl="502" class="advance-options " style="min-width: 186px;">Tr&#x1EA7;n
                                                H&#x1B0;ng &#x110;&#x1EA1;o</li>
                                            <li vl="505" class="advance-options " style="min-width: 186px;">V&#x1EA1;n
                                                Ki&#x1EBF;p</li>
                                            <li vl="512" class="advance-options " style="min-width: 186px;">Tr&#x1EA7;n
                                                B&#xEC;nh Tr&#x1ECD;ng</li>
                                            <li vl="517" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                C&#xF4;ng Tr&#x1EE9;</li>
                                            <li vl="522" class="advance-options " style="min-width: 186px;">H&#x1ED3;
                                                Xu&#xE2;n H&#x1B0;&#x1A1;ng</li>
                                            <li vl="527" class="advance-options " style="min-width: 186px;">B&#x1EA1;ch
                                                &#x110;&#x1EB1;ng</li>
                                            <li vl="528" class="advance-options " style="min-width: 186px;">B&#x1EA1;ch Mai
                                            </li>
                                            <li vl="560" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                B&#x1EC9;nh Khi&#xEA;m</li>
                                            <li vl="576" class="advance-options " style="min-width: 186px;">Ph&#xF3;
                                                &#x110;&#x1EE9;c Ch&#xED;nh</li>
                                            <li vl="689" class="advance-options " style="min-width: 186px;">3</li>
                                            <li vl="725" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Trung Tr&#x1EF1;c</li>
                                            <li vl="741" class="advance-options " style="min-width: 186px;">Phan
                                                &#x110;&#x103;ng L&#x1B0;u</li>
                                            <li vl="756" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                C&#xF4;ng Hoan</li>
                                            <li vl="787" class="advance-options " style="min-width: 186px;">Mai Xu&#xE2;n
                                                Th&#x1B0;&#x1EDF;ng</li>
                                            <li vl="792" class="advance-options " style="min-width: 186px;">Ho&#xE0;ng Hoa
                                                Th&#xE1;m</li>
                                            <li vl="802" class="advance-options " style="min-width: 186px;">Chu V&#x103;n An
                                            </li>
                                            <li vl="821" class="advance-options " style="min-width: 186px;">L&#xEA;
                                                V&#x103;n S&#x1EF9;</li>
                                            <li vl="833" class="advance-options " style="min-width: 186px;">Xu&#xE2;n
                                                H&#x1ED3;ng</li>
                                            <li vl="841" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                V&#x103;n &#x110;&#x1EAD;u</li>
                                            <li vl="907" class="advance-options " style="min-width: 186px;">Phan Chu Trinh
                                            </li>
                                            <li vl="977" class="advance-options " style="min-width: 186px;">Ng&#xF4;
                                                &#x110;&#x1EE9;c K&#x1EBF;</li>
                                            <li vl="980" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Phi Khanh</li>
                                            <li vl="987" class="advance-options " style="min-width: 186px;">Ph&#x1EA1;m
                                                Vi&#x1EBF;t Ch&#xE1;nh</li>
                                            <li vl="991" class="advance-options " style="min-width: 186px;">Phan X&#xED;ch
                                                Long</li>
                                            <li vl="1051" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Th&#x1ECB; Minh Khai</li>
                                            <li vl="1053" class="advance-options " style="min-width: 186px;">H&#x1ED3;ng
                                                B&#xE0;ng</li>
                                            <li vl="1054" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                H&#x1EEF;u C&#x1EA7;u</li>
                                            <li vl="1056" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                C&#x1B0; Trinh</li>
                                            <li vl="1081" class="advance-options " style="min-width: 186px;">C&#x1EED;u Long
                                            </li>
                                            <li vl="1131" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                L&#xE2;m</li>
                                            <li vl="1184" class="advance-options " style="min-width: 186px;">T&#x103;ng
                                                B&#x1EA1;t H&#x1ED5;</li>
                                            <li vl="1199" class="advance-options " style="min-width: 186px;">B&#xF9;i
                                                H&#x1EEF;u Ngh&#x129;a</li>
                                            <li vl="1234" class="advance-options " style="min-width: 186px;">V&#xF5;
                                                Tr&#x1B0;&#x1EDD;ng To&#x1EA3;n</li>
                                            <li vl="1283" class="advance-options " style="min-width: 186px;">Hu&#x1EF3;nh
                                                M&#x1EAB;n &#x110;&#x1EA1;t</li>
                                            <li vl="1433" class="advance-options " style="min-width: 186px;">Ph&#x1EA1;m
                                                V&#x103;n &#x110;&#x1ED3;ng</li>
                                            <li vl="1485" class="advance-options " style="min-width: 186px;">
                                                Tr&#x1B0;&#x1EDD;ng Sa</li>
                                            <li vl="1530" class="advance-options " style="min-width: 186px;">L&#xEA; Quang
                                                &#x110;&#x1ECB;nh</li>
                                            <li vl="1600" class="advance-options " style="min-width: 186px;">Lam S&#x1A1;n
                                            </li>
                                            <li vl="1603" class="advance-options " style="min-width: 186px;">Hu&#x1EF3;nh
                                                T&#x1ECB;nh C&#x1EE7;a</li>
                                            <li vl="1652" class="advance-options " style="min-width: 186px;">
                                                &#x110;&#x1ED1;ng &#x110;a</li>
                                            <li vl="1718" class="advance-options " style="min-width: 186px;">30/4</li>
                                            <li vl="1723" class="advance-options " style="min-width: 186px;">Thi&#xEA;n
                                                H&#x1ED9; D&#x1B0;&#x1A1;ng</li>
                                            <li vl="1745" class="advance-options " style="min-width: 186px;">Th&#xED;ch
                                                Qu&#x1EA3;ng &#x110;&#x1EE9;c</li>
                                            <li vl="1759" class="advance-options " style="min-width: 186px;">C&#xE1;ch
                                                M&#x1EA1;ng Th&#xE1;ng T&#xE1;m</li>
                                            <li vl="1775" class="advance-options " style="min-width: 186px;">D8</li>
                                            <li vl="1938" class="advance-options " style="min-width: 186px;">L&#xEA;
                                                V&#x103;n Duy&#x1EC7;t</li>
                                            <li vl="1985" class="advance-options " style="min-width: 186px;">D1</li>
                                            <li vl="1990" class="advance-options " style="min-width: 186px;">4</li>
                                            <li vl="1994" class="advance-options " style="min-width: 186px;">7</li>
                                            <li vl="1998" class="advance-options " style="min-width: 186px;">11</li>
                                            <li vl="1999" class="advance-options " style="min-width: 186px;">12</li>
                                            <li vl="2001" class="advance-options " style="min-width: 186px;">14</li>
                                            <li vl="2011" class="advance-options " style="min-width: 186px;">Chu M&#x1EA1;nh
                                                Trinh</li>
                                            <li vl="2070" class="advance-options " style="min-width: 186px;">X&#xF4;
                                                Vi&#x1EBF;t Ngh&#x1EC7; T&#x129;nh</li>
                                            <li vl="2095" class="advance-options " style="min-width: 186px;">18</li>
                                            <li vl="2100" class="advance-options " style="min-width: 186px;">
                                                &#x110;&#x1EB7;ng Th&#xF9;y Tr&#xE2;m</li>
                                            <li vl="2289" class="advance-options " style="min-width: 186px;">Ung V&#x103;n
                                                Khi&#xEA;m</li>
                                            <li vl="2474" class="advance-options " style="min-width: 186px;">
                                                Tr&#x1B0;&#x1A1;ng &#x110;&#x103;ng Qu&#x1EBF;</li>
                                            <li vl="2599" class="advance-options " style="min-width: 186px;">D4</li>
                                            <li vl="2600" class="advance-options " style="min-width: 186px;">D5</li>
                                            <li vl="2656" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                H&#x1EEF;u C&#x1EA3;nh</li>
                                            <li vl="2659" class="advance-options " style="min-width: 186px;">N&#x1A1; Trang
                                                Long</li>
                                            <li vl="2703" class="advance-options " style="min-width: 186px;">&#x110;inh
                                                B&#x1ED9; L&#x129;nh</li>
                                            <li vl="2740" class="advance-options " style="min-width: 186px;">Y&#xEA;n
                                                &#x110;&#x1ED7;</li>
                                            <li vl="2840" class="advance-options " style="min-width: 186px;">6</li>
                                            <li vl="2841" class="advance-options " style="min-width: 186px;">8</li>
                                            <li vl="2850" class="advance-options " style="min-width: 186px;">17</li>
                                            <li vl="2870" class="advance-options " style="min-width: 186px;">25</li>
                                            <li vl="2879" class="advance-options " style="min-width: 186px;">37</li>
                                            <li vl="3018" class="advance-options " style="min-width: 186px;">N4</li>
                                            <li vl="3364" class="advance-options " style="min-width: 186px;">Ph&#x1EA1;m
                                                V&#x103;n Hai</li>
                                            <li vl="3780" class="advance-options " style="min-width: 186px;">10</li>
                                            <li vl="3786" class="advance-options " style="min-width: 186px;">5</li>
                                            <li vl="3788" class="advance-options " style="min-width: 186px;">2</li>
                                            <li vl="3789" class="advance-options " style="min-width: 186px;">1</li>
                                            <li vl="3811" class="advance-options " style="min-width: 186px;">T&#x1EA7;m Vu
                                            </li>
                                            <li vl="3929" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                V&#x103;n Th&#x1B0;&#x1A1;ng</li>
                                            <li vl="3940" class="advance-options " style="min-width: 186px;">V&#xF5; Duy
                                                Ninh</li>
                                            <li vl="4047" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Huy L&#x1B0;&#x1EE3;ng</li>
                                            <li vl="4049" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Duy</li>
                                            <li vl="4084" class="advance-options " style="min-width: 186px;">Tr&#x1EA7;n
                                                V&#x103;n K&#x1EF7;</li>
                                            <li vl="4111" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Xu&#xE2;n &#xD4;n</li>
                                            <li vl="4127" class="advance-options " style="min-width: 186px;">Phan Anh</li>
                                            <li vl="4187" class="advance-options " style="min-width: 186px;">16</li>
                                            <li vl="4196" class="advance-options " style="min-width: 186px;">30</li>
                                            <li vl="4259" class="advance-options " style="min-width: 186px;">Phan V&#x103;n
                                                H&#xE2;n</li>
                                            <li vl="4297" class="advance-options " style="min-width: 186px;">81</li>
                                            <li vl="4463" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                L&#x1EE3;i</li>
                                            <li vl="4528" class="advance-options " style="min-width: 186px;">Tr&#x1EA7;n
                                                K&#x1EBF; X&#x1B0;&#x1A1;ng</li>
                                            <li vl="4532" class="advance-options " style="min-width: 186px;">V&#x169; Huy
                                                T&#x1EA5;n</li>
                                            <li vl="4563" class="advance-options " style="min-width: 186px;">V&#x169;
                                                T&#xF9;ng</li>
                                            <li vl="4569" class="advance-options " style="min-width: 186px;">Hu&#x1EF3;nh
                                                &#x110;&#xEC;nh Hai</li>
                                            <li vl="4574" class="advance-options " style="min-width: 186px;">B&#xF9;i
                                                &#x110;&#xEC;nh T&#xFA;y</li>
                                            <li vl="4595" class="advance-options " style="min-width: 186px;">Thanh &#x110;a
                                            </li>
                                            <li vl="4599" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                Qu&#x1EDB;i</li>
                                            <li vl="4601" class="advance-options " style="min-width: 186px;">D2</li>
                                            <li vl="4602" class="advance-options " style="min-width: 186px;">D3</li>
                                            <li vl="4612" class="advance-options " style="min-width: 186px;">Ph&#xFA;
                                                M&#x1EF9;</li>
                                            <li vl="4613" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                V&#x103;n L&#x1EA1;c</li>
                                            <li vl="4618" class="advance-options " style="min-width: 186px;">M&#xEA; Linh
                                            </li>
                                            <li vl="4635" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Ng&#x1ECD;c Ph&#x1B0;&#x1A1;ng</li>
                                            <li vl="4638" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                C&#x1EED;u V&#xE2;n</li>
                                            <li vl="4766" class="advance-options " style="min-width: 186px;">27</li>
                                            <li vl="4781" class="advance-options " style="min-width: 186px;">13</li>
                                            <li vl="4991" class="advance-options " style="min-width: 186px;">20</li>
                                            <li vl="5183" class="advance-options " style="min-width: 186px;">135</li>
                                            <li vl="5676" class="advance-options " style="min-width: 186px;">Mi&#x1EBF;u
                                                N&#x1ED5;i</li>
                                            <li vl="5682" class="advance-options " style="min-width: 186px;">
                                                L&#x1B0;&#x1A1;ng S&#x1EED; C</li>
                                            <li vl="5825" class="advance-options " style="min-width: 186px;">Qu&#xE1;ch
                                                V&#x103;n Tu&#x1EA5;n</li>
                                            <li vl="5826" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                H&#xE0;nh</li>
                                            <li vl="5827" class="advance-options " style="min-width: 186px;">An
                                                Th&#x1B0;&#x1EE3;ng 6</li>
                                            <li vl="5828" class="advance-options " style="min-width: 186px;">Ti&#x1EC1;n
                                                &#x110;&#x1EE9;c</li>
                                            <li vl="5854" class="advance-options " style="min-width: 186px;">Di&#xEA;n
                                                H&#x1ED3;ng</li>
                                            <li vl="5865" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                H&#xF2;a</li>
                                            <li vl="5889" class="advance-options " style="min-width: 186px;">D9</li>
                                            <li vl="5938" class="advance-options " style="min-width: 186px;">Nhi&#xEA;u
                                                T&#x1EE9;</li>
                                            <li vl="5945" class="advance-options " style="min-width: 186px;">Tr&#x1EA7;n
                                                Quang &#x110;&#x1ECB;nh</li>
                                            <li vl="6585" class="advance-options " style="min-width: 186px;">Th&#xED;ch
                                                B&#x1EED;u &#x110;&#x103;ng</li>
                                            <li vl="6669" class="advance-options " style="min-width: 186px;">Ng&#xF4;
                                                Nh&#xE2;n T&#x1ECB;nh</li>
                                            <li vl="6747" class="advance-options " style="min-width: 186px;">
                                                D&#x1B0;&#x1A1;ng V&#x169; T&#xF9;ng</li>
                                            <li vl="6830" class="advance-options " style="min-width: 186px;">Phan Huy
                                                &#xD4;n</li>
                                            <li vl="6935" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                H&#x1EEF;u Tho&#x1EA1;i</li>
                                            <li vl="6937" class="advance-options " style="min-width: 186px;">Tr&#x1EE5;c
                                            </li>
                                            <li vl="7390" class="advance-options " style="min-width: 186px;">Tr&#x1EE5;c 20
                                            </li>
                                            <li vl="7391" class="advance-options " style="min-width: 186px;">Tr&#x1EE5;c 30
                                            </li>
                                            <li vl="7634" class="advance-options " style="min-width: 186px;">Qu&#x1ED1;c
                                                L&#x1ED9; 13</li>
                                            <li vl="7676" class="advance-options " style="min-width: 186px;">
                                                &#x110;&#x1ED1;ng &#x110;a 1</li>
                                            <li vl="7923" class="advance-options " style="min-width: 186px;">C&#x1EA7;u
                                                V&#xE1;n</li>
                                            <li vl="8055" class="advance-options " style="min-width: 186px;">304</li>
                                            <li vl="8087" class="advance-options " style="min-width: 186px;">Tr&#x1EE5;c 13
                                            </li>
                                            <li vl="8159" class="advance-options " style="min-width: 186px;">D6</li>
                                            <li vl="8220" class="advance-options " style="min-width: 186px;">7A</li>
                                            <li vl="8415" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                L&#xE3;nh</li>
                                            <li vl="8421" class="advance-options " style="min-width: 186px;">C&#xF4;ng
                                                Tr&#x1B0;&#x1EDD;ng T&#x1EF1; Do</li>
                                            <li vl="8472" class="advance-options " style="min-width: 186px;">H&#xE0;ng Xanh
                                            </li>
                                            <li vl="8599" class="advance-options " style="min-width: 186px;">82</li>
                                            <li vl="8675" class="advance-options " style="min-width: 186px;">179</li>
                                            <li vl="9396" class="advance-options " style="min-width: 186px;">S&#x1ED1; 36
                                            </li>
                                            <li vl="10501" class="advance-options " style="min-width: 186px;">D</li>
                                            <li vl="10941" class="advance-options " style="min-width: 186px;">233</li>
                                            <li vl="11192" class="advance-options " style="min-width: 186px;">S&#x1ED1; 6
                                            </li>
                                            <li vl="11205" class="advance-options " style="min-width: 186px;">S&#x1ED1; 12
                                            </li>
                                            <li vl="11206" class="advance-options " style="min-width: 186px;">S&#x1ED1; 1
                                            </li>
                                            <li vl="11207" class="advance-options " style="min-width: 186px;">S&#x1ED1; 8
                                            </li>
                                            <li vl="11209" class="advance-options " style="min-width: 186px;">S&#x1ED1; 11
                                            </li>
                                            <li vl="11211" class="advance-options " style="min-width: 186px;">S&#x1ED1; 10
                                            </li>
                                            <li vl="11217" class="advance-options " style="min-width: 186px;">S&#x1ED1; 5
                                            </li>
                                            <li vl="11219" class="advance-options " style="min-width: 186px;">S&#x1ED1; 3
                                            </li>
                                            <li vl="11222" class="advance-options " style="min-width: 186px;">S&#x1ED1; 7
                                            </li>
                                            <li vl="11223" class="advance-options " style="min-width: 186px;">S&#x1ED1; 2
                                            </li>
                                            <li vl="11225" class="advance-options " style="min-width: 186px;">S&#x1ED1; 16
                                            </li>
                                            <li vl="11227" class="advance-options " style="min-width: 186px;">S&#x1ED1; 14
                                            </li>
                                            <li vl="11228" class="advance-options " style="min-width: 186px;">S&#x1ED1; 22
                                            </li>
                                            <li vl="11232" class="advance-options " style="min-width: 186px;">S&#x1ED1; 4
                                            </li>
                                            <li vl="11233" class="advance-options " style="min-width: 186px;">S&#x1ED1; 9
                                            </li>
                                            <li vl="11240" class="advance-options " style="min-width: 186px;">S&#x1ED1; 13
                                            </li>
                                            <li vl="11245" class="advance-options " style="min-width: 186px;">S&#x1ED1; 23
                                            </li>
                                            <li vl="11255" class="advance-options " style="min-width: 186px;">S&#x1ED1; 18
                                            </li>
                                            <li vl="11449" class="advance-options " style="min-width: 186px;">3D</li>
                                            <li vl="11454" class="advance-options " style="min-width: 186px;">Long V&#xE2;n
                                                T&#x1EF1;</li>
                                            <li vl="11877" class="advance-options " style="min-width: 186px;">S&#x1ED1; 8
                                                C&#x1B0; x&#xE1; Chu V&#x103;n An</li>
                                            <li vl="12424" class="advance-options " style="min-width: 186px;">Phong Lan</li>
                                            <li vl="12825" class="advance-options " style="min-width: 186px;">T&#xE2;n
                                                C&#x1EA3;ng</li>
                                            <li vl="13092" class="advance-options " style="min-width: 186px;">12AB</li>
                                            <li vl="13548" class="advance-options " style="min-width: 186px;">S&#x1ED1; 19R
                                            </li>
                                            <li vl="13595" class="advance-options " style="min-width: 186px;">T30</li>
                                            <li vl="13850" class="advance-options " style="min-width: 186px;">H&#x1EBB;m
                                                D&#x1EA7;u</li>
                                            <li vl="14504" class="advance-options " style="min-width: 186px;">Nguy&#x1EC5;n
                                                Gia Tr&#xED;</li>
                                            <li vl="14793" class="advance-options " style="min-width: 186px;">C&#xF4;ng
                                                Tr&#x1B0;&#x1EDD;ng Ho&#xE0; B&#xEC;nh</li>
                                            <li vl="15299" class="advance-options " style="min-width: 186px;">ABC</li>
                                            <li vl="15336" class="advance-options " style="min-width: 186px;">Th&#x1EBF;
                                                K&#x1EF7; 21</li>
                                            <li vl="15345" class="advance-options " style="min-width: 186px;">S&#x1ED1; 5
                                                C&#x1B0; x&#xE1; Chu V&#x103;n An</li>
                                            <li vl="15484" class="advance-options " style="min-width: 186px;">860</li>
                                            <li vl="15540" class="advance-options " style="min-width: 186px;">S&#x1ED1; 2
                                                C&#x1B0; x&#xE1; Chu V&#x103;n An</li>
                                            <li vl="15720" class="advance-options " style="min-width: 186px;">Phan V&#x103;n
                                                T&#x1ECB;nh</li>
                                            <li vl="15734" class="advance-options " style="min-width: 186px;">S&#x1ED1; 1
                                                C&#x1B0; x&#xE1; Chu V&#x103;n An</li>
                                            <li vl="15743" class="advance-options " style="min-width: 186px;">S&#x1ED1; 3
                                                C&#x1B0; x&#xE1; Chu V&#x103;n An</li>
                                            <li vl="15868" class="advance-options " style="min-width: 186px;">C&#x1B0;
                                                x&#xE1; Thanh &#x110;a</li>
                                            <li vl="16381" class="advance-options " style="min-width: 186px;">S&#x1ED1; 4
                                                C&#x1B0; x&#xE1; Chu V&#x103;n An</li>
                                            <li vl="16529" class="advance-options " style="min-width: 186px;">Tr&#x1EA7;n
                                                Quang Long</li>
                                            <li vl="16532" class="advance-options " style="min-width: 186px;">Tr&#x1EA7;n
                                                Tr&#x1ECD;ng Kim</li>
                                            <li vl="16703" class="advance-options " style="min-width: 186px;">V&#xF5; Huy
                                                T&#x1EA5;n</li>
                                            <li vl="16772" class="advance-options " style="min-width: 186px;">V&#xF5; Oanh
                                            </li>
                                            <li vl="17209" class="advance-options " style="min-width: 186px;">S&#x1ED1; 6
                                                C&#x1B0; x&#xE1; Chu V&#x103;n An</li>
                                            <li vl="17486" class="advance-options " style="min-width: 186px;">S&#x1ED1; 7
                                                Chu V&#x103;n An</li>
                                            <li vl="19081" class="advance-options " style="min-width: 186px;">Tr&#x1EA7;n
                                                V&#x103;n Kh&#xEA;</li>
                                            <li vl="19204" class="advance-options " style="min-width: 186px;">S&#x1ED1; 7
                                                C&#x1B0; x&#xE1; Chu V&#x103;n An</li>
                                        </ul>
                                    </div>

                                    <div id="divProject" class="searchrow adv-search advance-select-box" title=""
                                        style="display: none;width:218px;">
                                        <span class="select-text"><input type="text" class="select-text-content"
                                                value="--Chọn dự án bất động sản--"
                                                placeholder="--Chọn dự án bất động sản--" style="width: 193px;"></span>
                                        <input data-val="true" data-val-required="The ProjectId field is required."
                                            id="hdCboProject" name="ProjectId" type="hidden" value="-1" />
                                    </div>
                                    <div id="divProjectOptions"
                                        class="advance-select-options advance-options advance-select-options-2"
                                        hddvalue="hdCboProject" ddlid="divProject" style="">
                                        <ul class="advance-options" style="min-width: 218px;">
                                            <li vl="0" class="advance-options current" style="min-width: 186px;">--Chọn dự
                                                án bất động sản--</li>
                                            <li vl="454" class="advance-options " style="min-width: 186px;">283 L&#xEA;
                                                Quang &#x110;&#x1ECB;nh</li>
                                            <li vl="1973" class="advance-options " style="min-width: 186px;">41Bis
                                                &#x110;i&#x1EC7;n Bi&#xEA;n Ph&#x1EE7;</li>
                                            <li vl="3811" class="advance-options " style="min-width: 186px;">Ascent Plaza
                                            </li>
                                            <li vl="1064" class="advance-options " style="min-width: 186px;">B1
                                                Tr&#x1B0;&#x1EDD;ng Sa</li>
                                            <li vl="708" class="advance-options " style="min-width: 186px;">B&#x1EAF;c
                                                B&#xEC;nh</li>
                                            <li vl="2729" class="advance-options " style="min-width: 186px;">BCons Tower
                                            </li>
                                            <li vl="4929" class="advance-options " style="min-width: 186px;">Bcons Tower II
                                            </li>
                                            <li vl="1263" class="advance-options " style="min-width: 186px;">B&#xEC;nh
                                                H&#xF2;a</li>
                                            <li vl="4732" class="advance-options " style="min-width: 186px;">C&#x103;n
                                                h&#x1ED9; B2 Tr&#x1B0;&#x1EDD;ng Sa</li>
                                            <li vl="97" class="advance-options " style="min-width: 186px;">Cantavil
                                                Ho&#xE0;n C&#x1EA7;u</li>
                                            <li vl="1631" class="advance-options " style="min-width: 186px;">Cao &#x1ED1;c
                                                v&#x103;n ph&#xF2;ng V Building</li>
                                            <li vl="840" class="advance-options " style="min-width: 186px;">Cape Pearl -
                                                Petrosetco Tower</li>
                                            <li vl="4156" class="advance-options " style="min-width: 186px;">Chung c&#x1B0;
                                                1050 Chu V&#x103;n An</li>
                                            <li vl="1294" class="advance-options " style="min-width: 186px;">Chung c&#x1B0;
                                                M&#x1EF9; &#x110;&#x1EE9;c</li>
                                            <li vl="2294" class="advance-options " style="min-width: 186px;">Chung c&#x1B0;
                                                Nguy&#x1EC5;n Huy L&#x1B0;&#x1EE3;ng</li>
                                            <li vl="1526" class="advance-options " style="min-width: 186px;">Chung c&#x1B0;
                                                Nguy&#x1EC5;n Ng&#x1ECD;c Ph&#x1B0;&#x1A1;ng</li>
                                            <li vl="1928" class="advance-options " style="min-width: 186px;">Chung c&#x1B0;
                                                Ph&#x1EA1;m Vi&#x1EBF;t Ch&#xE1;nh</li>
                                            <li vl="700" class="advance-options " style="min-width: 186px;">Chung c&#x1B0;
                                                Ph&#xFA; &#x110;&#x1EA1;t</li>
                                            <li vl="1279" class="advance-options " style="min-width: 186px;">Chung c&#x1B0;
                                                Th&#x1EBF; K&#x1EF7; 21</li>
                                            <li vl="341" class="advance-options " style="min-width: 186px;">City Garden</li>
                                            <li vl="1625" class="advance-options " style="min-width: 186px;">Compa Tower
                                            </li>
                                            <li vl="3678" class="advance-options " style="min-width: 186px;">CT Home
                                                B&#xEC;nh Th&#x1EA1;nh</li>
                                            <li vl="1644" class="advance-options " style="min-width: 186px;">C&#x1EED;u Long
                                            </li>
                                            <li vl="498" class="advance-options " style="min-width: 186px;">&#x110;&#x1EA1;i
                                                An - Saigon Riverside</li>
                                            <li vl="1511" class="advance-options " style="min-width: 186px;">
                                                &#x110;&#x1EA1;i Ph&#xFA;c River View</li>
                                            <li vl="101" class="advance-options " style="min-width: 186px;">&#x110;&#x1EA5;t
                                                Ph&#x1B0;&#x1A1;ng Nam</li>
                                            <li vl="1624" class="advance-options " style="min-width: 186px;">EBM Building
                                            </li>
                                            <li vl="2528" class="advance-options " style="min-width: 186px;">Elite Park</li>
                                            <li vl="3352" class="advance-options " style="min-width: 186px;">Gic Riverside
                                            </li>
                                            <li vl="2780" class="advance-options " style="min-width: 186px;">Gold Land
                                                B&#xEC;nh Th&#x1EA1;nh</li>
                                            <li vl="3123" class="advance-options " style="min-width: 186px;">Green Field
                                            </li>
                                            <li vl="5000" class="advance-options " style="min-width: 186px;">HB Tower</li>
                                            <li vl="1640" class="advance-options " style="min-width: 186px;">HUD Building
                                            </li>
                                            <li vl="4995" class="advance-options " style="min-width: 186px;">IOS V&#x103;n
                                                Th&#xE0;nh</li>
                                            <li vl="5055" class="advance-options " style="min-width: 186px;">KDC Lam
                                                S&#x1A1;n</li>
                                            <li vl="3293" class="advance-options " style="min-width: 186px;">Khu ph&#x1EE9;c
                                                h&#x1EE3;p 152 &#x110;i&#x1EC7;n Bi&#xEA;n Ph&#x1EE7;</li>
                                            <li vl="2464" class="advance-options " style="min-width: 186px;">La Bonita</li>
                                            <li vl="1801" class="advance-options " style="min-width: 186px;">Melody Tower
                                            </li>
                                            <li vl="1381" class="advance-options " style="min-width: 186px;">Mi&#x1EBF;u
                                                N&#x1ED5;i</li>
                                            <li vl="118" class="advance-options " style="min-width: 186px;">M&#x1EF9;
                                                Ph&#x1B0;&#x1EDB;c</li>
                                            <li vl="1764" class="advance-options " style="min-width: 186px;">Peace Building
                                            </li>
                                            <li vl="1287" class="advance-options " style="min-width: 186px;">Pearl Plaza
                                            </li>
                                            <li vl="1628" class="advance-options " style="min-width: 186px;">Qmobile Tower
                                            </li>
                                            <li vl="2493" class="advance-options " style="min-width: 186px;">Richmond City
                                            </li>
                                            <li vl="3602" class="advance-options " style="min-width: 186px;">Riverside 90
                                            </li>
                                            <li vl="2726" class="advance-options " style="min-width: 186px;">Rosena
                                                B&#xEC;nh Th&#x1EA1;nh</li>
                                            <li vl="84" class="advance-options " style="min-width: 186px;">Saigon Pearl</li>
                                            <li vl="1654" class="advance-options " style="min-width: 186px;">Saigonland
                                                Apartment</li>
                                            <li vl="2101" class="advance-options " style="min-width: 186px;">Saigonres Plaza
                                            </li>
                                            <li vl="982" class="advance-options " style="min-width: 186px;">Samland Building
                                            </li>
                                            <li vl="2388" class="advance-options " style="min-width: 186px;">Samland
                                                Riverside</li>
                                            <li vl="1216" class="advance-options " style="min-width: 186px;">SGC
                                                Nguy&#x1EC5;n C&#x1EED;u V&#xE2;n</li>
                                            <li vl="2425" class="advance-options " style="min-width: 186px;">Shophouse
                                                Vinhomes Central Park</li>
                                            <li vl="2400" class="advance-options " style="min-width: 186px;">Soho Premier
                                            </li>
                                            <li vl="2013" class="advance-options " style="min-width: 186px;">Soho Riverview
                                            </li>
                                            <li vl="2738" class="advance-options " style="min-width: 186px;">Sun Village
                                                Apartment</li>
                                            <li vl="2725" class="advance-options " style="min-width: 186px;">Sunwah Pearl
                                            </li>
                                            <li vl="2312" class="advance-options " style="min-width: 186px;">Tecco Central
                                                Home</li>
                                            <li vl="1029" class="advance-options " style="min-width: 186px;">Thanh &#x110;a
                                                View</li>
                                            <li vl="1967" class="advance-options " style="min-width: 186px;">Thanh Ni&#xEA;n
                                            </li>
                                            <li vl="1636" class="advance-options " style="min-width: 186px;">Th&#x1EA3;o
                                                &#x110;i&#x1EC1;n Building</li>
                                            <li vl="984" class="advance-options " style="min-width: 186px;">The Hyco4 Tower
                                            </li>
                                            <li vl="4343" class="advance-options " style="min-width: 186px;">The Landmark 81
                                            </li>
                                            <li vl="85" class="advance-options " style="min-width: 186px;">The Manor HCM
                                            </li>
                                            <li vl="460" class="advance-options " style="min-width: 186px;">The Morning Star
                                                Plaza</li>
                                            <li vl="3877" class="advance-options " style="min-width: 186px;">The Penta</li>
                                            <li vl="916" class="advance-options " style="min-width: 186px;">TTTM H&#xE0;ng
                                                Xanh</li>
                                            <li vl="1330" class="advance-options " style="min-width: 186px;">V_Center</li>
                                            <li vl="1328" class="advance-options " style="min-width: 186px;">V_ikon</li>
                                            <li vl="3185" class="advance-options " style="min-width: 186px;">Vin Office</li>
                                            <li vl="1883" class="advance-options " style="min-width: 186px;">Vinhomes
                                                Central Park</li>
                                            <li vl="2091" class="advance-options " style="min-width: 186px;">Wilton Tower
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="searchbtn">
                                        <input type="image" name="btnSearch" id="btnSearchContext"
                                            onmouseover="this.src = 'https://file4.batdongsan.com.vn/images/search2.jpg'"
                                            onmouseout="this.src = 'https://file4.batdongsan.com.vn/images/opt/search1.jpg'"
                                            src="https://file4.batdongsan.com.vn/images/opt/search1.jpg">
                                    </div>
                                    <div id="divLabelSearchAdv">
                                        <span class="box-sub-title" id="lblSearch">Tìm nâng cao</span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both;"></div>

            <div class="box-tien-ich">
                <div class="box-header aligncenter">
                    <h2 class="name_tit">Hỗ trợ tiện ích</h2>
                </div>
                <div class="bor_box">
                    <ul>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-xem-huong-nha">
                                <img alt="Tư vấn phong thủy"
                                    src="https://file4.batdongsan.com.vn/images/icon-phongthuy.png">Tư vấn phong thủy
                            </a>
                        </li>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-du-toan-chi-tiet">
                                <img alt="Tính lãi suất" src="https://file4.batdongsan.com.vn/images/icon-chiphi.png">Dự
                                tính chi phí làm nhà
                            </a>
                        </li>
                        <li>
                            <a href="/ho-tro-tien-ich/ht-tinh-lai-suat">
                                <img alt="Tính lãi suất" src="https://file4.batdongsan.com.vn/images/icon-laisuat.png">Tính
                                lãi suất
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="clear10"></div>

            <div id="content-main-right">
                <div id="column-right">

                    <div class="box1">
                        <h2 class="h1">Dành cho người xây nhà</h2>
                        <ul>
                            <li>
                                <a href="/quy-trinh-xay-nha" title="Quy tr&#xEC;nh x&#xE2;y nh&#xE0;" rel="nofollow">Quy
                                    tr&#xEC;nh x&#xE2;y nh&#xE0;</a>
                            </li>
                            <li class="last">
                                <a href="/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" title="Xem tu&#x1ED5;i x&#xE2;y nh&#xE0;"
                                    rel="nofollow">Xem tu&#x1ED5;i x&#xE2;y nh&#xE0;</a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
            <div style="clear:both;"></div>
            <div class="fb-fanpage">
                <div id="fb-root"></div>
                <script>
                    (function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s);
                        js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=302507473246792";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));

                </script>

                <div class="fb-page" data-href="https://www.facebook.com/Batdongsandv/" data-small-header="false"
                    data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/Batdongsandv/" class="fb-xfbml-parse-ignore"><a
                            href="https://www.facebook.com/Batdongsandv/">Batdongsan.com.vn</a></blockquote>
                </div>
            </div>

            <div style="clear:both;"></div>
        </div>
        <div class="banner-bottom">
            <div id="SubBottomLeftMainContent" style="float: left; width: 560px"></div>
            <div id="SubBottomRightMainContent" style="float: left; width: 430px; margin-left: 5px"></div>
        </div>



        <div class="banner-bottom">
            <div style="float: left; width: 560px">
            </div>
            <div style="float: left; width: 430px; margin-left: 5px">
            </div>
        </div>
        <div class="clearfix"></div>

    </div>

    <div id="SiteRight" class="banner-right clearfix">
        <div class="container-default">
            <div>
                <div id="ban_wide_right" class="ban_wide_scroll">
                    <div class="adPosition" positionCode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
                    <script type='text/javascript'>
                        var bannerContext = {
                            "CateId": 0,
                            "PageId": null,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 575
                        };

                    </script>
                </div>

                <div id="ban_right" class="ban_scroll">
                    <div class="adPosition" positionCode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
                    <script type='text/javascript'>
                        var bannerContext = {
                            "CateId": 0,
                            "PageId": null,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 575
                        };

                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <div class="modal fade" id="dialogPopup" role="dialog">
        <div class="nomodal"></div>
        <div class="modal-dialog">
            <div class="modal-content ">
            </div>
        </div>
    </div>

    <div class="adPosition" positionCode="BANNER_POSITION_FLOADING_BOTTOM" style=""></div>
    <script type='text/javascript'>
        var bannerContext = {
            "CateId": 0,
            "PageId": null,
            "CityCode": null,
            "DistrictId": null,
            "CurrentPage": 575
        };

    </script>

    <div class="hide" id="domainUserInfo" data-value="https://batdongsan.com.vn"></div>
    <div class="hide" id="domainWeb" data-value="https://batdongsan.com.vn"></div>
    <div class="hide" id="getBannerUrl" data-value="/microservice-architecture-router/Systems/Banner/GetBanners"></div>
    <div class="hide" id="domainStatistic" data-value="https://statistic.batdongsan.com.vn"></div>
    <div class="popup-content ">
    </div>
    <div class="lg-backdrop in" id="dialog-backdrop" style="transition-duration: 150ms;display: none;"
        onclick="account.CloseAccountPopup()"></div>
    <div id="gototop" title="Go to top"></div>
    </div>
    <div style="display: none" class="searching-histories-configs" max-searching-histories-length="20"
        sync-time-searching-histories="5" sync-searching-histories-url="/Product/ProductSearch/SyncSearchingHistories"
        remove-searching-histories-url="/Product/ProductSearch/RemoveSearchingHistory">
    </div>


    <script src="https://staticfile.batdongsan.com.vn/js/Common/filestatic.ver202011191123.msvbds.FrontEnd.Common.min.js">
    </script>

    <!--start BannerContext-->
    <script type='text/javascript'>
        var __bannerContext = {
            "PageId": 575,
            "CateId": null,
            "CityCode": null,
            "DistrictId": null,
            "CurrentPage": 1
        };

    </script>
    <!--end BannerContext-->
    <!--Start of Zendesk Chat Script-->
    <script type="text/javascript">
        window.$zopim || (function(d, s) {
            var z = $zopim = function(c) {
                    z._.push(c)
                },
                $ = z.s =
                d.createElement(s),
                e = d.getElementsByTagName(s)[0];
            z.set = function(o) {
                z.set.
                _.push(o)
            };
            z._ = [];
            z.set._ = [];
            $.async = !0;
            $.setAttribute("charset", "utf-8");
            $.src = "https://v2.zopim.com/?6fJlcOXWwJofJZOzmeDIifb7bHGvvSte";
            z.t = +new Date;
            $.
            type = "text/javascript";
            e.parentNode.insertBefore($, e)
        })(document, "script");

    </script>
    <!--End of Zendesk Chat Script-->
    <script type="text/javascript">
        var newsLetterRegister = new newsLetterRegister.NewsLetterRegister();
        newsLetterRegister.InitializeLoad();

        var commentUser = new commentUser.CommentUser();
        commentUser.InitializeLoad();

        var paramAccount = {
            urlListLogin: '/Systems/Account/Login',
            urlListRegister: '/Systems/Account/Register',
            urlListForgetPass: '/Systems/Account/ForgetPassword',
            urlListCity: '/Contacts/CommonData/GetCityList',
            urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
            urlListWard: '/Contacts/CommonData/GetWardList',
        };

        var account = new account.Content();
        account.Initialize(paramAccount);

        var footer = new footer.Footer();
        footer.Initialize();

        var menu = new menu.Menu();
        menu.Initialize();

    </script>

    <div sync-marked-products-url="/Product/MarkedProducts/SyncMarkedProducts"
        unmarked-product-url="/Product/MarkedProducts/UnmarkProduct" marked-product-ids-sync-time="0.5"></div>



    <script
        src="https://staticfile.batdongsan.com.vn/js/FengShui/filestatic.ver202011191123.msvbds.FrontEnd.FengShui.Detail.min.js">
    </script>
    <script
        src="https://staticfile.batdongsan.com.vn/js/FengShui/filestatic.ver202011191123.msvbds.FrontEnd.FengShui.SendMail.min.js">
    </script>
    <script
        src="https://staticfile.batdongsan.com.vn/js/Product/filestatic.ver202011191123.msvbds.FrontEnd.Product.Search.min.js">
    </script>
    <script
        src="https://staticfile.batdongsan.com.vn/js/Product/filestatic.ver202011191123.msvbds.FrontEnd.Product.ProductHome.min.js">
    </script>
    <script
        src="https://staticfile.batdongsan.com.vn/js/Productfilestatic.ver202011191123.msvbds./FrontEnd.Product.RegisterEmailSale.min.js">
    </script>
    <script
        src="https://staticfile.batdongsan.com.vn/js/Product/filestatic.ver202011191123.msvbds.FrontEnd.Product.Demand.min.js">
    </script>

    <script type="text/javascript">
        //Box Phong thuy
        var fengshuiDetail = new fengshuiDetail.Detail();
        var paramsSendMail = {
            lnkSendEmail: '#lnkSendEmail',
            btnSendMail: '#btnSendMail',
            formSubmitSendMail: '#formSubmitSendMail',
            urlSendMail: '/FengShui/FengShuiSendMail/Send',
            detailUrl: 'http://batdongsan.com.vn/mua-nha-mat-pho-binh-thanh/can-tim-mua-nha-chinh-chu-gia-tot-tai-cac-quan-tp-hcm-ad105920'
        };
        var fengShuiSendMail = new fengShuiSendMail.FengShuiSendMail();
        fengShuiSendMail.Initialize(paramsSendMail);

        //Box send mail
        var paramsDemandSendMail = {
            lnkSendEmail: '#lnkDemandSendEmail',
            btnSendMail: '#btnSendMail',
            formSubmitSendMail: '#formSubmitSendMail',
            tilePopup: 'Đóng góp - Phản hồi',
            urlSendMail: '/Demand/DemandSendMail/Send',
            detailUrl: 'http://batdongsan.com.vn/mua-nha-mat-pho-binh-thanh/can-tim-mua-nha-chinh-chu-gia-tot-tai-cac-quan-tp-hcm-ad105920'
        };
        fengShuiSendMail.Initialize(paramsDemandSendMail);

        //Box Search
        var params = {
            formSubmit: "#formSubmit",
            loadContent: "#contentPage",
            ddlSortBy: "#ddlSortBy",
            tabActive: ".tabactive",
            tabIndexValue: "#tabIndexValue",
            sortValue: "#sortValue",
            urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
            urlListStreet: '/Contacts/CommonData/GetStreetList',
            urlListWard: '/Contacts/CommonData/GetWardList',
            urlListRoom: '/Contacts/CommonData/GetRoomList',
            urlListDirection: '/Contacts/CommonData/GetDirectionList',
            urlListProject: '/Contacts/CommonData/GetListProjectByDistrict',
            urlListSubCate: '/Contacts/CommonData/GetCategoryByParentId',
            urlListPrice: '/Contacts/CommonData/GetPriceList',
            urlRegisterEmailSale: '/Systems/EmailSendRegister/EmailRegisterSale',
            suggestionApi: {
                apiForSell: 'https://suggestion1.batdongsan.com.vn/',
                apiForRent: 'https://suggestion2.batdongsan.com.vn/'
            }
        };

        var productHome = new product.ProductHome();
        productHome.InitializeLoad(params);

        var hdbCategory = $('#divCategory').AdvanceHiddenDropbox({
            id: 'divCatagoryOptions',
            hddValue: 'hdCboCatagory'
        });

        // Popup Register
        var paramsRegister = {
            emailregister: "#emailregister",
            urlRegisterEmailSale: '/Systems/EmailSendRegister/EmailRegisterSale',
            urlListSubCate: '/Contacts/CommonData/GetAdNewsCateDefinitionHtmlByParentId',
            urlListDistrict: '/Contacts/CommonData/GetListDistrictByCity',
            urlListStreet: '/Contacts/CommonData/GetStreetList',
            urlListWard: '/Contacts/CommonData/GetWardList',
            urlListRoom: '/Contacts/CommonData/GetRoomList',
            urlListDirection: '/Contacts/CommonData/GetDirectionList',
            urlListProject: '/Contacts/CommonData/GetListProjectByDistrict',
        };
        var productRegister = new registerEmailSale.EmailSale();
        productRegister.InitializeLoad(paramsRegister);

    </script>

    <script type="text/javascript">
        try {
            var script_imported = document.createElement('script');
            script_imported.src = 'https://log.batdongsan.com.vn/js/bds/bds-msv-log.min.js?hv=2&dv=' + (new Date().toJSON()
                .slice(0, 10));
            if (document.body != null && document.body != undefined) {
                document.body.appendChild(script_imported);
            } else {
                document.head.appendChild(script_imported);
            }
        } catch (e) {}

    </script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            var lazyImages = [].slice.call(document.querySelectorAll('[src-lazy]'));
            window.countOfLazyImages = lazyImages.length;
            if ('IntersectionObserver' in window) {
                let lazyImageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            let lazyImage = entry.target;
                            if (lazyImage.attributes['src-lazy']) {
                                lazyImage.src = lazyImage.attributes['src-lazy'].value;
                                lazyImage.removeAttribute('src-lazy');
                                lazyImageObserver.unobserve(lazyImage);
                            }
                        };
                    });
                });
                lazyImages.forEach(function(lazyImage, i) {
                    lazyImage.setAttribute('lazy-id', i);
                    lazyImageObserver.observe(lazyImage);
                });
                (function checkDuplicate() {
                    var countOfLazyElements = [].slice.call(document.querySelectorAll('[lazy-id]'));
                    if (countOfLazyElements.length > window.countOfLazyImages) {
                        var elements = [].slice.call(document.querySelectorAll('[src-lazy]'));
                        elements.forEach(element => {
                            var lazyId = element.attributes['lazy-id'].value;
                            var lazyElements = [].slice.call(document.querySelectorAll(
                                `[lazy-id="${lazyId}"]`));
                            if (lazyElements.length > 1) {
                                for (var i = 1; i < lazyElements.length; i++) {
                                    var lazyElement = lazyElements[i];
                                    lazyImageObserver.observe(lazyElement);
                                    lazyElement.setAttribute('lazy-id', window.countOfLazyImages);
                                    window.countOfLazyImages++;
                                }
                            }
                        });
                    }
                    setTimeout(checkDuplicate, 1000)
                })();
            } else {
                $('[src-lazy]').each(function() {
                    this.src = this.attributes['src-lazy'].value;
                    this.removeAttribute('src-lazy');
                });
            }
        });

    </script>
@endsection
