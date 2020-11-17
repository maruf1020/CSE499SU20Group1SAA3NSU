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
									<h3 class="card-label font-weight-bolder text-dark">Course Information</h3>
									<span class="text-muted font-weight-bold font-size-sm mt-1">Course and there information</span>
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
									<div class="">
										<input
											class="form-control form-control-lg form-control-solid"
											type="text"
											value="North South University">
									</div>
									<div class="col-lg-9 col-xl-6">
										<input
											class="form-control form-control-lg form-control-solid"
											type="text"
											value="North South University">
									</div>
									<div class="col-lg-9 col-xl-6">
										<input
											class="form-control form-control-lg form-control-solid"
											type="text"
											value="North South University">
									</div>
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
				<!--end::Header2-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin: Datatable-->
					<div class="datatable-bordered datatable-head-custom">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">Lecture No#</th>
									<th scope="col">Lecture Date</th>
									<th scope="col">Attended</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>2020-07-02 08:45:15</td>
									<td><span  class="btn btn-success ">Yes</span></td>


								</tr>
								<tr>
									<th>2</th>
									<td>2020-07-02 08:45:15</td>
									<td><span  class="btn btn-danger ">No</span></td>

								</tr>
								<tr>
									<th>3</th>
									<td>2020-07-02 08:45:15</td>
									<td><span type="button" class="btn btn-danger ">No</span></td>

								</tr>
								<tr>
									<th>4</th>
									<td>2020-07-02 08:45:15</td>
									<td><span type="button" class="btn btn-danger ">No</span></td>

								</tr>
								<tr>
									<th>5</th>
									<td>2020-07-02 08:45:15</td>
									<td><span type="button" class="btn btn-danger ">No</span></td>

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
