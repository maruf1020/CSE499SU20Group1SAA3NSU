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
									<button type="reset" class="btn btn-success mr-2">Save Changes</button>
									<button type="reset" class="btn btn-secondary">Cancel</button>
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
									<div class="row">
										<label class="col-xl-3"></label>
										<div class="col-lg-9 col-xl-6">
											<h5 class="font-weight-bold mb-6">All Info</h5>
										</div>
									</div>
									
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label text-right">Total Course</label>
												<div class="col-lg-9 col-xl-6">
													<input
														class="form-control form-control-lg form-control-solid"
														type="text"
														value="85"></div>
												</div>
												<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label text-right">Total Subject</label>
													<div class="col-lg-9 col-xl-6">
														<input
															class="form-control form-control-lg form-control-solid"
															type="text"
															value="300"></div>
													</div>
													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-right">Total Department</label>
														<div class="col-lg-9 col-xl-6">
															<input
																class="form-control form-control-lg form-control-solid"
																type="text"
																value="5">
																<!-- <span class="form-text text-muted">If you want your invoices addressed to a
																	company. Leave blank to use your full name.</span> -->
															</div>
														</div>
														<div class="row">
															<label class="col-xl-3"></label>
															<div class="col-lg-9 col-xl-6">
																<h5 class="font-weight-bold mt-10 mb-6">Basic Info</h5>
															</div>
														</div>
														<div class="form-group row">
															<label class="col-xl-3 col-lg-3 col-form-label text-right">Student capacity</label>
															<div class="col-lg-9 col-xl-6">
																<div class="input-group input-group-lg input-group-solid">
																	<div class="input-group-prepend">
																		<span class="input-group-text">
																			<!-- <i class="la la-phone"></i> -->
																		</span>
																	</div>
																	<input
																		type="text"
																		class="form-control form-control-lg form-control-solid"
																		value="50000"
																		placeholder="Phone"></div>
																	<span class="form-text text-muted">We'll never share your email with anyone else.</span>
																</div>
															</div>
															<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label text-right">Faculty Capacity</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="input-group input-group-lg input-group-solid">
																		<div class="input-group-prepend">
																			<span class="input-group-text">
																				<!-- <i class="la la-at"></i> -->
																			</span>
																		</div>
																		<input
																			type="text"
																			class="form-control form-control-lg form-control-solid"
																			value="1200"
																			placeholder="Email"></div>
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

@endsection
