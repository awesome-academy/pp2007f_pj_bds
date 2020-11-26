@extends('layouts.master')

@section('title', 'Kênh thông tin bất động sản - Mua bán nhà đất số 1 Việt Nam')

@section('style-libraries')
    <link rel="stylesheet" type="text/css" href="./assets/css/filestatic.msvbds.home.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/box.css">
@endsection


@section('content')
    <!-- Banner & search tool-->
    <div class="new-home-2020">
        <div class="home-center">
            <div class="banner-home-slide">
                <form action="/microservice-architecture-router/Product/ProductSearch/Index" method="post"
                    novalidate="novalidate">
                    <div class="home-search">
                        <div class="home-search-tool">
                            <ul class="home-search-tab">
                                <li class="actived" ptype="38">Nhà đất bán</li>
                                <li ptype="49">Nhà đất cho thuê</li>
                            </ul>
                            <div class="home-search-content">
                                <div class="home-search-control">
                                    <div class="search-cate">
                                        <div class="select-custom">
                                            <o id="lblCurrCate">Loại nhà đất</o>
                                        </div>
                                        <div id="divCatagoryReOptions" class="advance-select-options">
                                            <ul>
                                                <li vl="0"><span>Tất cả nhà đất</span></li>
                                                <li vl="324"><span><img src="./assets/image/chungcu.png">Căn hộ chung cư</span>
                                                </li>
                                                <li vl="362"><span><img src="./assets/image/nhaban.png">Các loại nhà bán</span>
                                                    <ul style="min-width: 210px !important;">
                                                        <li vl="41"><span>Nhà riêng</span></li>
                                                        <li vl="325"><span>Nhà biệt thự, liền kề</span></li>
                                                        <li vl="163"><span>Nhà mặt phố</span></li>
                                                    </ul>
                                                </li>
                                                <li vl="361"><span><img src="./assets/image/datban.png">Các loại đất bán</span>
                                                    <ul style="min-width: 210px !important;">
                                                        <li vl="40"><span>Đất nền dự án</span></li>
                                                        <li vl="283"><span>Bán đất</span></li>
                                                    </ul>
                                                </li>
                                                <li vl="44"><span><img src="./assets/image/trangtrai.png">Trang trại, khu nghỉ
                                                        dưỡng</span></li>
                                                <li vl="45"><span><img src="./assets/image/khonhaxuong.png">Kho, nhà xưởng</span>
                                                </li>
                                                <li vl="48"><span><img src="./assets/image/bdskhac.png">Bất động sản khác</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-input">
                                        <input type="text" id="txtSearch" placeholder="Tìm kiếm địa điểm, khu vực"
                                            autocomplete="off" role="textbox" aria-autocomplete="list" aria-haspopup="true"
                                            name="txtSearch" class="ui-autocomplete-input">
                                        <input type="hidden" id="keyWord" name="KeyWord">
                                    </div>
                                    <div class="search-button">
                                        <input type="button" class="btn-home-search" value="Tìm kiếm" id="btnSearch">
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="home-filter home-filter-1 slideClose">
                                    <div id="divCity" class="search-filter advance-select-box">
                                        <span class="select-text select-custom"><input type="text"
                                                class="select-text-content" value="Trên toàn quốc"
                                                placeholder="Trên toàn quốc" style="width: 148px;"></span>
                                        <input id="hdCboCity" name="CityCode" type="hidden" value="CN">
                                        <input data-val="true" data-val-required="The DistrictId field is required."
                                            id="hdCboDistrict" name="DistrictId" type="hidden" value="">
                                        <div id="divCityOptions"
                                            class="custom-scroll advance-select-options advance-options"
                                            hddvalue="hdCboCity,hdCboDistrict" ddlid="divCity" currlevel="1"
                                            style="width: 190px;">
                                            <ul class="advance-options level" style="min-width: 190px;">
                                                <li vl="CN" class="advance-options">Trên toàn quốc</li>
                                                <li vl="SG" class="advance-options">Hồ Chí Minh</li>
                                                <li vl="HN" class="advance-options">Hà Nội</li>
                                                <li vl="DDN" class="advance-options">Đà Nẵng</li>
                                                <li vl="BD" class="advance-options">Bình Dương</li>
                                                <li vl="DNA" class="advance-options">Đồng Nai</li>
                                                <li vl="KH" class="advance-options">Khánh Hòa</li>
                                                <li vl="HP" class="advance-options">Hải Phòng</li>
                                                <li vl="LA" class="advance-options">Long An</li>
                                                <li vl="QNA" class="advance-options">Quảng Nam</li>
                                                <li vl="VT" class="advance-options">Bà Rịa Vũng Tàu</li>
                                                <li vl="DDL" class="advance-options">Đắk Lắk</li>
                                                <li vl="CT" class="advance-options">Cần Thơ</li>
                                                <li vl="BTH" class="advance-options">Bình Thuận </li>
                                                <li vl="LDD" class="advance-options">Lâm Đồng</li>
                                                <li vl="TTH" class="advance-options">Thừa Thiên Huế</li>
                                                <li vl="KG" class="advance-options">Kiên Giang</li>
                                                <li vl="BN" class="advance-options">Bắc Ninh</li>
                                                <li vl="QNI" class="advance-options">Quảng Ninh</li>
                                                <li vl="TH" class="advance-options">Thanh Hóa</li>
                                                <li vl="NA" class="advance-options">Nghệ An</li>
                                                <li vl="HD" class="advance-options">Hải Dương</li>
                                                <li vl="GL" class="advance-options">Gia Lai</li>
                                                <li vl="BP" class="advance-options">Bình Phước</li>
                                                <li vl="HY" class="advance-options">Hưng Yên</li>
                                                <li vl="BDD" class="advance-options">Bình Định</li>
                                                <li vl="TG" class="advance-options">Tiền Giang</li>
                                                <li vl="TB" class="advance-options">Thái Bình</li>
                                                <li vl="BG" class="advance-options">Bắc Giang</li>
                                                <li vl="HB" class="advance-options">Hòa Bình</li>
                                                <li vl="AG" class="advance-options">An Giang</li>
                                                <li vl="VP" class="advance-options">Vĩnh Phúc</li>
                                                <li vl="TNI" class="advance-options">Tây Ninh</li>
                                                <li vl="TN" class="advance-options">Thái Nguyên</li>
                                                <li vl="LCA" class="advance-options">Lào Cai</li>
                                                <li vl="NDD" class="advance-options">Nam Định</li>
                                                <li vl="QNG" class="advance-options">Quảng Ngãi</li>
                                                <li vl="BTR" class="advance-options">Bến Tre</li>
                                                <li vl="DNO" class="advance-options">Đắk Nông</li>
                                                <li vl="CM" class="advance-options">Cà Mau</li>
                                                <li vl="VL" class="advance-options">Vĩnh Long</li>
                                                <li vl="NB" class="advance-options">Ninh Bình</li>
                                                <li vl="PT" class="advance-options">Phú Thọ</li>
                                                <li vl="NT" class="advance-options">Ninh Thuận</li>
                                                <li vl="PY" class="advance-options">Phú Yên</li>
                                                <li vl="HNA" class="advance-options">Hà Nam</li>
                                                <li vl="HT" class="advance-options">Hà Tĩnh</li>
                                                <li vl="DDT" class="advance-options">Đồng Tháp</li>
                                                <li vl="ST" class="advance-options">Sóc Trăng</li>
                                                <li vl="KT" class="advance-options">Kon Tum</li>
                                                <li vl="QB" class="advance-options">Quảng Bình</li>
                                                <li vl="QT" class="advance-options">Quảng Trị</li>
                                                <li vl="TV" class="advance-options">Trà Vinh</li>
                                                <li vl="HGI" class="advance-options">Hậu Giang</li>
                                                <li vl="SL" class="advance-options">Sơn La</li>
                                                <li vl="BL" class="advance-options">Bạc Liêu</li>
                                                <li vl="YB" class="advance-options">Yên Bái</li>
                                                <li vl="TQ" class="advance-options">Tuyên Quang</li>
                                                <li vl="DDB" class="advance-options">Điện Biên</li>
                                                <li vl="LCH" class="advance-options">Lai Châu</li>
                                                <li vl="LS" class="advance-options">Lạng Sơn</li>
                                                <li vl="HG" class="advance-options">Hà Giang</li>
                                                <li vl="BK" class="advance-options">Bắc Kạn</li>
                                                <li vl="CB" class="advance-options">Cao Bằng</li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div id="divPrice" class="search-filter advance-select-box">
                                        <span class="select-text select-custom hasvalue">
                                            <span class="select-text-content" style="width: 148px;">Mức giá</span>
                                        </span>
                                        <input data-val="true" data-val-required="The PriceId field is required."
                                            id="hdCboPrice" name="PriceId" type="hidden" value="-1">
                                        <div id="divPriceOptions"
                                            class="advance-select-options advance-price-options advance-options"
                                            minvalue="txtPriceMinValue" maxvalue="txtPriceMaxValue" unit="money"
                                            lblmin="lblPriceMin" lblmax="lblPriceMax" hddvalue="hdCboPrice" ddlid="divPrice"
                                            currlevel="1" style="width: 190px;">
                                            <div class="custom-slider">
                                                <input class="min-value advance-options" data-val="true"
                                                    data-val-number="The field MinPrice must be a number." decimal="true"
                                                    id="txtPriceMinValue" maxlength="6" name="MinPrice" numbersonly="true"
                                                    placeholder="Từ" type="text">
                                                <span>-</span>
                                                <input class="min-value advance-options" data-val="true"
                                                    data-val-number="The field MaxPrice must be a number." decimal="true"
                                                    id="txtPriceMaxValue" maxlength="6" name="MaxPrice" numbersonly="true"
                                                    placeholder="Đến" type="text">
                                                <div id="price-slider-range"
                                                    class="price-filter-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                    name="rangeInput">
                                                    <div class="ui-slider-range ui-widget-header"
                                                        style="left: 0%; width: 100%;"></div><a href="#"
                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                        style="left: 0%;"></a><a href="#"
                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                        style="left: 100%;"></a>
                                                </div>
                                            </div>
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="-1" class="advance-options">Mức giá</li>
                                                <li vl="1" class="advance-options">&lt; 500 triệu</li>
                                                <li vl="2" class="advance-options">500 - 800 triệu</li>
                                                <li vl="3" class="advance-options">800 triệu - 1 tỷ</li>
                                                <li vl="4" class="advance-options">1 - 2 tỷ</li>
                                                <li vl="5" class="advance-options">2 - 3 tỷ</li>
                                                <li vl="6" class="advance-options">3 - 5 tỷ</li>
                                                <li vl="7" class="advance-options">5 - 7 tỷ</li>
                                                <li vl="8" class="advance-options">7 - 10 tỷ</li>
                                                <li vl="9" class="advance-options">10 - 20 tỷ</li>
                                                <li vl="10" class="advance-options">20 - 30 tỷ</li>
                                                <li vl="11" class="advance-options">&gt; 30 tỷ</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divArea" class="search-filter advance-select-box">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content" style="width: 148px;">Diện tích</span>
                                        </span>
                                        <input data-val="true" data-val-required="The AreaId field is required."
                                            id="hdCboArea" name="AreaId" type="hidden" value="-1">
                                        <div id="divAreaOptions"
                                            class="advance-select-options advance-area-options advance-options"
                                            minvalue="txtAreaMinValue" maxvalue="txtAreaMaxValue" unit="area"
                                            hddvalue="hdCboArea" ddlid="divArea" currlevel="1" style="width: 190px;">
                                            <div class="custom-slider">
                                                <input class="min-value advance-options" decimal="true" id="txtAreaMinValue"
                                                    maxlength="6" name="MinArea" numbersonly="true" placeholder="Từ"
                                                    type="text">
                                                <span>-</span>
                                                <input class="min-value advance-options" decimal="true" id="txtAreaMaxValue"
                                                    maxlength="6" name="MaxArea" numbersonly="true" placeholder="Đến"
                                                    type="text">
                                                <span>m²</span>
                                                <div id="area-slider-range"
                                                    class="price-filter-range ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                                                    name="rangeInput">
                                                    <div class="ui-slider-range ui-widget-header"
                                                        style="left: 0%; width: 100%;"></div><a href="#"
                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                        style="left: 0%;"></a><a href="#"
                                                        class="ui-slider-handle ui-state-default ui-corner-all"
                                                        style="left: 100%;"></a>
                                                </div>
                                            </div>
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="-1" class="advance-options" style="min-width: 158px;">Diện tích</li>
                                                <li vl="0" class="advance-options " style="min-width: 158px;">Chưa xác định
                                                </li>
                                                <li vl="1" class="advance-options " style="min-width: 158px;">&lt;= 30 m2
                                                </li>
                                                <li vl="2" class="advance-options " style="min-width: 158px;">30 - 50 m2
                                                </li>
                                                <li vl="3" class="advance-options " style="min-width: 158px;">50 - 80 m2
                                                </li>
                                                <li vl="4" class="advance-options " style="min-width: 158px;">80 - 100 m2
                                                </li>
                                                <li vl="5" class="advance-options " style="min-width: 158px;">100 - 150 m2
                                                </li>
                                                <li vl="6" class="advance-options " style="min-width: 158px;">150 - 200 m2
                                                </li>
                                                <li vl="7" class="advance-options " style="min-width: 158px;">200 - 250 m2
                                                </li>
                                                <li vl="8" class="advance-options " style="min-width: 158px;">250 - 300 m2
                                                </li>
                                                <li vl="9" class="advance-options " style="min-width: 158px;">300 - 500 m2
                                                </li>
                                                <li vl="10" class="advance-options " style="min-width: 158px;">&gt;= 500 m2
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divProject" class="search-filter advance-select-box" title="">
                                        <span class="select-text select-custom"><input type="text"
                                                class="select-text-content" value="Dự án" placeholder="Dự án"
                                                style="width: 148px;"></span>
                                        <input data-val="true" data-val-required="The ProjectId field is required."
                                            id="hdCboProject" name="ProjectId" type="hidden" value="0">
                                        <div id="divProjectOptions"
                                            class="custom-scroll advance-select-options advance-options"
                                            hddvalue="hdCboProject" ddlid="divProject" currlevel="1" style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="0" class="advance-options">Dự án</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-action search-action1">
                                        <a href="javascript:void(0)" class="m-r-10 filter-more">
                                            <img src="./assets/image/icon-down-arrow.png">
                                            Thêm
                                        </a>
                                        <a href="javascript:void(0)" class="action-reset-search-form">
                                            <img src="./assets/image/search-reset.png">
                                            Xóa
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                <div class="home-filter home-filter-2 slideClose">
                                    <div id="divWard" class="search-filter advance-select-box adv-search" title="">
                                        <span class="select-text select-custom"><input type="text"
                                                class="select-text-content" value="Phường xã" placeholder="Phường xã"
                                                style="width: 148px;"></span>
                                        <input data-val="true" data-val-required="The WardId field is required."
                                            id="hdCboWard" name="WardId" type="hidden" value="0">
                                        <div id="divWardOptions"
                                            class="custom-scroll advance-select-options advance-options"
                                            hddvalue="hdCboWard" ddlid="divWard" currlevel="1" style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="0" class="advance-options">Phường xã</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divStreet" class="search-filter advance-select-box adv-search" title="">
                                        <span class="select-text select-custom"><input type="text"
                                                class="select-text-content" value="Đường phố" placeholder="Đường phố"
                                                style="width: 148px;"></span>
                                        <input data-val="true" data-val-required="The StreetId field is required."
                                            id="hdCboStreet" name="StreetId" type="hidden" value="0">
                                        <div id="divStreetOptions"
                                            class="custom-scroll advance-select-options advance-options"
                                            hddvalue="hdCboStreet" ddlid="divStreet" currlevel="1" style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="0" class="advance-options">Đường phố</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divBedRoom" class="search-filter advance-select-box adv-search">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content" style="width: 148px;">Số phòng</span>
                                        </span>
                                        <input data-val="true" data-val-required="The RoomId field is required."
                                            id="hdCboBedRoom" name="RoomId" type="hidden" value="-1">
                                        <div id="divBedRoomOptions" class="advance-select-options advance-options"
                                            hddvalue="hdCboBedRoom" ddlid="divBedRoom" currlevel="1" style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="-1" class="advance-options" style="min-width: 158px;">Số phòng</li>
                                                <li vl="0" class="advance-options " style="min-width: 158px;">Không xác định
                                                </li>
                                                <li vl="1" class="advance-options " style="min-width: 158px;">1+</li>
                                                <li vl="2" class="advance-options " style="min-width: 158px;">2+</li>
                                                <li vl="3" class="advance-options " style="min-width: 158px;">3+</li>
                                                <li vl="4" class="advance-options " style="min-width: 158px;">4+</li>
                                                <li vl="5" class="advance-options " style="min-width: 158px;">5+</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="divHomeDirection" class="search-filter advance-select-box adv-search">
                                        <span class="select-text select-custom">
                                            <span class="select-text-content" style="width: 148px;">Hướng nhà</span>
                                        </span>
                                        <input data-val="true" data-val-required="The DirectionId field is required."
                                            id="hdCboHomeDirection" name="DirectionId" type="hidden" value="-1">
                                        <div id="divHomeDirectionOptions" class="advance-select-options advance-options"
                                            hddvalue="hdCboHomeDirection" ddlid="divHomeDirection" currlevel="1"
                                            style="width: 190px;">
                                            <ul class="advance-options" style="min-width: 190px;">
                                                <li vl="-1" style="min-width: 158px;">Hướng nhà</li>
                                                <li vl="0" class="advance-options " style="min-width: 158px;">KXĐ</li>
                                                <li vl="1" class="advance-options " style="min-width: 158px;">Đông</li>
                                                <li vl="2" class="advance-options " style="min-width: 158px;">Tây</li>
                                                <li vl="3" class="advance-options " style="min-width: 158px;">Nam</li>
                                                <li vl="4" class="advance-options " style="min-width: 158px;">Bắc</li>
                                                <li vl="5" class="advance-options " style="min-width: 158px;">Đông-Bắc</li>
                                                <li vl="6" class="advance-options " style="min-width: 158px;">Tây-Bắc</li>
                                                <li vl="7" class="advance-options " style="min-width: 158px;">Tây-Nam</li>
                                                <li vl="8" class="advance-options " style="min-width: 158px;">Đông-Nam</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="search-action search-action2">
                                        <a href="javascript:void(0)" class="filter-less">
                                            <img src="./assets/image/up-arrow.png"> Thu gọn
                                        </a>
                                        <a href="javascript:void(0)" class="action-reset-search-form">
                                            <img src="./assets/image/search-reset.png"> Xóa
                                        </a>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <input data-val="true" data-val-required="The SubCateId field is required." id="hdCboCatagoryRe"
                        name="SubCateId" type="hidden" value="0">
                    <input data-val="true" data-val-required="The CateId field is required." id="hdCboCatagory"
                        name="CateId" type="hidden" value="38">
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


                <div class="loveMoney102" positioncode="BANNER_POSITION_MASTER_HEAD_WEB" style="margin-bottom: 0px">
                    <div
                        class="swiper-container swiper-container-fade swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" style="transition-duration: 0ms;">
                            <div class="swiper-slide aditem" data-swiper-autoplay="15000" time="15"
                                style="width: 1432px; opacity: 1; transform: translate3d(0px, 0px, 0px); transition-duration: 0ms;"
                                src="https://file4.batdongsan.com.vn/Banners/NgocNCB/NgocNCB/1920x560/20201102-0959/index.html"
                                altsrc="https://file4.batdongsan.com.vn/2020/10/31/UVSXfqBy/20201031143056-b188.jpg"
                                link="http://therubyhalong.com.vn/" bid="11029" tip="" tp="8" w="0" h="480" k=""><iframe
                                    src="./assets/image/index.html" id="fr11029" scrolling="no" style="overflow:hidden"
                                    width="100%" height="480px" frameborder="0"></iframe></div>
                            <div class="swiper-slide aditem" data-swiper-autoplay="15000" time="15"
                                style="width: 1432px; opacity: 1; transform: translate3d(-1432px, 0px, 0px); transition-duration: 0ms;"
                                src="https://file4.batdongsan.com.vn/Banners/NgocNCB/ThaoNTT2/1920x560/20201014-1744/index.html"
                                altsrc="https://file4.batdongsan.com.vn/2020/10/31/UVSXfqBy/20201031082305-2b39.jpg"
                                link="https://gemskyworld.vn/?utm_source=bds&amp;utm_medium=banner_hompage&amp;utm_campaign=GSW"
                                bid="10324" tip="" tp="8" w="0" h="480" k=""><iframe src="./assets/image/index_002.html"
                                    id="fr10324" scrolling="no" style="overflow:hidden" width="100%" height="480px"
                                    frameborder="0"></iframe></div>
                            <div class="swiper-slide aditem swiper-slide-prev" data-swiper-autoplay="15000" time="15"
                                style="width: 1432px; opacity: 1; transform: translate3d(-2864px, 0px, 0px); transition-duration: 0ms;"
                                src="https://file4.batdongsan.com.vn/Banners/PhuongNTM/PhuongNTM/1920x560/20201106-0955/index.html"
                                altsrc="https://file4.batdongsan.com.vn/2020/11/09/UVSXfqBy/20201109083833-3b76.jpg"
                                link="https://batdongsan.com.vn/brc/trieu-lua-chon-nha" bid="11088" tip="" tp="8" w="0"
                                h="480" k=""><iframe src="./assets/image/index_003.html" id="fr11088" scrolling="no"
                                    style="overflow:hidden" width="100%" height="480px" frameborder="0"></iframe></div>
                            <div class="swiper-slide aditem swiper-slide-active" data-swiper-autoplay="15000" time="15"
                                style="width: 1432px; opacity: 1; transform: translate3d(-4296px, 0px, 0px); transition-duration: 0ms;"
                                src="https://file4.batdongsan.com.vn/Banners/HieuNM/XuanVT/1920x560/20201023-1822/index.html"
                                altsrc="https://file4.batdongsan.com.vn/2020/10/24/UVSXfqBy/20201024105014-a440.jpg"
                                link="https://masterisehomes.com/masteri-waterfront/?utm_source=Nv_BDShotbanner_MASS_B01V&amp;utm_medium=CPD&amp;utm_campaign=nv_masteri_waterfront"
                                bid="10974" tip="" tp="8" w="0" h="480" k=""><iframe src="./assets/image/index_004.html"
                                    id="fr10974" scrolling="no" style="overflow:hidden" width="100%" height="480px"
                                    frameborder="0"></iframe></div>
                            <div class="swiper-slide aditem swiper-slide-next" data-swiper-autoplay="15000" time="15"
                                style="width: 1432px; opacity: 0; transform: translate3d(-5728px, 0px, 0px); transition-duration: 0ms;"
                                src="https://file4.batdongsan.com.vn/Banners/HieuNM/Masteri/1920x560/20201012-0913/index.html"
                                altsrc="https://file4.batdongsan.com.vn/2020/10/12/UVSXfqBy/20201012093019-c060.jpg"
                                link="https://masterisehomes.com/masteri-centre-point/?utm_source=Nv_BDShotbanner_MASS_B01V&amp;utm_medium=CPD&amp;utm_campaign=nv_masteri_centre_point"
                                bid="10879" tip="" tp="8" w="0" h="480" k=""><iframe src="./assets/image/index_005.html"
                                    id="fr10879" scrolling="no" style="overflow:hidden" width="100%" height="480px"
                                    frameborder="0"></iframe></div>
                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"><span
                                class="swiper-pagination-bullet" tabindex="0" role="button"
                                aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet"
                                tabindex="0" role="button" aria-label="Go to slide 3"></span><span
                                class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button"
                                aria-label="Go to slide 4"></span><span class="swiper-pagination-bullet" tabindex="0"
                                role="button" aria-label="Go to slide 5"></span></div><span class="swiper-notification"
                            aria-live="assertive" aria-atomic="true"></span>
                    </div>
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

                <div class="banner-cover" style="display: none;"></div>
            </div>
        </div>
        <!-- Cac control o giua-->
        <div class="home-small">
            <div class="home-small-main">

                <div class="home-small-heading" id="hometabs">
                    <ul>
                        <li>
                            <h2><a style="cursor: pointer" data-tab="hometab1" class="actived">Tin nổi bật</a></h2>
                        </li>
                        <li>
                            <h2><a style="cursor: pointer" href="javascript:void(0)" data-tab="hometab2">Tin tức</a></h2>
                        </li>
                        <li>
                            <h2><a style="cursor: pointer" href="javascript:void(0)" data-tab="hometab3">Tư vấn </a></h2>
                        </li>
                        <li>
                            <h2><a style="cursor: pointer" href="javascript:void(0)" data-tab="hometab4">Phong thủy</a></h2>
                        </li>
                    </ul>
                    <a href="https://batdongsan.com.vn/tin-tuc" id="tabview" class="home-small-more">Xem thêm tin tức<img
                            src="./assets/image/icon-arrow-right.png"></a>
                    <div class="clear"></div>
                </div>
                <div id="news-slide">
                    <div id="hometab1" class="newscontain">
                        <div class="home-small-main-1 news-show">
                            <div id="hottab-0" class="" style="display: none;">
                                <h3>
                                    <a title="[Infographic] Những quy định pháp lý không thể bỏ qua khi mua bán bất động sản"
                                        href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/-infographic-nhung-quy-dinh-phap-ly-khong-the-bo-qua-khi-mua-ban-bat-dong-san-ar103077">
                                        <span>
                                            <img noloaderror="true" imgerr="1" src="./assets/image/20200113102359-589c.jpg"
                                                is-lazy-image="true" lazy-id="0">
                                        </span>
                                        [Infographic] Những quy định pháp lý không thể bỏ qua khi mua bán bất động sản
                                    </a>
                                </h3>
                                <div class="news-time">
                                    <img src="./assets/image/clock.png">4 giờ trước
                                </div>
                            </div>
                            <div id="hottab-1" class="hidden" style="display: none;">
                                <h3>
                                    <a title="5 khác biệt giữa đất nền dự án và đất thổ cư"
                                        href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/5-khac-biet-giua-dat-nen-du-an-va-dat-tho-cu-ar103568">
                                        <span>
                                            <img noloaderror="true" imgerr="1" src="./assets/image/20200324083929-c461.jpg"
                                                is-lazy-image="true" lazy-id="1">
                                        </span>
                                        5 khác biệt giữa đất nền dự án và đất thổ cư
                                    </a>
                                </h3>
                                <div class="news-time">
                                    <img src="./assets/image/clock.png">7 giờ trước
                                </div>
                            </div>
                            <div id="hottab-2" class="hidden" style="display: none;">
                                <h3>
                                    <a title="Tin tức bất động sản nổi bật nhất tuần qua (2/11-7/11/2020)"
                                        href="https://batdongsan.com.vn/tin-thi-truong/tin-tuc-bat-dong-san-noi-bat-nhat-tuan-2-thang-11-2020-ar105461">
                                        <span>
                                            <img noloaderror="true" imgerr="1" src="./assets/image/20180606091156-fe6d.jpg"
                                                is-lazy-image="true" lazy-id="2">
                                        </span>
                                        Tin tức bất động sản nổi bật nhất tuần qua (2/11-7/11/2020)
                                    </a>
                                </h3>
                                <div class="news-time">
                                    <img src="./assets/image/clock.png">11 giờ trước
                                </div>
                            </div>
                            <div id="hottab-3" class="hidden" style="display: none;">
                                <h3>
                                    <a title="Những yếu tố “đập tan” kỳ vọng giá bất động sản sẽ giảm"
                                        href="https://batdongsan.com.vn/phan-tich-nhan-dinh/nhung-yeu-to-dap-tan-ky-vong-gia-bat-dong-san-se-giam-ar105453">
                                        <span>
                                            <img noloaderror="true" imgerr="1" src="./assets/image/20201104114102-ddbe.jpg"
                                                is-lazy-image="true" lazy-id="3">
                                        </span>
                                        Những yếu tố “đập tan” kỳ vọng giá bất động sản sẽ giảm
                                    </a>
                                </h3>
                                <div class="news-time">
                                    <img src="./assets/image/clock.png">12 giờ trước
                                </div>
                            </div>
                            <div id="hottab-4" class="hidden" style="display: none;">
                                <h3>
                                    <a title="Ôm mộng làm giàu từ đất, cặp vợ chồng &quot;ngã đau&quot; vì mù mờ pháp lý"
                                        href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/om-mong-lam-giau-tu-dat-cap-vo-chong-nga-dau-vi-mu-mo-phap-ly-ar103408">
                                        <span>
                                            <img noloaderror="true" imgerr="1" src="./assets/image/20200304155629-1c53.jpg"
                                                is-lazy-image="true" lazy-id="4">
                                        </span>
                                        Ôm mộng làm giàu từ đất, cặp vợ chồng "ngã đau" vì mù mờ pháp lý
                                    </a>
                                </h3>
                                <div class="news-time">
                                    <img src="./assets/image/clock.png">13 giờ trước
                                </div>
                            </div>
                            <div id="hottab-5" class="hidden" style="display: block;">
                                <h3>
                                    <a title="Phớt lờ cảnh báo, hàng loạt doanh nghiệp vẫn ngang nhiên bán dự án ma"
                                        href="https://batdongsan.com.vn/tin-thi-truong/phot-lo-canh-bao-hang-loat-doanh-nghiep-van-ngang-nhien-ban-du-an-ma-ar105448">
                                        <span>
                                            <img noloaderror="true" imgerr="1" src="./assets/image/20201105161829-4e55.jpg"
                                                is-lazy-image="true" lazy-id="5">
                                        </span>
                                        Phớt lờ cảnh báo, hàng loạt doanh nghiệp vẫn ngang nhiên bán dự án ma
                                    </a>
                                </h3>
                                <div class="news-time">
                                    <img src="./assets/image/clock.png">4 ngày trước
                                </div>
                            </div>
                        </div>
                        <div class="home-small-main-2">
                            <div class="list-news">
                                <ul>
                                    <li class="">
                                        <h3>
                                            <a title="[Infographic] Những quy định pháp lý không thể bỏ qua khi mua bán bất động sản"
                                                data-index="#hottab-0"
                                                href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/-infographic-nhung-quy-dinh-phap-ly-khong-the-bo-qua-khi-mua-ban-bat-dong-san-ar103077">
                                                [Infographic] Những quy định pháp lý không thể bỏ qua khi mua bán bất động
                                                sản
                                            </a>
                                        </h3>
                                    </li>
                                    <li class="">
                                        <h3>
                                            <a title="5 khác biệt giữa đất nền dự án và đất thổ cư" data-index="#hottab-1"
                                                href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/5-khac-biet-giua-dat-nen-du-an-va-dat-tho-cu-ar103568">
                                                5 khác biệt giữa đất nền dự án và đất thổ cư
                                            </a>
                                        </h3>
                                    </li>
                                    <li class="">
                                        <h3>
                                            <a title="Tin tức bất động sản nổi bật nhất tuần qua (2/11-7/11/2020)"
                                                data-index="#hottab-2"
                                                href="https://batdongsan.com.vn/tin-thi-truong/tin-tuc-bat-dong-san-noi-bat-nhat-tuan-2-thang-11-2020-ar105461">
                                                Tin tức bất động sản nổi bật nhất tuần qua (2/11-7/11/2020)
                                            </a>
                                        </h3>
                                    </li>
                                    <li class="">
                                        <h3>
                                            <a title="Những yếu tố “đập tan” kỳ vọng giá bất động sản sẽ giảm"
                                                data-index="#hottab-3"
                                                href="https://batdongsan.com.vn/phan-tich-nhan-dinh/nhung-yeu-to-dap-tan-ky-vong-gia-bat-dong-san-se-giam-ar105453">
                                                Những yếu tố “đập tan” kỳ vọng giá bất động sản sẽ giảm
                                            </a>
                                        </h3>
                                    </li>
                                    <li class="">
                                        <h3>
                                            <a title="Ôm mộng làm giàu từ đất, cặp vợ chồng &quot;ngã đau&quot; vì mù mờ pháp lý"
                                                data-index="#hottab-4"
                                                href="https://batdongsan.com.vn/loi-khuyen-cho-nguoi-mua/om-mong-lam-giau-tu-dat-cap-vo-chong-nga-dau-vi-mu-mo-phap-ly-ar103408">
                                                Ôm mộng làm giàu từ đất, cặp vợ chồng "ngã đau" vì mù mờ pháp lý
                                            </a>
                                        </h3>
                                    </li>
                                    <li class="active">
                                        <h3>
                                            <a title="Phớt lờ cảnh báo, hàng loạt doanh nghiệp vẫn ngang nhiên bán dự án ma"
                                                data-index="#hottab-5"
                                                href="https://batdongsan.com.vn/tin-thi-truong/phot-lo-canh-bao-hang-loat-doanh-nghiep-van-ngang-nhien-ban-du-an-ma-ar105448">
                                                Phớt lờ cảnh báo, hàng loạt doanh nghiệp vẫn ngang nhiên bán dự án ma
                                            </a>
                                        </h3>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <div id="hometab2" class="hidden newscontain">
                        <div class="clear"></div>
                    </div>
                    <div id="hometab3" class="hidden newscontain">
                        <div class="clear"></div>
                    </div>
                    <div id="hometab4" class="hidden newscontain">
                        <div class="clear"></div>
                    </div>
                </div>

                <script type="text/javascript">
                    (function callJQuery() {
                        if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.HotNewsGroupBinnova) {
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
            </div>
            <div class="home-small-banner">

                <div class="loveMoney102" positioncode="BANNER_POSITION_RIGHT_2020" style="margin-bottom: 0px">
                    <div class="adshared" rt="">
                        <div class="adshareditem aditem" time="15" style="display: none;"
                            src="https://file4.batdongsan.com.vn/Banners/PhuongNTM/Vres2020/250x250/20191217-1535/index.html"
                            altsrc="https://file4.batdongsan.com.vn/2020/01/03/yl6ZFYiO/20200103094219-bb66.jpg"
                            link="https://vres.batdongsan.com.vn/" bid="9921" tip="" tp="8" w="250" h="250" isbg="false"
                            clr="false" k=""><iframe src="./assets/image/index_006.html" id="fr9921" scrolling="no"
                                style="overflow:hidden" width="100%" height="250px" frameborder="0"></iframe></div>
                        <div class="adshareditem aditem" time="15" style="display: block;"
                            src="https://file4.batdongsan.com.vn/2020/11/02/UVSXfqBy/20201102141649-f304.jpg"
                            altsrc="https://file4.batdongsan.com.vn/images/no-photo1.jpg"
                            link="http://experttalk.batdongsan.com.vn/khac/adapt-2-change-3-giu-lua-kinh-doanh-vuot-qua-covid-ev134?utm_source=BDS&amp;utm_medium=banner&amp;utm_campaign=A2C%233"
                            bid="11035" tip="" tp="7" w="250" h="250" isbg="false" clr="false" k=""><a
                                href="https://batdongsan.com.vn/microservice-architecture-router/Systems/Banner/Click?bannerid=11035"
                                target="_blank" title="" rel="nofollow"><img src="./assets/image/20201102141649-f304.jpg"
                                    style="max-width: 100%; height:250px;" class="banner-img"></a></div>
                    </div>
                    <div class="adshared" rt="">
                        <div class="adshareditem aditem" time="15" style="display: none;"
                            src="https://file4.batdongsan.com.vn/2020/11/04/UVSXfqBy/20201104083546-b8ec.jpg"
                            altsrc="https://file4.batdongsan.com.vn/images/no-photo1.jpg" link="" bid="11056" tip="" tp="7"
                            w="250" h="250" isbg="false" clr="false" k=""><a
                                href="https://batdongsan.com.vn/microservice-architecture-router/Systems/Banner/Click?bannerid=11056"
                                target="_blank" title="" rel="nofollow"><img src="./assets/image/20201104083546-b8ec.jpg"
                                    style="max-width: 100%; height:250px;" class="banner-img"></a></div>
                        <div class="adshareditem aditem" time="15" style="display: block;"
                            src="https://file4.batdongsan.com.vn/Banners/PhuongNTM/PhuongNTM/250x250/20201106-1148/index.html"
                            altsrc="https://file4.batdongsan.com.vn/2020/11/09/UVSXfqBy/20201109082857-3c0c.jpg"
                            link="https://batdongsan.com.vn/brc/trieu-lua-chon-nha" bid="11084" tip="" tp="8" w="250"
                            h="250" isbg="false" clr="false" k=""><iframe src="./assets/image/index_007.html" id="fr11084"
                                scrolling="no" style="overflow:hidden" width="100%" height="250px" frameborder="0"></iframe>
                        </div>
                    </div>
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
                    <a href="https://batdongsan.com.vn/nha-dat-ban">Tin nhà đất bán mới nhất</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                    <a href="https://batdongsan.com.vn/nha-dat-cho-thue">Tin nhà đất cho thuê mới nhất</a>
                </div>
                <div class="clear"></div>
                <link rel="stylesheet" href="./assets/image/microtip.css">
                <ul>
                    <li class="">
                        <div class="vip5 vipaddon" rel="26878040" uid="328276">
                            <div class="product-thumb ">
                                <a title="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m"
                                    href="https://batdongsan.com.vn/ban-dat-duong-tinh-lo-427-xa-tam-hung-1/chinh-chu-ban-manh-dau-gia-te-qua-mat-427-cach-nga-ba-binh-da-500m-pr26878040">
                                    <img src="./assets/image/20200901151848-9e49_wm.jpg"
                                        alt="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">3</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-dat-duong-tinh-lo-427-xa-tam-hung-1/chinh-chu-ban-manh-dau-gia-te-qua-mat-427-cach-nga-ba-binh-da-500m-pr26878040"
                                        title="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m">Chính
                                        chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà
                                        500m</a>
                                </div>
                                <div class="product-price">19.5 triệu/m²</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">68.8 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-dat-thanh-oai-hn" title="Thanh Oai">Thanh
                                        Oai</a>,
                                    <a href="https://batdongsan.com.vn/ban-dat-ha-noi" title="Hà Nội">Hà Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="26878040"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n mảnh đất đấu gi&amp;#225; T&amp;#234; Quả, X&amp;#227; Tam Hưng, mặt Tỉnh Lộ 427, c&amp;#225;ch ng&amp;#227; ba B&amp;#236;nh Đ&amp;#224; 500m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/01/20200901151848-9e49_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/01/20200901151940-a55a_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/01/20200901152034-890a_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/09/01/20200901151848-9e49_wm.jpg"
                                        data-vipclass="vip5 vipaddon" data-isaddon="false" data-has3d="false"
                                        data-has360="false" data-hasvideo="false"
                                        data-title="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m"
                                        data-price="19.5 triệu/m²" data-area="68.8 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Thanh Oai, Hà Nội"
                                        data-description="Chính chủ bán mảnh đất đấu giá Tê Quả, Xã Tam Hưng, mặt Tỉnh Lộ 427, cách ngã ba Bình Đà 500m, đối diện trường cấp 3 Thanh Oai B, Tỉnh Lộ đã trải thảm đường vỉa hè 24m, cách đường Cienco 5, 1,5km, đô thị Thanh Hà 4km, trung tâm Hà Đông 9km, bán mảnh đất lô góc 68,8m2. 3 mặt thoáng, mặt tiền 4,5m đườ..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:58:26" data-contactname="" data-contactmobile=""
                                        data-url="/ban-dat-duong-tinh-lo-427-xa-tam-hung-1/chinh-chu-ban-manh-dau-gia-te-qua-mat-427-cach-nga-ba-binh-da-500m-pr26878040"
                                        data-totalmedia="3" data-createbyuser="328276"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="vip5" rel="24797627" uid="124832">
                            <div class="product-thumb ">
                                <a title="Shophouse Udic mặt đường Võ Chí Công, nhận bàn giao ngay, sổ đỏ lâu đài"
                                    href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-vo-chi-cong-phuong-phu-thuong-1-prj-udic-westlake/shophouse-mat-nhan-ban-giao-ngay-so-do-lau-dai-pr24797627">
                                    <img src="./assets/image/20200315183554-702a_wm.jpg"
                                        alt="Shophouse Udic mặt đường Võ Chí Công, nhận bàn giao ngay, sổ đỏ lâu đài">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">3</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-duong-vo-chi-cong-phuong-phu-thuong-1-prj-udic-westlake/shophouse-mat-nhan-ban-giao-ngay-so-do-lau-dai-pr24797627"
                                        title="Shophouse Udic mặt đường Võ Chí Công, nhận bàn giao ngay, sổ đỏ lâu đài">Shophouse
                                        Udic mặt đường Võ Chí Công, nhận bàn giao ngay, sổ đỏ lâu đài</a>
                                </div>
                                <div class="product-price">Giá thỏa thuận</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">281 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-tay-ho-hn"
                                        title="Tây Hồ">Tây Hồ</a>,
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ha-noi" title="Hà Nội">Hà
                                        Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="24797627"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Shophouse Udic mặt đường V&amp;#245; Ch&amp;#237; C&amp;#244;ng, nhận b&amp;#224;n giao ngay, sổ đỏ l&amp;#226;u đ&amp;#224;i&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/03/15/20200315183554-702a_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/03/15/20200315183554-702a_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Shophouse Udic mặt đường Võ Chí Công, nhận bàn giao ngay, sổ đỏ lâu đài"
                                        data-price="Thỏa thuận" data-area="281 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Tây Hồ, Hà Nội"
                                        data-description="Chính chủ gửi bán shophouse Udic Westlake mặt đường Võ Chí Công, Phú Thượng, Tây Hồ, Hà Nội. Diện tích 281m2 - 301m2 - 486m2. Sở hữu 3 tầng, tính theo diện tích thông thủy. Sổ đỏ lâu dài. Suất ngoại giao, khách mua được ký hợp đồng mua bán trực tiếp. Thanh toán đợt 1: 50% khi ký hợp đồng nggười mua ..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:58:26" data-contactname="" data-contactmobile=""
                                        data-url="/ban-nha-biet-thu-lien-ke-duong-vo-chi-cong-phuong-phu-thuong-1-prj-udic-westlake/shophouse-mat-nhan-ban-giao-ngay-so-do-lau-dai-pr24797627"
                                        data-totalmedia="3" data-createbyuser="124832"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="vip5" rel="27728603" uid="1496946">
                            <div class="product-thumb ">
                                <a title="Bán BUILDING mặt phố NGUYỄN VĂN TRỖI, THANH XUÂN, thang máy, siêu rẻ, phù hợp mọi loại hình kinh do"
                                    href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-nguyen-van-troi-phuong-khuong-dinh/ban-building-thanh-xuan-thang-may-sieu-re-phu-hop-moi-loai-hinh-kinh-do-pr27728603">
                                    <img src="./assets/image/20201109225634-a427_wm.jpg"
                                        alt="Bán BUILDING mặt phố NGUYỄN VĂN TRỖI, THANH XUÂN, thang máy, siêu rẻ, phù hợp mọi loại hình kinh do">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">5</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-duong-nguyen-van-troi-phuong-khuong-dinh/ban-building-thanh-xuan-thang-may-sieu-re-phu-hop-moi-loai-hinh-kinh-do-pr27728603"
                                        title="Bán BUILDING mặt phố NGUYỄN VĂN TRỖI, THANH XUÂN, thang máy, siêu rẻ, phù hợp mọi loại hình kinh do">Bán
                                        BUILDING mặt phố NGUYỄN VĂN TRỖI, THANH XUÂN, thang máy, siêu rẻ, phù hợp mọi loại
                                        hình kinh do</a>
                                </div>
                                <div class="product-price">14.455 tỷ</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">82 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-thanh-xuan-hn"
                                        title="Thanh Xuân">Thanh Xuân</a>,
                                    <a href="https://batdongsan.com.vn/ban-nha-mat-pho-ha-noi" title="Hà Nội">Hà Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="27728603"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n BUILDING mặt phố NGUYỄN VĂN TRỖI, THANH XU&amp;#194;N, thang m&amp;#225;y, si&amp;#234;u rẻ, ph&amp;#249; hợp mọi loại h&amp;#236;nh kinh do&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109225634-a427_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109225634-a427_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Bán BUILDING mặt phố NGUYỄN VĂN TRỖI, THANH XUÂN, thang máy, siêu rẻ, phù hợp mọi loại hình kinh do"
                                        data-price="14.455 tỷ" data-area="82 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Thanh Xuân, Hà Nội" data-description="Bán BUILDING mặt phố NGUYỄN VĂN TRỖI, THANH XUÂN, thang máy, siêu rẻ, phù hợp mọi loại hình kinh doanh.
     Mô tả: 
     Diện tích 82m2 + 8 tầng + mặt tiền 6,3m.
      -Tầng 1  Ga ra ô tô + Lễ Tân, bảo vệ
     - Tầng 2 đến tầng 8 bố trí chia 2 phòng để khai thác triệt để kinh doanh văn phòng.
     - Thang máy xịn cùng..." data-duration="Hôm nay" data-updatedtime="09/11/2020" data-datesort="11/09/2020 22:58:19"
                                        data-contactname="" data-contactmobile=""
                                        data-url="/ban-nha-mat-pho-duong-nguyen-van-troi-phuong-khuong-dinh/ban-building-thanh-xuan-thang-may-sieu-re-phu-hop-moi-loai-hinh-kinh-do-pr27728603"
                                        data-totalmedia="5" data-createbyuser="1496946"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="vip5" rel="24484316" uid="124832">
                            <div class="product-thumb ">
                                <a title="Bán shophouse Sunshine City B4 - 8; 345m2 giá tốt để đầu tư"
                                    href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-phuong-dong-ngac-prj-sunshine-city/ban-shophouse-b4-8-345m2-gia-tot-de-dau-tu-pr24484316">
                                    <img src="./assets/image/20200221160919-d40b_wm.jpg"
                                        alt="Bán shophouse Sunshine City B4 - 8; 345m2 giá tốt để đầu tư">
                                </a>
                                <span class="product-feature">
                                    <img src="./assets/image/ic_video.svg">
                                </span>
                                <span class="product-media">4</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-phuong-dong-ngac-prj-sunshine-city/ban-shophouse-b4-8-345m2-gia-tot-de-dau-tu-pr24484316"
                                        title="Bán shophouse Sunshine City B4 - 8; 345m2 giá tốt để đầu tư">Bán shophouse
                                        Sunshine City B4 - 8; 345m2 giá tốt để đầu tư</a>
                                </div>
                                <div class="product-price">125 triệu/m²</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">345 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-bac-tu-liem-hn"
                                        title="Bắc Từ Liêm">Bắc Từ Liêm</a>,
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ha-noi" title="Hà Nội">Hà
                                        Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="24484316"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n shophouse Sunshine City B4 - 8; 345m2 gi&amp;#225; tốt để đầu tư&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/02/21/20200221160919-d40b_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/02/21/20200221160919-d40b_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="true"
                                        data-title="Bán shophouse Sunshine City B4 - 8; 345m2 giá tốt để đầu tư"
                                        data-price="125 triệu/m²" data-area="345 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Bắc Từ Liêm, Hà Nội"
                                        data-description="Bán shophouse nhà phố liền kề thương mại Sunshine City Ciputra. Suất ngoại giao giá rẻ nhất thị trường. Mã căn B4 - 8; diện tích 345m2, view trực diện vườn hoa, hướng Đông, 2 mặt thoáng. Kiến trúc pháp, xây dựng 1 tầng hầm và 4 tầng nổi. Bàn giao thô bên trong và hoàn thiện mặt ngoài. Ký hợp đồng mu..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:58:13" data-contactname="" data-contactmobile=""
                                        data-url="/ban-nha-biet-thu-lien-ke-phuong-dong-ngac-prj-sunshine-city/ban-shophouse-b4-8-345m2-gia-tot-de-dau-tu-pr24484316"
                                        data-totalmedia="4" data-createbyuser="124832"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="vip5" rel="18869852" uid="124832">
                            <div class="product-thumb ">
                                <a title="Bán shophouse UDIC Westlake mặt Võ Chí Công, Hà Nội, giá thấp nhất 0936668656"
                                    href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-vo-chi-cong-phuong-phu-thuong-1-prj-udic-westlake/ban-shophouse-mat-ha-noi-gia-thap-nhat-0936668656-pr18869852">
                                    <img src="./assets/image/20181214211605-5a51_wm.jpg"
                                        alt="Bán shophouse UDIC Westlake mặt Võ Chí Công, Hà Nội, giá thấp nhất 0936668656">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">2</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-duong-vo-chi-cong-phuong-phu-thuong-1-prj-udic-westlake/ban-shophouse-mat-ha-noi-gia-thap-nhat-0936668656-pr18869852"
                                        title="Bán shophouse UDIC Westlake mặt Võ Chí Công, Hà Nội, giá thấp nhất 0936668***">Bán
                                        shophouse UDIC Westlake mặt Võ Chí Công, Hà Nội, giá thấp nhất <span
                                            class="hidden-mobile box" style="font-size: inherit;"
                                            raw="0936668656">0936668***</span></a>
                                </div>
                                <div class="product-price">Giá thỏa thuận</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">280 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-tay-ho-hn"
                                        title="Tây Hồ">Tây Hồ</a>,
                                    <a href="https://batdongsan.com.vn/ban-loai-bat-dong-san-khac-ha-noi" title="Hà Nội">Hà
                                        Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="18869852"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n shophouse UDIC Westlake mặt V&amp;#245; Ch&amp;#237; C&amp;#244;ng, H&amp;#224; Nội, gi&amp;#225; thấp nhất 0936668656&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2018/12/14/20181214211605-5a51_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2018/12/14/20181214211605-5a51_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Bán shophouse UDIC Westlake mặt Võ Chí Công, Hà Nội, giá thấp nhất 0936668656"
                                        data-price="Thỏa thuận" data-area="280 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Tây Hồ, Hà Nội"
                                        data-description="Bán shophouse mặt Võ Chí Công, Tây Hồ, Hà Nội. Thông tin dự án shophouse thương mại UDIC Westlake, Ciputra Hà Nội. Tên dự án: UDIC Westlake Tây Hồ. Chủ đầu tư: Tổng Công Ty Đầu Tư Phát Triển Hạ Tầng Đô Thị UDIC. Vị trí: Số 1 Võ Chí Công, thuộc quần thể KĐT Nam Thăng Long, Tây Hồ, Hà Nội (đối diện Lo..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:58:07" data-contactname="" data-contactmobile=""
                                        data-url="/ban-loai-bat-dong-san-khac-duong-vo-chi-cong-phuong-phu-thuong-1-prj-udic-westlake/ban-shophouse-mat-ha-noi-gia-thap-nhat-0936668656-pr18869852"
                                        data-totalmedia="2" data-createbyuser="124832"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="vip5 vipaddon" rel="27456086" uid="328276">
                            <div class="product-thumb ">
                                <a title="Chính chủ bán nhà 1 tầng 1 tum ngõ 13/2 Huyền Kỳ, đối diện đấu giá Phú Lương cách đường 21, 200m"
                                    href="https://batdongsan.com.vn/ban-nha-rieng-duong-huyen-ky-phuong-phu-lam-1/chinh-chu-ban-1-tang-1-tum-ngo-13-2-doi-dien-dau-gia-luong-cach-21-200m-pr27456086">
                                    <img src="./assets/image/20201018102703-7a9b_wm.jpg"
                                        alt="Chính chủ bán nhà 1 tầng 1 tum ngõ 13/2 Huyền Kỳ, đối diện đấu giá Phú Lương cách đường 21, 200m">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">3</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-huyen-ky-phuong-phu-lam-1/chinh-chu-ban-1-tang-1-tum-ngo-13-2-doi-dien-dau-gia-luong-cach-21-200m-pr27456086"
                                        title="Chính chủ bán nhà 1 tầng 1 tum ngõ 13/2 Huyền Kỳ, đối diện đấu giá Phú Lương cách đường 21, 200m">Chính
                                        chủ bán nhà 1 tầng 1 tum ngõ 13/2 Huyền Kỳ, đối diện đấu giá Phú Lương cách đường
                                        21, 200m</a>
                                </div>
                                <div class="product-price">1.28 tỷ</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">32.7 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-ha-dong-hn" title="Hà Đông">Hà
                                        Đông</a>,
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-ha-noi" title="Hà Nội">Hà Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="27456086"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n nh&amp;#224; 1 tầng 1 tum ng&amp;#245; 13/2 Huyền Kỳ, đối diện đấu gi&amp;#225; Ph&amp;#250; Lương c&amp;#225;ch đường 21, 200m&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/18/20201018102703-7a9b_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/18/20201018102737-f246_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/18/20201018102750-e960_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/18/20201018102703-7a9b_wm.jpg"
                                        data-vipclass="vip5 vipaddon" data-isaddon="false" data-has3d="false"
                                        data-has360="false" data-hasvideo="false"
                                        data-title="Chính chủ bán nhà 1 tầng 1 tum ngõ 13/2 Huyền Kỳ, đối diện đấu giá Phú Lương cách đường 21, 200m"
                                        data-price="1.28 tỷ" data-area="32.7 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Hà Đông, Hà Nội"
                                        data-description="Chính chủ bán nhà 1 tầng 1 tum ngõ 13/2 Huyền Kỳ, đối diện đấu giá Phú Lương cách đường 21, 200m, vị trí thuận tiện có nhà xây kiên cố chắc chắn, diện tích 32,7m2 x 1,5 tầng, tầng 1, để xe phòng khách bếp, nhà vệ sinh, sân phơi, gác xép, co bếp, hút mùi, điều hòa, nóng lạnh, nhà hướng nam, ngõ trước..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:58:05" data-contactname="" data-contactmobile=""
                                        data-url="/ban-nha-rieng-duong-huyen-ky-phuong-phu-lam-1/chinh-chu-ban-1-tang-1-tum-ngo-13-2-doi-dien-dau-gia-luong-cach-21-200m-pr27456086"
                                        data-totalmedia="3" data-createbyuser="328276"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="vip5" rel="25486540" uid="835374">
                            <div class="product-thumb ">
                                <a title="Bán căn hộ góc 3 phòng ngủ tháp Bahamas Đảo Kim Cương, DT 117m2, giá 8 tỷ. LH 0942984790"
                                    href="https://batdongsan.com.vn/ban-can-ho-chung-cu-phuong-binh-trung-tay-prj-diamond-island/ban-goc-3-png-ngu-thap-bahamas-dao-kim-cuong-dt-117m2-gia-7-65-ty-lh-0942984790-pr25486540">
                                    <img src="./assets/image/20200518191048-a95e_wm.jpg"
                                        alt="Bán căn hộ góc 3 phòng ngủ tháp Bahamas Đảo Kim Cương, DT 117m2, giá 8 tỷ. LH 0942984790">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">6</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-phuong-binh-trung-tay-prj-diamond-island/ban-goc-3-png-ngu-thap-bahamas-dao-kim-cuong-dt-117m2-gia-7-65-ty-lh-0942984790-pr25486540"
                                        title="Bán căn hộ góc 3 phòng ngủ tháp Bahamas Đảo Kim Cương, DT 117m2, giá 8 tỷ. LH 0942984***">Bán
                                        căn hộ góc 3 phòng ngủ tháp Bahamas Đảo Kim Cương, DT 117m2, giá 8 tỷ. LH <span
                                            class="hidden-mobile box" style="font-size: inherit;"
                                            raw="0942984790">0942984***</span></a>
                                </div>
                                <div class="product-price">8 tỷ</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">117 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-quan-2-sg" title="Quận 2">Quận
                                        2</a>,
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-tp-hcm" title="Hồ Chí Minh">Hồ
                                        Chí Minh</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="25486540"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n căn hộ g&amp;#243;c 3 ph&amp;#242;ng ngủ th&amp;#225;p Bahamas Đảo Kim Cương, DT 117m2, gi&amp;#225; 8 tỷ. LH 0942984790&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/05/18/20200518191048-a95e_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/05/18/20200518191048-a95e_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Bán căn hộ góc 3 phòng ngủ tháp Bahamas Đảo Kim Cương, DT 117m2, giá 8 tỷ. LH 0942984790"
                                        data-price="8 tỷ" data-area="117 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Quận 2, Hồ Chí Minh"
                                        data-description="Căn hộ chung cư Quận 2. Căn hộ Đảo Kim Cương. Bán căn hộ 3 phòng ngủ, căn góc tầng cao tháp Bahamas khu dân cư Đảo Kim Cương Quận 2. - Thiết kế 3 phòng ngủ, cực kỳ thoáng và rộng rãi. - Diện tích: 117m2. - View nhìn nội khu, hồ bơi. - Tầng cao cực kỳ thoáng mát và có ánh sáng, gió tự nhiên. - Bàn gi..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:57:49" data-contactname="" data-contactmobile=""
                                        data-url="/ban-can-ho-chung-cu-phuong-binh-trung-tay-prj-diamond-island/ban-goc-3-png-ngu-thap-bahamas-dao-kim-cuong-dt-117m2-gia-7-65-ty-lh-0942984790-pr25486540"
                                        data-totalmedia="6" data-createbyuser="835374"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="">
                        <div class="vip5 vipaddon" rel="27505522" uid="328276">
                            <div class="product-thumb ">
                                <a title="Chính chủ bán đất đấu giá Thanh Mai, đầu Thị trấn Kim Bài, cạnh bệnh viện huyện, công viên"
                                    href="https://batdongsan.com.vn/ban-dat-duong-21b-xa-thanh-mai-2/chinh-chu-ban-dau-gia-dau-thi-tran-kim-bai-canh-benh-vien-huyen-cong-vien-pr27505522">
                                    <img src="./assets/image/20201022124054-2d0a_wm.jpg"
                                        alt="Chính chủ bán đất đấu giá Thanh Mai, đầu Thị trấn Kim Bài, cạnh bệnh viện huyện, công viên">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">6</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-dat-duong-21b-xa-thanh-mai-2/chinh-chu-ban-dau-gia-dau-thi-tran-kim-bai-canh-benh-vien-huyen-cong-vien-pr27505522"
                                        title="Chính chủ bán đất đấu giá Thanh Mai, đầu Thị trấn Kim Bài, cạnh bệnh viện huyện, công viên">Chính
                                        chủ bán đất đấu giá Thanh Mai, đầu Thị trấn Kim Bài, cạnh bệnh viện huyện, công
                                        viên</a>
                                </div>
                                <div class="product-price">21.5 triệu/m²</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">85 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-dat-thanh-oai-hn" title="Thanh Oai">Thanh
                                        Oai</a>,
                                    <a href="https://batdongsan.com.vn/ban-dat-ha-noi" title="Hà Nội">Hà Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="27505522"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n đất đấu gi&amp;#225; Thanh Mai, đầu Thị trấn Kim B&amp;#224;i, cạnh bệnh viện huyện, c&amp;#244;ng vi&amp;#234;n&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/22/20201022124054-2d0a_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/22/20201022124110-1233_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/10/22/20201022124145-cbfd_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/10/22/20201022124054-2d0a_wm.jpg"
                                        data-vipclass="vip5 vipaddon" data-isaddon="false" data-has3d="false"
                                        data-has360="false" data-hasvideo="false"
                                        data-title="Chính chủ bán đất đấu giá Thanh Mai, đầu Thị trấn Kim Bài, cạnh bệnh viện huyện, công viên"
                                        data-price="21.5 triệu/m²" data-area="85 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Thanh Oai, Hà Nội"
                                        data-description="Chính chủ bán đất đấu giá Thanh Mai, đầu thị trấn Kim Bài, cạnh bệnh viện huyện Thanh Oai, giáp mặt đường 40m đường đôi 21B. Đối diện công viện vườn hoa, trung tâm thể thao huyện vị trí thuận tiện nhiều trường học cấp 1, 2, 3, ngân hàng siêu thị nhà hàng khu vui chơi, bán mảnh đất. DT 85m2, mặt tiền..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:57:49" data-contactname="" data-contactmobile=""
                                        data-url="/ban-dat-duong-21b-xa-thanh-mai-2/chinh-chu-ban-dau-gia-dau-thi-tran-kim-bai-canh-benh-vien-huyen-cong-vien-pr27505522"
                                        data-totalmedia="6" data-createbyuser="328276"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="hide-item">
                        <div class="vip5" rel="27728602" uid="955980">
                            <div class="product-thumb ">
                                <a title="Bán đất khu biệt thự bờ sông Gigamall, P. Hiệp Bình Chánh, Thủ Đức 8x23=184m2"
                                    href="https://batdongsan.com.vn/ban-dat-phuong-hiep-binh-chanh/ban-khu-biet-thu-bo-song-gigamall-p-thu-duc-8x23-184m2-pr27728602">
                                    <img src="./assets/image/20201109225730-9282_wm.jpg"
                                        alt="Bán đất khu biệt thự bờ sông Gigamall, P. Hiệp Bình Chánh, Thủ Đức 8x23=184m2">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">3</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-dat-phuong-hiep-binh-chanh/ban-khu-biet-thu-bo-song-gigamall-p-thu-duc-8x23-184m2-pr27728602"
                                        title="Bán đất khu biệt thự bờ sông Gigamall, P. Hiệp Bình Chánh, Thủ Đức 8x23=184m2">Bán
                                        đất khu biệt thự bờ sông Gigamall, P. Hiệp Bình Chánh, Thủ Đức 8x23=184m2</a>
                                </div>
                                <div class="product-price">10 tỷ</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">184 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-dat-thu-duc-sg" title="Thủ Đức">Thủ Đức</a>,
                                    <a href="https://batdongsan.com.vn/ban-dat-tp-hcm" title="Hồ Chí Minh">Hồ Chí Minh</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="27728602"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n đất khu biệt thự bờ s&amp;#244;ng Gigamall, P. Hiệp B&amp;#236;nh Ch&amp;#225;nh, Thủ Đức 8x23=184m2&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109225730-9282_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109225730-9282_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Bán đất khu biệt thự bờ sông Gigamall, P. Hiệp Bình Chánh, Thủ Đức 8x23=184m2"
                                        data-price="10 tỷ" data-area="184 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Thủ Đức, Hồ Chí Minh" data-description="KHU VIP BIỆT THỰ BÊN SÔNG, HBC,  NGAY SAU LƯNG GIGAMAL
     - Diện tích đất: 8x23=184m2, thổ cư 100%
     - Hiện trạng : xây 14 phòng trọ, đang cho thuê 20 triệu/tháng
     - Sổ hồng riêng
     - Đường rộng 10m
     - Khu dân cư ven sông, thoáng mát, an ninh. Vị trí ngay khu TTTM Gigamall, cách đường Phạm Văn Đồng khoả..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:57:48" data-contactname="" data-contactmobile=""
                                        data-url="/ban-dat-phuong-hiep-binh-chanh/ban-khu-biet-thu-bo-song-gigamall-p-thu-duc-8x23-184m2-pr27728602"
                                        data-totalmedia="3" data-createbyuser="955980"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="hide-item">
                        <div class="vip5" rel="21320940" uid="124832">
                            <div class="product-thumb ">
                                <a title="Tổng hợp kho hàng shophouse và biệt thự liền kề tại Ciputra Hà Nội"
                                    href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-phuong-xuan-la-prj-khu-do-thi-nam-thang-long-ciputra/tong-hop-kho-hang-shophouse-va-tai-ha-noi-pr21320940">
                                    <img src="./assets/image/20190621164516-04e8_wm.jpg"
                                        alt="Tổng hợp kho hàng shophouse và biệt thự liền kề tại Ciputra Hà Nội">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">8</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-phuong-xuan-la-prj-khu-do-thi-nam-thang-long-ciputra/tong-hop-kho-hang-shophouse-va-tai-ha-noi-pr21320940"
                                        title="Tổng hợp kho hàng shophouse và biệt thự liền kề tại Ciputra Hà Nội">Tổng hợp
                                        kho hàng shophouse và biệt thự liền kề tại Ciputra Hà Nội</a>
                                </div>
                                <div class="product-price">115 triệu/m²</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">460 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-tay-ho-hn"
                                        title="Tây Hồ">Tây Hồ</a>,
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-ha-noi" title="Hà Nội">Hà
                                        Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="21320940"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Tổng hợp kho h&amp;#224;ng shophouse v&amp;#224; biệt thự liền kề tại Ciputra H&amp;#224; Nội&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2019/06/21/20190621164516-04e8_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2019/06/21/20190621164516-04e8_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Tổng hợp kho hàng shophouse và biệt thự liền kề tại Ciputra Hà Nội"
                                        data-price="115 triệu/m²" data-area="460 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Tây Hồ, Hà Nội"
                                        data-description="Tổng hợp shophouse và biệt thự liền kề tại Ciputra Hà Nội. 1. Shophouse Suunshine Wonder Villas Luxury Boutique Ciputra giai đoạn 2. - Suất ngoại giao được chiết khấu 15% đến 20%. - Diện tích ừ 108m2 đến 120m2, lô góc từ 220m2 đến 370m2. - Bàn giao 1 tầng hầm và 5 tầng nổi hoàn thiện mặt ngoài. 2. D..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:57:42" data-contactname="" data-contactmobile=""
                                        data-url="/ban-nha-biet-thu-lien-ke-phuong-xuan-la-prj-khu-do-thi-nam-thang-long-ciputra/tong-hop-kho-hang-shophouse-va-tai-ha-noi-pr21320940"
                                        data-totalmedia="8" data-createbyuser="124832"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="hide-item">
                        <div class="vip5" rel="25736945" uid="835374">
                            <div class="product-thumb ">
                                <a title="Cho thuê căn hộ góc 3 phòng ngủ Bahamas Đảo Kim Cương view sông + Q1 DT 143m2. Giá 36 triệu/tháng"
                                    href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-phuong-binh-trung-tay-prj-diamond-island/c-goc-3-png-ngu-bahamas-dao-kim-cuong-view-song-q1-dt-143m2-gia-1600usd-thang-pr25736945">
                                    <img src="./assets/image/20200606211959-be31_wm.jpg"
                                        alt="Cho thuê căn hộ góc 3 phòng ngủ Bahamas Đảo Kim Cương view sông + Q1 DT 143m2. Giá 36 triệu/tháng">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">5</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-phuong-binh-trung-tay-prj-diamond-island/c-goc-3-png-ngu-bahamas-dao-kim-cuong-view-song-q1-dt-143m2-gia-1600usd-thang-pr25736945"
                                        title="Cho thuê căn hộ góc 3 phòng ngủ Bahamas Đảo Kim Cương view sông + Q1 DT 143m2. Giá 36 triệu/tháng">Cho
                                        thuê căn hộ góc 3 phòng ngủ Bahamas Đảo Kim Cương view sông + Q1 DT 143m2. Giá 36
                                        triệu/tháng</a>
                                </div>
                                <div class="product-price">36 triệu/tháng</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">143 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-quan-2-sg"
                                        title="Quận 2">Quận 2</a>,
                                    <a href="https://batdongsan.com.vn/cho-thue-can-ho-chung-cu-tp-hcm"
                                        title="Hồ Chí Minh">Hồ Chí Minh</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="25736945"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; căn hộ g&amp;#243;c 3 ph&amp;#242;ng ngủ Bahamas Đảo Kim Cương view s&amp;#244;ng + Q1 DT 143m2. Gi&amp;#225; 36 triệu/th&amp;#225;ng&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/06/20200606211959-be31_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/06/20200606211959-be31_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Cho thuê căn hộ góc 3 phòng ngủ Bahamas Đảo Kim Cương view sông + Q1 DT 143m2. Giá 36 triệu/tháng"
                                        data-price="36 triệu/tháng" data-area="143 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Quận 2, Hồ Chí Minh"
                                        data-description="Cho thuê căn hộ chung cư 3 phòng ngủ Đảo Kim Cương, Bình Trưng Tây, Quận 2. Chủ nhà cần cho thuê căn góc tầng cao tháp Bahamas. Thiết kế 3PN rộng. Diện tích 143m2. View sông Giồng, sông Sài Gòn và toàn cảnh trung tâm thành phố, Bitexco, Landmark 81. Bàn giao nội thất cơ bản. Giá cho thuê: 36 triệu/t..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:57:37" data-contactname="" data-contactmobile=""
                                        data-url="/cho-thue-can-ho-chung-cu-phuong-binh-trung-tay-prj-diamond-island/c-goc-3-png-ngu-bahamas-dao-kim-cuong-view-song-q1-dt-143m2-gia-1600usd-thang-pr25736945"
                                        data-totalmedia="5" data-createbyuser="835374"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="hide-item">
                        <div class="vip5" rel="26596553" uid="328276">
                            <div class="product-thumb ">
                                <a title="Chính chủ bán mảnh đất 44,5m2 xã Bích Hòa gần đường 21B, cách khu đô thị Thanh Hà 2km. Giá 680 tr"
                                    href="https://batdongsan.com.vn/ban-dat-duong-21b-xa-bich-hoa/chinh-chu-ban-manh-44-5m-gan-cach-khu-do-thi-thanh-ha-2km-gia-680-trieu-pr26596553">
                                    <img src="./assets/image/20200810130453-c5f2_wm.jpg"
                                        alt="Chính chủ bán mảnh đất 44,5m2 xã Bích Hòa gần đường 21B, cách khu đô thị Thanh Hà 2km. Giá 680 tr">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">3</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-dat-duong-21b-xa-bich-hoa/chinh-chu-ban-manh-44-5m-gan-cach-khu-do-thi-thanh-ha-2km-gia-680-trieu-pr26596553"
                                        title="Chính chủ bán mảnh đất 44,5m2 xã Bích Hòa gần đường 21B, cách khu đô thị Thanh Hà 2km. Giá 680 tr">Chính
                                        chủ bán mảnh đất 44,5m2 xã Bích Hòa gần đường 21B, cách khu đô thị Thanh Hà 2km. Giá
                                        680 tr</a>
                                </div>
                                <div class="product-price">680 triệu</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">44.5 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-dat-thanh-oai-hn" title="Thanh Oai">Thanh
                                        Oai</a>,
                                    <a href="https://batdongsan.com.vn/ban-dat-ha-noi" title="Hà Nội">Hà Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="26596553"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Ch&amp;#237;nh chủ b&amp;#225;n mảnh đất 44,5m2 x&amp;#227; B&amp;#237;ch H&amp;#242;a gần đường 21B, c&amp;#225;ch khu đ&amp;#244; thị Thanh H&amp;#224; 2km. Gi&amp;#225; 680 tr&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/08/10/20200810130453-c5f2_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/08/10/20200810130453-c5f2_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Chính chủ bán mảnh đất 44,5m2 xã Bích Hòa gần đường 21B, cách khu đô thị Thanh Hà 2km. Giá 680 tr"
                                        data-price="680 triệu" data-area="44.5 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Thanh Oai, Hà Nội"
                                        data-description="Chính chủ bán mảnh đất 44,5m2 mặt tiền 3,8m, đường trước mặt 3m cách đường ô tô, 10m thuận tiện, ở Xã Bích Hòa gần đường 21B, cách khu đô thị Thanh Hà 2km cách trung tâm Quận Hà Đông 4km. Sổ đỏ chính chủ giá bán 680 triệu. LH 0938 20 9899 - 0977 546 256...."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:57:24" data-contactname="" data-contactmobile=""
                                        data-url="/ban-dat-duong-21b-xa-bich-hoa/chinh-chu-ban-manh-44-5m-gan-cach-khu-do-thi-thanh-ha-2km-gia-680-trieu-pr26596553"
                                        data-totalmedia="3" data-createbyuser="328276"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="hide-item">
                        <div class="vip5 vipaddon" rel="27095069" uid="328276">
                            <div class="product-thumb ">
                                <a title="Cho thuê nhà riêng ngõ 333 Xuân Đỉnh, gần công viên Hòa Bình, DT 50m2 x 3 tầng, 3 Phòng ngủ"
                                    href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-xuan-dinh-phuong-xuan-dinh/cho-ngo-333-gan-cong-vien-hoa-binh-dien-tich-50-x-3-tang-3-phong-ngu-pr27095069">
                                    <img src="./assets/image/20200919094057-86d0_wm.jpg"
                                        alt="Cho thuê nhà riêng ngõ 333 Xuân Đỉnh, gần công viên Hòa Bình, DT 50m2 x 3 tầng, 3 Phòng ngủ">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">3</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-duong-xuan-dinh-phuong-xuan-dinh/cho-ngo-333-gan-cong-vien-hoa-binh-dien-tich-50-x-3-tang-3-phong-ngu-pr27095069"
                                        title="Cho thuê nhà riêng ngõ 333 Xuân Đỉnh, gần công viên Hòa Bình, DT 50m2 x 3 tầng, 3 Phòng ngủ">Cho
                                        thuê nhà riêng ngõ 333 Xuân Đỉnh, gần công viên Hòa Bình, DT 50m2 x 3 tầng, 3 Phòng
                                        ngủ</a>
                                </div>
                                <div class="product-price">7 triệu/tháng</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">50 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-bac-tu-liem-hn"
                                        title="Bắc Từ Liêm">Bắc Từ Liêm</a>,
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-noi" title="Hà Nội">Hà Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="27095069"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Cho thu&amp;#234; nh&amp;#224; ri&amp;#234;ng ng&amp;#245; 333 Xu&amp;#226;n Đỉnh, gần c&amp;#244;ng vi&amp;#234;n H&amp;#242;a B&amp;#236;nh, DT 50m2 x 3 tầng, 3 Ph&amp;#242;ng ngủ&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/19/20200919094057-86d0_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/19/20200919094138-9be2_wm.jpg&quot;/&gt;&lt;img error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/mobile/NoImage.svg&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/19/20200919094215-7c4d_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/640x430/2020/09/19/20200919094057-86d0_wm.jpg"
                                        data-vipclass="vip5 vipaddon" data-isaddon="false" data-has3d="false"
                                        data-has360="false" data-hasvideo="false"
                                        data-title="Cho thuê nhà riêng ngõ 333 Xuân Đỉnh, gần công viên Hòa Bình, DT 50m2 x 3 tầng, 3 Phòng ngủ"
                                        data-price="7 triệu/tháng" data-area="50 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Bắc Từ Liêm, Hà Nội"
                                        data-description="Cho thuê nhà riêng ngõ 333 Xuân Đỉnh, gần công viên Hòa Bình, diện tích 50m2 x 3 tầng thông thoáng, sạch xẽ thuận tiện chợ, xe bus, tầng 1, phòng khách, 1 bếp, 1 vệ sinh, chỗ đẻ xe, tầng 2, 2 phòng ngủ, 1 vệ sinh, tầng 3 1 phòng ngủ, 1 vệ sinh, 1 ban công phơi quần áo, tiện cho thuê hộ gia đình, ngư..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:57:10" data-contactname="" data-contactmobile=""
                                        data-url="/cho-thue-nha-rieng-duong-xuan-dinh-phuong-xuan-dinh/cho-ngo-333-gan-cong-vien-hoa-binh-dien-tich-50-x-3-tang-3-phong-ngu-pr27095069"
                                        data-totalmedia="3" data-createbyuser="328276"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="hide-item">
                        <div class="vip5" rel="25740830" uid="1385001">
                            <div class="product-thumb noimage">
                                <a title="Bán đất thổ cư dự án Lago Centro, Bến Lức, Long An đã có sổ hồng. Liên hệ: 0989509628"
                                    href="https://batdongsan.com.vn/ban-dat-nen-du-an-lago-centro/b-tho-cu-ben-luc-long-da-co-so-hong-pr25740830">
                                    <img src="./assets/image/20200607161146-88d0_wm.jpg"
                                        alt="Bán đất thổ cư dự án Lago Centro, Bến Lức, Long An đã có sổ hồng. Liên hệ: 0989509628">
                                </a>
                                <span class="product-feature">
                                </span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-lago-centro/b-tho-cu-ben-luc-long-da-co-so-hong-pr25740830"
                                        title="Bán đất thổ cư dự án Lago Centro, Bến Lức, Long An đã có sổ hồng. Liên hệ: 0989509***">Bán
                                        đất thổ cư dự án Lago Centro, Bến Lức, Long An đã có sổ hồng. Liên hệ: <span
                                            class="hidden-mobile box" style="font-size: inherit;"
                                            raw="0989509628">0989509***</span></a>
                                </div>
                                <div class="product-price">1.3 tỷ</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">97 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-ben-luc-la" title="Bến Lức">Bến
                                        Lức</a>,
                                    <a href="https://batdongsan.com.vn/ban-dat-nen-du-an-long-an" title="Long An">Long
                                        An</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="25740830"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n đất thổ cư dự &amp;#225;n Lago Centro, Bến Lức, Long An đ&amp;#227; c&amp;#243; sổ hồng. Li&amp;#234;n hệ: 0989509628&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/06/07/20200607161146-88d0_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/06/07/20200607161146-88d0_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Bán đất thổ cư dự án Lago Centro, Bến Lức, Long An đã có sổ hồng. Liên hệ: 0989509628"
                                        data-price="1.3 tỷ" data-area="97 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Bến Lức, Long An" data-description="Cần bán lô đất Bến Lức, Long An
     Diện tích 97m2, căn góc 2 mặt tiền gần hồ trung tâm, công viên. 
     - Giá 1 tỷ 3 ( có sổng hổng )
     LH: chị Hằng 0989509628 ..." data-duration="Hôm nay" data-updatedtime="09/11/2020" data-datesort="11/09/2020 22:56:39"
                                        data-contactname="" data-contactmobile=""
                                        data-url="/ban-dat-nen-du-an-lago-centro/b-tho-cu-ben-luc-long-da-co-so-hong-pr25740830"
                                        data-totalmedia="1" data-createbyuser="1385001"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="hide-item">
                        <div class="vip5" rel="26956695" uid="1377624">
                            <div class="product-thumb ">
                                <a title="Bán nhà phân lô ô tô tránh Thái Hà, Hà Nội, 50m2x4 tầng x 7.6 tỷ TL 0961027983"
                                    href="https://batdongsan.com.vn/ban-nha-rieng-pho-thai-ha-phuong-nga-tu-so/ban-pn-lo-o-to-tranh-noi-50m2x4-tang-x-7-2-ty-tl-0961027983-pr26956695">
                                    <img src="./assets/image/20200908163124-077c_wm.jpg"
                                        alt="Bán nhà phân lô ô tô tránh Thái Hà, Hà Nội, 50m2x4 tầng x 7.6 tỷ TL 0961027983">
                                </a>
                                <span class="product-feature">
                                </span>
                                <span class="product-media">4</span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-pho-thai-ha-phuong-nga-tu-so/ban-pn-lo-o-to-tranh-noi-50m2x4-tang-x-7-2-ty-tl-0961027983-pr26956695"
                                        title="Bán nhà phân lô ô tô tránh Thái Hà, Hà Nội, 50m2x4 tầng x 7.6 tỷ TL 0961027***">Bán
                                        nhà phân lô ô tô tránh Thái Hà, Hà Nội, 50m2x4 tầng x 7.6 tỷ TL <span
                                            class="hidden-mobile box" style="font-size: inherit;"
                                            raw="0961027983">0961027***</span></a>
                                </div>
                                <div class="product-price">7.6 tỷ</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">50 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-dong-da-hn" title="Đống Đa">Đống
                                        Đa</a>,
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-ha-noi" title="Hà Nội">Hà Nội</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="26956695"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;B&amp;#225;n nh&amp;#224; ph&amp;#226;n l&amp;#244; &amp;#244; t&amp;#244; tr&amp;#225;nh Th&amp;#225;i H&amp;#224;, H&amp;#224; Nội, 50m2x4 tầng x 7.6 tỷ TL 0961027983&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/09/08/20200908163124-077c_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/09/08/20200908163124-077c_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Bán nhà phân lô ô tô tránh Thái Hà, Hà Nội, 50m2x4 tầng x 7.6 tỷ TL 0961027983"
                                        data-price="7.6 tỷ" data-area="50 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Đống Đa, Hà Nội"
                                        data-description="Hàng cực hiếm - phan lo Thái Hà - nhà siêu đẹp hai thoáng - ngõ 2 oto tránh - ỏ hoạch kinh doanh văn phòng.
     
     diện tích: 50m2 - 4 tàng.
     
     + Nhà phân lô, ngõ o to tránh chạy vòng quanh, nội thất cực đẹp, tầm tiền tại khu vực hiếm vô cùng. Khu vực an ninh tốt, dân trí cao, ngõ thông Thái Hà, Tây Sơn..."
                                        data-duration="Hôm nay" data-updatedtime="09/11/2020"
                                        data-datesort="11/09/2020 22:56:37" data-contactname="" data-contactmobile=""
                                        data-url="/ban-nha-rieng-pho-thai-ha-phuong-nga-tu-so/ban-pn-lo-o-to-tranh-noi-50m2x4-tang-x-7-2-ty-tl-0961027983-pr26956695"
                                        data-totalmedia="4" data-createbyuser="1377624"></i></span>
                            </div>
                        </div>
                    </li>
                    <li class="hide-item">
                        <div class="vip5" rel="27728601" uid="1466409">
                            <div class="product-thumb noimage">
                                <a title="Chuyển công tác bán nhà Quang Trung Gò Vấp chỉ 3,3 tỷ thương lượng."
                                    href="https://batdongsan.com.vn/ban-nha-rieng-duong-quang-trung-phuong-11-8/chuyen-cong-tac-ban-go-vap-chi-3-3-ty-thuong-luong-pr27728601">
                                    <img src="./assets/image/20201109225528-0b26_wm.jpg"
                                        alt="Chuyển công tác bán nhà Quang Trung Gò Vấp chỉ 3,3 tỷ thương lượng.">
                                </a>
                                <span class="product-feature">
                                </span>
                            </div>
                            <div class="home-product-bound">
                                <div class="p-title textTitle">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-quang-trung-phuong-11-8/chuyen-cong-tac-ban-go-vap-chi-3-3-ty-thuong-luong-pr27728601"
                                        title="Chuyển công tác bán nhà Quang Trung Gò Vấp chỉ 3,3 tỷ thương lượng.">Chuyển
                                        công tác bán nhà Quang Trung Gò Vấp chỉ 3,3 tỷ thương lượng.</a>
                                </div>
                                <div class="product-price">3.3 tỷ</div>
                                <span class="ic_dot">·</span>
                                <div class="pro-m2">40 m²</div>
                                <div class="product-address">
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-go-vap-sg" title="Gò Vấp">Gò Vấp</a>,
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-tp-hcm" title="Hồ Chí Minh">Hồ Chí
                                        Minh</a>
                                </div>
                                <div class="product-date">
                                    Hôm nay
                                    <span class="tooltip-time">09/11/2020</span>
                                </div>
                                <span class="tooltipMarking" aria-label="Bấm để lưu tin" data-microtip-position="bottom"
                                    role="tooltip"><i class="iconSave" data-productid="27728601"
                                        data-avatar="&lt;img class=&quot;product-avatar-img&quot; alt=&quot;Chuyển c&amp;#244;ng t&amp;#225;c b&amp;#225;n nh&amp;#224; Quang Trung G&amp;#242; Vấp chỉ 3,3 tỷ thương lượng.&quot; error-image-src=&quot;https://staticfile.batdongsan.com.vn/images/no-image.png&quot; src=&quot;https://file4.batdongsan.com.vn/crop/350x232/2020/11/09/20201109225528-0b26_wm.jpg&quot;/&gt;"
                                        data-avatarwap="https://file4.batdongsan.com.vn/crop/200x140/2020/11/09/20201109225528-0b26_wm.jpg"
                                        data-vipclass="vip5" data-isaddon="false" data-has3d="false" data-has360="false"
                                        data-hasvideo="false"
                                        data-title="Chuyển công tác bán nhà Quang Trung Gò Vấp chỉ 3,3 tỷ thương lượng."
                                        data-price="3.3 tỷ" data-area="40 m²" data-pricesort="0" data-areasort="0"
                                        data-room="" data-toilets="0" data-address="Gò Vấp, Hồ Chí Minh" data-description="- Chuyển công tác cần bán nhà Quang Trung Gò Vấp 3,3 tỷ.
     - Khu vực an ninh, yên tĩnh, hàng xóm thân thiện.
     - Chủ mua tâm huyết ở lâu dài nên trang bị toàn đồ chất lượng, nay chuyển công tác tặng lại hết nội thất cho khách.
     - Tiện ích xung quanh không thiếu thứ gì, trường học, chợ, siêu thị, bệnh ..." data-duration="Hôm nay"
                                        data-updatedtime="09/11/2020" data-datesort="11/09/2020 22:55:57"
                                        data-contactname="" data-contactmobile=""
                                        data-url="/ban-nha-rieng-duong-quang-trung-phuong-11-8/chuyen-cong-tac-ban-go-vap-chi-3-3-ty-thuong-luong-pr27728601"
                                        data-totalmedia="1" data-createbyuser="1466409"></i></span>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="clear"></div>
                <div id="ucHomeProductInterest_pnlViewMore">
                    <div class="home-viewmore">
                        <a href="javascript:void(0)" id="prd-viewmore">
                            Mở rộng&nbsp;&nbsp;<img src="./assets/image/icon-down-blue.png">
                        </a>
                        <a href="https://batdongsan.com.vn/ban-nha-rieng-duong-quang-trung-phuong-11-8" id="prd-viewless"
                            class="hidden">
                            Xem tiếp
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
                    <div class="place-big">
                        <div class="place-img slick-initialized slick-slider">
                            <div aria-live="polite" class="slick-list draggable">
                                <div class="slick-track" style="opacity: 1; width: 1680px;" role="listbox"><img
                                        src="./assets/image/HCM-web-1.jpg" is-lazy-image="true" lazy-id="6"
                                        class="slick-slide slick-current slick-active" data-slick-index="0"
                                        aria-hidden="false"
                                        style="width: 560px; position: relative; left: 0px; top: 0px; z-index: 1000; opacity: 1; transition: opacity 500ms ease 0s;"
                                        tabindex="-1" role="option" aria-describedby="slick-slide00"><img
                                        src="./assets/image/HCM-web-2.jpg" is-lazy-image="true" lazy-id="7" class="slick-slide"
                                        data-slick-index="1" aria-hidden="true"
                                        style="width: 560px; position: relative; left: -560px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                        tabindex="-1" role="option" aria-describedby="slick-slide01"><img
                                        src="./assets/image/HCM-web-3.jpg" is-lazy-image="true" lazy-id="8" class="slick-slide"
                                        data-slick-index="2" aria-hidden="true"
                                        style="width: 560px; position: relative; left: -1120px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                        tabindex="-1" role="option" aria-describedby="slick-slide02"></div>
                            </div>


                        </div>
                        <div class="place-info buy-info">
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-tp-hcm">
                                    <span class="place-name">TP. Hồ Chí Minh</span>
                                    <span class="place-number">71004 tin đăng</span>
                                </a>
                            </h3>
                        </div>

                    </div>
                    <div class="place-small">
                        <div class="place-item">
                            <div class="place-img slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 810px;" role="listbox"><img
                                            src="./assets/image/HN-web-1.jpg" is-lazy-image="true" lazy-id="9" class="slick-slide"
                                            data-slick-index="0" aria-hidden="true"
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
                                            tabindex="-1" role="option" aria-describedby="slick-slide12"></div>
                                </div>


                            </div>
                            <div class="place-info buy-info">
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">
                                        <span class="place-name">Hà Nội</span>
                                        <span class="place-number">56649 tin đăng</span>
                                    </a>
                                </h3>
                            </div>

                        </div>
                        <div class="place-item">
                            <div class="place-img slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 810px;" role="listbox"><img
                                            src="./assets/image/DDN-web-1.jpg" is-lazy-image="true" lazy-id="12"
                                            class="slick-slide" data-slick-index="0" aria-hidden="true"
                                            style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide20"><img
                                            src="./assets/image/DDN-web-2.jpg" is-lazy-image="true" lazy-id="13"
                                            class="slick-slide" data-slick-index="1" aria-hidden="true"
                                            style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide21"><img
                                            src="./assets/image/DDN-web-3.jpg" is-lazy-image="true" lazy-id="14"
                                            class="slick-slide slick-current slick-active" data-slick-index="2"
                                            aria-hidden="false"
                                            style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 999; opacity: 1;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide22"></div>
                                </div>


                            </div>
                            <div class="place-info buy-info">
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-da-nang">
                                        <span class="place-name">Đà Nẵng</span>
                                        <span class="place-number">3635 tin đăng</span>
                                    </a>
                                </h3>
                            </div>

                        </div>
                        <div class="place-item nomargin">
                            <div class="place-img slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 540px;" role="listbox"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-1.jpg"
                                            is-lazy-image="true" lazy-id="15" class="slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false"
                                            style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide30"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/BD-web-2.jpg"
                                            is-lazy-image="true" lazy-id="16" class="slick-slide" data-slick-index="1"
                                            aria-hidden="true"
                                            style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide31"></div>
                                </div>

                            </div>
                            <div class="place-info buy-info">
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-binh-duong">
                                        <span class="place-name">Bình Dương</span>
                                        <span class="place-number">11175 tin đăng</span>
                                    </a>
                                </h3>
                            </div>

                        </div>
                        <div class="place-item nomargin">
                            <div class="place-img slick-initialized slick-slider">
                                <div aria-live="polite" class="slick-list draggable">
                                    <div class="slick-track" style="opacity: 1; width: 810px;" role="listbox"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-1.jpg"
                                            is-lazy-image="true" lazy-id="17" class="slick-slide" data-slick-index="0"
                                            aria-hidden="true"
                                            style="width: 270px; position: relative; left: 0px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide40"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-2.jpg"
                                            is-lazy-image="true" lazy-id="18" class="slick-slide" data-slick-index="1"
                                            aria-hidden="true"
                                            style="width: 270px; position: relative; left: -270px; top: 0px; z-index: 998; opacity: 0; transition: opacity 500ms ease 0s;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide41"><img
                                            src="./assets/image/lazy-preview-image-DFE3E8.png"
                                            src-lazy="https://file4.batdongsan.com.vn/images/newhome/cities1/DNA-web-3.jpg"
                                            is-lazy-image="true" lazy-id="19" class="slick-slide slick-current slick-active"
                                            data-slick-index="2" aria-hidden="false"
                                            style="width: 270px; position: relative; left: -540px; top: 0px; z-index: 999; opacity: 1;"
                                            tabindex="-1" role="option" aria-describedby="slick-slide42"></div>
                                </div>


                            </div>
                            <div class="place-info buy-info">
                                <h3>
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-dong-nai">
                                        <span class="place-name">Đồng Nai</span>
                                        <span class="place-number">7558 tin đăng</span>
                                    </a>
                                </h3>
                            </div>

                        </div>
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

            <div class="html-content">
                <div class="tag-list home-tag swiper-container swiper-container-initialized swiper-container-horizontal">
                    <ul class="ui-draggable swiper-wrapper" style="position: relative;">
                        <li class="swiper-slide swiper-slide-active">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-central-park"
                                    title="Vinhomes Central Park">Vinhomes Central Park</a>
                            </h3>
                        </li>
                        <li class="swiper-slide swiper-slide-next">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-grand-park-quan-9"
                                    title="Vinhomes Grand Park">Vinhomes Grand Park</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-smart-city-dai-mo"
                                    title="Vinhomes Smart City">Vinhomes Smart City</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-ocean-park-gia-lam"
                                    title="Vinhomes Ocean Park">Vinhomes Ocean Park</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vung-tau-pearl"
                                    title="Vũng Tàu Pearl">Vũng Tàu Pearl</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-bcons-green-view"
                                    title="Bcons Green View">Bcons Green View</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-grandeur-palace"
                                    title="Grandeur Palace">Grandeur Palace</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-diamond-island"
                                    title="Diamond Island">Diamond Island</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-hado-centrosa-garden"
                                    title="HaDo Centrosa Garden">HaDo Centrosa Garden</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-the-sun-avenue"
                                    title="The Sun Avenue">The Sun Avenue</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-hai-phong" title="Nhà đất Hải Phòng">Nhà đất
                                    Hải Phòng</a>
                            </h3>
                        </li>
                        <li class="swiper-slide">
                            <h3>
                                <a href="https://batdongsan.com.vn/nha-dat-ban-quy-nhon-bdd" title="Nhà đất Quy Nhơn">Nhà
                                    đất Quy Nhơn</a>
                            </h3>
                        </li>
                    </ul>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>

            <script type="text/javascript">
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.HomeTagsBinnova) {
                        new window.FrontEnd.Home.HomeTagsBinnova();
                    } else {
                        setTimeout(callJQuery, 100)
                    }
                })();

            </script>
            <!-- Banner giua -->
            <div class="w-img-100">

                <div class="loveMoney102" positioncode="BANNER_POSITION_MIDDLE_2020">
                    <div class="adshared" rt="">
                        <div class="adshareditem aditem" time="15" style="display: none;"
                            src="https://file4.batdongsan.com.vn/Banners/HieuNM/LinhTP/1120x250/20200417-1547/index.html"
                            altsrc="https://file4.batdongsan.com.vn/2020/04/17/UVSXfqBy/20200417170235-b3d5.jpg"
                            link="https://fastkey.batdongsan.com.vn/" bid="9927" tip="" tp="8" w="1120" h="250" isbg="false"
                            clr="false" k=""><iframe src="./assets/image/index_008.html" id="fr9927" scrolling="no"
                                style="overflow:hidden" width="100%" height="250px" frameborder="0"></iframe></div>
                        <div class="adshareditem aditem" time="15" style="display: block;"
                            src="https://file4.batdongsan.com.vn/2020/11/02/UVSXfqBy/20201102143209-b7b6.jpg"
                            altsrc="https://file4.batdongsan.com.vn/images/no-photo1.jpg"
                            link="http://experttalk.batdongsan.com.vn/khac/adapt-2-change-3-giu-lua-kinh-doanh-vuot-qua-covid-ev134?utm_source=BDS&amp;utm_medium=banner&amp;utm_campaign=A2C%233"
                            bid="11038" tip="" tp="7" w="1120" h="250" isbg="false" clr="false" k=""><a
                                href="https://batdongsan.com.vn/microservice-architecture-router/Systems/Banner/Click?bannerid=11038"
                                target="_blank" title="" rel="nofollow"><img src="./assets/image/20201102143209-b7b6.jpg"
                                    style="max-width: 100%; height:250px;" class="banner-img"></a></div>
                        <div class="adshareditem aditem" time="15" style="display: none;"
                            src="https://file4.batdongsan.com.vn/2020/11/04/UVSXfqBy/20201104083407-4da1.jpg"
                            altsrc="https://file4.batdongsan.com.vn/images/no-photo1.jpg" link="" bid="11054" tip="" tp="7"
                            w="1120" h="250" isbg="false" clr="false" k=""><a
                                href="https://batdongsan.com.vn/microservice-architecture-router/Systems/Banner/Click?bannerid=11054"
                                target="_blank" title="" rel="nofollow"><img src="./assets/image/20201104083407-4da1.jpg"
                                    style="max-width: 100%; height:250px;" class="banner-img"></a></div>
                    </div>
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


            <div class="home-project">
                <h2 class="fl">Dự án nổi bật</h2>
                <div class="home-more-link">
                    <a href="https://batdongsan.com.vn/du-an-bat-dong-san">Xem thêm&nbsp;&nbsp;<img
                            src="./assets/image/icon-arrow-right.png"></a>
                </div>
                <div class="clear"></div>
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                    <ul class="swiper-wrapper" style="transform: translate3d(-1728px, 0px, 0px); transition-duration: 0ms;">
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"
                            style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/khu-cong-nghiep-can-duoc-la/khu-cong-nghiep-cau-cang-img-phuoc-dong-pj5058?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj5058"
                                title="Khu Công nghiệp cầu cảng IMG Phước Đông">
                                <img alt="Khu Công nghiệp cầu cảng IMG Phước Đông" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/10/06/hmcVYWuR/20201006085734-8df3.jpg"
                                    is-lazy-image="true" lazy-id="20">Khu Công nghiệp cầu cảng IMG Phước Đông
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="1" style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/can-ho-chung-cu-thuan-an-bd/opal-skyline-pj5013?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj5013"
                                title="Opal Skyline">
                                <img alt="Opal Skyline" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/08/03/hmcVYWuR/20200803144610-dc3b.jpg"
                                    is-lazy-image="true" lazy-id="21">Opal Skyline
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="2" style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/can-ho-chung-cu-thuan-an-bd/can-ho-legacy-central-pj5054?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj5054"
                                title="Căn hộ Legacy Central">
                                <img alt="Căn hộ Legacy Central" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/10/13/hmcVYWuR/20201013133154-be41.jpg"
                                    is-lazy-image="true" lazy-id="22">Căn hộ Legacy Central
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="3" style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/can-ho-chung-cu-thai-nguyen-tn/tecco-elite-city-pj3905?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj3905"
                                title="Tecco Elite City">
                                <img alt="Tecco Elite City" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/07/07/hmcVYWuR/20200707141845-1c8e.jpg"
                                    is-lazy-image="true" lazy-id="23">Tecco Elite City
                            </a>
                        </li>
                        <li class="swiper-slide" data-swiper-slide-index="0" style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/khu-cong-nghiep-can-duoc-la/khu-cong-nghiep-cau-cang-img-phuoc-dong-pj5058?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj5058"
                                title="Khu Công nghiệp cầu cảng IMG Phước Đông">
                                <img alt="Khu Công nghiệp cầu cảng IMG Phước Đông" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/10/06/hmcVYWuR/20201006085734-8df3.jpg"
                                    is-lazy-image="true" lazy-id="55">Khu Công nghiệp cầu cảng IMG Phước Đông
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1"
                            style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/can-ho-chung-cu-thuan-an-bd/opal-skyline-pj5013?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj5013"
                                title="Opal Skyline">
                                <img alt="Opal Skyline" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/08/03/hmcVYWuR/20200803144610-dc3b.jpg"
                                    is-lazy-image="true" lazy-id="57">Opal Skyline
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-active" data-swiper-slide-index="2"
                            style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/can-ho-chung-cu-thuan-an-bd/can-ho-legacy-central-pj5054?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj5054"
                                title="Căn hộ Legacy Central">
                                <img alt="Căn hộ Legacy Central" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/10/13/hmcVYWuR/20201013133154-be41.jpg"
                                    is-lazy-image="true" lazy-id="59">Căn hộ Legacy Central
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-next" data-swiper-slide-index="3"
                            style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/can-ho-chung-cu-thai-nguyen-tn/tecco-elite-city-pj3905?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj3905"
                                title="Tecco Elite City">
                                <img alt="Tecco Elite City" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/07/07/hmcVYWuR/20200707141845-1c8e.jpg"
                                    is-lazy-image="true" lazy-id="61">Tecco Elite City
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate" data-swiper-slide-index="0"
                            style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/khu-cong-nghiep-can-duoc-la/khu-cong-nghiep-cau-cang-img-phuoc-dong-pj5058?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj5058"
                                title="Khu Công nghiệp cầu cảng IMG Phước Đông">
                                <img alt="Khu Công nghiệp cầu cảng IMG Phước Đông" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/10/06/hmcVYWuR/20201006085734-8df3.jpg"
                                    is-lazy-image="true" lazy-id="56">Khu Công nghiệp cầu cảng IMG Phước Đông
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                            data-swiper-slide-index="1" style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/can-ho-chung-cu-thuan-an-bd/opal-skyline-pj5013?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj5013"
                                title="Opal Skyline">
                                <img alt="Opal Skyline" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/08/03/hmcVYWuR/20200803144610-dc3b.jpg"
                                    is-lazy-image="true" lazy-id="58">Opal Skyline
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                            data-swiper-slide-index="2" style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/can-ho-chung-cu-thuan-an-bd/can-ho-legacy-central-pj5054?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj5054"
                                title="Căn hộ Legacy Central">
                                <img alt="Căn hộ Legacy Central" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/10/13/hmcVYWuR/20201013133154-be41.jpg"
                                    is-lazy-image="true" lazy-id="60">Căn hộ Legacy Central
                            </a>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                            data-swiper-slide-index="3" style="width: 256px; margin-right: 32px;">
                            <a href="https://batdongsan.com.vn/can-ho-chung-cu-thai-nguyen-tn/tecco-elite-city-pj3905?utm_source=self&amp;utm_medium=cpc&amp;utm_campaign=projecthighlight&amp;utm_term=pj3905"
                                title="Tecco Elite City">
                                <img alt="Tecco Elite City" noloaderror="true" imgerr="2"
                                    src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/crop/260x146/2020/07/07/hmcVYWuR/20200707141845-1c8e.jpg"
                                    is-lazy-image="true" lazy-id="62">Tecco Elite City
                            </a>
                        </li>
                    </ul>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
            </div>

            <script type="text/javascript">
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.HighlightProjectsBinnova) {
                        new window.FrontEnd.Home.HighlightProjectsBinnova();
                    } else
                        setTimeout(callJQuery, 100)
                })();

            </script>



            <div class="home-hotnews m-b-30 m-t-38">
                <h2>Tin tiêu điểm</h2>
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                    <ul class="swiper-wrapper" style="transform: translate3d(0px, 0px, 0px);">
                        <li uid="DVG.BDS.Model.Articles.ArticleDisplay" class="swiper-slide swiper-slide-active"
                            style="width: 353.333px; margin-right: 30px;">
                            <div class="hotnews-img">
                                <a href="https://batdongsan.com.vn/tin-thi-truong/tuyet-chieu-thuong-luong-de-mua-duoc-nha-voi-gia-hoi-ar102614"
                                    title="Tuyệt chiêu thương lượng để mua được nhà với giá hời">
                                    <img alt="article.ArticleTitle" noloaderror="true" imgerr="1"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2019/11/19/zk7ggeWN/20191119164642-5acf.jpg"
                                        is-lazy-image="true" lazy-id="24">
                                </a>
                            </div>
                            <div class="hotnews-link">
                                <span>01.</span>
                                <h3 class="">
                                    <a href="https://batdongsan.com.vn/tin-thi-truong/tuyet-chieu-thuong-luong-de-mua-duoc-nha-voi-gia-hoi-ar102614"
                                        title="Tuyệt chiêu thương lượng để mua được nhà với giá hời">Tuyệt chiêu thương
                                        lượng để mua được nhà với giá hời</a>
                                </h3>
                            </div>
                        </li>
                        <li uid="DVG.BDS.Model.Articles.ArticleDisplay" class="swiper-slide swiper-slide-next"
                            style="width: 353.333px; margin-right: 30px;">
                            <div class="hotnews-img">
                                <a href="https://batdongsan.com.vn/phan-tich-nhan-dinh/giai-ma-hien-tuong-gia-nha-tang-phi-ma-trong-dich-covid-ar105442"
                                    title="Giải mã hiện tượng giá nhà tăng phi mã dù đại dịch phức tạp">
                                    <img alt="article.ArticleTitle" noloaderror="true" imgerr="1"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2020/11/05/YSUn3oGJ/20201105111218-7ecf.jpg"
                                        is-lazy-image="true" lazy-id="25">
                                </a>
                            </div>
                            <div class="hotnews-link">
                                <span>02.</span>
                                <h3 class="">
                                    <a href="https://batdongsan.com.vn/phan-tich-nhan-dinh/giai-ma-hien-tuong-gia-nha-tang-phi-ma-trong-dich-covid-ar105442"
                                        title="Giải mã hiện tượng giá nhà tăng phi mã dù đại dịch phức tạp">Giải mã hiện
                                        tượng giá nhà tăng phi mã dù đại dịch phức tạp</a>
                                </h3>
                            </div>
                        </li>
                        <li uid="DVG.BDS.Model.Articles.ArticleDisplay" class="swiper-slide"
                            style="width: 353.333px; margin-right: 30px;">
                            <div class="hotnews-img">
                                <a href="https://batdongsan.com.vn/tin-thi-truong/mua-nha-sai-gon-ar105433"
                                    title="Nản lòng vì làm mãi không mua nổi nhà Sài Gòn">
                                    <img alt="article.ArticleTitle" noloaderror="true" imgerr="1"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2020/11/04/FTnaKngu/20201104114627-d2a6.jpg"
                                        is-lazy-image="true" lazy-id="26">
                                </a>
                            </div>
                            <div class="hotnews-link">
                                <span>03.</span>
                                <h3 class="">
                                    <a href="https://batdongsan.com.vn/tin-thi-truong/mua-nha-sai-gon-ar105433"
                                        title="Nản lòng vì làm mãi không mua nổi nhà Sài Gòn">Nản lòng vì làm mãi không mua
                                        nổi nhà Sài Gòn</a>
                                </h3>
                            </div>
                        </li>
                        <li uid="DVG.BDS.Model.Articles.ArticleDisplay" class="swiper-slide"
                            style="width: 353.333px; margin-right: 30px;">
                            <div class="hotnews-img">
                                <a href="https://batdongsan.com.vn/tin-thi-truong/nguoi-mua-dang-tho-o-voi-bat-dong-san-ar105412"
                                    title="Người mua đang thờ ơ với bất động sản?">
                                    <img alt="article.ArticleTitle" noloaderror="true" imgerr="1"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2020/10/31/FTnaKngu/20201031143950-c5d3.jpg"
                                        is-lazy-image="true" lazy-id="27">
                                </a>
                            </div>
                            <div class="hotnews-link">
                                <span>04.</span>
                                <h3 class=" middle-title">
                                    <a href="https://batdongsan.com.vn/tin-thi-truong/nguoi-mua-dang-tho-o-voi-bat-dong-san-ar105412"
                                        title="Người mua đang thờ ơ với bất động sản?">Người mua đang thờ ơ với bất động
                                        sản?</a>
                                </h3>
                            </div>
                        </li>
                        <li uid="DVG.BDS.Model.Articles.ArticleDisplay" class="swiper-slide"
                            style="width: 353.333px; margin-right: 30px;">
                            <div class="hotnews-img">
                                <a href="https://batdongsan.com.vn/tin-thi-truong/so-sanh-gia-nha-sai-gon-va-ha-noi-ar105410"
                                    title="Giá nhà Sài Gòn đang cao hơn bao nhiêu so với Hà Nội?">
                                    <img alt="article.ArticleTitle" noloaderror="true" imgerr="1"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2020/11/03/FTnaKngu/20201103092712-fabb.jpg"
                                        is-lazy-image="true" lazy-id="28">
                                </a>
                            </div>
                            <div class="hotnews-link">
                                <span>05.</span>
                                <h3 class="">
                                    <a href="https://batdongsan.com.vn/tin-thi-truong/so-sanh-gia-nha-sai-gon-va-ha-noi-ar105410"
                                        title="Giá nhà Sài Gòn đang cao hơn bao nhiêu so với Hà Nội?">Giá nhà Sài Gòn đang
                                        cao hơn bao nhiêu so với Hà Nội?</a>
                                </h3>
                            </div>
                        </li>
                        <li uid="DVG.BDS.Model.Articles.ArticleDisplay" class="swiper-slide"
                            style="width: 353.333px; margin-right: 30px;">
                            <div class="hotnews-img">
                                <a href="https://batdongsan.com.vn/tin-thi-truong/10-du-an-tai-ha-noi-duoc-hoi-mua-nhieu-nhat-trong-quy-3-ar105363"
                                    title="10 dự án tại Hà Nội được hỏi mua nhiều nhất trong quý 3">
                                    <img alt="article.ArticleTitle" noloaderror="true" imgerr="1"
                                        src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/354x200/2020/10/30/zk7ggeWN/20201030172920-82fa.jpg"
                                        is-lazy-image="true" lazy-id="29">
                                </a>
                            </div>
                            <div class="hotnews-link">
                                <span>06.</span>
                                <h3 class="">
                                    <a href="https://batdongsan.com.vn/tin-thi-truong/10-du-an-tai-ha-noi-duoc-hoi-mua-nhieu-nhat-trong-quy-3-ar105363"
                                        title="10 dự án tại Hà Nội được hỏi mua nhiều nhất trong quý 3">10 dự án tại Hà Nội
                                        được hỏi mua nhiều nhất trong quý 3</a>
                                </h3>
                            </div>
                        </li>
                    </ul>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
                <div class="swiper-button-prev swiper-button-disabled" tabindex="0" role="button"
                    aria-label="Previous slide" aria-disabled="true"></div>
                <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-disabled="false">
                </div>
            </div>

            <script type="text/javascript">
                (function callJQuery() {
                    if (window.FrontEnd && window.FrontEnd.Home && window.FrontEnd.Home.VipNewsBinnova) {
                        new window.FrontEnd.Home.VipNewsBinnova({});
                    } else {
                        setTimeout(callJQuery, 100)
                    }
                })();

            </script>

            <div class="w-img-100">


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
            <div class="home-utility m-b-30">
                <h2>Hỗ trợ tiện ích</h2>
                <ul>
                    <li class="color-1">
                        <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-tuoi-xay-nha" rel="nofollow"><img
                                src="./assets/image/fshome.png">Xem tuổi xây nhà</a>
                    </li>
                    <li class="color-2">
                        <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-du-toan-chi-tiet" rel="nofollow"><img
                                src="./assets/image/estimate.png"> Dự tính chi phí làm nhà </a>
                    </li>
                    <li class="color-3">
                        <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-tinh-lai-suat" rel="nofollow"><img
                                src="./assets/image/money.png"> Tính lãi suất </a>
                    </li>
                    <li class="color-4">
                        <a href="https://batdongsan.com.vn/ho-tro-tien-ich/ht-xem-huong-nha" rel="nofollow"><img
                                src="./assets/image/fengshui.png"> Tư vấn phong thủy</a>
                    </li>
                </ul>
                <div class="clear"></div>
            </div>

            <div class="home-enterprise m-b-30">
                <h2 class="fl">Doanh nghiệp tiêu biểu</h2>
                <div class="home-more-link">
                    <a href="https://batdongsan.com.vn/doanh-nghiep">Xem thêm&nbsp;&nbsp;<img
                            src="./assets/image/icon-arrow-right.png"></a>
                </div>
                <div class="clear"></div>
                <div class="swiper-container swiper-container-initialized swiper-container-horizontal">
                    <ul class="swiper-wrapper" style="transform: translate3d(-3056px, 0px, 0px); transition-duration: 0ms;">
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
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-7/novalan-ep480" title="Novaland Group">
                                <img class="color_flip" alt="Novaland Group" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                                <img class="color_flip" alt="HD Mon Holdings" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                            <a href="https://batdongsan.com.vn/dau-tu-du-an-quan-7/novalan-ep480" title="Novaland Group">
                                <img class="color_flip" alt="Novaland Group" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                                <img class="color_flip" alt="HD Mon Holdings" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                    <ul class="swiper-wrapper" style="transform: translate3d(-1145px, 0px, 0px); transition-duration: 0ms;">
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
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_TuoiTre.png"
                                    is-lazy-image="true" lazy-id="44"> <a
                                    href="https://nhadat.tuoitre.vn/quy-mo-thi-truong-bat-dong-san-viet-nam-van-con-nho-so-voi-tiem-nang-20190702160134482.htm"
                                    target="_blank'" rel="nofollow">
                                    Quy mô thị trường bất động sản việt nam vẫn còn nhỏ so với tiềm năng
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="2">
                            <div class="home-social-img">
                                <a href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-04_CafeF.jpg"
                                        is-lazy-image="true" lazy-id="45"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_CafeF.png"
                                    is-lazy-image="true" lazy-id="46"> <a
                                    href="http://cafef.vn/3-diem-nghen-cua-nen-kinh-te-va-tac-dong-den-thi-truong-bds-nam-2020-20191126173124409.chn"
                                    target="_blank'" rel="nofollow">
                                    Tác động của kinh tế đến thị trường bất động sản theo ghi nhận của Batdongsan.com.vn
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="3">
                            <div class="home-social-img">
                                <a href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-01_ThoiBaoNganHang.jpg"
                                        is-lazy-image="true" lazy-id="47"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/icon_ThoiBaoNganHang.png"
                                    is-lazy-image="true" lazy-id="48"> <a
                                    href="https://thoibaonganhang.vn/vres-2019-noi-hoi-tu-cua-chuyen-gia-va-doanh-nghiep-bat-dong-san-hang-dau-95645.html"
                                    target="_blank'" rel="nofollow">
                                    VRES 2019 – Sự kiện được quan tâm nhất thị trường bất động sản Việt Nam
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="4">
                            <div class="home-social-img">
                                <a href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-03_DanTri_CondotelLaoDoc.jpg"
                                        is-lazy-image="true" lazy-id="74"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                    is-lazy-image="true" lazy-id="75"> <a
                                    href="https://dantri.com.vn/bat-dong-san/gia-condotel-lao-doc-20191212143023187.htm"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn công bố số liệu về thị trường Condotel 2019
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="5">
                            <div class="home-social-img">
                                <a href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/B-08_VietnamMoi.jpg"
                                        is-lazy-image="true" lazy-id="76"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_VietnamMoi.png"
                                    is-lazy-image="true" lazy-id="77"> <a
                                    href="https://vietnammoi.vn/ha-noi-gia-nha-tai-quan-dong-da-co-luc-len-toi-290-trieu-dong-moi-m2-20191015093243315.htm"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn công bố giá rao bán bất động sản trên thị trường quý 3/2019
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide" style="width: 261.25px; margin-right: 25px;" data-swiper-slide-index="6">
                            <div class="home-social-img">
                                <a href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                    target="_blank'" rel="nofollow">
                                    <img src="./assets/image/lazy-preview-image-DFE3E8.png"
                                        src-lazy="https://file4.batdongsan.com.vn/crop/350x232/2020/01/10/yl6ZFYiO/20200110174136-6f7e.jpg"
                                        is-lazy-image="true" lazy-id="78"> </a>
                            </div>
                            <div class="home-social-link">
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
                                    src-lazy="https://file4.batdongsan.com.vn/images/newhome/bao3/Icon_DanTri.png"
                                    is-lazy-image="true" lazy-id="79"> <a
                                    href="https://dantri.com.vn/bat-dong-san/batdongsancomvn-cong-bo-giao-dien-trang-chu-moi-20200110003608422.htm"
                                    target="_blank'" rel="nofollow">
                                    Batdongsan.com.vn công bố giao diện trang chủ mới
                                </a>
                            </div>
                        </li>
                        <li class="swiper-slide swiper-slide-duplicate-prev" style="width: 261.25px; margin-right: 25px;"
                            data-swiper-slide-index="7">
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
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
                                <img style="max-height: 40px; max-width: 40px" src="./assets/image/lazy-preview-image-DFE3E8.png"
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
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "RealEstateAgent",
            "name": "Công ty Cổ phần PropertyGuru Việt Nam",
            "image": "https://staticfile.batdongsan.com.vn/images/Logo/ic_logo_2.svg",
            "url": "https://batdongsan.com.vn",
            "telephone": "0243562 5939",
            "priceRange": "10",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Tầng 31, Keangnam Hanoi Landmark, Phạm Hùng, Nam Từ Liêm",
                "addressLocality": "Hà Nội",
                "postalCode": "100000",
                "addressCountry": "VN"
            },
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": 21.0166982,
                "longitude": 105.783585
            },
            "openingHoursSpecification": {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens": "08:00",
                "closes": "19:00"
            }
        }

    </script>
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
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-tp-hcm">MUA BÁN NHÀ ĐẤT TP HCM</a>
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
                                    <a href="https://batdongsan.com.vn/ban-nha-biet-thu-lien-ke-go-vap">Biệt thự Gò Vấp</a>
                                </div>
                                <div class="clear">
                                    &nbsp;
                                </div>
                            </div>
                            <div class="footer-middle-colum1">
                                <div class="footer-middle-colum1-title">
                                    <h3>
                                        <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">MUA BÁN NHÀ ĐẤT HÀ NỘI</a>
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
                                    <a href="https://batdongsan.com.vn/nha-dat-ban-ha-noi">Mua&nbsp;bán&nbsp;nhà&nbsp;đất Hà
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
                                    <a href="https://batdongsan.com.vn/ban-nha-rieng-bac-tu-liem">Bán nhà Bắc Từ Liêm</a>
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
                                    <a href="https://batdongsan.com.vn/cho-thue-cua-hang-ki-ot-ha-noi">Cho thuê mặt bằng Hà
                                        Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-ha-noi">Thuê phòng trọ Hà
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
                                    <a href="https://batdongsan.com.vn/ban-can-ho-chung-cu-vinhomes-sky-lake">Vinhomes Sky
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
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-da-nang">Cho thuê nhà Đà Nẵng</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-ha-noi">Cho thuê nhà Hà Nội</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-binh-thanh">Cho thuê nhà Bình
                                        Thạnh</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-go-vap">Cho thuê nhà Gò Vấp</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-thu-duc">Cho thuê nhà Thủ Đức</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-hai-phong">Cho thuê nhà Hải
                                        Phòng</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-2">Cho thuê nhà Quận 2</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-tan-phu">Cho thuê nhà Tân Phú</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-12">Cho thuê nhà Quận 12</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng">Thuê nhà nguyên căn</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-7">Cho thuê nhà Quận 7</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro">Cho thuê phòng trọ</a>
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
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-10">Cho thuê nhà Quận 10</a>
                                </div>
                                <div class="footer-middle-colum1-link">
                                    <a href="https://batdongsan.com.vn/cho-thue-nha-rieng-quan-8">Cho thuê nhà Quận 8</a>
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

    <div id="SiteRight" class="banner-right clearfix">
        <div class="container-default">
            <div>
                <div id="ban_wide_right" class="ban_wide_scroll"
                    style="display: block; position: absolute; top: 145.883px; bottom: inherit; right: 46px;">
                    <div class="adPosition" positioncode="BANNER_POSITION_WIDE_RIGHT" style="margin-bottom: 0px"></div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": 0,
                            "PageId": 189,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 189
                        };

                    </script>
                </div>

                <div id="ban_right" class="ban_scroll"
                    style="display: block; top: 145.883px; position: absolute; right: 86px; bottom: inherit;">
                    <div class="adPosition" positioncode="BANNER_POSITION_RIGHT" style="margin-bottom: 0px"></div>
                    <script type="text/javascript">
                        var bannerContext = {
                            "CateId": 0,
                            "PageId": 189,
                            "CityCode": null,
                            "DistrictId": null,
                            "CurrentPage": 189
                        };

                    </script>
                </div>
            </div>
        </div>
    </div>
    


@endsection

@section('scripts')

@endsection
