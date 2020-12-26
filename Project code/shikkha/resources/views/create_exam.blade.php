@extends('dashboard.layout.master')

@section('section')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">




    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card card-custom">
                <!--begin::Header-->
                <div class="card-header py-3">
                    <div class="card-title align-items-start flex-column">
                        <h3 class="card-label font-weight-bolder text-dark">Assign Exam</h3>
                        <span class="text-muted font-weight-bold font-size-sm mt-1">Exam and there information</span>
                    </div>
                    <div class="card-toolbar">



                        <!-- Button trigger modal-->
                        <!--begin::Button-->
                        <a href="#" class="btn btn-primary font-weight-bolder mr-2" data-toggle="modal" data-target="#exampleModalCenter">
                            <span class="svg-icon svg-icon-md">
                                <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24"></rect>
                                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>
                                        <path
                                          d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                          fill="#000000" opacity="0.3"></path>
                                    </g>
                                </svg>
                                <!--end::Svg Icon-->
                            </span>Assign a exam</a>
                        <!--end::Button-->


                        <div class="dropdown dropdown-inline mr-2">
                            <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="svg-icon svg-icon-md">
                                    <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24"></rect>
                                            <path
                                              d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z"
                                              fill="#000000" opacity="0.3"></path>
                                            <path
                                              d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z"
                                              fill="#000000"></path>
                                        </g>
                                    </svg>
                                    <!--end::Svg Icon-->
                                </span>Export</button>
                            <!--begin::Dropdown Menu-->
                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                <!--begin::Navigation-->
                                <ul class="navi flex-column navi-hover py-2">
                                    <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">Choose an option:</li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-print"></i>
                                            </span>
                                            <span class="navi-text">Print</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-copy"></i>
                                            </span>
                                            <span class="navi-text">Copy</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-excel-o"></i>
                                            </span>
                                            <span class="navi-text">Excel</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-text-o"></i>
                                            </span>
                                            <span class="navi-text">CSV</span>
                                        </a>
                                    </li>
                                    <li class="navi-item">
                                        <a href="#" class="navi-link">
                                            <span class="navi-icon">
                                                <i class="la la-file-pdf-o"></i>
                                            </span>
                                            <span class="navi-text">PDF</span>
                                        </a>
                                    </li>
                                </ul>
                                <!--end::Navigation-->
                            </div>
                            <!--end::Dropdown Menu-->
                        </div>



                        <!-- Modal 1 add new modal:: start-->
                        <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Assign a exam</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <form class="" action="{{ route('faculty.store') }}" method="post">
                                        <div class="modal-body">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                <strong>{{ $error }} </br></strong>
                                                @endforeach
                                            </div>
                                            @endif


                                            @csrf
                                            <!--begin: annoucment time and date -->
                                            <div class="form-group">
                                                <label for="exampleSelect1">Choose Exam Question :</label>
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>499B Midterm-2021</option>
                                                    <option>Bio103 Midterm-2020</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelect1">Choose Course :</label>
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>Cse499B</option>
                                                    <option>Bio103</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelect1">Choose Section :</label>
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>Section : 1</option>
                                                    <option>Section : 2</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Set Exam Start Time:</label>
                                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" />

                                            </div>
                                            <div class="form-group">
                                                <label>Set Exam End Time:</label>
                                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" />

                                            </div>
                                            <div class="form-group">
                                                <label>Set Exam Marks:</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Write Total Marks" />
                                            </div>
                                            <!--end: annoucment time and date-->


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success font-weight-bold">Add New</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal 1 add new modal: end-->



                        <!-- Modal 2 Edit modal:: start-->
                        <div class="modal fade" id="edit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Update Exam Information</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id='close'>
                                            <i aria-hidden="true" class="ki ki-close"></i>
                                        </button>
                                    </div>
                                    <form id="update-form" action="" method="post">


                                        <div class="modal-body">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                @foreach ($errors->all() as $error)
                                                <strong>{{ $error }} </br></strong>
                                                @endforeach
                                            </div>
                                            @endif



                                            @csrf
                                            @method('PUT')


                                            <div class="form-group">
                                                <input id="id" name="id" type="hidden" style="positon:absolute;" class="form-control form-control-lg" placeholder="Write Faculty Name" value=''>
                                            </div>
                                            <!--begin: annoucment time and date -->
                                            <div class="form-group">
                                                <label for="exampleSelect1">Choose Exam Question :</label>
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>499B Midterm-2021</option>
                                                    <option>Bio103 Midterm-2020</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelect1">Choose Course :</label>
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>Cse499B</option>
                                                    <option>Bio103</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleSelect1">Choose Section :</label>
                                                <select class="form-control" id="exampleSelect1">
                                                    <option>Section : 1</option>
                                                    <option>Section : 2</option>

                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Set Exam Start Time:</label>
                                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" />

                                            </div>
                                            <div class="form-group">
                                                <label>Set Exam End Time:</label>
                                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input" />

                                            </div>
                                            <div class="form-group">
                                                <label>Set Exam Marks:</label>
                                                <input type="text" class="form-control form-control-solid" placeholder="Write Total Marks" />
                                            </div>
                                            <!--end: annoucment time and date-->
                                        </div>
                                        <div class="modal-footer footer-update">
                                            <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancel</button>
                                            <button type="submit" class="btn btn-success font-weight-bold update">Update</button>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <!-- Modal 2 Edit modal: end-->






                        <!-- <button type="reset" class="btn btn-success mr-2">Save Changes</button> -->
                    </div>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="">
                    <!--begin: Datatable-->

                    <div class="flex-row-fluid">
                        <!--begin::Card-->
                        <div class="card card-custom card-stretch">


                            <!--begin::Body-->
                            <div class="card-body">

                                <!-- Extra table::Start -->
                                <div class="card card-custom">

                                    <div class="card-body">
                                        <!--begin: Datatable-->
                                        <table class="table table-bordered  table-head-custom table-checkable" id="kt_datatable">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Serial No</th>
                                                    <th scope="col">Exam Name </th>
                                                    <th scope="col">Course & Section</th>
                                                    <th scope="col">Start Time</th>
                                                    <th scope="col">End Time</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Total Marks</th>
                                                    <th scope="col">Actions</th>


                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr class='value'>
                                                    <th id='serial'></th>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>
                                                        <a href="javascript:;" data-toggle="modal" data-target="#edit" class="btn btn-sm btn-clean btn-icon mr-2 edit" title="Edit details" data-id='' data-name='' data-phone='' data-email=''
                                                          data-initial='' data-dob='' data-address=''>
                                                            <i class="far fa-edit"></i>
                                                        </a>

                                                        <a href="javascript:void(0)" data-method="DELETE" data-token="{{csrf_token()}}" data-url="" data-id="" class="btn btn-sm btn-clean btn-icon delete" title="Delete">
                                                            <i class="fas fa-trash"></i>
                                                        </a>
                                                        <a href="javascript:;" class="btn btn-sm btn-clean btn-icon view" title="View" data-toggle="modal" data-target="#view" data-id='' data-name='' data-phone='' data-email='' data-initial=''
                                                          data-dob='' data-address='' data-status=''>
                                                            <i class="far fa-eye"></i>
                                                        </a>


                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <!--end: Datatable-->
                                    </div>
                                </div>
                                <!-- Extra table::End  -->





                            </div>
                            <!--end::Body-->

                        </div>

                    </div>


                    <!--end: Datatable-->

                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Entry-->
    </div>
    <!--end::Content-->
</div>
<!--end::Content-->
<script src="{{ asset('assets/js/createquiz.js') }}"></script>
@endsection
