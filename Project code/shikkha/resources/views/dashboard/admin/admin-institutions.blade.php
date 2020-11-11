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
									<h3 class="card-label font-weight-bolder text-dark">Personal Information</h3>
									<span class="text-muted font-weight-bold font-size-sm mt-1">Update your personal informaiton</span>
								</div>
								<div class="card-toolbar">		


								
								<!-- Button trigger modal-->
								<button
									type="button"
									class="btn btn-primary mr-2"
									data-toggle="modal"
									data-target="#exampleModalCenter">
									Add New Institution
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
													<label>Institution name</label>
													<input
														type="email"
														class="form-control form-control-lg"
														placeholder="Write Institution name"></div>
													<div class="form-group">
														<label>Institution EIN Number</label>
														<input
															type="email"
															class="form-control form-control-lg"
															placeholder="Write Institution EIN Number"></div>
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
													<label>Institution name</label>
													<input
														type="email"
														class="form-control form-control-lg"
														placeholder="North South University"></div>
													<div class="form-group">
														<label>Institution EIN Number</label>
														<input
															type="email"
															class="form-control form-control-lg"
															placeholder="Write Institution EIN Number"></div>
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
																	<th scope="col">#</th>
																	<th scope="col">Institution name </th>
																	<th scope="col">EIN ID</th>
																	<th scope="col">Status</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row">1</th>
																	<td>North South University</td>
																	<td>5542</td>
																	<td>
																		

																<p>
																	<a href="#" class="btn btn-icon btn-light-success btn-sm mr-2" data-toggle="modal" data-target="#exampleModalCenterEdit">
																		<i class="flaticon2-pen text-warning"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-light-primary btn-sm mr-2">
																		<i class="flaticon2-delete text-danger"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-light-warning btn-sm mr-2">
																		<i class="flaticon2-open-text-book text-primary"></i>
																	</a>
																	
																</p>



																	</td>
																</tr>
																<tr>
																	<th scope="row">2</th>
																	<td>Dhanmondi Model School And College</td>
																	<td>5584</td>
																	<td>
																	<p>
																	<a href="#" class="btn btn-icon btn-light-success btn-sm mr-2" data-toggle="modal" data-target="#exampleModalCenterEdit">
																		<i class="flaticon2-pen text-warning"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-light-primary btn-sm mr-2">
																		<i class="flaticon2-delete text-danger"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-light-warning btn-sm mr-2">
																		<i class="flaticon2-open-text-book text-primary"></i>
																	</a>
																</p>
																	</td>
																</tr>
																<tr>
																	<th scope="row">3</th>
																	<td>Abrakidabra Coaching Center</td>
																	<td>8874</td>
																	<td>
																	<p>
																	<a href="#" class="btn btn-icon btn-light-success btn-sm mr-2" data-toggle="modal" data-target="#exampleModalCenterEdit">
																		<i class="flaticon2-pen text-warning"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-light-primary btn-sm mr-2">
																		<i class="flaticon2-delete text-danger"></i>
																	</a>
																	<a href="#" class="btn btn-icon btn-light-warning btn-sm mr-2">
																		<i class="flaticon2-open-text-book text-primary"></i>
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
