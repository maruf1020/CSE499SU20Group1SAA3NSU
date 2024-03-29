@extends('dashboard.layout.master')

@section('section')

    <!--begin::Content-->
    <div class="content d-flex flex-column flex-column-fluid">


        <!--begin::Entry-->
        <div class="d-flex flex-column-fluid">
            <!--begin::Container-->
            <div class="container">
                <!--begin::Card-->
                <div class="card card-custom">
                    <!--begin::Header-->
                    <div class="card-header py-3">
                        <div class="card-title align-items-start flex-column">
                            <h3 class="card-label font-weight-bolder text-dark">{{ $course->name }}</h3>
                            <span
                                class="text-muted font-weight-bold font-size-sm mt-1">Section and there information</span>
                        </div>
                        <div class="card-toolbar">


                            <!-- Button trigger modal-->
                            <!--begin::Button-->
                            <a href="#" class="btn btn-primary font-weight-bolder mr-2" data-toggle="modal"
                               data-target="#exampleModalCenter">
							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<circle fill="#000000" cx="9" cy="15" r="6"></circle>
										<path
                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                            fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>Add New Section</a>
                            <!--end::Button-->
                            <!--begin::Button-->
                            <a href="{{ url()->previous() }}" class="btn btn-danger font-weight-bolder mr-2">

							<span class="svg-icon svg-icon-md">
								<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
										<circle fill="#000000" cx="9" cy="15" r="6"></circle>
										<path
                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"
                                            fill="#000000" opacity="0.3"></path>
									</g>
								</svg>
                                <!--end::Svg Icon-->
							</span>Back</a>
                            <!--end::Button-->

                            <div class="dropdown dropdown-inline mr-2">
                                <button type="button" class="btn btn-light-primary font-weight-bolder dropdown-toggle"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="svg-icon svg-icon-md">
									<!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/PenAndRuller.svg-->
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                         width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
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
								</span>Export
                                </button>
                                <!--begin::Dropdown Menu-->
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                    <!--begin::Navigation-->
                                    <ul class="navi flex-column navi-hover py-2">
                                        <li class="navi-header font-weight-bolder text-uppercase font-size-sm text-primary pb-2">
                                            Choose an option:
                                        </li>
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
                            <div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1"
                                 role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add New Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <form class="" action="{{ route('section.store') }}" method="post">
                                            <div class="modal-body">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        @foreach ($errors->all() as $error)
                                                            <strong>{{ $error }} </br></strong>
                                                        @endforeach
                                                    </div>
                                                @endif


                                                @csrf
                                                <div class="form-group" style="visibility: hidden;position: absolute;">
                                                    <input name="course_id" type="number"
                                                           class="form-control form-control-lg"
                                                           value="{{ $course->id }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Section Number</label>
                                                    <input name="section_number" type="number"
                                                           class="form-control form-control-lg"
                                                           placeholder="Write Section Number">
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Session</label>
                                                    <select id="" class="form-control form-control-lg" name="session">
                                                        <option value="">Select session</option>
                                                        @foreach ($session as $key=>$value)
                                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Faculty</label>
                                                    <select id="" class="form-control form-control-lg"
                                                            name="faculty_id">
                                                        <option value="">Select Faculty</option>
                                                        @foreach ($faculties as $key=>$value)
                                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                {{--                                                <div class="form-group">--}}
                                                {{--                                                    <label>Choose Student</label>--}}
                                                {{--                                                    <select id="" class="form-control form-control-lg" name="student_id">--}}
                                                {{--                                                        <option value="">Select Student</option>--}}
                                                {{--                                                        <option value="2">EEE Department</option>--}}

                                                {{--                                                    </select>--}}
                                                {{--                                                </div>--}}
                                                <div class="form-group ">
                                                    <label>Choose Student</label>
                                                    <div class="col-lg-12" style="width: 33rem;">
                                                        <select class="form-control form-control-lg select2"
                                                                id="kt_select2_3" name="student_id[]"
                                                                multiple="multiple"
                                                                data-mce-placeholder="Select students">
                                                            {{--                                                            <option value="" selected>Select Student</option>--}}
                                                            <option value="Search and add"></option>
                                                            @foreach ($student as $key=>$value)
                                                                <option
                                                                    value="{{ $value->id }}">{{ $value->name }}</option>
                                                            @endforeach


                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Start Time</label>
                                                    <select id="" class="form-control form-control-lg" name="start">
                                                        <option value="">Select Start Time</option>
                                                        @foreach ($timings as $key=>$value)
                                                            <option
                                                                value="{{ $value->start }}">{{ $value->start }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose End Time</label>
                                                    <select id="" class="form-control form-control-lg" name="end">
                                                        <option value="">Select End Time</option>
                                                        @foreach ($timings as $key=>$value)
                                                            <option value="{{ $value->end }}">{{ $value->end }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Capacity </label>
                                                    <input name="capacity" type="number"
                                                           class="form-control form-control-lg"
                                                           placeholder="Write Section Capacity ">
                                                </div>


                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-light-danger font-weight-bold"
                                                        data-dismiss="modal">Cancel
                                                </button>
                                                <button type="submit" class="btn btn-success font-weight-bold">Add New
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal 1 add new modal: end-->


                            <!-- Modal 2 Edit modal:: start-->
                            <div class="modal fade" id="edit" data-backdrop="static" tabindex="-1" role="dialog"
                                 aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                    id='close'>
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
                                                    <input style="visibility: hidden;position: absolute;" id="id"
                                                           name="id" type="hidden" class="form-control form-control-lg"
                                                           placeholder="Write Faculty Name" value=''>
                                                </div>


                                                <div class="form-group" style="visibility: hidden;position: absolute;">
                                                    <input id="course_id" name="course_id" type="number"
                                                           class="form-control form-control-lg"
                                                           value="{{ $course->id }}">
                                                </div>
                                                <div class="form-group">
                                                    <label>Section Number</label>
                                                    <input id="section_number" name="section_number" type="number"
                                                           class="form-control form-control-lg"
                                                           placeholder="Write Section Number">
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Session</label>
                                                    <select id="session" class="form-control form-control-lg"
                                                            name="session">
                                                        <option value="">Select session</option>
                                                        @foreach ($session as $key=>$value)
                                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Faculty</label>
                                                    <select id="faculty" class="form-control form-control-lg"
                                                            name="faculty_id">
                                                        <option value="">Select Faculty</option>
                                                        @foreach ($faculties as $key=>$value)
                                                            <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Student</label>
                                                    <select id="student_id" class="form-control form-control-lg"
                                                            name="student_id">
                                                        <option value="">Select Student</option>
                                                        <option value="2">EEE Department</option>

                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Start Time</label>
                                                    <select id="start" class="form-control form-control-lg"
                                                            name="start">
                                                        <option value="">Select Start Time</option>
                                                        @foreach ($timings as $key=>$value)
                                                            <option
                                                                value="{{ $value->start }}">{{ $value->start }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose End Time</label>
                                                    <select id="end" class="form-control form-control-lg" name="end">
                                                        <option value="">Select End Time</option>
                                                        @foreach ($timings as $key=>$value)
                                                            <option value="{{ $value->end }}">{{ $value->end }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Capacity </label>
                                                    <input id="capacity" name="capacity" type="number"
                                                           class="form-control form-control-lg"
                                                           placeholder="Write Section Capacity ">
                                                </div>
                                            </div>
                                            <div class="modal-footer footer-update">
                                                <button type="button" class="btn btn-light-danger font-weight-bold"
                                                        data-dismiss="modal">Cancel
                                                </button>
                                                <button type="submit" class="btn btn-success font-weight-bold update">
                                                    Update
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal 2 Edit modal: end-->


                            <!-- Modal 3 view modal:: start-->
                            <div class="modal fade" id="view" data-backdrop="static" tabindex="-1" role="dialog"
                                 aria-labelledby="staticBackdrop" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Update Section</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                    id='close'>
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>


                                        <div class="modal-body">
                                            <!--begin: Datatable-->
                                            <table class="table table-bordered  table-head-custom table-checkable" id="kt_datatable">
                                                <thead>
                                                <tr >
                                                    <th scope="col">Serial No</th>
                                                    <th scope="col">Student Name </th>
                                                    <th scope="col">Student Email</th>
                                                    <th scope="col">Student Phone</th>



                                                </tr>
                                                </thead>
                                                <tbody>

                                                    <tr class='list-student'>
                                                        <th id='serial'></th>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>1</td>

                                                    </tr>
                                                </tbody>
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                        <div class="modal-footer footer-update">
                                            <button type="button" class="btn btn-light-danger font-weight-bold"
                                                    data-dismiss="modal">Cancel
                                            </button>
                                            <button type="submit" class="btn btn-success font-weight-bold update">
                                                Update
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- Modal 3 view modal: end-->


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
                                            <table class="table table-bordered  table-head-custom table-checkable"
                                                   id="kt_datatable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Serial No</th>
                                                    <th scope="col">Section Number</th>
                                                    <th scope="col">Faculty Initial</th>
                                                    <th scope="col">Students</th>
                                                    <th scope="col">Start Time</th>
                                                    <th scope="col">End Time</th>
                                                    <th scope="col">Capacity</th>
                                                    <th scope="col">Actions</th>


                                                </tr>
                                                </thead>
                                                <tbody>
                                                {{-- <?php
                                                $check =0;
                                                ?> --}}
                                                @foreach ($sectionDetail as $key=>$value)
                                                    {{--<?php
                                                    $chekdoublevalue = $value->section_number;

                                                    if($chekdoublevalue != $check)
                                                    {
                                                    ?> --}}
                                                    <tr class='value{{ $value->id }}'>
                                                        <th id='serial'>{{ $key+1 }}</th>
                                                        <td>Section: {{ $value->section->section_number }}</td>
                                                        <td>{{ $value->faculty->name }}</td>
                                                        <td>
                                                            <a data-toggle="modal" id="sam" data-course='{{ $value->course_id }}' data-faculty='{{ $value->faculty_id }}' data-section='{{ $value->section_id }}'
                                                               data-institution='{{ $value->institution_id }}'
                                                               data-target="#view" type="button" class="btn btn-success mr-2 view">view
                                                                student
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $start = $value->section->start;
                                                            $start = explode(":", $start);
                                                            $hours = $start[0];


                                                            $minutes = $start[1];
                                                            if ($hours > 12) {
                                                                $meridian = 'PM';
                                                                $hours = $hours - 12;
                                                            } else if ($hours < 12) {
                                                                $meridian = 'AM';
                                                                if ($hours == 0) {
                                                                    $hours = 12;
                                                                }
                                                            } else {
                                                                $meridian = 'PM';
                                                            }
                                                            echo $hours . ':' . $minutes . ' ' . $meridian;

                                                            ?>
                                                        </td>
                                                        <td>
                                                            <?php
                                                            $end = $value->section->end;
                                                            $end = explode(":", $end);
                                                            $hours = $end[0];
                                                            $minutes = $end[1];
                                                            if ($hours > 12) {
                                                                $meridian = 'PM';
                                                                $hours = $hours - 12;
                                                            } else if ($hours < 12) {
                                                                $meridian = 'AM';
                                                                if ($hours == 0) {
                                                                    $hours = 12;
                                                                }
                                                            } else {
                                                                $meridian = 'PM';
                                                            }
                                                            echo $hours . ':' . $minutes . ' ' . $meridian;

                                                            ?>
                                                        </td>
                                                        <td>{{ $value->section->capacity }}</td>
                                                        <td>
                                                            <a href="javascript:;" data-toggle="modal"
                                                               data-target="#edit"
                                                               class="btn btn-sm btn-clean btn-icon mr-2 edit"
                                                               title="Edit details" data-id='{{ $value->section_id }}'
                                                               data-facultyid='{{ $value->name }}'
                                                               data-sectionid='{{ $value->section_number }}'
                                                               data-start='{{ $value->start }}'
                                                               data-end='{{ $value->end }}'
                                                               data-capacity='{{ $value->capacity }}'
                                                               data-session='{{ $value->session }}'>
                                                                <i class="far fa-edit"></i>
                                                            </a>

                                                            <a href="javascript:void(0)" data-method="DELETE"
                                                               data-token="{{csrf_token()}}"
                                                               data-url="{{ route('section.destroy',$value->section_id) }}"
                                                               data-id="{{ $value->section_id }}"
                                                               class="btn btn-sm btn-clean btn-icon delete"
                                                               title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    {{--<?php
                                                     }
                                                    $check = $chekdoublevalue;
                                                     ?> --}}
                                                @endforeach
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


        <script type="text/javascript">
            $(document).ready(function () {

                // function Edit POST
                $(document).on('click', '.edit', function () {

                    // $('.modal-title').text('Post Edit');
                    $('#id').val($(this).data('id'));
                    var id = $(this).data('id');
                    $('#faculty').val($(this).data('facultyid'));
                    $('#capacity').val($(this).data('capacity'));
                    $('#start').val($(this).data('start'));
                    $('#end').val($(this).data('end'));
                    $('#section_number').val($(this).data('sectionid'));
                    $('#session').val($(this).data('session'));
                    // $('#update-form').attr('action',"/faculty/"+id);
                });

            });
        </script>

        <script type="text/javascript">
            $('#update-form').on('submit', function (event) {
                event.preventDefault();
                var id = document.getElementById("id").value;
                var serial = document.getElementById("serial").innerHTML;

                $.ajax({
                    type: 'PUT',
                    url: "/section/" + id,
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#id").val(),
                        'faculty_id': $('#faculty').val(),
                        'capacity': $('#capacity').val(),
                        'start': $('#start').val(),
                        'end': $('#end').val(),
                        'section_number': $('#section_number').val(),
                        'session': $('#session').val(),
                        'course_id': $('#course_id').val(),


                    },
                    dataType: 'JSON',

                    success: function (data) {
                        $('.value' + data.id).replaceWith(" " +
                            "<tr class='value" + data.id + "'>" +
                            "<td>" + serial + "</td>" +
                            "<td> Section: " + data.section_number + "</td>" +
                            "<td>" + data.faculty_id + "</td>" +
                            "<td>" + data.faculty_id + "</td>" +
                            "<td>" + data.start + "</td>" +
                            "<td>" + data.end + "</td>" +
                            "<td>" + data.capacity + "</td>" +
                            "<td><a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='" + data.id + "' data-name='" + data.name + "' data-phone='" + data.phone + "' data-email='" + data.email + "' data-initial='" + data.initial + "' data-dob='" + data.dob + "' data-address='" + data.address + "'>" +
                            "<i class='far fa-edit'></i></a>" +
                            "<a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='" + data.phone + "' data-phone='" + data.phone + "' data-email='" + data.email + "' data-initial='" + data.initial + "' data-dob='" + data.dob + "' data-address='" + data.address + "'>" +
                            "<i class='fas fa-trash'></i></a>" +

                            "</td>" +
                            "</tr>");


                        Swal.fire({
                            title: "Success!",
                            text: "Section Updated Succesfully!",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Close!",
                            customClass: {
                                confirmButton: "btn btn-primary"
                            }

                        });
                    }
                });
                document.getElementById('close').click();


            });
        </script>
        <script>
            // Class definition
            var KTSelect2 = function () {
                // Private functions
                var demos = function () {
                    // basic
                    $('#kt_select2_1').select2({
                        placeholder: "Select a state"
                    });

                    // nested
                    $('#kt_select2_2').select2({
                        placeholder: "Select a state"
                    });

                    // multi select
                    $('#kt_select2_3').select2({
                        placeholder: "Select a state",
                    });

                    // basic
                    $('#kt_select2_4').select2({
                        placeholder: "Select a state",
                        allowClear: true
                    });

                    // loading data from array
                    var data = [{
                        id: 0,
                        text: 'Enhancement'
                    }, {
                        id: 1,
                        text: 'Bug'
                    }, {
                        id: 2,
                        text: 'Duplicate'
                    }, {
                        id: 3,
                        text: 'Invalid'
                    }, {
                        id: 4,
                        text: 'Wontfix'
                    }];

                    $('#kt_select2_5').select2({
                        placeholder: "Select a value",
                        data: data
                    });

                    // loading remote data

                    function formatRepo(repo) {
                        if (repo.loading) return repo.text;
                        var markup = "<div class='select2-result-repository clearfix'>" +
                            "<div class='select2-result-repository__meta'>" +
                            "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";
                        if (repo.description) {
                            markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
                        }
                        markup += "<div class='select2-result-repository__statistics'>" +
                            "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + repo.forks_count + " Forks</div>" +
                            "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
                            "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
                            "</div>" +
                            "</div></div>";
                        return markup;
                    }

                    function formatRepoSelection(repo) {
                        return repo.full_name || repo.text;
                    }

                    $("#kt_select2_6").select2({
                        placeholder: "Search for git repositories",
                        allowClear: true,
                        ajax: {
                            url: "https://api.github.com/search/repositories",
                            dataType: 'json',
                            delay: 250,
                            data: function (params) {
                                return {
                                    q: params.term, // search term
                                    page: params.page
                                };
                            },
                            processResults: function (data, params) {
                                // parse the results into the format expected by Select2
                                // since we are using custom formatting functions we do not need to
                                // alter the remote JSON data, except to indicate that infinite
                                // scrolling can be used
                                params.page = params.page || 1;

                                return {
                                    results: data.items,
                                    pagination: {
                                        more: (params.page * 30) < data.total_count
                                    }
                                };
                            },
                            cache: true
                        },
                        escapeMarkup: function (markup) {
                            return markup;
                        }, // let our custom formatter work
                        minimumInputLength: 1,
                        templateResult: formatRepo, // omitted for brevity, see the source of this page
                        templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
                    });

                    // custom styles

                    // tagging support
                    $('#kt_select2_12_1, #kt_select2_12_2, #kt_select2_12_3, #kt_select2_12_4').select2({
                        placeholder: "Select an option",
                    });

                    // disabled mode
                    $('#kt_select2_7').select2({
                        placeholder: "Select an option"
                    });

                    // disabled results
                    $('#kt_select2_8').select2({
                        placeholder: "Select an option"
                    });

                    // limiting the number of selections
                    $('#kt_select2_9').select2({
                        placeholder: "Select an option",
                        maximumSelectionLength: 2
                    });

                    // hiding the search box
                    $('#kt_select2_10').select2({
                        placeholder: "Select an option",
                        minimumResultsForSearch: Infinity
                    });

                    // tagging support
                    $('#kt_select2_11').select2({
                        placeholder: "Add a tag",
                        tags: true
                    });

                    // disabled results
                    $('.kt-select2-general').select2({
                        placeholder: "Select an option"
                    });
                }

                var modalDemos = function () {
                    $('#kt_select2_modal').on('shown.bs.modal', function () {
                        // basic
                        $('#kt_select2_1_modal').select2({
                            placeholder: "Select a state"
                        });

                        // nested
                        $('#kt_select2_2_modal').select2({
                            placeholder: "Select a state"
                        });

                        // multi select
                        $('#kt_select2_3_modal').select2({
                            placeholder: "Select a state",
                        });

                        // basic
                        $('#kt_select2_4_modal').select2({
                            placeholder: "Select a state",
                            allowClear: true
                        });
                    });
                }

                // Public functions
                return {
                    init: function () {
                        demos();
                        modalDemos();
                    }
                };
            }();

            // Initialization
            jQuery(document).ready(function () {
                KTSelect2.init();
            });


        </script>


        <script type="text/javascript">
            $('#sam').click(function() {
                window.alert("ok");

                $.ajax({
                    type: 'GET',
                    url: "/section-student/",
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#id").val(),
                        'course': $(this).data('course'),
                        'faculty': $(this).data('faculty'),
                        'section': $(this).data('section'),
                        'institution': $(this).data('institution'),


                    },
                    dataType: 'JSON',

                    success: function(data) {
                        $('.value' + data.id).replaceWith(" " +
                            "<tr class='value" + data.id + "'>" +
                            "<td>" + serial + "</td>" +
                            "<td>" + data.name + "</td>" +
                            "<td>" + data.phone + "</td>" +
                            "<td>" + data.email + "</td>" +
                            "<td>" + data.initial + "</td>" +
                            "<td><a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.id+"' data-name='"+data.name+"' data-phone='"+data.phone+"' data-email='"+data.email+"' data-initial='"+data.initial+"' data-dob='"+data.dob+"' data-address='"+data.address+"'>"+
                            "<i class='far fa-edit'></i></a>"+
                            "<a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.phone+"' data-phone='"+data.phone+"' data-email='"+data.email+"' data-initial='"+data.initial+"' data-dob='"+data.dob+"' data-address='"+data.address+"'>"+
                            "<i class='fas fa-trash'></i></a>"+
                            "<a href='javascript:;' data-toggle='modal' data-target='#view' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.phone+"' data-phone='"+data.phone+"' data-email='"+data.email+"' data-initial='"+data.initial+"' data-dob='"+data.dob+"' data-address='"+data.address+"'>"+
                            "<i class='far fa-eye'></i></a>"+
                            "</td>" +
                            "</tr>");


                    }
                });


            });
        </script>
@endsection
{{-- <a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.phone+"' data-name='"+data.phone+"'
    data-phone='"+data.phone+"' data-email='"+data.phone+"' data-initial='"+data.phone+"' data-dob='"+data.phone+"' data-address='"+data.phone+"'>
    <i class='far fa-edit'></i>
</a> --}}
