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
                            <h3 class="card-label font-weight-bolder text-dark">Course Information</h3>
                            <span class="text-muted font-weight-bold font-size-sm mt-1">Course and there information</span>
                        </div>
                        <div class="card-toolbar">



                            <!-- Button trigger modal-->


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
                                            <h5 class="modal-title" id="exampleModalLabel">Add New course</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <i aria-hidden="true" class="ki ki-close"></i>
                                            </button>
                                        </div>
                                        <form class="" action="{{ route('course.store') }}" method="post">
                                            <div class="modal-body">
                                                @if ($errors->any())
                                                    <div class="alert alert-danger">
                                                        @foreach ($errors->all() as $error)
                                                            <strong>{{ $error }} </br></strong>
                                                        @endforeach
                                                    </div>
                                                @endif


                                                @csrf
                                                <div class="form-group">
                                                    <label>Course name</label>
                                                    <input name="name" type="text" class="form-control form-control-lg" placeholder="Write course Name">
                                                </div>

                                                <div class="form-group">
                                                    <label>Course Initial</label>
                                                    <input name="initial" type="text" class="form-control form-control-lg" placeholder="Write course Initial">
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Credit</label>
                                                    <input name="credit" type="number" class="form-control form-control-lg" placeholder="Write course Credit">
                                                </div>

                                                <div class="form-group">
                                                    <label>Choose Departement</label>
                                                    <select id="department_id" class="form-control form-control-lg" name="department_id">
                                                        <option value="">Select Deparment</option>

                                                            <option value=""></option>

                                                    </select>



                                                </div>


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
                                            <h5 class="modal-title" id="exampleModalLabel">Update Course</h5>
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
                                                    <input id="id" name="id" type="hidden" class="form-control form-control-lg" placeholder="Write course Name" value=''>
                                                </div>
                                                <div class="form-group">
                                                    <label>Course name</label>
                                                    <input id="name" name="name" type="text" class="form-control form-control-lg" placeholder="Write course Name" value=''>
                                                </div>

                                                <div class="form-group">
                                                    <label>Course Initial</label>
                                                    <input id="initial" name="initial" type="text" class="form-control form-control-lg" placeholder="Write course Initial">
                                                </div>
                                                <div class="form-group">
                                                    <label>Course Credit</label>
                                                    <input id="credit" name="credit" type="number" class="form-control form-control-lg" placeholder="Write Credit">
                                                </div>
                                                <div class="form-group">
                                                    <label>Choose Departement</label>
                                                    <select class="form-control form-control-lg" name="department_id" id="department">
                                                        <option >Select Deparment</option>

                                                            <option value=""></option>

                                                    </select>



                                                </div>

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
                                                    <th scope="col">Course name </th>
                                                    <th scope="col">Initial</th>
                                                    <th scope="col">Department</th>
                                                    <th scope="col">Actions</th>


                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach ($courses as $key=>$value)
                                                    <tr class='value{{ $value->id }}'>
                                                        <th id='serial'>{{ $key+1 }}</th>
                                                        <td>{{ $value->name }}</td>
                                                        <td>{{ $value->initial }}</td>
                                                        <td>{{ $value->department->name }}</td>
                                                        <td>


                                                            <a href="{{ route('section.show',$value->id) }}" class="btn btn-success">
                                                                <i class="fas fa-plus-circle"></i> Add Section
                                                            </a>



                                                        </td>
                                                    </tr>
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
            $(document).ready(function() {

                // function Edit POST
                $(document).on('click', '.edit', function() {

                    // $('.modal-title').text('Post Edit');
                    $('#id').val($(this).data('id'));
                    var id = $(this).data('id');
                    $('#name').val($(this).data('name'));
                    $('#initial').val($(this).data('initial'));

                    $('#credit').val($(this).data('credit'));
                    // $('#update-form').attr('action',"/course/"+id);
                });

            });
        </script>

        <script type="text/javascript">
            $('#update-form').on('submit', function(event) {
                event.preventDefault();
                var id = document.getElementById("id").value;
                var serial = document.getElementById("serial").innerHTML;

                $.ajax({
                    type: 'PUT',
                    url: "/course/" + id,
                    data: {
                        '_token': $('input[name=_token]').val(),
                        'id': $("#id").val(),
                        'name': $('#name').val(),
                        'initial': $('#initial').val(),
                        'credit': $('#credit').val(),
                        'department_id': $('#department').val(),


                    },
                    dataType: 'JSON',

                    success: function(data) {
                        $('.value' + data.id).replaceWith(" " +
                            "<tr class='value" + data.id + "'>" +
                            "<td>" + serial + "</td>" +
                            "<td>" + data.name + "</td>" +
                            "<td>" + data.initial + "</td>" +
                            "<td>" + data.department_id + "</td>" +
                            "<td><a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='" + data.id + "' data-name='" + data.name + "' data-phone='" +
                            data.phone + "' data-email='" + data.email + "' data-initial='" + data.initial + "' data-dob='" + data.dob + "' data-department_id='" + data.address + "'>" +
                            "<i class='far fa-edit'></i></a>" +
                            "<a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='" + data.phone + "' data-phone='" + data.phone +
                            "' data-email='" + data.email + "' data-initial='" + data.initial + "' data-dob='" + data.dob + "' data-address='" + data.address + "'>" +
                            "<i class='fas fa-trash'></i></a>" +
                            "</td>" +
                            "</tr>");


                        Swal.fire({
                            title: "Success!",
                            text: "Course Updated Succesfully!",
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
@endsection
{{-- <a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.phone+"' data-name='"+data.phone+"'
    data-phone='"+data.phone+"' data-email='"+data.phone+"' data-initial='"+data.phone+"' data-dob='"+data.phone+"' data-address='"+data.phone+"'>
    <i class='far fa-edit'></i>
</a> --}}
