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
						<h3 class="card-label font-weight-bolder text-dark">Student Information</h3>
						<span class="text-muted font-weight-bold font-size-sm mt-1">Student and there information</span>
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
							</span>Add New Student</a>
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
										<h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>
									<form class="" action="{{ route('student.store') }}" method="post">
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
												<label>Student name</label>
												<input name="name" type="text" class="form-control form-control-lg" placeholder="Write student Name"></div>
											<div class="form-group">
												<label>Phone Number</label>
												<input name="phone" type="text" class="form-control form-control-lg" placeholder="Write Phone Number "></div>
											<div class="form-group">
												<label>Email</label>
												<input name="email" type="email" class="form-control form-control-lg" placeholder="Write Email"></div>

											<div class="form-group">
												<label>Address</label>
												<input name="address" type="text" class="form-control form-control-lg" placeholder="Write Addres">
											</div>
											<div class="form-group">
												<label>Photo</label>
												<input name="photo" type="file" class="form-control form-control-lg" placeholder="Write Initial password">
											</div>
											<div class="form-group">
												<label>Date Of Birth</label>
												<input name="dob" type="date" class="form-control form-control-lg" placeholder="Date of birth">
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
										<h5 class="modal-title" id="exampleModalLabel">Update student</h5>
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
												<input id="id" name="id" type="hidden" class="form-control form-control-lg" placeholder="Write student Name" value=''>
											</div>
											<div class="form-group">
												<label>student name</label>
												<input id="name" name="name" type="text" class="form-control form-control-lg" placeholder="Write student Name" value=''>
											</div>
											<div class="form-group">
												<label>Phone Number</label>
												<input id="phone" name="phone" type="text" class="form-control form-control-lg" placeholder="Write Phone Number "></div>
											<div class="form-group">
												<label>Email</label>
												<input id="email" name="email" type="email" class="form-control form-control-lg" placeholder="Write Email"></div>

											<div class="form-group">
												<label>Address</label>
												<input id="address" name="address" type="text" class="form-control form-control-lg" placeholder="Write Addres">
											</div>
											<div class="form-group">
												<label>Photo</label>
												<input id="photo" name="photo" type="file" class="form-control form-control-lg" placeholder="Write Initial password">
											</div>
											<div class="form-group">
												<label>Date Of Birth</label>
												<input id="dob" name="dob" type="date" class="form-control form-control-lg" placeholder="Date of birth">
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


						<!-- Modal 3 view modal:: start-->
						<div class="modal fade" id="view" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">student Information</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close" id='close'>
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>




										<div class="modal-body">
										<!--begin::Content-->
										<div class="content d-flex flex-column flex-column-fluid" id="kt_content">


											<!--begin::Entry-->
											<div class="d-flex flex-column-fluid">
												<!--begin::Container-->
												<div class="container">
													<!--begin::Card-->
													<div class="card card-custom">
														<!-- begin::Header-->
														<!-- <div class="card-header py-3">
																		<div class="card-title align-items-start flex-column">
																			<h3 class="card-label font-weight-bolder text-dark">General Information</h3>
																			<span class="text-muted font-weight-bold font-size-sm mt-1">Update your general information</span>
																		</div>
																		<div class="card-toolbar">
																			<button type="reset" class="btn btn-success mr-2">Save Changes</button>
																			<button type="reset" class="btn btn-secondary">Cancel</button>
																		</div>
																	</div> -->
														<!--end::Header -->
														<!--begin::Body-->
														<div class="">
															<!--begin: Datatable-->

															<div class="flex-row-fluid">
																				<!--begin::Card-->
																<div class="card card-custom card-stretch">
																	<!--begin::Header-->

																	<!--end::Header-->
																	<!--begin::Form-->
																	<form class="form">
																		<!--begin::Body-->
																		<div class="card-body">
																			<div class="row">
																				<label class="col-xl-3"></label>
																				<div class="col-lg-9 col-xl-6">
																					<h5 class="font-weight-bold mb-6">student Info</h5>
																				</div>
																			</div>
																			<div class="form-group row">
																				<label class="col-xl-3 col-lg-3 col-form-label text-right">Avatar</label>
																				<div class="col-lg-9 col-xl-6">
																					<div
																						class="image-input image-input-outline"
																						id="kt_profile_avatar"
																						style="background-image: url(assets/media/logos/nsu.jpg)">
																						<div
																							class="image-input-wrapper"
																							style="background-image: url(assets/media/users/nsu.jpg)"></div>
																						<label
																							class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
																							data-action="change"
																							data-toggle="tooltip"
																							title=""
																							data-original-title="Change avatar">
																							<i class="fa fa-pen icon-sm text-muted"></i>
																							<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg" disabled>
																								<input type="hidden" name="profile_avatar_remove"></label>
																								<span
																									class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
																									data-action="cancel"
																									data-toggle="tooltip"
																									title=""
																									data-original-title="Cancel avatar">
																									<i class="ki ki-bold-close icon-xs text-muted"></i>
																								</span>
																								<span
																									class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
																									data-action="remove"
																									data-toggle="tooltip"
																									title=""
																									data-original-title="Remove avatar">
																									<i class="ki ki-bold-close icon-xs text-muted"></i>
																								</span>
																							</div>
																						</div>
																					</div>
																					<div class="form-group row">
																						<label class="col-xl-3 col-lg-3 col-form-label text-right">Student Name</label>
																						<div class="col-lg-9 col-xl-6">
																							<input id="name1"
																								class="form-control form-control-lg form-control-solid"
																								type="text"
																								 disabled></div>
																						</div>
																						<div class="form-group row">
																							<label class="col-xl-3 col-lg-3 col-form-label text-right" disabled>Address</label>
																							<div class="col-lg-9 col-xl-6">
																								<input id="address1"
																									class="form-control form-control-lg form-control-solid"
																									type="text"
																									></div>
																							</div>
																							<div class="form-group row">
																								<label class="col-xl-3 col-lg-3 col-form-label text-right">Birth Date</label>
																								<div class="col-lg-9 col-xl-6">
																									<input id="dob1"
																										class="form-control form-control-lg form-control-solid"
																										type="1992"
																										 disabled>

																									</div>
																								</div>
																							<div class="form-group row">
																								<label class="col-xl-3 col-lg-3 col-form-label text-right">Initial</label>
																								<div class="col-lg-9 col-xl-6">
																									<input id="initial1"
																										class="form-control form-control-lg form-control-solid"
																										type="1992"
																										 disabled>
																									</div>
																								</div>
																							<div class="form-group row">
																								<label class="col-xl-3 col-lg-3 col-form-label text-right">Status</label>
																								<div class="col-lg-9 col-xl-6">
																									<input id="status"
																										class="form-control form-control-lg form-control-solid"
																										type="1992"
																										 disabled>
																									</div>
																								</div>
																							<div class="form-group row">
																								<label class="col-xl-3 col-lg-3 col-form-label text-right">Assigned To</label>
																								<div class="col-lg-9 col-xl-6">
																									<input id="assigned"
																										class="form-control form-control-lg form-control-solid"
																										type="1992"
																										value="Loop Inc." disabled>
																									</div>
																								</div>
																								<div class="row">
																									<label class="col-xl-3"></label>
																									<div class="col-lg-9 col-xl-6">
																										<h5 class="font-weight-bold mt-10 mb-6">Contact Info</h5>
																									</div>
																								</div>
																								<div class="form-group row">
																									<label class="col-xl-3 col-lg-3 col-form-label text-right">Contact Phone</label>
																									<div class="col-lg-9 col-xl-6">
																										<div class="input-group input-group-lg input-group-solid">
																											<div class="input-group-prepend">
																												<span class="input-group-text">
																													<i class="la la-phone"></i>
																												</span>
																											</div>
																											<input id="phone1"
																												type="text"
																												class="form-control form-control-lg form-control-solid"

																												placeholder="Phone" disabled></div>
																											<span class="form-text text-muted">We'll never share your email with anyone else.</span>
																										</div>
																									</div>
																									<div class="form-group row">
																										<label class="col-xl-3 col-lg-3 col-form-label text-right">Email Address</label>
																										<div class="col-lg-9 col-xl-6">
																											<div class="input-group input-group-lg input-group-solid">
																												<div class="input-group-prepend">
																													<span class="input-group-text">
																														<i class="la la-at"></i>
																													</span>
																												</div>
																												<input id="email1"
																													type="text"
																													class="form-control form-control-lg form-control-solid"

																													placeholder="Email" disabled></div>
																											</div>
																										</div>

																										</div>
																										<!--end::Body-->
																									</form>
																									<!--end::Form-->
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
										<table class="table table-bordered  table-head-custom table-checkable" id="kt_datatable">
											<thead>
												<tr>
													<th scope="col">Serial No</th>
													<th scope="col">Student name </th>
													<th scope="col">Phone Number</th>
													<th scope="col">Email</th>
													<th scope="col">Actions</th>


												</tr>
											</thead>
											<tbody>

												@foreach ($students as $key=>$value)
												<tr class='value{{ $value->id }}'>
													<th id='serial'>{{ $key+1 }}</th>
													<td>{{ $value->name }}</td>
													<td>{{ $value->phone }}</td>
													<td>{{ $value->email }}</td>
													<td>
														<a href="javascript:;" data-toggle="modal" data-target="#edit" class="btn btn-sm btn-clean btn-icon mr-2 edit" title="Edit details" data-id='{{ $value->id }}' data-name='{{ $value->name }}'
														  data-phone='{{ $value->phone }}' data-email='{{ $value->email }}'  data-dob='{{ $value->dob }}' data-address='{{ $value->address }}'>
															<i class="far fa-edit"></i>
														</a>

														<a href="javascript:void(0)" data-method="DELETE" data-token="{{csrf_token()}}"  data-url="{{ route('student.destroy',$value->id) }}" data-id="{{ $value->id }}" class="btn btn-sm btn-clean btn-icon delete" title="Delete">
															<i class="fas fa-trash"></i>
														</a>
														<a href="javascript:;"  class="btn btn-sm btn-clean btn-icon view" title="View" data-toggle="modal" data-target="#view"
														data-id='{{ $value->id }}' data-name='{{ $value->name }}'
														  data-phone='{{ $value->phone }}' data-email='{{ $value->email }}'  data-dob='{{ $value->dob }}' data-address='{{ $value->address }}' data-status='{{ $value->is_verified }}'>
															<i class="far fa-eye"></i>
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
				$('#phone').val($(this).data('phone'));
				$('#email').val($(this).data('email'));
				$('#initial').val($(this).data('initial'));
				$('#dob').val($(this).data('dob'));
				$('#address').val($(this).data('address'));
				// $('#update-form').attr('action',"/student/"+id);
			});

		});
	</script>
	<script type="text/javascript">
		$(document).ready(function() {

			// function view  POST
			$(document).on('click', '.view', function() {

				// $('.modal-title').text('Post Edit');
				$('#id').val($(this).data('id'));
				var id = $(this).data('id');
				$('#name1').val($(this).data('name'));
				$('#phone1').val($(this).data('phone'));
				$('#email1').val($(this).data('email'));
				$('#dob1').val($(this).data('dob'));
				$('#address1').val($(this).data('address'));
				var status=$(this).data('status');
				if(status==0){
					$('#status').val('Not Claimed');
				}
				else{
					$('#status').val('Claimed');
				}
				// $('#update-form').attr('action',"/student/"+id);
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
				url: "/student/" + id,
				data: {
					'_token': $('input[name=_token]').val(),
					'id': $("#id").val(),
					'name': $('#name').val(),
					'phone': $('#phone').val(),
					'email': $('#email').val(),
					'address': $('#address').val(),


				},
				dataType: 'JSON',

				success: function(data) {
					$('.value' + data.id).replaceWith(" " +
						"<tr class='value" + data.id + "'>" +
						"<td>" + serial + "</td>" +
						"<td>" + data.name + "</td>" +
						"<td>" + data.phone + "</td>" +
						"<td>" + data.email + "</td>" +
						"<td><a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.id+"' data-name='"+data.name+"' data-phone='"+data.phone+"' data-email='"+data.email+"' data-initial='"+data.initial+"' data-dob='"+data.dob+"' data-address='"+data.address+"'>"+
						"<i class='far fa-edit'></i></a>"+
						"<a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.phone+"' data-phone='"+data.phone+"' data-email='"+data.email+"' data-initial='"+data.initial+"' data-dob='"+data.dob+"' data-address='"+data.address+"'>"+
						"<i class='fas fa-trash'></i></a>"+
						"<a href='javascript:;' data-toggle='modal' data-target='#view' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.phone+"' data-phone='"+data.phone+"' data-email='"+data.email+"' data-initial='"+data.initial+"' data-dob='"+data.dob+"' data-address='"+data.address+"'>"+
						"<i class='far fa-eye'></i></a>"+
						"</td>" +
						"</tr>");


					Swal.fire({
						title: "Success!",
						text: "student Updated Succesfully!",
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
