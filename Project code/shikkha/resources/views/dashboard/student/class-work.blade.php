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
						<h3 class="card-label">Class Work
							<span class="d-block text-muted pt-2 font-size-sm">All Your class work shown here</span></h3>
					</div>
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Course Duration
							<span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span></h3>
					</div>

				</div>
				<!--end::Header-->




				<!--begin::Body-->
				<div class="card-body">


				<!-- Content::stard  -->
				<div class="row">
									<div class="col-lg-12 col-xxl-12">
										<!--begin::List Widget 9-->
										<div class="card card-custom card-stretch gutter-b">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-4">
												<h3 class="card-title align-items-start flex-column">
													<span class="font-weight-bolder text-dark">Recent Deadline works</span>													
												</h3>
												<div class="card-toolbar">
													<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-light-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sort By</button>
														<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
															<!--begin::Navigation-->
															<ul class="navi navi-hover">
																<li class="navi-header font-weight-bold py-4">
																	<span class="font-size-lg">Choosewhich work you wanna see:</span>
																	<i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="" data-original-title="Click to learn more..."></i>
																</li>
																<li class="navi-separator mb-3 opacity-70"></li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Completed</span>
																		</span>
																	</a>
																</li>																
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-warning">All work</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-primary">course</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-danger">Deadline</span>
																		</span>
																	</a>
																</li>
																<li class="navi-item">
																	<a href="#" class="navi-link">
																		<span class="navi-text">
																			<span class="label label-xl label-inline label-light-success">Recend added</span>
																		</span>
																	</a>
																</li>
																<!-- <li class="navi-separator mt-3 opacity-70"></li>
																<li class="navi-footer py-4">
																	<a class="btn btn-clean font-weight-bold btn-sm" href="#">
																	<i class="ki ki-plus icon-sm"></i>Add new</a>
																</li> -->
															</ul>
															<!--end::Navigation-->
														</div>
													</div>
												</div>
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-4">
												<div class="timeline timeline-5 mt-3">
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">CSE333</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="mr-4 font-weight-bolder text-dark-75">Added QAssignment 4</span>
															<span class="text-success">  (10.12.2020::10.00pm - </span>
															<span class="text-danger"> 20.12.2020::10.00pm)  </span>
															<!--begin::Section-->
															<div class="d-flex align-items-start mt-n2">																
																<!--begin::Symbol-->
																<a href="#" class="btn btn-light-success btn-sm font-weight-bold mr-2 ML-10">View</a>
																<!--end::Symbol-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">CHE300</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="mr-4 font-weight-bolder text-dark-75">Added Quiz 3</span>
															<span class="text-success">  (10.12.2020::10.00pm - </span>
															<span class="text-danger"> 20.12.2020::10.00pm)  </span>
															<!--begin::Section-->
															<div class="d-flex align-items-start mt-n2">																
																<!--begin::Symbol-->
																<a href="#" class="btn btn-light-danger btn-sm font-weight-bold mr-2 ML-10">View</a>
																<!--end::Symbol-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">CSE110</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-info icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="mr-4 font-weight-bolder text-dark-75">Modified Assignment 1</span>
															<span class="text-success">  (10.12.2020::10.00pm - </span>
															<span class="text-danger"> 20.12.2020::10.00pm)  </span>
															<!--begin::Section-->
															<div class="d-flex align-items-start mt-n2">																
																<!--begin::Symbol-->
																<a href="#" class="btn btn-light-info btn-sm font-weight-bold mr-2 ML-10">View</a>
																<!--end::Symbol-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">CHE300</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="mr-4 font-weight-bolder text-dark-75">Added Assignment 6</span>
															<span class="text-success">  (10.12.2020::10.00pm - </span>
															<span class="text-danger"> 20.12.2020::10.00pm)  </span>
															<!--begin::Section-->
															<div class="d-flex align-items-start mt-n2">																
																<!--begin::Symbol-->
																<a href="#" class="btn btn-light-danger btn-sm font-weight-bold mr-2 ML-10">View</a>
																<!--end::Symbol-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">BIO100</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-success icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="mr-4 font-weight-bolder text-dark-75">New Assignment</span>
															<span class="text-success">  (10.12.2020::10.00pm - </span>
															<span class="text-danger"> 20.12.2020::10.00pm)  </span>
															<!--begin::Section-->
															<div class="d-flex align-items-start mt-n2">																
																<!--begin::Symbol-->
																<a href="#" class="btn btn-light-success btn-sm font-weight-bold mr-2 ML-10">View</a>
																<!--end::Symbol-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">MAT100</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-warning icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="mr-4 font-weight-bolder text-dark-75">Video lecture 14</span>
															<span class="text-success">  (10.12.2020::10.00pm - </span>
															<span class="text-danger"> 20.12.2020::10.00pm)  </span>
															<!--begin::Section-->
															<div class="d-flex align-items-start mt-n2">																
																<!--begin::Symbol-->
																<a href="#" class="btn btn-light-warning btn-sm font-weight-bold mr-2 ML-10">View</a>
																<!--end::Symbol-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
													<!--begin: Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">MAT100</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-danger icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="mr-4 font-weight-bolder text-dark-75">Video lecture 13</span>
															<span class="text-success">  (10.12.2020::10.00pm - </span>
															<span class="text-danger"> 20.12.2020::10.00pm)  </span>
															<!--begin::Section-->
															<div class="d-flex align-items-start mt-n2">																
																<!--begin::Symbol-->
																<a href="#" class="btn btn-light-danger btn-sm font-weight-bold mr-2 ML-10">View</a>
																<!--end::Symbol-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Content-->
													</div>
													<!--end: Item-->
													<!--begin::Item-->
													<div class="timeline-item align-items-start">
														<!--begin::Label-->
														<div class="timeline-label font-weight-bolder text-dark-75 font-size-lg text-right pr-3">MAT100</div>
														<!--end::Label-->
														<!--begin::Badge-->
														<div class="timeline-badge">
															<i class="fa fa-genderless text-info icon-xxl"></i>
														</div>
														<!--end::Badge-->
														<!--begin::Content-->
														<div class="timeline-content d-flex">
															<span class="mr-4 font-weight-bolder text-dark-75">Video lecture 12</span>
															<span class="text-success">  (10.12.2020::10.00pm - </span>
															<span class="text-danger"> 20.12.2020::10.00pm)  </span>
															<!--begin::Section-->
															<div class="d-flex align-items-start mt-n2">																
																<!--begin::Symbol-->
																<a href="#" class="btn btn-light-info btn-sm font-weight-bold mr-2 ML-10">View</a>
																<!--end::Symbol-->
															</div>
															<!--end::Section-->
														</div>
														<!--end::Content-->
													</div>
													<!--end::Item-->
												</div>
												<!--end: Items-->
											</div>
											<!--end: Card Body-->
										</div>
										<!--end: Card-->
										<!--end: List Widget 9-->
									</div>								
																		
								</div>
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
