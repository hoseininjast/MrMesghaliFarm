@extends('layouts.Dashboard.Master')
@section('Head')
    <link href="{{asset('Dashboard/assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
@endsection
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Add Contract</h4>


                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif



                                <div class="row">
                                    <div class="col-lg-12">
                                        <form method="POST" action="{{route('Dashboard.Users.Contracts.Create')}}" enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="UserID" value="{{$UserID}}">

                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="Amount" class="form-label">Amount</label>
                                                    <input type="number" id="Amount" name="Amount" class="form-control" >
                                                </div>

                                                <div class="mb-3 col-4">
                                                    <label for="SignedContract" class="form-label">Signed Contract</label>
                                                    <input type="file" id="SignedContract" name="SignedContract" accept="application/pdf" class="form-control">

                                                </div>





                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="Start" class="form-label">Start Date</label>
                                                    <input type="text" id="Start" name="Start" class="form-control" placeholder="Start Date" >
                                                </div>

                                                <div class="mb-3 col-6">
                                                    <label for="ContractID"  class="form-label">Contract</label>
                                                    <select class="form-select" id="ContractID" name="ContractID">
                                                        <option selected>Select User Contract</option>
                                                        @foreach($Contracts as $contract)
                                                            <option value="{{$contract->id}}">{{$contract->Name}}</option>
                                                        @endforeach

                                                    </select>
                                                </div>

                                            </div>





                                            <div class=" row">
                                                <div class="col-8 col-xl-9">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>



                                        </form>
                                    </div> <!-- end col -->

                                </div>
                                <!-- end row-->

                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div><!-- end col -->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->


    </div>
@endsection

@section('js')
    <script src="{{asset('Dashboard/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    <script>
        var StartDate , EndDate, Time;
        $(document).ready(function() {
            $("#Start").flatpickr({enableTime:!0,dateFormat:"Y-m-d H:i:ss",minDate: "today"});
        });

    </script>
@endsection
