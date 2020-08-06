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
												<div class="card" style="width:15rem; height:10rem">
													<img src="..." class="card-img-top" alt="...">													
												</div>	
												<div class="card" style="width:15rem; height:10rem">
													<img src="..." class="card-img-top" alt="...">													
												</div>
												<div class="card" style="width:15rem; height:10rem">
													<img src="..." class="card-img-top" alt="...">													
												</div>											

											</div>
											<!--end::Row-->
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
	</div>
	<!--end::Entry-->
</div>
<!--end::Content-->

@endsection
