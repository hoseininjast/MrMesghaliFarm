@extends('layouts.Front.Master')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>گزارش قرارداد</h2>
                        <ul>
                            <li><a href="index.html">خانه</a></li>
                            <li>پنل کاربری</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <section class="contact-box">
       <div class="container">
           <div class="row">

               <h3>گزارش سرمایه گذاری </h3>


               <div class="col-12 pt-4">

                   <div class="row">
                       <div class="col-lg-6 col-md-6">
                           <div class="single-contact-box">
                               <i class="fa fa-percentage"></i>
                               <div class="content-title">
                                   <h3>سود باقی مانده</h3>
                                   <p>۱۲٪ الی ۱۵٪</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-6 col-md-6">
                           <div class="single-contact-box">
                               <i class="fa fa-dollar-sign"></i>
                               <div class="content-title">
                                   <h3>مبلغ حدودی</h3>
                                   <p>۱۵۰ میلیون  الی ۱۹۰ میلیون </p>
                               </div>
                           </div>
                       </div>

                   </div>

               </div>


               <div class="col-12 p-4">
                   <h4>گزارش سرمایه گذاری </h4>

                   <table class="table">
                       <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">درصد</th>
                           <th scope="col">سررسید </th>
                           <th scope="col">مبلغ</th>
                           <th scope="col">وضعیت</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <th scope="row">برداشت اول</th>
                           <td>۳.۵٪</td>
                           <td>۲۳/۱۰/۱۴۰۴</td>
                           <td>۵۰ میلیون تومان</td>
                           <td>
                               <i class="fa fa-check-circle text-success"></i> دریافت شده
                           </td>

                       </tr>

                       <tr>
                           <th scope="row">برداشت دوم</th>
                           <td>۳٪ الی ۴٪</td>
                           <td>۲۳/۲/۱۴۰۴</td>
                           <td>۵۰ میلیون تومان</td>
                           <td>
                               <i class="fa fa-clock text-primary"></i> در انتظار پرداخت
                           </td>

                       </tr>

                       <tr>
                           <th scope="row">برداشت سوم</th>
                           <td>۳٪ الی ۴٪</td>
                           <td>۲۳/۶/۱۴۰۵</td>
                           <td>۵۰ میلیون تومان</td>
                           <td>
                               <i class="fa fa-clock text-primary"></i> در انتظار پرداخت
                           </td>

                       </tr>

                       <tr>
                           <th scope="row">برداشت چهارم</th>
                           <td>۳٪ الی ۴٪</td>
                           <td>۲۳/۹/۱۴۰۵</td>
                           <td>۵۰ میلیون تومان</td>
                           <td>
                               <i class="fa fa-clock text-primary"></i> در انتظار پرداخت
                           </td>

                       </tr>

                       </tbody>
                   </table>
               </div>
           </div>
       </div>
    </section>
@endsection
