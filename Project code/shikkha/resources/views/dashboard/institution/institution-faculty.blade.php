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
						<h3 class="card-label font-weight-bolder text-dark">Faculty Information</h3>
						<span class="text-muted font-weight-bold font-size-sm mt-1">Faculty and there information</span>
					</div>
					<div class="card-toolbar">



						<!-- Button trigger modal-->
						<button type="button" class="btn btn-primary mr-2" data-toggle="modal" data-target="#exampleModalCenter">
							Add New Faculty
						</button>

						<!-- Modal 1 add new modal:: start-->
						<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Add New Faculty</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>
									<div class="modal-body">
										<form class="" action="{{ route('faculty.store') }}" method="post">

											@csrf
											<div class="form-group">
												<label>Faculty name</label>
												<input name="name" type="text" class="form-control form-control-lg" placeholder="Write Faculty Name"></div>
											<div class="form-group">
												<label>Phone Number</label>
												<input name="phone" type="text" class="form-control form-control-lg" placeholder="Write Phone Number "></div>
											<div class="form-group">
												<label>Email</label>
												<input name="email" type="email" class="form-control form-control-lg" placeholder="Write Email"></div>
											<div class="form-group">
												<label>Faculty Initial</label>
												<input name="initial" type="text" class="form-control form-control-lg" placeholder="Write Faculty Initial">
											</div>
											<div class="form-group">
												<label>Address</label>
												<input name="address" type="text" class="form-control form-control-lg" placeholder="Write Addres">
											</div>
											<div class="form-group">
												<label>Photo</label>
												<input name="photo" type="file" class="form-control form-control-lg" placeholder="Write Initial password">
											</div>
											<div class="form-group">
												<label>Date Of Birth</label>
												<input name="dob" type="date" class="form-control form-control-lg" placeholder="Date of birth">
											</div>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancel</button>
										<button type="submit" class="btn btn-success font-weight-bold">Add New</button>
									</div>
									</form>
								</div>
							</div>
						</div>
						<!-- Modal 1 add new modal: end-->



						<!-- Modal 2 Edit modal:: start-->

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
												<th scope="col">Serial No</th>
												<th scope="col">Admin name </th>
												<th scope="col">Phone Number</th>
												<th scope="col">Email</th>
												<th scope="col">More Info</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<th scope="row">1</th>
												<td>Syed Athar Bin Amir</td>
												<td>+8801675110022</td>
												<td>syed.amir@northsouth.edu</td>
												<td>


													<p>
														<a href="#" class="btn btn-light-success font-weight-bold mr-2">Details</a>


													</p>



												</td>
											</tr>
											<tr>
												<th scope="row">2</th>
												<td>Sayma Ahmed</td>
												<td>+8801634552210</td>
												<td>sayma.ahmed@northsouth.edu</td>

												<td>
													<p>
														<a href="#" class="btn btn-light-success font-weight-bold mr-2">Details</a>

													</p>
												</td>
											</tr>
											<tr>
												<th scope="row">3</th>
												<td>Dr. Mahbubur Rahman </td>
												<td>+8801755566620</td>
												<td>intekharul.alam@northsouth.edu</td>

												<td>
													<p>
														<a href="#" class="btn btn-light-success font-weight-bold mr-2">Details</a>

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
