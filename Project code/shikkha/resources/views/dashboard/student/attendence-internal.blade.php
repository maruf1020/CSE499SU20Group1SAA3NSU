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
						<h3 class="card-label">Cse499A Attendence
							<span class="d-block text-muted pt-2 font-size-sm">This semeseter attendence shown here</span></h3>
					</div>
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Course Duration
							<span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span></h3>
					</div>

				</div>
				<!--end::Header-->
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
