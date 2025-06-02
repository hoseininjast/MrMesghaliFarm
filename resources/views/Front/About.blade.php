@extends('layouts.Front.Master')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>درباره ما</h2>
                        <ul>
                            <li><a href="index.html">خانه</a></li>
                            <li>درباره ما</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

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


    <!-- Start Country Area -->
    <section class="country-area pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="country-item">
                        <div class="country-content">
                            <span>مناطق تحت پوشش</span>
                            <h3>نقاط فروش و تحویل</h3>
                            <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
                        </div>
                        <h3>مساحت موجود</h3>
                        <ul class="country-list">
                            <li>
                                <i class="flaticon-plus"></i>
                                اروپا (379)
                            </li>
                            <li>
                                <i class="flaticon-plus"></i>
                                استرالیا (10)
                            </li>
                            <li>
                                <i class="flaticon-plus"></i>
                                آمریکا (7)
                            </li>
                            <li>
                                <i class="flaticon-plus"></i>
                                آرژانتین (50)
                            </li>
                            <li>
                                <i class="flaticon-plus"></i>
                                روسیه (4)
                            </li>
                            <li>
                                <i class="flaticon-plus"></i>
                                مکزیک (10)
                            </li>
                        </ul>

                        <div class="country-btn">
                            <a href="#" class="default-btn">
                                مشاهده همه
                                <i class="flaticon-plus"></i>
                                <span></span>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class=map-img>
                        <img src="{{asset('Front/img/map.png')}}" alt=map>

                        <div class="location">
                            <a href="#">
                                <div class=location-info>
                                    <h5>استرالیا</h5>
                                </div>
                            </a>
                        </div>

                        <div class="location location2">
                            <a href="#">
                                <div class=location-info>
                                    <h5>اروپا</h5>
                                </div>
                            </a>
                        </div>

                        <div class="location location3">
                            <a href="#">
                                <div class=location-info>
                                    <h5>روسیه</h5>
                                </div>
                            </a>
                        </div>

                        <div class="location location4">
                            <a href="#">
                                <div class=location-info>
                                    <h5>آمریکا</h5>
                                </div>
                            </a>
                        </div>

                        <div class="location location5">
                            <a href="#">
                                <div class=location-info>
                                    <h5>آرژانتین</h5>
                                </div>
                            </a>
                        </div>

                        <div class="location location6">
                            <a href="#">
                                <div class=location-info>
                                    <h5>مکزیک</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Country Area -->


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


    <!-- Start Subscribe Area -->
    <section class="subscribe-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h3>عضویت در خبرنامه </h3>
                <p>لورم ایپسوم به سادگی ساختار چاپ و متن را در بر می گیرد. لورم ایپسوم به مدت 40 سال استاندارد صنعت بوده است.</p>
            </div>

            <form class="newsletter-form">
                <input type="email" class="input-newsletter" placeholder="ایمیل خود را وارد کنید" name="EMAIL" required autocomplete="off">
                <button type="submit">
                    مشترک شدن
                    <i class="flaticon-plus"></i>
                </button>
                <div id="validator-newsletter" class="form-result"></div>
            </form>
        </div>
    </section>
    <!-- End Subscribe Area -->


@endsection
