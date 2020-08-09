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
				<div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Course Resource
							<span class="d-block text-muted pt-2 font-size-sm">All Your course resource shown here</span></h3>
					</div>
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Course Duration
							<span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span></h3>
					</div>
				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<!-- Content::stard  -->
				<div class="card-body">
					<div class="d-flex flex-column flex-grow-1">
						<!--begin::Row-->
						<div class="row">
							<!--begin::Col-->
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<!--begin::Card-->
								<div class="card card-custom gutter-b">
									<div class="card-body friends-body text-center">
										<a href="all-friends">
											<h3 class="card-label friends-card-title">
												All Friend
											</h3>
										</a>
									</div>
								</div>
								<!--end:: Card-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<!--begin::Card-->
								<div class="card card-custom gutter-b">

									<div class="card-body friends-body text-center">
										<a href="add-friends">
											<h3 class="card-label friends-card-title">
												Add Friend
											</h3>
										</a>
									</div>
								</div>
								<!--end:: Card-->
							</div>
							<!--end::Col-->
							<!--begin::Col-->
							<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
								<!--begin::Card-->
								<div class="card card-custom gutter-b">

									<div class="card-body friends-body text-center">
										<a href="friends-request">
											<h3 class="card-label friends-card-title">
												Friend Request
											</h3>
										</a>
									</div>
								</div>
								<!--end:: Card-->
							</div>
							<!--end::Col-->
						</div>
						<!--end::Row-->
					</div>
				</div>
			</div>
			<!-- Content::stard  -->
			<!-- Content::stard  -->
			<!-- content::end  -->
		</div>
		<!--end::Body-->
	</div>
	<!--end::Card-->
</div>
<!--end::Container-->

@endsection
