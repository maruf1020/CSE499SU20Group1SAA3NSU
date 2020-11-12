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
							@foreach ($personalInfo as $key => $value)
							<form class="form">
								<!--begin::Body-->
								<div class="card-body">
									<div class="row">
										<label class="col-xl-3"></label>
										<div class="col-lg-9 col-xl-6">
											<h5 class="font-weight-bold mb-6">Customer Info</h5>
										</div>
									</div>
									<div class="form-group row">
										<label class="col-xl-3 col-lg-3 col-form-label text-right">Avatar</label>
										<div class="col-lg-9 col-xl-6">
											<div
												class="image-input image-input-outline"
												id="kt_profile_avatar"
												style="background-image: url(assets/media/users/blank.png)">
												<div
													class="image-input-wrapper"
													style="background-image: url(assets/media/users/300_21.jpg)"></div>
												<label
													class="btn btn-xs btn-icon btn-circle btn-white btn-hover-text-primary btn-shadow"
													data-action="change"
													data-toggle="tooltip"
													title=""
													data-original-title="Change avatar">
													<i class="fa fa-pen icon-sm text-muted"></i>
													<input type="file" name="profile_avatar" accept=".png, .jpg, .jpeg">
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
													<span class="form-text text-muted">Allowed file types: png, jpg, jpeg.</span>
												</div>
											</div>
											<div class="form-group row">
												<label class="col-xl-3 col-lg-3 col-form-label text-right">Full Name</label>
												<div class="col-lg-9 col-xl-6">
													<input
														class="form-control form-control-lg form-control-solid"
														type="text"
														value="{{ $value->user->name }}"></div>



												</div>

													<div class="form-group row">
														<label class="col-xl-3 col-lg-3 col-form-label text-right">Area</label>
														<div class="col-lg-9 col-xl-6">
															<input
																class="form-control form-control-lg form-control-solid"
																type="text"
																value="{{ $value->area }}">
																<!-- <span class="form-text text-muted">If you want your invoices addressed to a
																	company. Leave blank to use your full name.</span> -->
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
																	<input
																		type="text"
																		class="form-control form-control-lg form-control-solid"
																		value="{{ $value->phone }}"
																		placeholder="Phone"></div>
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
																		<input
																			type="text"
																			class="form-control form-control-lg form-control-solid"
																			value=""
																			placeholder="Email"></div>
																	</div>


																</div>
																<div class="row">
															<label class="col-xl-3"></label>
															<div class="col-lg-9 col-xl-6">
																<h5 class="font-weight-bold mt-10 mb-6">Password</h5>
															</div>
														</div>
																<div class="form-group row">
																<label class="col-xl-3 col-lg-3 col-form-label text-right">Change Password</label>
																<div class="col-lg-9 col-xl-6">
																	<div class="input-group input-group-lg ">

																		<a href="admin-change-password" class="btn btn-danger btn-shadow-hover font-weight-bold mr-2">Change Password</a></div>
																	</div>

																</div>
																<!--end::Body-->
															</form>
															@endforeach
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
