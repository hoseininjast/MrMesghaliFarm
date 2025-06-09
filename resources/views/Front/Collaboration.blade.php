@extends('layouts.Front.Master')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2 class="text-darkyellow">همکاری با ما</h2>
                        <ul>
                            <li><a href="{{route('Front.index')}}">خانه</a></li>
                            <li>همکاری با ما</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start About Section -->
    <section class="about-section pt-100">
        <div class="container">
            <div class="about-title-area">
                <div class="row">
                    <div class="col-lg-5 col-md-12 d-flex flex-column align-items-center" style="border-left: 1px solid #dfdddf;">
                        <div class="about-title" style="border:unset">
                            <h2>
                                همکاری با ما
                            </h2>
                        </div>
                        <div class="about-image p-2">
                            <img src="{{asset('images/Front/Collaboration.jpg')}}" alt="image" class="rounded">
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-12">
                        <div class="about-text">
                            <p>

                                ما به دنبال ساختن یک زنجیره سالم، مردمی و ارزش‌آفرین هستیم؛ زنجیره‌ای که در آن همه—از مزرعه‌دار و دامدار تا مغازه‌دار و سرمایه‌گذار—جایگاه واقعی خود را داشته باشند.
                                <br>
                                اگر شما دامدار یا کشاورز هستید و با وسواس و صداقت، محصولی سالم و با کیفیت تولید می‌کنید، ما مشتاق همکاری با شما هستیم. باور داریم که سلامت غذا از مزرعه آغاز می‌شود؛ و ما آماده‌ایم محصولات شما را با همان کیفیتی که تولید کرده‌اید، به دست مصرف‌کننده نهایی برسانیم—بدون واسطه‌گری‌های رایج، با احترام کامل به تلاش شما.
                                <br>
                                برای مغازه‌داران، فروشگاه‌های مواد غذایی و تأمین‌کنندگان شهری نیز اینجا فرصتی ویژه وجود دارد. اگر به دنبال عرضه‌ی محصولات متفاوت، سالم و قابل‌اعتماد به مشتریانتان هستید، ما در کنارتان هستیم. ارسال منظم، بسته‌بندی حرفه‌ای، و کیفیت پایدار، بخش مهمی از تعهد ماست.
                                <br>
                                در نهایت، اگر سرمایه‌گذار یا علاقه‌مند به مشارکت اقتصادی هستید و به دنبال یک مسیر مطمئن، شفاف و ارزش‌محور برای سرمایه‌گذاری می‌گردید، با ما در تماس باشید. ما به دنبال رشد مشترک، سودآوری اخلاق‌مدار و ساختن آینده‌ای پایدار هستیم—نه فقط برای خودمان، بلکه برای جامعه‌ای که با ما رشد می‌کند.
                                <br>
                                اگر باور دارید که کیفیت، سلامت و اعتماد باید پایه‌های یک همکاری باشند، خوشحال می‌شویم از شما بشنویم.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="about-shape-image">
            <img src="/Front/img/about/about-shape.png" alt="image">
        </div>
    </section>
    <!-- End About Section -->


    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h3>برای همکاری با ما پیام بفرستید</h3>
                <p>لطفا پیشناهاد کامل خود را همراه با اطلاعات تماس و مشخصات کسب و کار خود را ارسال کنید.</p>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" id="name" class="form-control" required data-error="لطفا نام خود را وارد کنید" placeholder="نام">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control" required data-error="لطفا ایمیل خود را وارد کنید" placeholder="ایمیل">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone_number" id="phone_number" required data-error="لطفا شماره خود را وارد کنید" class="form-control" placeholder="تلفن">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="لطفا موضوع خود را وارد کنید" placeholder="موضوع">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="6" required data-error="پیام خود را بنویسید" placeholder="پیام شما"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="send-btn">
                                        <button type="submit" class="default-btn">
                                            ارسال پیام
                                            <span></span>
                                        </button>
                                    </div>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->




@endsection
