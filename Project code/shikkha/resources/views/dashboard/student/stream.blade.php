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
                                CSE488A
                                <small>16</small>
                                </br> <span style="font-size:12px">Syed Athar Bin Amir</span>
                            </h3>
                        </div>

                        <div class="card-footer d-flex justify-content-between stream-button">
                            <a href="#" class="btn btn-success font-weight-bold mr-2">Conference</a>
                            <a href="#" class="btn btn-info font-weight-bold mr-2">Steam</a>
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
                        <div class="card-toolbar">
                            <a href="#" class="btn btn-sm btn-icon btn-light-primary mr-2 tooltipicon">
                                <i class="far fa-comments"></i>
                                <span class="tooltipicontext">Course Discussion</span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-light-warning mr-2 tooltipicon">
                                <i class="far fa-calendar-check"></i>
                                <span class="tooltipicontext">Class work</span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-light-info mr-2 tooltipicon">
                                <i class="fas fa-folder"></i>
                                <span class="tooltipicontext">Course Resource</span>
                            </a>
                            <a href="#" class="btn btn-sm btn-icon btn-light-danger mr-2 tooltipicon">
                                <i class="flaticon2-bell-2"></i>
                                <span class="tooltipicontext">Notifications</span>
                            </a>

                        </div>
                        <div class="symbol-group symbol-hover justify-content-between">
                            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Mark Stone">
                                <img alt="Pic" src="{{asset('assets/media/users/300_25.jpg') }}">
                            </div>
                            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Charlie Stone">
                                <img alt="Pic" src="{{asset('assets/media/users/300_19.jpg') }}">
                            </div>
                            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Luca Doncic">
                                <img alt="Pic" src="{{asset('assets/media/users/300_22.jpg') }}">
                            </div>
                            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Nick Mana">
                                <img alt="Pic" src="{{asset('assets/media/users/300_23.jpg') }}">
                            </div>
                            <div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Teresa Fox">
                                <img alt="Pic" src="{{asset('assets/media/users/300_18.jpg') }}">
                            </div>
                            <div class="symbol symbol-30 symbol-circle symbol-light" data-toggle="tooltip" title="" data-original-title="More users">
                                <span class="symbol-label font-weight-bold">35+</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>



@endsection
