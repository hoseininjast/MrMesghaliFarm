@extends('layouts.Dashboard.Master')
@section('content')
    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Edit Bulk Purchase </h4>


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
                                        <form method="POST" action="{{route('Dashboard.BulkPurchase.Update' , $Order->id)}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="Name" class="form-label">Name</label>
                                                    <input type="text" id="Name" name="Name" class="form-control" required readonly value="{{$Order->User->FirstName .' ' .$Order->User->LastName}}">
                                                </div>



                                                <div class="mb-3 col-6">
                                                    <label for="PhoneNumber" class="form-label">Phone Number</label>
                                                    <input type="text" id="PhoneNumber" name="PhoneNumber" class="form-control" required readonly value="{{$Order->User->PhoneNumber}}">
                                                </div>



                                            </div>


                                            <div class="row">
                                                <div class="mb-3 col-12">
                                                    <label for="Products" class="form-label">Products</label>
                                                    <textarea name="Products" id="Products" class="form-control"  readonly  rows="10">{{$Order->Products}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row">

                                                <div class="mb-3 col-6">
                                                    <label for="Price" class="form-label">Price</label>
                                                    <input type="number" step="0.01" id="Price" name="Price" class="form-control" required value="{{$Order->Price}}">
                                                </div>


                                                <div class="mb-3 col-6">
                                                    <label for="Status"  class="form-label">Status</label>
                                                    <select class="form-select" id="Status" name="Status">
                                                        <option selected>Select Status </option>
                                                        <option @if($Order->Status == 'Pending') selected @endif value="Pending">Pending</option>
                                                        <option @if($Order->Status == 'Paid') selected @endif value="Paid">Paid</option>
                                                        <option @if($Order->Status == 'Finished') selected @endif value="Finished">Finished</option>
                                                        <option @if($Order->Status == 'Canceled') selected @endif value="Canceled">Canceled</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="Percentage" class="form-label">Percentage</label>
                                                    <input type="number" step="0.01" id="Percentage" name="Percentage" class="form-control"  value="{{$Order->Percentage}}">
                                                </div>



                                                <div class="mb-3 col-6">
                                                    <label for="Commission" class="form-label">Commission</label>
                                                    <input type="number" step="0.01" id="Commission" name="Commission" class="form-control"  value="{{$Order->Commission}}">
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
    <script>

    </script>
@endsection
