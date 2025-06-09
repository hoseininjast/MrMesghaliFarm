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
                            <li><a href="{{route('Front.Panel.index')}}">پنل کاربری</a></li>
                            <li>گزارش قرارداد</li>
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
                   <h4>گزارش پرداخت ها </h4>

                   <table class="table">
                       <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">زمان پرداخت</th>
                           <th scope="col">مبلغ کلی</th>
                           <th scope="col">مبلغ ماهانه</th>
                           <th scope="col">سود کلی</th>
                           <th scope="col">سود ماهانه</th>
                           <th scope="col">شماره پیگیری</th>
                           <th scope="col">شماره مرجع</th>
                           <th scope="col">وضعیت</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($Contract->Payments as $payment)
                           <tr>
                               <th scope="row">{{$loop->iteration}}</th>
                               <td>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d H:i', $payment->PaymentDate)}} </td>
                               <td>{{number_format($payment->Amount) ?? 'محاسبه نشده'}}</td>
                               <td>{{number_format($payment->Amount / 3) ?? 'محاسبه نشده'}}</td>
                               <td>{{$payment->Percent . '%' ?? 'محاسبه نشده'}}</td>
                               <td>{{($payment->Percent / 3) . '%' ?? 'محاسبه نشده'}}</td>
                               <td>{{$payment->VerificationNumber}}</td>
                               <td>{{$payment->ReferenceNumber}}</td>
                               <td>
                                   @if($payment->Status == 'Paid')
                                       <i class="fa fa-check-circle text-success"></i> پرداخت شده
                                   @else
                                       <i class="fa fa-clock text-warning"></i> در انتظار پرداخت
                                   @endif
                               </td>


                           </tr>
                       @endforeach


                       </tbody>
                   </table>
               </div>
           </div>
       </div>
    </section>
@endsection
