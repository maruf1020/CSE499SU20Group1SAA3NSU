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
						<div class="card-toolbar">
							<button type="reset" class="btn btn-success mr-2">Save Change</button>
							<button type="reset" class="btn btn-secondary">Cancel</button>
						</div>
					</div>

				</div>
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin: Datatable-->
					 <div class="card-body">
										<div class="row justify-content-center text-center my-0 my-md-25">
											<!-- begin: Pricing-->
											<div class="col-md-4 col-xxl-3 bg-white rounded-left shadow-sm">
												<div class="pt-25 pb-25 pb-md-10 px-4">
													
													<!-- <input type="text" class="form-control border-1 mb-15" name="name" placeholder="Basic">	
													<input type="text" class="form-control border-1 px-7 py-3 font-size-h1 font-weight-bold d-inline-flex flex-center bg-primary-o-10 rounded-lg mb-15" name="type" placeholder="Free">	
													
													<br>
													
													<textarea class="form-control border-1 mb-10 d-flex flex-column text-dark-50" name="memo" rows="4" placeholder="Lorem ipsum dolor sit amet adipiscing elitsed do eiusmod tempors"></textarea>
													<br>
													<div class="form-group mb-10">
														<label>Powers</label>
														<div class="checkbox-list">
															<label class="checkbox" >
															<input type="checkbox" checked="checked" >Power 01
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox"  checked="checked">Power 02
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox" checked="checked">Power 03
															<span></span></label>
															<label class="checkbox ">
															<input type="checkbox" checked="checked">Power 04
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox"  >Power 05
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox" >Power 06
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox" > Power 07
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox"  >Power 08
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox" >Power 09
															<span></span></label>
														</div>
													</div>
													<button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Update</button> -->
												</div>
											</div>
											<!-- end: Pricing-->
											<!-- begin: Pricing-->
											<div class="col-md-4 col-xxl-3 bg-primary my-md-n15 rounded shadow-sm">
												<div class="pt-25 pt-md-37 pb-25 pb-md-10 py-md-28 px-4">
												<h4 class="text-white mb-15">Professional</h4>
												<span class="px-7 py-3 bg-white d-inline-flex flex-center rounded-lg mb-15 bg-white">
														<span class="pr-2 text-primary opacity-70">৳</span>
														<span class="pr-2 font-size-h1 font-weight-bold text-primary">29000</span>
														<span class="text-primary opacity-70">/&nbsp;&nbsp;Per Installation</span>
													</span>	
													
													<br>
													
													<p class="text-white mb-10 d-flex flex-column">
														<span>Lorem ipsum dolor sit amet adipiscing elit</span>
														<span>sed do eiusmod tempors labore et dolore</span>
														<span>magna siad enim aliqua</span>
													</p>
													<br>
													<div class="form-group mb-10">
														<label>Powers</label>
														<div class="checkbox-list">
															<label class="checkbox checkbox-dark" >
															<input type="checkbox" disabled="disabled" checked="checked" >Power 01
															<span></span></label>
															<label class="checkbox checkbox-dark">
															<input type="checkbox" disabled="disabled"  checked="checked">Power 02
															<span></span></label>
															<label class="checkbox checkbox-dark">
															<input type="checkbox" disabled="disabled" checked="checked">Power 03
															<span></span></label>
															<label class="checkbox checkbox-dark ">
															<input type="checkbox" disabled="disabled" checked="checked">Power 04
															<span></span></label>
															<label class="checkbox checkbox-dark">
															<input type="checkbox" disabled="disabled"  checked="checked">Power 05
															<span></span></label>
															<label class="checkbox checkbox-dark">
															<input type="checkbox" disabled="disabled" checked="checked">Power 06
															<span></span></label>
															<label class="checkbox checkbox-dark">
															<input type="checkbox" disabled="disabled" > Power 07
															<span></span></label>
															<label class="checkbox checkbox-dark">
															<input type="checkbox" disabled="disabled"  >Power 08
															<span></span></label>
															<label class="checkbox checkbox-dark">
															<input type="checkbox" disabled="disabled" >Power 09
															<span></span></label>
														</div>
													</div>
													<!-- <button type="button" class="btn btn-dark text-uppercase font-weight-bolder px-15 py-3">Update</button> -->
												</div>
											</div>
											<!-- end: Pricing-->
											<!-- begin: Pricing-->
											<div class="col-md-4 col-xxl-3 bg-white rounded-right shadow-sm">
												<div class="pt-25 pb-25 pb-md-10 px-4">
												<!-- <input type="text" class="form-control border-1 mb-15" name="name" placeholder="Extended">	
													<input type="text" class="form-control border-1 px-7 py-3 font-size-h1 font-weight-bold d-inline-flex flex-center bg-primary-o-10 rounded-lg mb-15" name="type" placeholder="৳5000">	
													
													<br>
													
													<textarea class="form-control border-1 mb-10 d-flex flex-column text-dark-50" name="memo" rows="4" placeholder="Lorem ipsum dolor sit amet adipiscing elitsed do eiusmod tempors"></textarea>
													<br>
													<div class="form-group mb-10">
														<label>Powers</label>
														<div class="checkbox-list">
															<label class="checkbox" >
															<input type="checkbox" checked="checked" >Power 01
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox"  checked="checked">Power 02
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox" checked="checked">Power 03
															<span></span></label>
															<label class="checkbox ">
															<input type="checkbox" checked="checked">Power 04
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox"  checked="checked">Power 05
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox" checked="checked">Power 06
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox" checked="checked"> Power 07
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox"  checked="checked">Power 08
															<span></span></label>
															<label class="checkbox">
															<input type="checkbox" checked="checked">Power 09
															<span></span></label>
														</div>
													</div>
													<button type="button" class="btn btn-primary text-uppercase font-weight-bolder px-15 py-3">Update</button> -->
												</div>
											</div>
											<!-- end: Pricing-->
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
