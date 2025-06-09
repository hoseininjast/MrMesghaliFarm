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
                                        <form method="POST" action="{{route('Dashboard.Contracts.Create')}}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="Name" class="form-label">Name</label>
                                                    <input type="text" id="Name" name="Name" class="form-control" required value="{{old('Name')}}">
                                                </div>

                                                <div class="mb-3 col-6">
                                                    <label for="Description" class="form-label">Description</label>
                                                    <textarea name="Description" id="Description" class="form-control"  rows="1">{{old('Description')}}</textarea>
                                                </div>



                                            </div>

                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="Time" class="form-label">Time</label>
                                                    <input type="number" id="Time" name="Time" class="form-control" >
                                                </div>


                                                <div class="mb-3 col-6">
                                                    <label for="Status"  class="form-label">Status</label>
                                                    <select class="form-select" id="Status" name="Status">
                                                        <option selected>Select Status </option>
                                                        <option value="Open">Open</option>
                                                        <option value="Closed">Closed</option>
                                                    </select>
                                                </div>

                                            </div>



                                            <div class="row">
                                                <div class="mb-3 col-6">
                                                    <label for="MinProfit" class="form-label">Min Profit</label>
                                                    <input type="number" id="MinProfit" name="MinProfit" value="{{old('MinProfit')}}" step="0.1" class="form-control">
                                                </div>
                                                <div class="mb-3 col-6">
                                                    <label for="MaxProfit" class="form-label">Max Profit</label>
                                                    <input type="number" id="MaxProfit" name="MaxProfit" value="{{old('MaxProfit')}}" step="0.1" class="form-control">
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
