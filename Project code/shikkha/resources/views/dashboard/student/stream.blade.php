@extends('dashboard.layout.master')

@section('section')

<div class="d-flex flex-column-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">
                                Basic Card
                                <small>sub title</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled. Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom gutter-b">
                    <div class="card-header">
                        <div class="card-title">
                            <h3 class="card-label">
                                Basic Card
                                <small>sub title</small>
                            </h3>
                        </div>
                    </div>
                    <div class="card-body">
                        has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled. Lorem Ipsum is simply dummy text of
                        the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-custom">
                    <div class="card-header">
                        <div class="card-title">

                            <h3 class="card-label">
                                CSE413
                                <small>09</small>
                              </br> <span style="font-size:12px">IQR</span>
                            </h3>
                        </div>


                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-icon btn-light-danger mr-2">
                                <i class="fa fa-envelope-open-text"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-light-success mr-2">
                                <i class="flaticon2-gear"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-light-primary mr-2">
                                <i class="flaticon2-bell-2"></i>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-light-primary">
                                <i class="flaticon2-bell-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                              <span class="d-block font-weight-bold mb-4 text-center">Class Time</span>
                              <span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text mt-2">Saturday (4:20-5:50)</span>
                              <span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text mt-2">Sunday (4:20-5:50)</span>
                              <span class="btn btn-light-success btn-sm font-weight-bold btn-upper btn-text mt-2">Wednesday (4:20-5:50)</span>
                            </div>
                            {{-- <div class="col-lg-4">
                              <p>hi</p>
                            </div>
                            <div class="col-lg-4">
                              <p>hi</p>
                            </div> --}}
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">
                        <a href="#" class="btn btn-light-primary font-weight-bold">Join Class</a>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>



@endsection
