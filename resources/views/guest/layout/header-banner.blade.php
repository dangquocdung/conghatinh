<div class="container nen-trang">
    <div class="margin-15px">
{{--        @include('guest.layout.header-slide')--}}
        <div style="position: relative">
            <a href="/">
                <img u="image" src="{{$toppic->hinhanh}}" width="100%"/>
            </a>
            <div id="google_translate_element"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'vi', includedLanguages: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </div>

        <a href="{{$banner->where('vitri','8')->last()->lienket}}" target="_blank">
            <img src="{{ $banner->where('vitri','8')->last()->banner}}" alt="{{ $banner->where('vitri','8')->last()->name}}" title="{{ $banner->where('vitri','8')->last()->name}}" width="100%">
        </a>

        @include('guest.layout.menu-ngang')
        @include('guest.layout.menu-ngang-mb')
    </div>
</div>