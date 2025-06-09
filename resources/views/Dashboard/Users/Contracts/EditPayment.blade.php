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
                                <h4 class="header-title">Edit payment</h4>


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
                                        <form method="POST" action="{{route('Dashboard.Users.Contracts.UpdatePayment' , $Payment->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')

                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="PaymentDate" class="form-label">Payment Date</label>
                                                    <input type="text" id="PaymentDate" name="PaymentDate" class="form-control" required value="{{$Payment->PaymentDate}}">

                                                </div>

                                                <div class="mb-3 col-6">
                                                    <label for="Amount" class="form-label">Amount</label>
                                                    <input type="number" id="Amount" name="Amount" class="form-control" required value="{{$Payment->Amount}}">
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="Percent" class="form-label">Percent</label>
                                                    <input type="text" id="Percent" name="Percent" step="0.1" class="form-control" required value="{{$Payment->Percent}}" >
                                                </div>

                                                <div class="mb-3 col-6">
                                                    <label for="Status"  class="form-label">Status</label>
                                                    <select class="form-select" id="Status" name="Status" required>
                                                        <option selected disabled>Select Payment Status </option>
                                                        <option value="Pending" @if($Payment->Status == 'Pending') selected @endif>Pending</option>
                                                        <option value="Paid" @if($Payment->Status == 'Paid') selected @endif>Paid</option>

                                                    </select>
                                                </div>

                                            </div>


                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="VerificationNumber" class="form-label">Verification Number</label>
                                                    <input type="text" id="VerificationNumber" name="VerificationNumber" class="form-control" required value="{{$Payment->VerificationNumber}}">
                                                </div>

                                                <div class="mb-3 col-6">
                                                    <label for="ReferenceNumber" class="form-label">Reference Number</label>
                                                    <input type="text" id="ReferenceNumber" name="ReferenceNumber" class="form-control" required value="{{$Payment->ReferenceNumber}}">
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
        $(document).ready(function() {
            $("#PaymentDate").flatpickr({enableTime:!0,dateFormat:"Y-m-d H:i:ss",minDate: "today"});
        });

    </script>
@endsection
