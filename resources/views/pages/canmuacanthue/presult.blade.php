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
<div class="separable">
    {{ $buyerSellers->links() }}
</div>
