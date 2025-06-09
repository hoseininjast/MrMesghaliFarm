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
                                        <span class="badge bg-darkyellow border-lightgreen rounded-circle icon-sheep-size">
                                            <img class="icon-images-size" style="width: 50px !important;" src="{{asset('images/Front/icons/Sheep.png')}}" alt="sheep icon" />
                                        </span>
                                        <span>گوشت</span>
                                    </li>
                                    <li>
                                        <span class="badge bg-darkyellow border-lightgreen rounded-circle p-3">
                                            <img class="icon-images-size" src="{{asset('images/Front/icons/Chicken.png')}}" alt="sheep icon" />
                                        </span>
                                        <span>تخم مرغ</span>
                                    </li>
                                    <li>
                                       <span class="badge bg-darkyellow border-lightgreen rounded-circle p-1">
                                            <img class="icon-images-size" style="width: 55px !important;" src="{{asset('images/Front/icons/DryFruit.png')}}" alt="sheep icon" />
                                        </span>
                                        <span>میوه خشک</span>
                                    </li>
                                </ul>


                                <h1 class="text-darkyellow">به‌زودی محصولات خاص و سالم اینجا عرضه میشه</h1>
                                <p>تازه شروع کردیم، اما بزرگ فکر می‌کنیم. منتظر بهترین محصولات باکیفیت، سالم و ارگانیک باشید.</p>

                                <div class="banner-btn">
                                    <a href="#" class="default-btn">
                                        درباره ما
                                        <i class="flaticon-plus"></i>
                                        <span></span>
                                    </a>
                                    <a class="default-btn" href="{{route('Front.Collaboration')}}">
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
                                        <span class="badge bg-darkyellow border-lightgreen rounded-circle icon-sheep-size">
                                            <img class="icon-images-size" style="width: 50px !important;" src="{{asset('images/Front/icons/Sheep.png')}}" alt="sheep icon" />
                                        </span>
                                        <span>گوشت</span>
                                    </li>
                                    <li>
                                        <span class="badge bg-darkyellow border-lightgreen rounded-circle p-3">
                                            <img class="icon-images-size" src="{{asset('images/Front/icons/Chicken.png')}}" alt="sheep icon" />
                                        </span>
                                        <span>تخم مرغ</span>
                                    </li>
                                    <li>
                                       <span class="badge bg-darkyellow border-lightgreen rounded-circle p-1">
                                            <img class="icon-images-size" style="width: 55px !important;" src="{{asset('images/Front/icons/DryFruit.png')}}" alt="sheep icon" />
                                        </span>
                                        <span>میوه خشک</span>
                                    </li>
                                </ul>

                                <h1 class="text-darkyellow">این فقط یه سایت نیست؛ شروع یه مسیر جدیه</h1>
                                <p>
                                    با قدرت از دل روستا و طبیعت شروع کردیم. اینجا قراره یه برند قابل اعتماد بسازیم.
                                </p>


                                <div class="banner-btn">
                                    <a href="#" class="default-btn">
                                        درباره ما
                                        <i class="flaticon-plus"></i>
                                        <span></span>
                                    </a>
                                    <a class="default-btn" href="{{route('Front.Collaboration')}}">
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
                                        <span class="badge bg-darkyellow border-lightgreen rounded-circle icon-sheep-size">
                                            <img class="icon-images-size" style="width: 50px !important;" src="{{asset('images/Front/icons/Sheep.png')}}" alt="sheep icon" />
                                        </span>
                                        <span>گوشت</span>
                                    </li>
                                    <li>
                                        <span class="badge bg-darkyellow border-lightgreen rounded-circle p-3">
                                            <img class="icon-images-size" src="{{asset('images/Front/icons/Chicken.png')}}" alt="sheep icon" />
                                        </span>
                                        <span>تخم مرغ</span>
                                    </li>
                                    <li>
                                       <span class="badge bg-darkyellow border-lightgreen rounded-circle p-1">
                                            <img class="icon-images-size" style="width: 55px !important;" src="{{asset('images/Front/icons/DryFruit.png')}}" alt="sheep icon" />
                                        </span>
                                        <span>میوه خشک</span>
                                    </li>
                                </ul>

                                <h1 class="text-darkyellow">دوست داری با ما شریک باشی؟
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
                                    <a class="default-btn" href="{{route('Front.Collaboration')}}">
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
                    <div class="col-lg-4 col-md-12">
                        <div class="about-title">
                            <h2>
                                ما کی هستیم؟

                            </h2>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="about-text">
                            <p>

                                ما با یک باور ساده شروع کردیم: هر ایرانی شایسته‌ی مصرف محصولاتی سالم، طبیعی و با کیفیتیه که در حد بهترین‌ها باشه. همه محصولات ما—از گوشت گوسفند و تخم‌مرغ رسمی تا میوه خشک و محصولات باغی—با وسواس، عشق، و استفاده از روش‌های سالم و مسئولانه پرورش داده می‌شن.
                                <br>
                                ما نه‌تنها تولیدکننده‌ای متعهدیم، بلکه در مسیر گسترش کارمون، با کشاورزان و تولیدکنندگان نمونه‌ای همکاری می‌کنیم که مثل ما به سلامت، کیفیت و روش‌های طبیعی پایبند هستند.
                                <br>
                                این فقط یک برند نیست؛ تعهدیه به سلامت خانواده‌ها، کشاورزی پاک و آینده‌ای بهتر برای همه.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="about-image">
                        <img src="{{asset('images/Front/AboutUs.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="about-slider owl-carousel owl-theme">

                        <div class="about-item">
                            <div class="about-slide-image">
                                <img src="{{asset('images/Front/SheepMeat.jpeg')}}" class="aboutus-image-size" alt="image">
                            </div>
                            <div class="about-text">
                                <span>گوشت گوسفند پرواری
</span>
                                <h3>
                                    از دامداری تمیز و کنترل‌شده، با تغذیه سالم دام‌ها بدون افزودنی.
                                </h3>
                            </div>
                        </div>

                        <div class="about-item">
                            <div class="about-slide-image">
                                <img src="{{asset('images/Front/Eggs.jpeg')}}" class="aboutus-image-size" alt="image">
                            </div>
                            <div class="about-text">
                                <span>تخم‌مرغ رسمی محلی
</span>
                                <h3>تخم‌مرغ سالم از مرغ‌های محلی و آزاد
                                </h3>
                            </div>
                        </div>

                        <div class="about-item">
                            <div class="about-slide-image">
                                <img src="{{asset('images/Front/DryFruit.jpeg')}}" class="aboutus-image-size" alt="image">
                            </div>
                            <div class="about-text">
                                <span>میوه خشک</span>
                                <h3>میوه های ارگانیک و باکیفیت ، خشک‌شده با دستگاه صنعتی
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
    <section class="harvesting-section ptb-100">
        <div class="container">
            <div class="harvesting-title">
                <span>دسته بندی محصولات</span>
                <h3>محصولات ارگانیک و با کیفیت</h3>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="harvesting-item">
                        <div class="harvesting-image">
                            <img src="{{asset('images/Front/icons/Sheep.png')}}" style="width: 86%" alt="image">
                            <img src="{{asset('images/Front/icons/Sheep.png')}}" style="width: 86%" alt="image">
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
                            <img src="{{asset('images/Front/icons/Chicken.png')}}" style="width: 75%" alt="image">
                            <img src="{{asset('images/Front/icons/Chicken.png')}}" style="width: 75%" alt="image">
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
                            <img src="{{asset('images/Front/icons/DryFruit.png')}}" style="width: 64%" alt="image">
                            <img src="{{asset('images/Front/icons/DryFruit.png')}}" style="width: 64%" alt="image">
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
                                        <img src="{{asset('images/Front/Products/SheepMeat.jpg')}}" class="shop-image-size" alt="image">
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
                                        <img src="{{asset('images/Front/Products/Eggs.png')}}" class="shop-image-size" alt="image">
                                    </div>



                                    <div class="shop-content">
                                        <h3>تخم‌مرغ رسمی ۱۰ عددی
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
                                        <img src="{{asset('images/Front/Products/DryFruit.jpeg')}}" class="shop-image-size" alt="image">
                                    </div>



                                    <div class="shop-content">
                                        <h3>میوه خشک بسته ای</h3>
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
                                        <img src="{{asset('images/Front/Products/Almond.jpeg')}}" class="shop-image-size" alt="image">
                                    </div>


                                    <div class="shop-content">
                                        <h3>بادام درختی خام</h3>
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



    <!-- Start Summary Section -->
    <section class="summary-section pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="summary-image">
                        <img src="{{asset('images/Front/summery.jpg')}}" alt="image">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="summary-content">
                        <h3>
                            ما کیفیت صادراتی را برای سفره ایرانی می‌خواهیم
                        </h3>
                        <p>
                            ما با نگاهی تازه به کشاورزی و دامداری قدم در مسیر تولید سالم و باکیفیت گذاشته‌ایم. هدف ما تنها فروش محصولات نیست؛ بلکه ساختن یک برند قابل اعتماد برای خانواده‌های ایرانی است که به سلامت خود اهمیت می‌دهند. در تمام مراحل، از تولید تا بسته‌بندی، با دقت و وسواس فراوان روی کیفیت، بهداشت و سلامت محصولات تمرکز کرده‌ایم. این دقت باعث شده سطح تولیدات ما در حد محصولات صادراتی باشد.
                        </p>
                        <p>
                            ما باور داریم که حق مردم ایران است بهترین و سالم‌ترین مواد غذایی را مصرف کنند، نه صرفاً آنچه در بازار رایج است. به همین دلیل، تلاش کرده‌ایم بدون استفاده از ترکیبات شیمیایی یا خوراک‌های غیرطبیعی، غذایی تولید کنیم که واقعاً "طبیعی" باشد؛ چه گوشت گوسفند، چه تخم‌مرغ رسمی، چه میوه‌ خشک.
                        </p>

                        <p>
                            این مسیر برای ما یک تعهد است، نه فقط یک کسب‌وکار. ما این راه را با اعتماد، پشتکار و شفافیت ادامه می‌دهیم تا بتوانیم نامی آشنا و قابل احترام در میان خانواده‌های ایرانی باشیم؛ نمادی از سلامت و صداقت.
                        </p>

                        <div class="banner-btn">
                            <a href="#" class="default-btn">
                                فروشگاه
                                <i class="flaticon-plus"></i>
                                <span></span>
                            </a>
                            <a class="default-btn" href="{{route('Front.Collaboration')}}">
                                همکاری ما
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="summary-shape-image">
            <img src="{{asset('Front/img/summary/shape.png')}}" alt="image">
        </div>
    </section>
    <!-- End Summary Section -->

    <!-- Start Services Section -->
    <section class="services-section pb-100 pt-100">
        <div class="container">
            <div class="services-content-area">
                <div class="services-slider owl-carousel owl-theme">

                    <div class="services-item">
                        <div class="icon">
                            <i class="flaticon-mission-accomplished"></i>
                            <h3>
                                <a class="text-white" href="single-services.html">
                                   ۱ -  تولید سالم در مزرعه

                                </a>
                            </h3>
                        </div>
                    </div>

                    <div class="services-item">
                        <div class="icon">
                            <i class="flaticon-sushi"></i>
                            <h3>
                                <a class="text-white" href="single-services.html">
                                   ۲ - برداشت و بسته‌بندی حرفه‌ای

                                </a>
                            </h3>
                        </div>
                    </div>

                    <div class="services-item">
                        <div class="icon">
                            <i class="flaticon-shipping-and-delivery"></i>
                            <h3>
                                <a class="text-white" href="single-services.html">
                                    ۳ -  حمل‌ونقل سریع و ایمن

                                </a>
                            </h3>
                        </div>
                    </div>

                    <div class="services-item">
                        <div class="icon">
                            <i class="flaticon-vendor"></i>
                            <h3>
                                <a class="text-white" href="single-services.html">
                                  ۴ - تحویل به مصرف کننده

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
                <h3>خدمات و محصولات ما</h3>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cultivation">
                        <div class="cultivation-image">
                            <img src="{{asset('images/Front/Services/Sheep.jpg')}}" alt="image">
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
                            <img src="{{asset('images/Front/Services/Chicken.jpg')}}" alt="image">
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
                            <img src="{{asset('images/Front/Services/DriedFruit.jpeg')}}" alt="image">
                            <a href="#" class="details-btn">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                        <div class="cultivation-content">
                            <h3>میوه خشک</h3>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cultivation">
                        <div class="cultivation-image">
                            <img src="{{asset('images/Front/Services/Fruits.jpg')}}" alt="image">
                            <a href="#" class="details-btn">
                                <i class="flaticon-plus"></i>
                            </a>
                        </div>
                        <div class="cultivation-content">
                            <h3>محصولات باغی
                            </h3>
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
                            <a href="#" class="default-btn">
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
                            <a href="#" class="default-btn">
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
