@extends('layouts.master')
@section('title','Tin tức bất động sản - Mua bán nhà đất số 1 Việt Nam')

@section('styles')
<link rel="stylesheet" href="https://staticfile.batdongsan.com.vn/css/filestatic.ver202011110519.msvbds.FrontEnd.min.css" />
<link rel="stylesheet" type="text/css" href="https://staticfile.batdongsan.com.vn/css/Broker/broker.min.css" media="all">
<link href="https://file4.batdongsan.com.vn/images/icon-bds.ico" rel="shortcut icon" type="image/x-icon" />

@endsection

@section('content')
<body class="bg-site">
    

    <div class="form-content">
        <div class="adPosition" positionCode="BANNER_POSITION_BACKGROUND" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>

        <div id="staticDomain" statsDomain="https://statistic.batdongsan.com.vn" data-fileimg="https://file4.batdongsan.com.vn" data-web="https://batdongsan.com.vn" data-msvrouter="/microservice-architecture-router" data-msvrouter-personal="/microservice-architecture-router-personal" data-cssServer="https://staticfile.batdongsan.com.vn" data-oldsystem="https://batdongsan.com.vn" data-content="https://batdongsan.com.vn" data-domainorigin="batdongsan.com.vn" data-sug-sell="https://suggestion1.batdongsan.com.vn/" data-sug-rent="https://suggestion2.batdongsan.com.vn/" class="hide"></div>
        <div id="addonImage" addon-image="https://staticfile.batdongsan.com.vn/images/no-image.png"></div>
        <div id="SiteLeft" class="banner-left">
            <div class="container-default">
                <div>
                    <div id="ban_wide_left" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
                    </div>

                    <div id="ban_left" class="ban_scroll" style="display: block; top: 0px; position: fixed; left: 321.5px;">
                        <div class="adPosition" positionCode="BANNER_POSITION_LEFT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="popupMarking  save" style="display: none">
            <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/filled/ic_unsave.svg">
            <span> L&#x1B0;u tin th&#xE0;nh c&#xF4;ng</span>
        </div>
        <div class="popupMarking  unsave" style="display: none">
            <img src="https://staticfile.batdongsan.com.vn/images/mobile/icons/24x24/outlined/ic_save.svg">
            <span> &#x110;&#xE3; b&#x1ECF; l&#x1B0;u tin</span>
        </div>
            <div class="site-center">
                


<div id="MiddleSubMenu">
    <div class="home-top-search" style="padding-bottom: 10px !important;">
    <div class="home-top-search-keyword">
    <form role="search" method="get" id="searchform" action="{{route('searchTinTuc')}}">
            <input type="text" value="" name="timtintuc" id="searchnews" placeholder="Nhap Tu Khoa..."/>
            <button type="submit" id="searchsubmit">Tim Kiem</button>
        </form> 
    </div>
    <div class="advance-select-box" id="home-top-search">
        <input type="hidden" id="cboTypeSearch" value="4">
    </div>
    <div id="home-top-search-otions" class="advance-select-options advance-options" hddvalue="cboTypeSearch" ddlid="home-top-search" style="">
    </div>
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
    <div id="LeftMainContent">
        <div class="container-default">
            <div id="ctl23_BodyContainer">
                <div class="body-left">
                    <div id="ctl23_ctl00_panelCate" class="detailsView-title-style">
                        <div class="font-title-list-news"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                    
            
            
            <div class="clear line"></div>


            @foreach ($articles as $article)
            
            <div class="tintuc-row1 tintuc-list tc-tit">
                <div class="tc-img list-news-image-title">
                    <a href="{!! Route('tintuc_single_post', $article->id) !!}" title="{!! $article->title !!}">
                        <img class="bor_img" style="width: 132px; height: 100px;" alt="{!! $article->title !!}" src="{!! $article->image_link !!}">
                    </a>&nbsp;&nbsp;
                </div>
                <h3>
                    <a class="link_blue" href="{!! Route('tintuc_single_post', $article->id) !!}" title="{!! $article->title !!}">
                        {!! $article->title !!}
                    </a>
                </h3>
                <div class="datetime">
                    {!! $article->updated_at !!}
                </div>
                <p style="text-rendering:geometricPrecision;">
                    {!! $article->title !!}
                </p>
            </div>

            
            
            @endforeach
            <div style="float: right; color: blue;">
            {{ $articles->links() }}
            </div>
            
    <div class="clear">
    </div>
    <div class="margit5">
        <div class="tc-tit-bottom">
        </div>
    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<div style= "width: 400px ; float: left ; margin-top: 25px" id="RightMainContent" class="body-right"  >
    <div>
            <div class="container-common">
    </div>

    </div>
    <div style="clear:both;"></div>
    <div class="adPosition" positionCode="BANNER_POSITION_RIGHT_MAIN_CONTENT" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
    <div style="clear:both;"></div>
    

    <div class="container-common">
        <div class="box-header">
            <div class="name_tit" align="center">
                <h2 style="color: White;">
                    Có thể bạn quan tâm
                </h2>
            </div>
        </div>

        <div class="bor_box">
            @foreach ($recommend as $rec)
                
            
                <div style="clear: both;"></div>
                <div style="padding: 5px; width: 60px; height: 60px; float: left;">
                    <div class="many-readers-title-icon">
                        <a title={!! $rec->title !!}>
                            <img style="width: 60px; height: 60px;" src={!! $rec->image_link !!}>
                        </a>
                    </div>
                </div>
                <div class="data-default-CSSClass">
                    <p style="padding: 0px; margin: 5px 5px 0 5px;">
                        <a class="controls-view-date-contents-link"  href="{!! Route('tintuc_single_post', $rec->id) !!}" title={!! $rec->title !!}>
                            {!! $rec->title !!}
                        </a>
                    </p>
                </div>
            @endforeach
                <div style="clear: both;"></div>
        </div>
    </div>


    <div style="clear: both; margin-bottom: 10px;"></div>
    
<div class="container-common">
    <div class="box-header">
        <h2 class="name_tit" align="center">Ch&#x1EE7; &#x111;&#x1EC1; &#x111;&#x1B0;&#x1EE3;c quan t&#xE2;m</h2>
    </div>
    <div class="bor_box">
        <div class="list">

            <ul>

                        <li>    
                            <button onclick="topic('mua ban nha')">Kinh nghiệm mua bán nhà</button>
                        </li>

                        <li>    
                            <button onclick="topic('bao cao')">Báo cáo thị trường ThangLongland.vn</button>

                        </li>

                        <li>    
                            <button onclick="topic('tu van')">Có hẹn với chuyên gia bất động sản</button>

                        </li>

                        <li>    
                            <button onclick="topic('thi truong')">Diễn biến thị trường BĐS năm 2020</button>

                        </li>

                        <li>    
                            <button onclick="topic('chinh sach')">Bảo vệ người mua nhà, đất</button>

                        </li>

                        <li>    
                            <button onclick="topic('bieu do')">Infographic</button>

                        </li>

                        <li>    
                            <button onclick="topic('covid')">BĐS & Covid-19</button>

                        </li>

                        <li>    
                            <button onclick="topic('du an')">Dự án mới</button>

                        </li>
                        
                        
            </ul>
        </div>
    </div>
</div>
    <div style="clear: both; margin-bottom: 10px;"></div>
    <div class="box-tien-ich">
        <div class="box-tien-ich">
    <div class="box-header aligncenter">
        <h2 class="name_tit">Hỗ trợ tiện ích</h2>
    </div>
    <div class="bor_box">
        <ul>
            <li>
                <a href="/phong-thuy">
                    <img alt="Tư vấn phong thủy" src="https://file4.batdongsan.com.vn/images/icon-phongthuy.png">Tư vấn phong thủy
                </a>
            </li>
            <li>
                <a href="https://www.nhadepuct.com.vn/bao-gia/bao-gia.html">
                    <img alt="Tính lãi suất" src="https://file4.batdongsan.com.vn/images/icon-chiphi.png">Dự tính chi phí làm nhà
                </a>
            </li>
            <li>
                <a href="https://www.techcombank.com.vn/cong-cu-tien-ich/cong-cu-tinh-toan/tinh-lai-tiet-kiem">
                    <img alt="Tính lãi suất" src="https://file4.batdongsan.com.vn/images/icon-laisuat.png">Tính lãi suất
                </a>
            </li>
        </ul>
    </div>
</div>
    </div>
    <div class="clear10"></div>
    <div style="clear:both;"></div>
    <div>
        
        <div class="clear10"></div>
    </div>
    <div style="clear:both;"></div>

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

        <div id="SiteRight" class="banner-right clearfix">
            <div class="container-default">
                <div>
                    <div id="ban_wide_right" class="ban_wide_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
                    </div>

                    <div id="ban_right" class="ban_scroll">
                        <div class="adPosition" positionCode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="dialogPopup" role="dialog">
            <div class="nomodal"></div>
            <div class="modal-dialog">
                <div class="modal-content ">
                </div>
            </div>
        </div>

        <div class="adPosition" positionCode="BANNER_POSITION_FLOADING_BOTTOM" style=""></div>
<script type='text/javascript'> var bannerContext={"CateId":88,"PageId":null,"CityCode":null,"DistrictId":null,"CurrentPage":97};</script>

        <div class="hide" id="domainUserInfo" data-value="https://batdongsan.com.vn"></div>
        <div class="hide" id="domainWeb" data-value="https://batdongsan.com.vn"></div>
        <div class="hide" id="getBannerUrl" data-value="/microservice-architecture-router/Systems/Banner/GetBanners"></div>
        <div class="hide" id="domainStatistic" data-value="https://statistic.batdongsan.com.vn"></div>
        <div class="popup-content ">
        </div>
        <div class="lg-backdrop in" id="dialog-backdrop" style="transition-duration: 150ms;display: none;" onclick="account.CloseAccountPopup()"></div>
        <div id="gototop" title="Go to top"></div>
    </div>
    <div style="display: none"
         class="searching-histories-configs"
         max-searching-histories-length="20"
         sync-time-searching-histories="5"
         sync-searching-histories-url="/Product/ProductSearch/SyncSearchingHistories"
         remove-searching-histories-url="/Product/ProductSearch/RemoveSearchingHistory">
    </div>
    
</body>
<script>
    function topic(key) {
      document.getElementById('searchnews').value= key;
      document.getElementById('searchform').submit();
    }


</script>

@endsection