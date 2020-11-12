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
								

								<!-- Modal 1 add new modal:: start-->
								
										<!-- Modal 1 add new modal: end-->



										<!-- Modal 2 Edit modal:: start-->
								
										<!-- Modal 2 Edit modal: end-->
									
																		
										<button type="reset" class="btn btn-success mr-2">Approve</button>
									<button type="reset" class="btn btn-danger mr-2">Decline</button>
									
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
															
															<tbody>
																<tr>
																	<th scope="row">Name</th>
																	<td>North South University</td>
																	
																</tr>
																<tr>
																	<th scope="row">Total Students</th>
																	<td>22000</td>
																	
																</tr>
																<tr>
																	<th scope="row">Total Faculty</th>
																	<td>2300</td>
																	
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
