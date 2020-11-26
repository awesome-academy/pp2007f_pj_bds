@foreach($arr_menu[0] as $parent_menu)
<div class="box-common box-common-border box-price fixgradient">
    <h4 class="box-title">{!! $parent_menu['name'] !!}</h4>

    <div class="box-content">

        <ul class="link-hover-blue height">
            @if(isset($arr_menu[$parent_menu['id']]))
            @foreach($arr_menu[$parent_menu['id']] as $child_menu)
            <li><a href="https://batdongsan.com.vn/nha-dat-ban/-1/2/-1/-1" title="Mua bán nhà đất toàn quốc giá 500 - 800 triệu">{!! $child_menu['name'] !!}</a></li>
            @endforeach
            @endif
        </ul>
        <div class="box-view-more ">
            <a href="javascript:void(0);" class="box-product-right-viewmore">
                <div class="gradient">&nbsp;</div>
                <div class="view-more">Xem thêm<img src="./assets/image/ic_caret_down.svg"></div>
            </a>
        </div>
    </div>
</div>
@endforeach