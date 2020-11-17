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
									<h3 class="card-label font-weight-bolder text-dark">Student Results</h3>
									<span class="text-muted font-weight-bold font-size-sm mt-1">Student Results and the information</span>
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
					


					<!-- Table 1:: Start  -->
					<div class="card-title mt-5">
						<h3 class="card-label">MAT316</h3>
					</div>					
					<div class="datatable-bordered datatable-head-custom mb-20">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Subject</th>
									<th scope="col">Marks</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>Quiz 01</td>
									<td>20/20</td>


								</tr>
								<tr>
									<th>2</th>
									<td>Assignment 01</td>
									<td>15/20</td>

								</tr>
								<tr>
									<th>3</th>
									<td>MID 01</td>
									<td>30/30</td>

								</tr>
								<tr>
									<th>4</th>
									<td>Quiz 02</td>
									<td>10/10</td>

								</tr>
								<tr>
									<th>5</th>
									<td><b>Total</b></td>
									<td>75/80</td>
								</tr>
								<tr>
									<th>5</th>
									<td><b>100 % of Total</b></td>
									<td>93/100</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- Table 1:: End  -->

					<!-- Table 2:: Start  -->
					<div class="card-title mt-5">
						<h3 class="card-label">EEE111</h3>
					</div>					
					<div class="datatable-bordered datatable-head-custom mb-20">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Subject</th>
									<th scope="col">Marks</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>Quiz 01</td>
									<td>20/20</td>


								</tr>
								<tr>
									<th>2</th>
									<td>Assignment 01</td>
									<td>15/20</td>

								</tr>
								<tr>
									<th>3</th>
									<td>MID 01</td>
									<td>30/30</td>

								</tr>
								<tr>
									<th>4</th>
									<td>Quiz 02</td>
									<td>10/10</td>

								</tr>
								<tr>
									<th>5</th>
									<td><b>Total</b></td>
									<td>75/80</td>
								</tr>
								<tr>
									<th>5</th>
									<td><b>100 % of Total</b></td>
									<td>93/100</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- Table 2:: End  -->


					<!-- Table 3:: Start  -->
					<div class="card-title mt-5">
						<h3 class="card-label">CSE411</h3>
					</div>					
					<div class="datatable-bordered datatable-head-custom mb-20">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Subject</th>
									<th scope="col">Marks</th>
								</tr>

							</thead>
							<tbody>
								<tr>
									<th>1</th>
									<td>Quiz 01</td>
									<td>20/20</td>


								</tr>
								<tr>
									<th>2</th>
									<td>Assignment 01</td>
									<td>15/20</td>

								</tr>
								<tr>
									<th>3</th>
									<td>MID 01</td>
									<td>30/30</td>

								</tr>
								<tr>
									<th>4</th>
									<td>Quiz 02</td>
									<td>10/10</td>

								</tr>
								<tr>
									<th>5</th>
									<td><b>Total</b></td>
									<td>75/80</td>
								</tr>
								<tr>
									<th>5</th>
									<td><b>100 % of Total</b></td>
									<td>93/100</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!-- Table 3:: End  -->

					




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
