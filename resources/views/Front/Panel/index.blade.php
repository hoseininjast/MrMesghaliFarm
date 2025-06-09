@extends('layouts.Front.Master')

@section('content')
    <!-- Start Page Title Area -->
    <div class="page-title-area">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>پنل کاربری</h2>
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

               <div class="col-12 pt-4">

                   <div class="row">
                       <div class="col-lg-4 col-md-6">
                           <div class="single-contact-box">
                               <i class="fa fa-percentage"></i>
                               <div class="content-title">
                                   <h3>سود</h3>
                                   <p class="text-white">۲۰٪</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6">
                           <div class="single-contact-box">
                               <i class="fa fa-calendar"></i>
                               <div class="content-title">
                                   <h3>سررسید برداشت</h3>
                                   <p class="text-white">۲۳/۱۰/۱۴۰۴</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-4 col-md-6">
                           <div class="single-contact-box">
                               <i class="fa fa-dollar-sign"></i>
                               <div class="content-title">
                                   <h3>مبلغ سود</h3>
                                   <p class="text-white">۲۰۰ دلار</p>
                               </div>
                           </div>
                       </div>

                   </div>

               </div>

               <div class="col-12 p-4">
                   <div class="row">
                       <div class="col-9">
                           <h4>قرارداد ها</h4>
                       </div>
                       <div class="col-3">
                           <a href="{{route('Front.Panel.DownloadSampleContract')}}" class="btn btn-success">دانلود نمونه قرارداد <i class="fa fa-download"></i></a>
                       </div>
                   </div>
                   <table class="table">
                       <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">اسم</th>
                           <th scope="col">توضیحات</th>
                           <th scope="col">زمان</th>
                           <th scope="col">سود دهی</th>
                           <th scope="col">وضعیت</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach(\App\Models\Contracts::all() as $contract)
                           <tr>
                               <th scope="row">1</th>
                               <td>{{$contract->Name}}</td>
                               <td class="Panel-table-Description">{{$contract->Description}}</td>
                               <td>{{$contract->Time}} ماه</td>
                               <td>{{$contract->MinProfit}}% - {{$contract->MaxProfit}}%</td>
                               <td>{{$contract->Status}}</td>

                           </tr>
                       @endforeach

                       </tbody>
                   </table>
               </div>


               <div class="col-12 p-4">
                   <h4>سرمایه گذاری ها</h4>
                   <table class="table">
                       <thead>
                       <tr>
                           <th scope="col">#</th>
                           <th scope="col">مبلغ</th>
                           <th scope="col">شروع قرارداد</th>
                           <th scope="col">پایان قرارداد</th>
                           <th scope="col">عملیات</th>
                       </tr>
                       </thead>
                       <tbody>
                       @foreach($Contracts as $contract)
                           <tr>
                               <th scope="row">{{$loop->iteration}}</th>
                               <td>{{number_format($contract->Amount)}} میلیون</td>
                               <td>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', $contract->StartDate)}}</td>
                               <td>{{\Morilog\Jalali\CalendarUtils::strftime('Y/m/d', $contract->EndDate)}}</td>
                               <td>
                                   <a href="{{route('Front.Panel.Report' , $contract->id)}}" class="btn btn-primary">گزارش</a>
                                   <a href="{{$contract->SignedContract}}" download class="btn btn-primary">دانلود قرارداد</a>
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
