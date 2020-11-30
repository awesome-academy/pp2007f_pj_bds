{{ getContact()}}

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
        "PageId": 189,
        "CityCode": null,
        "DistrictId": null,
        "CurrentPage": 189
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


<script
    src="./assets/js/filestatic.msvbds.FrontEnd.Common.Home.min.js">
</script>

<!--start BannerContext-->
<script type='text/javascript'>
    var __bannerContext = {
        "PageId": 189,
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
    src="./assets/js/filestatic.msvbds.jquery.tabslet.jscompress.js">
</script>
<script
    marking-product-service-params={&quot;unmarkProductUrl&quot;:&quot;/Product/MarkedProducts/UnmarkProduct&quot;,&quot;getMarkedProductsByIdsUrl&quot;:&quot;/Product/ProductDetail/GetMarkedListing&quot;,&quot;markedProductsSyncTime&quot;:24,&quot;listingLimit&quot;:50}
    src="./assets/js/filestatic.msvbds.FrontEnd.Home.min.js">
</script>

<script type="text/javascript">
    (function callJQuery() {
        if (window.FrontEnd && window.FrontEnd.BannerViewerBinnova) {
            new window.FrontEnd.BannerViewerBinnova({});
        } else {
            setTimeout(callJQuery, 100)
        }
    })();

</script>

<script type="text/javascript">
    try {
        var script_imported = document.createElement('script');
        script_imported.src = 'https://log.batdongsan.com.vn/js/bds/bds-msv-log.min.js?hv=2&amp;dv=' + (new Date()
            .toJSON().slice(0, 10));
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
