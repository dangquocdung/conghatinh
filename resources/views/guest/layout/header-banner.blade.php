<div class="container nen-trang" id="banner-main-top">
    <div class="margin-15px">
{{--        @include('guest.layout.header-slide')--}}
        <div style="position: relative">
            <a href="/">
                <img src="{{ Setting::get('banner') }}" width="100%"/>
            </a>
            <div id="google_translate_element"></div>
            <script type="text/javascript">
                function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'vi', includedLanguages: 'en,vi,zh-CN', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
                }
            </script>
            <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        </div>



        @include('guest.layout.menu-ngang')
        @include('guest.layout.menu-ngang-mb')
    </div>
</div>
