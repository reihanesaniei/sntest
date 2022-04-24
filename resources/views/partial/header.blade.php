<!-- ======= Header ======= -->
<header id="header" class="">
    <div class="container d-flex align-items-center justify-content-lg-between">
        <h1 class="logo"><a href="/"></a></h1>
        <nav id="navbar" class="navbar ">
            <ul>

                <li><a class="nav-link scrollto" href="/">صفحه اصلی</a></li>
                <li><a class="nav-link scrollto" href="/api/pricelist">لیست قیمتها</a></li>

                {{--<li><a class="nav-link scrollto" href="/contactus">تماس با ما</a></li>
                <li><a class="nav-link scrollto" href="/weblog">وبلاگ</a></li>
                <li><a class="nav-link scrollto" href="/suggestion">انتقادات و پیشنهادات</a></li>--}}
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
        <div  class="get-started-btn scrollto">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">داشبورد</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">ورود / </a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">عضویت</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</header><!-- End Header -->
