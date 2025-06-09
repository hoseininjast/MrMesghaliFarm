@extends('layouts.Front.Master')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2 class="text-darkyellow">درباره ما</h2>
                        <ul>
                            <li><a href="{{route('Front.index')}}">خانه</a></li>
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
                    <div class="col-lg-4 col-md-12">
                        <div class="about-title">
                            <h2>
                                درباره ما

                            </h2>
                        </div>
                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="about-text">
                            <p>

                                ما باور داریم که هر ایرانی حق داره بهترین و سالم‌ترین مواد غذایی رو مصرف کنه؛ محصولاتی در حد کیفیت صادراتی، اما مخصوص مردم خودمون. مسیر ما از جایی آغاز شد که تصمیم گرفتیم به‌جای رفتن به دنبال سود سریع، روی کیفیت واقعی، سلامت مصرف‌کننده و صداقت در تولید تمرکز کنیم.
                                <br>
                                تولید ما با تکیه بر دامداری و کشاورزی پاک آغاز شده—بدون استفاده از ترکیبات مصنوعی، بدون وابستگی به کود یا سم شیمیایی، و بدون بار اضافه‌ای از مواد مداخله‌گر روی سلامت دام یا خاک. ما با دستان خودمون، با تلاش شبانه‌روزی، و با وسواس در هر جزئیات، به تولید طبیعی و ارگانیک متعهد شدیم.
                                <br>
                                برای ما، تولید هر بسته گوشت گوسفند، هر شانه تخم‌مرغ رسمی، یا هر قطعه میوه خشک فقط یک محصول نیست؛ یک تعهده. تعهد به کیفیت، سلامت، و اعتمادی که مردم به ما می‌کنن.
                                <br>
                                ما اعتقاد داریم که سلامت، از مزرعه شروع می‌شه. انتخاب دقیق خوراک طبیعی، محیط پرورش بهداشتی، احترام به طبیعت و مراقبت واقعی از دام و زمین، همه بخشی از فرآیندیه که به محصولاتی منجر می‌شه که می‌تونی با خیال راحت به خانواده‌ات بدی—محصولاتی که پایه‌های تولید ارگانیک رو رعایت می‌کنن.
                                <br>
                                ما فقط دنبال فروش نیستیم. داریم یک برند قابل‌اعتماد می‌سازیم که توش مردم با خیال راحت خرید می‌کنن و سرمایه‌گذارا با اطمینان مشارکت می‌کنن. اینجا، مصرف‌کننده، تولیدکننده و حامی مالی کنار هم برای آینده‌ای سالم‌تر تلاش می‌کنن.
                                <br>
                                ما هنوز اول راهیم، اما راهمون روشنه—با پشتکار، صداقت، و تعهد به طبیعت. اگر دنبال محصولی سالم، واقعی و با پشتوانه‌ی ارگانیک هستی، ما اینجاییم—با افتخار، از دل زمین ایران.
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


    <!-- Start Subscribe Area -->
    <section class="subscribe-area pt-100 pb-100">
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
