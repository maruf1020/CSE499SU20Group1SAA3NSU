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
						<h3 class="card-label font-weight-bolder text-dark">Institution Information</h3>
						<span class="text-muted font-weight-bold font-size-sm mt-1">Update your Institution informaiton</span>
					</div>
					<div class="card-toolbar">



						<!-- Button trigger modal-->
						<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModalCenter">
							Back to Institution List
						</button>









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

								<!--begin::Body-->
								<div class="card-body">
									<form action="{{ route('institution.update',$institution->id) }}" method="post">
										@csrf
										@method('PUT')

										<div class="">
											<div class="" role="document">
												<div class="modal-content">
													<div class="modal-header">
														<h5 class="modal-title" >Update Institution</h5>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
														</button>
													</div>
													<div class="modal-body">
														<div class="form-group">
															<label>Institution name</label>
															<input type="text" class="form-control form-control-lg" placeholder="Write Institution name" name="name" value="{{ $institution->name }}"></div>
														<div class="form-group">
															<label>Institution EIN Number</label>
															<input type="text" class="form-control form-control-lg" placeholder="Write Institution EIN Number" name="ein" value="{{ $institution->ein }}"></div>
													</div>


													<div class="modal-footer">
														<button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancel</button>
														<button type="submit" class="btn btn-success font-weight-bold">Update</button>
													</div>
												</div>
											</div>
										</div>
									</form>

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
