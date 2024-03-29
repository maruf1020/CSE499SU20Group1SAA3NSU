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
									<h3 class="card-label font-weight-bolder text-dark">Admin Information</h3>
									<span class="text-muted font-weight-bold font-size-sm mt-1">Admin and there power</span>
								</div>
								<div class="card-toolbar">		


								
								<!-- Button trigger modal-->
								<button
									type="button"
									class="btn btn-primary mr-2"
									data-toggle="modal"
									data-target="#exampleModalCenter">
									Add New Admin
								</button>

								<!-- Modal 1 add new modal:: start-->
								<div
									class="modal fade"
									id="exampleModalCenter"
									data-backdrop="static"
									tabindex="-1"
									role="dialog"
									aria-labelledby="staticBackdrop"
									aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Add New Institution</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<i aria-hidden="true" class="ki ki-close"></i>
												</button>
											</div>
											<div class="modal-body">
												<div class="form-group">
													<label>Admin name</label>
													<input
														type="email"
														class="form-control form-control-lg"
														placeholder="Write Admin Name"></div>
													<div class="form-group">
														<label>Phone Number</label>
														<input
															type="email"
															class="form-control form-control-lg"
															placeholder="Write Phone Number "></div>
															<div class="form-group">
															<label>Email</label>
															<input
															type="email"
															class="form-control form-control-lg"
															placeholder="Write Email"></div>
															<div class="form-group">
															<label>Initial Password</label>
															<input
															type="email"
															class="form-control form-control-lg"
															placeholder="Write Initial password"></div>
															<div class="form-group">
															<label>Power</label>
															<input
															type="email"
															class="form-control form-control-lg"
															placeholder="Write admin power"></div>
													</div>
													<div class="modal-footer">
														<button
															type="button"
															class="btn btn-light-danger font-weight-bold"
															data-dismiss="modal">Cancel</button>
														<button type="button" class="btn btn-success font-weight-bold">Add New</button>
													</div>
												</div>
											</div>
										</div>
										<!-- Modal 1 add new modal: end-->



										<!-- Modal 2 Edit modal:: start-->
								<div
									class="modal fade"
									id="exampleModalCenterEdit"
									data-backdrop="static"
									tabindex="-1"
									role="dialog"
									aria-labelledby="staticBackdrop"
									aria-hidden="true">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Add New Institution</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<i aria-hidden="true" class="ki ki-close"></i>
												</button>
											</div>
											<div class="modal-body">
												<div class="form-group">
												<label>Admin name</label>
													<input
														type="email"
														class="form-control form-control-lg"
														placeholder="MD. maruf Billah"></div>
													<div class="form-group">
														<label>Email</label>
														<input
															type="email"
															class="form-control form-control-lg"
															placeholder="maruf.billah@northsouth.edu"></div>												
															<div class="form-group">
															<label>phone Number</label>
															<input
															type="email"
															class="form-control form-control-lg"
															placeholder="+8801675708783"></div>
															<div class="form-group">
															<label>Power</label>
															<input
															type="email"
															class="form-control form-control-lg"
															placeholder="1"></div>
													</div>
													<div class="modal-footer">
														<button
															type="button"
															class="btn btn-light-danger font-weight-bold"
															data-dismiss="modal">Cancel</button>
														<button type="button" class="btn btn-success font-weight-bold">Add New</button>
													</div>
												</div>
											</div>
										</div>
										<!-- Modal 2 Edit modal: end-->
									
																		

									<button type="reset" class="btn btn-danger mr-2">Cancel</button>
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
							<!--begin::Header-->
							
							<!--end::Header-->
							<!--begin::Form-->
							<form class="form">
								<!--begin::Body-->
								<div class="card-body">
									<!-- table start  -->
									<table class="table table-bordered mb-6">
															<thead>
																<tr>
																	<th scope="col">Serial No</th>
																	<th scope="col">Admin name </th>
																	<th scope="col">Phone Number</th>
																	<th scope="col">Email</th>
																	<th scope="col">Power</th>
																	<th scope="col">Status</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row">1</th>
																	<td>Maruf Billah</td>
																	<td>+8801675708783</td>
																	<td>maruf.billah@northsouth.edu</td>
																	<td>1</td>
																	<td>
																		

																<p>
																	<a href="#" class="btn btn-icon btn-light-success btn-sm mr-2" data-toggle="modal" data-target="#exampleModalCenterEdit">
																		<i class="flaticon2-pen text-warning"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-light-primary btn-sm mr-2">
																		<i class="flaticon2-delete text-danger"></i>
																	</a>
																	
																	
																</p>



																	</td>
																</tr>
																<tr>
																	<th scope="row">2</th>
																	<td>Barkatullah Hossain</td>
																	<td>+8801685558993</td>
																	<td>barkatullah@northsouth.edu</td>
																	<td>1</td>
																	<td>
																	<p>
																	<a href="#" class="btn btn-icon btn-light-success btn-sm mr-2" data-toggle="modal" data-target="#exampleModalCenterEdit">
																		<i class="flaticon2-pen text-warning"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-light-primary btn-sm mr-2">
																		<i class="flaticon2-delete text-danger"></i>
																	</a>
																	
																</p>
																	</td>
																</tr>
																<tr>
																<th scope="row">3</th>
																	<td>Iftekharul Alam shuvo</td>
																	<td>+8801754455420</td>
																	<td>intekharul.alam@northsouth.edu</td>
																	<td>3</td>
																	<td>
																	<p>
																	<a href="#" class="btn btn-icon btn-light-success btn-sm mr-2" data-toggle="modal" data-target="#exampleModalCenterEdit">
																		<i class="flaticon2-pen text-warning"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-light-primary btn-sm mr-2">
																		<i class="flaticon2-delete text-danger"></i>
																	</a>
																	
																</p>
																	</td>
																</tr>
															</tbody>
														</table>
									<!-- table end  -->
																	
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

@endsection
