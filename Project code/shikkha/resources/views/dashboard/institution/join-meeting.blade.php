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
						<h3 class="card-label font-weight-bolder text-dark">All Meeting Information</h3>
						<span class="text-muted font-weight-bold font-size-sm mt-1">Here is a list of meetings</span>
					</div>
					<div class="card-toolbar" style="position: absolute;right:0;">

						<!-- Button trigger modal-->

						<button type="reset" class="btn btn-danger mr-2">Back</button>





						<!-- Meeting modal :: start-->


						<div class="modal fade" id="exampleModalCenter1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered modal-xl" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Meeting</h5>

										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>
									<div class="modal-body">
										<div class="container">
											<div id='jitsi-meet-conf-container'></div>
										</div>


											{{-- <iframe id="slug" src="" style="width: 1000; height: 600;"></iframe>

											<script type="text/javascript">
												function slug(huda_slug){
													var huda_slug=huda_slug;
													document.getElementById("slug").setAttribute("src", "https://meet.jit.si/"+huda_slug);
												}
											</script> --}}




									</div>

								</div>


								<div class="modal-footer">

								</div>
							</div>
						</div>
					</div>

					<!-- Modal add new institution: end-->


					<!-- Modal 2 Edit modal:: start-->
					<form class="" action="index.html" method="post">


						<div class="modal fade" id="exampleModalCenterEdit" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
							<div class="modal-dialog modal-dialog-centered" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Add New Institution</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<i aria-hidden="true" class="ki ki-close"></i>
										</button>
									</div>
									<div class="modal-body">
										<div class="form-group">
											<label>Institution name</label>
											<input type="email" class="form-control form-control-lg" placeholder="North South University">
										</div>
										<div class="form-group">
											<label>Institution EIN Number</label>
											<input type="email" class="form-control form-control-lg" placeholder="Write Institution EIN Number">
										</div>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Cancel</button>
										<button type="button" class="btn btn-success font-weight-bold">Add New</button>
									</div>
								</div>
							</div>
						</div>
					</form>
					<!-- Modal 2 Edit modal: end-->


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
											<th scope="col">#</th>
											<th scope="col">Metting Name </th>
											<th scope="col">Date</th>
											<th scope="col">Start Time</th>
											<th scope="col">End Time</th>
											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>

										@foreach ($meeting as $key=>$value)


										<tr>
											<th scope="row">{{ $key+1 }}</th>
											<td>{{ $value->name }}</td>
											<td>{{ $value->date }}</td>
											<td>{{ $value->start_time }}</td>
											<td>{{ $value->end_time }}</td>
											<td>
												<?php
												$slug[$key+1] =$value->slug;
												$huda_slug=$value->slug;
												?>
												<a href="" onclick="slug('<?php echo $value->slug; ?>')" id="meeting" class="btn  btn-success  mr-2" data-toggle="modal" data-target="#exampleModalCenter1">
													Join Meeting
												</a>
											</td>
										</tr>
										@endforeach


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
