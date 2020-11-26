
<div class="footer-col2">
    @foreach($arr_menu[0] as $mp)
                <div class="footer-sub-col1">
                    <div class="col-header">{!!$mp['name']!!}</div>
                    <div class="col-content">
                        <ul>
                        @if(isset($arr_menu[$mp['id']]))
                        @foreach ($arr_menu[$mp['id']] as $mp_c) 
                            <li>
                                <span>
                                    <!-- <img src="#" style="height:16px ; width:16px ;"> -->
                                    
                                </span>
                                <a href="{!! $mp_c['slug'] !!}"> {!! $mp_c['name'] !!}</a>
                            </li>
                            @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                @endforeach
                
                <div class="clear"></div>
                <div class="footer-sub-col5">
                    <div class="footer-title">Tải ứng dụng Batdongsan.com.vn</div>
                    <a href="https://play.google.com/store/apps/details?id=vn.com.batdongsan" class="m-r-15"
                        rel="nofollow" target="_blank">
                        <img src="https://file4.batdongsan.com.vn/images/newhome/google-play.png">
                    </a>
                    <a href="https://apps.apple.com/vn/app/batdongsan.com.vn/id866492094" rel="nofollow"
                        target="_blank">
                        <img src="https://file4.batdongsan.com.vn/images/newhome/apple-app-store.png">
                    </a>
                </div>
                <div class="footer-sub-col6">
                    <div id="Footer_NewsletterForm_pnlHomepage">
                        <div class="footer-title">Đăng kí ngay để nhận thông tin từ Batdongsan.com.vn</div>
                        <input type="text" id="email-footer" placeholder="Nhập email của bạn">
                        <a href="javascript:void(0);" id="newsletterRegister-footer" class="newsletter-register">Gửi</a>
                        <div class="clear">&nbsp;</div>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
