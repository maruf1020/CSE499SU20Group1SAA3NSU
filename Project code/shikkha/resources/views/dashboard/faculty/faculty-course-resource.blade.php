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
						<h3 class="card-label">Course Resource
							<span class="d-block text-muted pt-2 font-size-sm">All Your course resource shown here</span></h3>
					</div>
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Course Duration
							<span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span></h3>
					</div>
				</div>
				<!--end::Header-->




				<!--begin::Body-->
				<div class="card-body">
				<!-- Start::upload file  -->
				<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
					<div class="card card-custom gutter-b">
						<div class="card-header">
							<div class="card-title">
								<h3 class="card-label">
									Upload file

								</h3>
							</div>
							<div class="d-flex justify-content-between stream-button">
								<a href="faculty-course-resource" class="btn btn-success font-weight-bold">Upload</a>
							</div>
						</div>
						<div class="card-body">
							<form action="/action_page.php">
									<input type="file" id="myFile" name="filename">
							</form>
						</div>	
					</div>
				</div>			
				<!-- Start::upload file  -->
				<div class="d-flex flex-column flex-grow-1">											
											<!--begin::Row-->
											<div class="row">	
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																																						
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/pdf.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/mp4.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/mp4.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/mp4.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/zip.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/zip.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/pdf.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/pdf.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/doc.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/pdf.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->		
												<!--begin::Col-->
												<div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
													<!--begin::Card-->
													<div class="card card-custom gutter-b card-stretch">
														<div class="card-header border-0">
															<h3 class="card-title"></h3>
															<div class="card-toolbar">
																<div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
																	<a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																		<i class="ki ki-bold-more-hor"></i>
																	</a>
																	<div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
																		<!--begin::Navigation-->
																		<ul class="navi navi-hover py-5">
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="far fa-eye"></i>
																					</span>
																					<span class="navi-text">View</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="fas fa-cloud-download-alt"></i>
																					</span>
																					<span class="navi-text">Download</span>
																				</a>
																			</li>
																			<li class="navi-item">
																				<a href="#" class="navi-link">
																					<span class="navi-icon">
																						<i class="flaticon-delete"></i>
																					</span>
																					<span class="navi-text">Delete</span>
																				</a>
																			</li>																			
																		</ul>
																		<!--end::Navigation-->
																	</div>
																</div>
															</div>
														</div>
														<div class="card-body">
															<div class="d-flex flex-column align-items-center">
																<!--begin: Icon-->
																<img alt="" class="max-h-65px" src="assets/media/svg/files/doc.svg">
																<!--end: Icon-->
																<!--begin: Tite-->
																<a href="#" class="text-dark-75 font-weight-bold mt-15 font-size-lg">Technical Requiremnts.pdf</a>
																<!--end: Tite-->
															</div>
														</div>
													</div>
													<!--end:: Card-->
												</div>
												<!--end::Col-->							
											</div>
											<!--end::Row-->																					
										</div>
				</div>


				<!-- Content::stard  -->
				
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
