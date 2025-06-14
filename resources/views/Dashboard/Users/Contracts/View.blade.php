@extends('layouts.Dashboard.Master')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Contract Details</h4>


                                <div class="table-responsive">
                                    <table class="table table-dark table-striped table-bordered text-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Payment Date</th>
                                            <th>Amount</th>
                                            <th>Profit Percent</th>
                                            <th>Verification Number</th>
                                            <th>Reference Number</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Contracts->Payments as $payment)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$payment->PaymentDate}} </td>
                                                <td>{{number_format($payment->Amount ?? 0)}}</td>
                                                <td>{{$payment->Percent}}%</td>
                                                <td>{{$payment->VerificationNumber}}</td>
                                                <td>{{$payment->ReferenceNumber}}</td>
                                                <td>{{$payment->Status}}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning waves-effect waves-light" href="{{route('Dashboard.Users.Contracts.EditPayment' , $payment->id)}}"  >Edit <i class="mdi mdi-pen"></i> </a>
                                                </td>
                                            </tr>
                                        @endforeach


                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>


            </div> <!-- container-fluid -->
        </div> <!-- content -->

    </div>
@endsection
