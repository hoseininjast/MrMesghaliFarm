@extends('layouts.Front.Master')

@section('content')

    <!-- Start Home Banner Two Area -->
    <div class="home-banner-two">
        <div class="home-slides owl-carousel owl-theme">
            <div class="home-item item-bg1 " style="background-image: url('{{asset('images/Sliders/4.jpg')}}')">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">

                                <ul class="banner-list">
                                    <li>
                                        <i class="flaticon-cow"></i>
                                        <sup>1</sup>
                                        <span>گوشت</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-"></i>
                                        <sup>2</sup>
                                        <span>تخم مرغ</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-cow-1"></i>
                                        <sup>3</sup>
                                        <span>میوه خشک</span>
                                    </li>
                                </ul>


                                <h1>به‌زودی محصولات خاص و سالم اینجا عرضه میشه</h1>
                                <p>تازه شروع کردیم، اما بزرگ فکر می‌کنیم. منتظر بهترین محصولات باکیفیت، سالم و ارگانیک باشید.</p>

                                <div class="banner-btn">
                                    <a href="#" class="default-btn">
                                        درباره ما
                                        <i class="flaticon-plus"></i>
                                        <span></span>
                                    </a>
                                    <a class="optional-btn" href="{{route('Front.Collaboration')}}">
                                        همکاری ما
                                        <i class="flaticon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-item item-bg2" style="background-image: url('{{asset('images/Sliders/1.jpg')}}')">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <ul class="banner-list">
                                    <li>
                                        <i class="flaticon-cow"></i>
                                        <sup>1</sup>
                                        <span>گوشت</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-"></i>
                                        <sup>2</sup>
                                        <span>تخم مرغ</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-cow-1"></i>
                                        <sup>3</sup>
                                        <span>میوه خشک</span>
                                    </li>
                                </ul>

                                <h1>این فقط یه سایت نیست؛ شروع یه مسیر جدیه</h1>
                                <p>
                                    با قدرت از دل روستا و طبیعت شروع کردیم. اینجا قراره یه برند قابل اعتماد بسازیم.
                                </p>


                                <div class="banner-btn">
                                    <a href="#" class="default-btn">
                                        درباره ما
                                        <i class="flaticon-plus"></i>
                                        <span></span>
                                    </a>
                                    <a class="optional-btn" href="{{route('Front.Collaboration')}}">
                                        همکاری ما
                                        <i class="flaticon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="home-item item-bg3" style="background-image: url('{{asset('images/Sliders/5.jpg')}}')">
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="container">
                            <div class="main-banner-content">
                                <ul class="banner-list">
                                    <li>
                                        <i class="flaticon-cow"></i>
                                        <sup>1</sup>
                                        <span>گوشت</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-"></i>
                                        <sup>2</sup>
                                        <span>تخم مرغ</span>
                                    </li>
                                    <li>
                                        <i class="flaticon-cow-1"></i>
                                        <sup>3</sup>
                                        <span>میوه خشک</span>
                                    </li>
                                </ul>

                                <h1>دوست داری با ما شریک باشی؟
                                </h1>
                                <p>
                                    اگه دلت می‌خواد تو مسیر واقعی تولید، فروش و سوددهی شریک باشی، همین حالا ایمیلتو ثبت کن.
                                </p>


                                <div class="banner-btn">
                                    <a href="#" class="default-btn">
                                        درباره ما
                                        <i class="flaticon-plus"></i>
                                        <span></span>
                                    </a>
                                    <a class="optional-btn" href="{{route('Front.Collaboration')}}">
                                        همکاری ما
                                        <i class="flaticon-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="creative-shape">
            <img src="/Front/img/home-two/shape.png" alt="image">
        </div>

        <div class="shape-img1">
            <img src="/Front/img/home-two/shape-1.png" alt="image">
        </div>

        <div class="shape-img2">
            <img src="/Front/img/home-two/shape-2.png" alt="image">
        </div>
    </div>
    <!-- End Home Banner Two Area -->
    <!-- Start About Section -->
    <section class="about-section ptb-100">
        <div class="container">
            <div class="about-title-area">
                <div class="row">
                    <div class="col-lg-7 col-md-12">
                        <div class="about-title">
                            <span>درباره ما</span>
                            <h2>ما تازه شروع کردیم ولی راهمون مشخصه
                            </h2>
                        </div>
                    </div>

                    <div class="col-lg-5 col-md-12">
                        <div class="about-text">
                            <p>
                                ما با دام و باغ و تلاش واقعی شروع کردیم. می‌خوایم بهترین محصولات ایران رو زیر یه برند عرضه کنیم. این فقط یه تجارت نیست، یه تعهده به خودمون و مردم.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="/Front/img/about/about-2.jpg" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-slider owl-carousel owl-theme">

                        <div class="about-item">
                            <div class="about-slide-image">
                                <img src="/Front/img/about/1.png" alt="image">
                            </div>
                            <div class="about-text">
                                <span>گوشت گوسفند پرواری
</span>
                                <h3>
                                    از دامداری تمیز و کنترل‌شده، با تغذیه طبیعی

                                </h3>
                            </div>
                        </div>

                        <div class="about-item">
                            <div class="about-slide-image">
                                <img src="/Front/img/about/2.png" alt="image">
                            </div>
                            <div class="about-text">
                                <span>تخم‌مرغ رسمی محلی
</span>
                                <h3>تخم‌مرغ سالم از مرغ‌های خوشحال و آزاد
                                </h3>
                            </div>
                        </div>

                        <div class="about-item">
                            <div class="about-slide-image">
                                <img src="/Front/img/about/3.png" alt="image">
                            </div>
                            <div class="about-text">
                                <span>میوه خشک</span>
                                <h3>خشک‌شده با دستگاه صنعتی، طعم و ماندگاری بالا
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div class="about-content-area">
                        <div class="about-content">
                            <h3>چرا باید مارو انتخاب کنید؟</h3>
                        </div>

                        <ul class="about-list">
                            <li>
                                <i class="flaticon-check"></i>
                                تولید سالم
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                حمایت از کشاورز ایرانی

                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                برند قابل اعتماد

                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                سود منصفانه برای سرمایه‌گذار

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-shape-image">
            <img src="/Front/img/about/about-shape.png" alt="image">
        </div>
    </section>
    <!-- End About Section -->

    <!-- Start Harvesting Section -->
    <section class="harvesting-section pt-100">
        <div class="container">
            <div class="harvesting-title">
                <span>دسته بندی محصولات</span>
                <h3>محصولات ارگانیک و با کیفیت</h3>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="harvesting-item">
                        <div class="harvesting-image">
                            <img src="/Front/img/harvesting/1.png" alt="image">
                            <img src="/Front/img/harvesting/white-1.png" alt="image">
                        </div>

                        <div class="harvesting-content">
                            <h3>گوشت گوسفند پرواری
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="harvesting-item">
                        <div class="harvesting-image">
                            <img src="/Front/img/harvesting/2.png" alt="image">
                            <img src="/Front/img/harvesting/white-2.png" alt="image">
                        </div>

                        <div class="harvesting-content">
                            <h3>تخم‌مرغ رسمی محلی
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-6 offset-md-3 offset-sm-3 offset-lg-0">
                    <div class="harvesting-item">
                        <div class="harvesting-image">
                            <img src="/Front/img/harvesting/3.png" alt="image">
                            <img src="/Front/img/harvesting/white-3.png" alt="image">
                        </div>

                        <div class="harvesting-content">
                            <h3>میوه خشک</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Harvesting Section -->

    <!-- Start Shop Section -->
    <section class="shop-section section-top pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span>به فروشگاه ما مراجعه کنید</span>
                <h3>محصولات ما به زودی در دسترس شماست
                </h3>
                <p> اولین سری از گوشت، تخم‌مرغ، و محصولات باغی آماده عرضه است.</p>
            </div>

            <div class="tab shop-list-tab">


                <div class="tab_content">
                    <div class="tabs_item">
                        <div class="row align-items-center">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-image">
                                        <img src="/Front/img/shop/cauliflower.png" alt="image">
                                    </div>



                                    <div class="shop-content">
                                        <h3>گوشت گوسفند بسته‌ای</h3>
                                        <span>به زودی</span>

                                        <div class="shop-btn">
                                            <a href="#" class="shop-btn-one">
                                                افزودن سبد خرید
                                                <i class="flaticon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-image">
                                        <img src="/Front/img/shop/fish.png" alt="image">
                                    </div>



                                    <div class="shop-content">
                                        <h3>تخم‌مرغ رسمی ۶ عددی
                                        </h3>
                                        <span>به زودی</span>

                                        <div class="shop-btn">
                                            <a href="#" class="shop-btn-one">
                                                افزودن سبد خرید
                                                <i class="flaticon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-image">
                                        <img src="/Front/img/shop/eggplant.png" alt="image">
                                    </div>



                                    <div class="shop-content">
                                        <h3>پسته</h3>
                                        <span>به زودی</span>

                                        <div class="shop-btn">
                                            <a href="#" class="shop-btn-one">
                                                افزودن سبد خرید
                                                <i class="flaticon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-image">
                                        <img src="/Front/img/shop/milk.png" alt="image">
                                    </div>


                                    <div class="shop-content">
                                        <h3>بادام</h3>
                                        <span>به زودی</span>

                                        <div class="shop-btn">
                                            <a href="#" class="shop-btn-one">
                                                افزودن سبد خرید
                                                <i class="flaticon-plus"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Section -->

    <!-- Start Video Section -->
    <div class="video-section">
        <div class="container">
            <div class="video-content">
                <a href="https://www.youtube.com/watch?v=Z3OS4Bn0n-Q" class="video-btn popup-youtube">
                    <i class="fas fa-play"></i>
                </a>
            </div>
        </div>
    </div>
    <!-- End Video Section -->

    <!-- Start Fun Facts Section -->
    <section class="fun-facts-area pb-100">
        <div class="container">
            <div class="fun-facts-content-area">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span style="direction: ltr;" class="odometer" data-count="120">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>گوسفند های پرواری</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span style="direction: ltr;" class="odometer" data-count="150">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>تخم‌مرغ روزانه
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span style="direction: ltr;" class="odometer" data-count="145">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>گوشت تولید شده
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-fun-fact">
                            <h3>
                                <span style="direction: ltr;" class="odometer" data-count="200">00</span>
                                <span class="sign-icon">+</span>
                            </h3>
                            <p>میوه خشک شده روزانه</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fun Facts Section -->

    <!-- Start Summary Section -->
    <section class="summary-section pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="summary-image">
                        <img src="/Front/img/summary/1.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="summary-content">
                        <span>خلاصه</span>
                        <h3>ما از دل طبیعت شروع کردیم
                        </h3>
                        <p>از تمیز کردن دامداری گرفته تا لحظه دیدن اولین تخم‌مرغ محلی، هر گام در این مسیر با هدف‌گذاری دقیق و پشتکار فراوان برداشته شده است.</p>
                        <p>
                            این فرآیند نه تنها نشان‌دهنده تعهد کامل به کیفیت است، بلکه بیانگر تلاش بی‌وقفه برای تولید محصولاتی است که سلامت و رضایت مصرف‌کننده را در اولویت قرار می‌دهند. هر روز با دقت و وسواس تمام، جزئیات مدیریت می‌شوند تا از بهداشت کامل و شرایط مطلوب برای حیوانات اطمینان حاصل شود، و این رویکرد جامع و مسئولانه است که در نهایت منجر به تولید محصولات طبیعی و باکیفیت می‌گردد.
                        </p>

                        <div class="summary-btn">
                            <a class="optional-btn" href="#">
                                همکاری با ما
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="summary-shape-image">
            <img src="/Front/img/summary/shape.png" alt="image">
        </div>
    </section>
    <!-- End Summary Section -->

    <!-- Start Services Section -->
    <section class="services-section pb-100">
        <div class="container">
            <div class="services-content-area">
                <div class="services-slider owl-carousel owl-theme">

                    <div class="services-item">
                        <div class="icon">
                            <i class="flaticon-mission-accomplished"></i>
                            <h3>
                                <a href="single-services.html">
                                   ۱ -  تولید سالم در مزرعه

                                </a>
                            </h3>
                        </div>
                    </div>

                    <div class="services-item">
                        <div class="icon">
                            <i class="flaticon-sushi"></i>
                            <h3>
                                <a href="single-services.html">
                                   ۲ - برداشت و بسته‌بندی حرفه‌ای

                                </a>
                            </h3>
                        </div>
                    </div>

                    <div class="services-item">
                        <div class="icon">
                            <i class="flaticon-shipping-and-delivery"></i>
                            <h3>
                                <a href="single-services.html">
                                    ۳ -  حمل‌ونقل سریع و ایمن

                                </a>
                            </h3>
                        </div>
                    </div>

                    <div class="services-item">
                        <div class="icon">
                            <i class="flaticon-vendor"></i>
                            <h3>
                                <a href="single-services.html">
                                  ۴ - تحویل مستقیم به خانه مصرف‌کننده

                                </a>
                            </h3>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->

    <!-- Start Cultivation Section -->
    <section class="cultivation-section pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span> دسته‌بندی فعالیت و محصولات</span>
                <h3>خدمات و محصولات ما</h3>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cultivation">
                        <div class="cultivation-image">
                            <img src="/Front/img/cultivation/1.png" alt="image">
                            <a href="#" class="details-btn">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                        <div class="cultivation-content">
                            <h3>پرورش گوسفند
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cultivation">
                        <div class="cultivation-image">
                            <img src="/Front/img/cultivation/2.png" alt="image">
                            <a href="#" class="details-btn">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                        <div class="cultivation-content">
                            <h3>پرورش مرغ رسمی
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cultivation">
                        <div class="cultivation-image">
                            <img src="/Front/img/cultivation/3.png" alt="image">
                            <a href="#" class="details-btn">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                        <div class="cultivation-content">
                            <h3>محصولات باغی و خشکبار
                            </h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cultivation">
                        <div class="cultivation-image">
                            <img src="/Front/img/cultivation/4.png" alt="image">
                            <a href="#" class="details-btn">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                        <div class="cultivation-content">
                            <h3>محصولات گلخانه‌ای</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cultivation Section -->

    <!-- Start Fisherman Section -->
    <section class="fisherman-section ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="fisherman-image">
                        <img src="/Front/img/fisherman.png" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="fisherman-content">
                        <span>اخبار ما</span>
                        <h3>شروع دامداری
                        </h3>
                        <p>اولین فاز دامداری پرواری ما با سرمایه شخصی و دوستان آغاز شد.
                        </p>

                        <ul class="fisherman-list">
                            <li>
                                <i class="flaticon-check"></i>
                                ۱ - آماده کردن محل پرورش
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                ۲ - خرید گوسفند
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                ۳ - تامین علوفه و خوراک
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                ۴ - شروع دوره اول پرواربندی
                            </li>
                        </ul>

                        <div class="fisherman-btn">
                            <a href="#" class="optional-btn">
                                بیشتر بدانید
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Fisherman Section -->

    <!-- Start Cowman Section -->
    <section class="cowman-section pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="cowman-content">
                        <span>اخبار بازار
</span>
                        <h3>افزایش تقاضا برای تخم‌مرغ محلی
                        </h3>
                        <p>بازار شهرهای اطراف به دنبال تخم‌مرغ‌های رسمی و طبیعی
                        </p>

                        <ul class="cowman-list">
                            <li>
                                <i class="flaticon-check"></i>
                                ۱ - آماده کردن محل
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                ۲ - خرید مرغ محلی
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                ۳ - تامین خوراک طبیعی
                            </li>

                            <li>
                                <i class="flaticon-check"></i>
                                ۴ - برداشت تخم مرغ
                            </li>
                        </ul>

                        <div class="cowman-btn">
                            <a href="#" class="optional-btn">
                                بیشتر بدانید
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="cowman-image">
                        <img src="/Front/img/cowman.png" alt="image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Cowman Section -->


@endsection
