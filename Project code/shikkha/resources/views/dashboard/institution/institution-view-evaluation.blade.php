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
									<h3 class="card-label font-weight-bolder text-dark">Faculty evaluation</h3>
									<span class="text-muted font-weight-bold font-size-sm mt-1">Faculty evaluation and the information</span>
								</div>
								<div class="card-toolbar">		


								
								<!-- Button trigger modal-->
								

								<!-- Modal 1 add new modal:: start-->
								
										<!-- Modal 1 add new modal: end-->



										<!-- Modal 2 Edit modal:: start-->
								
										<!-- Modal 2 Edit modal: end-->
									
																		

									<button type="reset" class="btn btn-danger mr-2">Cancel</button>
									<!-- <button type="reset" class="btn btn-success mr-2">Save Changes</button> -->
								</div>
							</div>
				<!--end::Header-->
				<!--begin::Header2-->
				<div class="card-header py-3">
								<div class="card-title align-items-start flex-column">									
									<div class="form-group row fv-plugins-icon-container">
																<div class="col-lg-3">
																	<input
																		class="form-control form-control-lg form-control-solid"
																		type="text"																		
																		placeholder="Name">
																<div class="fv-plugins-message-container"></div></div>
																<div class="col-lg-3">
																	<input
																			class="form-control form-control-lg form-control-solid"
																			type="text"
																			placeholder="Session">
																<div class="fv-plugins-message-container"></div></div>
																<div class="col-lg-3">
																	<input
																			class="form-control form-control-lg form-control-solid"
																			type="text"
																			placeholder="Course">
																<div class="fv-plugins-message-container"></div></div>
																<div class="col-lg-3">
																	
																	<button type="reset" class="btn btn-primary mr-2 mt-1">Search</button>
																<div class="fv-plugins-message-container"></div></div>
																
															</div>
									
								</div>
								<div class="card-toolbar">		


								
								<!-- Button trigger modal-->
								

								<!-- Modal 1 add new modal:: start-->
								
										<!-- Modal 1 add new modal: end-->



										<!-- Modal 2 Edit modal:: start-->
								
										<!-- Modal 2 Edit modal: end-->
									
																		

									<!-- <button type="reset" class="btn btn-danger mr-2">Cancel</button> -->
									<!-- <button type="reset" class="btn btn-success mr-2">Save Changes</button> -->
								</div>
							</div>
				<!--end::Header2-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin: Datatable-->
					<div class="datatable-bordered datatable-head-custom">
					<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">SL No#</th>
									<th scope="col">Questions</th>
									<th scope="col"></th>

								</tr>

							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>Are this course efficient ?</td>
									<td>
										75%
									</td>

								</tr>
								<tr>
									<th>2</th>
									<td>Does the course properly arranged ?</td>
									<td>
										85%
									</td>

								</tr>
								<tr>
									<th>3</th>
									<td>The teacher is co-operative with the Students</td>
									<td>
										100%
									</td>

								</tr>
								<tr>
									<th>4</th>
									<td>Does the course offers a great education cirteria ?</td>
									<td>
										95%
									</td>

								</tr>
								<tr>
									<th>5</th>
									<td>All over expereience </td>
									<td>
										80%
									</td>

								</tr>
							</tbody>
						</table>
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
