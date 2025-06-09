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

                                <div class="table-responsive">
                                    <table class="table table-dark table-striped table-bordered text-center mb-0">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>Time</th>
                                            <th>Min Profit</th>
                                            <th>Max Profit</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($Contracts as $contract)
                                            <tr>
                                                <th scope="row">{{$loop->iteration}}</th>
                                                <td>{{$contract->Name}}</td>
                                                <td>{{$contract->Time}}</td>
                                                <td>{{$contract->MinProfit}}</td>
                                                <td>{{$contract->MaxProfit}}</td>
                                                <td>
                                                    <a class="btn btn-sm btn-warning waves-effect waves-light" href="{{route('Dashboard.Contracts.Edit' , $contract->id)}}" data-confirm-delete="true" >Edit <i class="mdi mdi-pen"></i> </a>
                                                    <a class="btn btn-sm btn-danger waves-effect waves-light" href="{{route('Dashboard.Contracts.Delete' , $contract->id)}}" data-confirm-delete="true" >Delete <i class="mdi mdi-trash-can"></i> </a>
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
