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
						<h3 class="card-label">Assigned Course
							<span class="d-block text-muted pt-2 font-size-sm">This semeseter all course shown here</span></h3>
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
										<div class="form-group">
											<div class="radio-inline">
												<label class="radio radio-success">
													<input type="radio" name="value" /> Excellent
													<span></span>
												</label>
												<label class="radio radio-primary">
													<input type="radio" name="value" /> Good
													<span></span>
												</label>
												<label class="radio radio-warning">
													<input type="radio" name="value" /> Average
													<span></span>
												</label>
												<label class="radio radio-danger">
													<input type="radio" name="value" /> Poor
													<span></span>
												</label>
												<label class="radio radio-dark">
													<input type="radio" name="value" /> Worst
													<span></span>
												</label>
											</div>
										</div>
									</td>

								</tr>
								<tr>
									<th>2</th>
									<td>Does the course properly arranged ?</td>
									<td>
										<div class="form-group">
											<div class="radio-inline">
												<label class="radio radio-success">
													<input type="radio" name="value4" value="Excellent"/> Excellent
													<span></span>
												</label>
												<label class="radio radio-primary">
													<input type="radio" name="value4" /> Good
													<span></span>
												</label>
												<label class="radio radio-warning">
													<input type="radio" name="value4" /> Average
													<span></span>
												</label>
												<label class="radio radio-danger">
													<input type="radio" name="value4" /> Poor
													<span></span>
												</label>
												<label class="radio radio-dark">
													<input type="radio" name="value4" /> Worst
													<span></span>
												</label>
											</div>
										</div>
									</td>

								</tr>
								<tr>
									<th>3</th>
									<td>The teacher is co-operative with the Students</td>
									<td>
										<div class="form-group">
											<div class="radio-inline">
												<label class="radio radio-success">
													<input type="radio" name="value3" /> Excellent
													<span></span>
												</label>
												<label class="radio radio-primary">
													<input type="radio" name="value3" /> Good
													<span></span>
												</label>
												<label class="radio radio-warning">
													<input type="radio" name="value3" /> Average
													<span></span>
												</label>
												<label class="radio radio-danger">
													<input type="radio" name="value3" /> Poor
													<span></span>
												</label>
												<label class="radio radio-dark">
													<input type="radio" name="value3" /> Worst
													<span></span>
												</label>
											</div>
										</div>
									</td>

								</tr>
								<tr>
									<th>4</th>
									<td>Does the course offers a great education cirteria ?</td>
									<td>
										<div class="form-group">
											<div class="radio-inline">
												<label class="radio radio-success">
													<input type="radio" name="value2" /> Excellent
													<span></span>
												</label>
												<label class="radio radio-primary">
													<input type="radio" name="value2" /> Good
													<span></span>
												</label>
												<label class="radio radio-warning">
													<input type="radio" name="value2" /> Average
													<span></span>
												</label>
												<label class="radio radio-danger">
													<input type="radio" name="value2" /> Poor
													<span></span>
												</label>
												<label class="radio radio-dark">
													<input type="radio" name="value2" /> Worst
													<span></span>
												</label>
											</div>
										</div>
									</td>

								</tr>
								<tr>
									<th>5</th>
									<td>All over expereience </td>
									<td>
										<div class="form-group">
											<div class="radio-inline">
												<label class="radio radio-success">
													<input type="radio" name="value1" /> Excellent
													<span></span>
												</label>
												<label class="radio radio-primary">
													<input type="radio" name="value1" /> Good
													<span></span>
												</label>
												<label class="radio radio-warning">
													<input type="radio" name="value1" /> Average
													<span></span>
												</label>
												<label class="radio radio-danger">
													<input type="radio" name="value1" /> Poor
													<span></span>
												</label>
												<label class="radio radio-dark">
													<input type="radio" name="value1" /> Worst
													<span></span>
												</label>
											</div>
										</div>
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
