@extends('layouts.Front.Master')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>تماس با ما</h2>
                        <ul>
                            <li><a href="index.html">خانه</a></li>
                            <li>تماس با ما</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Contact Box Area -->
    <section class="contact-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fab fa-telegram-plane"></i>
                        <div class="content-title">
                            <h3>تلگرام</h3>
                            <p>@alireza</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-contact-box">
                        <i class="fa fa-envelope"></i>
                        <div class="content-title">
                            <h3>ایمیل</h3>
                            <a href="mailto:hello@trifles.com">info@mrmesghalifarm.ir</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-contact-box">
                        <i class="fa fa-phone"></i>
                        <div class="content-title">
                            <h3>تلفن</h3>
                            <a href="تلفن:021-12345678">09120000000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Box Area -->

    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title">
                <h3>برای هر سوالی پیام بفرستید</h3>
                <p>انتقادات و پیشنهادات خود را با ما در میان بگذارید.</p>
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

    <!-- Start Subscribe Area -->
    <section class="subscribe-area ptb-100">
        <div class="container">
            <div class="section-title">
                <h3>عضویت در خبرنامه  </h3>
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
