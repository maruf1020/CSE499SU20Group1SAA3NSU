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
						<h3 class="card-label font-weight-bolder text-dark">Faculty Information</h3>
						<span class="text-muted font-weight-bold font-size-sm mt-1">Faculty and there information</span>
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
							</span>Add New Faculty</a>
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
										<h5 class="modal-title" id="exampleModalLabel">Add New Faculty</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>
									<div class="modal-body">
										@if ($errors->any())
										<div class="alert alert-danger">
												@foreach ($errors->all() as $error)
												<strong>{{ $error }} </br></strong>
												@endforeach
										</div>
										@endif
										<form class="" action="{{ route('faculty.store') }}" method="post">

											@csrf
											<div class="form-group">
												<label>Faculty name</label>
												<input name="name" type="text" class="form-control form-control-lg" placeholder="Write Faculty Name"></div>
											<div class="form-group">
												<label>Phone Number</label>
												<input name="phone" type="text" class="form-control form-control-lg" placeholder="Write Phone Number "></div>
											<div class="form-group">
												<label>Email</label>
												<input name="email" type="email" class="form-control form-control-lg" placeholder="Write Email"></div>
											<div class="form-group">
												<label>Faculty Initial</label>
												<input name="initial" type="text" class="form-control form-control-lg" placeholder="Write Faculty Initial">
											</div>
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
													<th scope="col">Faculty name </th>
													<th scope="col">Phone Number</th>
													<th scope="col">Email</th>
													<th scope="col">Initial</th>
													<th scope="col">Actions</th>


												</tr>
											</thead>
											<tbody>
												@foreach ($faculties as $key=>$value)
												<tr>
													<th>{{ $key+1 }}</th>
													<td>{{ $value->name }}</td>
													<td>{{ $value->phone }}</td>
													<td>{{ $value->email }}</td>
													<td>{{ $value->initial }}</td>
													<td>
														<a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">
															 <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
																  xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path
																		  d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z"
																		  fill="#000000" fill-rule="nonzero" transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "></path>
																		<rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"></rect>
																	</g>
																</svg> </span>
														</a>
														<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">
															 <span class="svg-icon svg-icon-md"> <svg xmlns="http://www.w3.org/2000/svg"
																  xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"></rect>
																		<path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"></path>
																		<path
																		  d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z"
																		  fill="#000000" opacity="0.3"></path>
																	</g>
																</svg> </span>
														</a>
														<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">
															<span class="svg-icon svg-icon-md">
																<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo2\dist/../src/media/svg/icons\Design\Difference.svg--><svg xmlns="http://www.w3.org/2000/svg"
																  xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24" />
																		<path
																		  d="M6,9 L6,15 C6,16.6568542 7.34314575,18 9,18 L15,18 L15,18.8181818 C15,20.2324881 14.2324881,21 12.8181818,21 L5.18181818,21 C3.76751186,21 3,20.2324881 3,18.8181818 L3,11.1818182 C3,9.76751186 3.76751186,9 5.18181818,9 L6,9 Z M17,16 L17,10 C17,8.34314575 15.6568542,7 14,7 L8,7 L8,6.18181818 C8,4.76751186 8.76751186,4 10.1818182,4 L17.8181818,4 C19.2324881,4 20,4.76751186 20,6.18181818 L20,13.8181818 C20,15.2324881 19.2324881,16 17.8181818,16 L17,16 Z"
																		  fill="#000000" fill-rule="nonzero" />
																		<path
																		  d="M9.27272727,9 L13.7272727,9 C14.5522847,9 15,9.44771525 15,10.2727273 L15,14.7272727 C15,15.5522847 14.5522847,16 13.7272727,16 L9.27272727,16 C8.44771525,16 8,15.5522847 8,14.7272727 L8,10.2727273 C8,9.44771525 8.44771525,9 9.27272727,9 Z"
																		  fill="#000000" opacity="0.3" />
																	</g>
																</svg>
																<!--end::Svg Icon--></span>
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
	{{-- <script type="text/javascript">
$(document).ready(function() {
	$('#p').DataTable();
} );
</script> --}}
	@endsection
