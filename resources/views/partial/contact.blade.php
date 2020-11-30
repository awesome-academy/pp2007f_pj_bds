
<footer>
    <div class="home-small">
        <div class="footer-row">
            <div class="footer-col1">
                <div class="footer-logo">
                    <a href="index.html">
                        @foreach ($image as $image)
                        <img src="{{ $image->slug }}" noloaderror="true"
                            onerror="this.src='https://staticfile.batdongsan.com.vn/images/logo-footer-no1.png'">
                        @endforeach
                    </a>
                </div>
                <div class="footer-company-name center">
                    @foreach ($company as $company)
                    {{ $company->name }}
                    @endforeach
                    @foreach ($company2 as $company2)
                <a href="https://www.propertygurugroup.com/" target="_blank" rel="nofollow">{{ $company2->name }}</a>
                    @endforeach
            </div>
                <div class="footer-add">
                    <span>
                        @foreach ($icon_add as $icon_add)
                        <img src="{{ $icon_add->slug }}">
                        @endforeach

                        @foreach ($add as $add)
                    </span>{{ $add->name }}
                        @endforeach
                </div>
                <div class="footer-add">
                    <span>
                        @foreach ($phone_icon as $phone_icon)
                        <img src="{{ $phone_icon->slug }}">
                        @endforeach

                        @foreach ($phone as $phone)
                    </span>{{ $phone->name }}
                        @endforeach
                </div>
                <div class="footer-add footer-social">
                        @foreach ($sign_up as $sign_up)
                    <a href="{{ $sign_up->slug }}" rel="nofollow"
                        target="_blank"><img src="{{ $sign_up->name }}"
                            class="bct" /></a>
                        @endforeach

                    @foreach($facebook as $facebook)
                    <a href="{{ $facebook->slug }}" rel="nofollow" target="_blank">
                        <img src="{{ $facebook->name }}" />
                    </a>
                    @endforeach

                    @foreach($youtube as $youtube)
                     <a href="{{ $youtube->slug }}" rel="nofollow"
                        target="_blank">
                        <img src="{{ $youtube->name }}" />
                    </a> 
                    @endforeach
                    
                    @foreach($zalo as $zalo)
                    <a href="{{ $zalo->slug }}" rel="nofollow" target="_blank">
                        <img src="{{ $zalo->name }}" />
                    </a>
                    @endforeach
                </div>
            </div>
            {{ getMenuSupport()}}
            <div class="clear"></div>
        </div>
        <div class="footer-row list-branch">
            @foreach($all_branch as $all_branch)
            <div class="branch-show">{{ $all_branch->name }}
            @endforeach

            @foreach($dropdown as $dropdown)
                <img
                    src="{{ $dropdown->name }}" class="downarr"><img
                    src="https://file4.batdongsan.com.vn/images/newhome/up-arrow.png" class="uparr hidden"></div>
            @endforeach
            <div class="branch-detail">
                <div class="branch-col">
                    @foreach($branch as $branch)
                    <div class="branch">
                        <div class="branch-name">{{ $branch->name }}</div>
                        <div class="branch-add">
                            {{ $branch->slug }}
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="clear"></div>
        </div>
        {{ getEndFooter()}}
        <div class="clear"></div>

        
    </div>
</footer>
