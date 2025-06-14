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
                                <h4 class="header-title">Contracts</h4>

                                <div class=" d-flex justify-content-end mb-3">
                                    <a class="btn btn-sm btn-success waves-effect waves-light"  href="{{route('Dashboard.Users.Contracts.Add' , $UserID)}}"  > New <i class="mdi mdi-plus"></i> </a>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-dark table-striped table-bordered text-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Amount</th>
                                            <th>Time</th>
                                            <th>Start Date</th>
                                            <th>Profit</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Contracts as $contract)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{number_format($contract->Amount)}}</td>
                                                <td>{{$contract->Contract->Time}} Months</td>
                                                <td>{{$contract->StartDate}}</td>
                                                <td>{{$contract->Contract->MinProfit . '% -' .$contract->Contract->MaxProfit .'%'}}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning waves-effect waves-light" href="{{route('Dashboard.Users.Contracts.View' , $contract->id)}}"  >View <i class="mdi mdi-view-list"></i> </a>
                                                    <a class="btn btn-sm btn-danger waves-effect waves-light" href="{{route('Dashboard.Users.Contracts.Delete' , $contract->id)}}" data-confirm-delete="true" >Delete <i class="mdi mdi-trash-can"></i> </a>
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
