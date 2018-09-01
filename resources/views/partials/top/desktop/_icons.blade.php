<div class="header-icons">
    <a href="#" class="header-wrapicon1 dis-block">
        <img src="{{ asset('vendor/fashe-colorlib/images/icons/icon-header-01.png') }}" class="header-icon1" alt="ICON">
    </a>

    <span class="linedivide1"></span>

    <div class="header-wrapicon2">
        <img src="{{ asset('vendor/fashe-colorlib/images/icons/icon-header-02.png') }}" class="header-icon1 js-show-header-dropdown" alt="ICON">
        <span class="header-icons-noti">{{ Cart::instance('default')->count() }}</span>

        <!-- Header cart noti -->
        @include('partials.top.desktop._cart')
    </div>

    <span class="linedivide1"></span>

    <div class="header-wrapicon3">
        <a href="{{ route('wishlist.show') }}">
            <span class="lnr lnr-heart text-2xl text-grey"></span>
        </a>
    </div>
</div>