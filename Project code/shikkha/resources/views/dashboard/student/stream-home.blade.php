@extends('dashboard.layout.master')

@section('section')

<!--begin::Content-->
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">


	<!--begin::Entry-->
	<div class="d-flex flex-column-fluid">
		<!--begin::Container-->
		<div class="container">
			<!--begin::Card-->
			<div class="">
				<!--begin::Header-->
				<!-- <div class="card-header flex-wrap border-0 pt-6 pb-0">
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Assigned Course
							<span class="d-block text-muted pt-2 font-size-sm">This semester all course shown here</span></h3>
					</div>
					<div class="card-title justify-content-between ">
						<h3 class="card-label">Course Duration
							<span class="d-block text-muted pt-2 font-size-sm">10.11.2020- 10.11.2021</span></h3>
					</div>

				</div> -->
				<!--end::Header-->
				<!--begin::Body-->
				<div class="card-body">
					<!--begin: Data table-->
					<div class="card card-custom gutter-b">
						<div class="card-body">
							<div class="d-flex">
								<!--begin: Pic-->
								<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">
									<div class="symbol symbol-50 symbol-lg-120">
										<img alt="Pic" src="assets/media/project-logos/3.png">
									</div>
									<div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">
										<span class="font-size-h3 symbol-label font-weight-boldest">JM</span>
									</div>
								</div>
								<!--end: Pic-->
								<!--begin: Info-->
								<div class="flex-grow-1">
									<!--begin: Title-->
									<div class="d-flex align-items-center justify-content-between flex-wrap">
										<div class="mr-3">
											<!--begin::Name-->
											<a href="#" class="d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3">CSE499A
												<i class="flaticon2-correct text-success icon-md ml-2"></i></a>
											<!--end::Name-->
											<!--begin::Contacts-->
											<div class="d-flex flex-wrap my-2">
												<a href="#" class="text-muted text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">
													<span class="svg-icon svg-icon-md svg-icon-gray-500 mr-1">
														<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
														<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
															<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																<rect x="0" y="0" width="24" height="24"></rect>
																<path
																  d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
																  fill="#000000"></path>
																<circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"></circle>
															</g>
														</svg>
														<!--end::Svg Icon-->
													</span>Syed Athar Bin Amir</a>


												<!--begin::Svg Icon | path:assets/media/svg/icons/General/Lock.svg-->

												<!--end::Svg Icon-->

											</div>
											<!--end::Contacts-->
										</div>
										<div class="my-lg-0 my-1">
											<a href="#" class="btn btn-sm btn-light-success font-weight-bolder text-uppercase mr-3">Conference</a>
											<!-- <a href="#" class="btn btn-sm btn-info font-weight-bolder text-uppercase">New Task</a> -->
										</div>
									</div>
									<!--end: Title-->
									<!--begin: Content-->
									<div class="d-flex align-items-center flex-wrap justify-content-between">
										<div class="flex-grow-1 font-weight-bold text-dark-50 py-5 py-lg-2 mr-5">Engineering 499A Senior Design Project I
										</div>
										<div class="d-flex flex-wrap align-items-center py-2">
											<div class="d-flex align-items-center mr-10">
												<div class="mr-6">
													<div class="font-weight-bold mb-2">Start Date</div>
													<span class="btn btn-sm btn-text btn-light-primary text-uppercase font-weight-bold">07 May, 2020</span>
												</div>
												<div class="">
													<div class="font-weight-bold mb-2">Due Date</div>
													<span class="btn btn-sm btn-text btn-light-danger text-uppercase font-weight-bold">10 June, 2021</span>
												</div>
											</div>
											<div class="flex-grow-1 flex-shrink-0 w-150px w-xl-300px mt-4 mt-sm-0">
												<span class="font-weight-bold">Total Class</span>
												<div class="progress progress-xs mt-2 mb-2">
													<div class="progress-bar bg-success" role="progressbar" style="width: 63%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
												<span class="font-weight-bolder text-dark">18</span>
											</div>
										</div>
									</div>
									<!--end: Content-->
								</div>
								<!--end: Info-->
							</div>
							<div class="separator separator-solid my-7"></div>
							<!--begin: Items-->
							<div class="d-flex align-items-center flex-wrap">
								<!--begin: Item-->
								<!-- <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
												<span class="mr-4">
													<i class="flaticon-piggy-bank icon-2x text-muted font-weight-bold"></i>
												</span>
												<div class="d-flex flex-column text-dark-75">
													<span class="font-weight-bolder font-size-sm">Earnings</span>
													<span class="font-weight-bolder font-size-h5">
													<span class="text-dark-50 font-weight-bold">$</span>249,500</span>
												</div>
											</div> -->
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column flex-lg-fill">
										<span class="text-dark-75 font-weight-bolder font-size-sm">Notifications</span>
										<a href="#" class="text-primary font-weight-bolder">View</a>
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column flex-lg-fill">
										<span class="text-dark-75 font-weight-bolder font-size-sm">73 total Tasks</span>
										<a href="#" class="text-primary font-weight-bolder">View</a>
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column flex-lg-fill">
										<span class="text-dark-75 font-weight-bolder font-size-sm">3 new Tasks</span>
										<a href="#" class="text-primary font-weight-bolder">View</a>
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon-file-2 icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column flex-lg-fill">
										<span class="text-dark-75 font-weight-bolder font-size-sm">4 Pending Tasks</span>
										<a href="#" class="text-primary font-weight-bolder">View</a>
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
									<span class="mr-4">
										<i class="flaticon-chat-1 icon-2x text-muted font-weight-bold"></i>
									</span>
									<div class="d-flex flex-column">
										<span class="text-dark-75 font-weight-bolder font-size-sm">648 Comments</span>
										<!-- <a href="#" class="text-primary font-weight-bolder">View</a> -->
									</div>
								</div>
								<!--end: Item-->
								<!--begin: Item-->
								<div class="d-flex align-items-center flex-lg-fill my-1">
									<div class="symbol-group symbol-hover">
										<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Mark Stone">
											<img alt="Pic" src="assets/media/users/300_25.jpg">
										</div>
										<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Charlie Stone">
											<img alt="Pic" src="assets/media/users/300_19.jpg">
										</div>
										<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Luca Doncic">
											<img alt="Pic" src="assets/media/users/300_22.jpg">
										</div>
										<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Nick Mana">
											<img alt="Pic" src="assets/media/users/300_23.jpg">
										</div>
										<div class="symbol symbol-30 symbol-circle" data-toggle="tooltip" title="" data-original-title="Teresa Fox">
											<img alt="Pic" src="assets/media/users/300_18.jpg">
										</div>
										<div class="symbol symbol-30 symbol-circle symbol-light">
											<span class="symbol-label font-weight-bold">5+</span>
										</div>
									</div>
								</div>
								<!--end: Item-->
							</div>
							<!--begin: Items-->
						</div>
					</div>
					<!-- start::make a post  -->
					<div class="card card-custom gutter-b border border-1">
						<div class="form-group mb-1 m-10">
							<label for="exampleTextarea">Example textarea</label>
							<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
						</div>
						<!-- <div class="form-group form-group-last row">
										<div class="dropzone dropzone-multi" id="kt_dropzone_4">
											<div class="dropzone-panel mb-lg-0 mb-2 ml-10">
												<a class="dropzone-select btn btn-light-primary font-weight-bold btn-sm dz-clickable">Attach files</a>
												<a class="dropzone-upload btn btn-light-primary font-weight-bold btn-sm">Upload All</a>
												<a class="dropzone-remove-all btn btn-light-primary font-weight-bold btn-sm">Remove All</a>
											</div>
											<div class="dropzone-items"></div>
											<div class="dz-default dz-message">
												<button class="dz-button" type="button">Drop files here to upload</button>
											</div>
										</div>
									</div> -->
						<div class="d-flex align-items-center justify-content-between flex-wrap mb-10">
							<div class="mr-3">
								<input type="file" class="ml-10">
							</div>
							<div class="my-lg-0 my-1 mr-10">
								<button type="reset" class="btn btn-light-primary mr-2">Submit</button>
								<button type="reset" class="btn btn-danger">Cancel</button>

							</div>
						</div>
					</div>
					<!-- END::make a post   -->
					<!-- start::view old post  -->					
					<div class="card card-custom gutter-b border border-1">
						<div class="card-header">
							<div class="card-title mt-10">
								<div class="symbol symbol-circle symbol-40 mr-3">
									<img alt="Pic" src="assets/media/users/100_12.jpg">
								</div>
								<div>
									<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Barkatullah Hossain</a>
									<span class="text-muted font-size-sm">Aug 3</span>
								</div>						
							</div>
							<div class="d-flex align-items-center justify-content-between flex-wrap mb-1 mt-5">								
								<div class="my-lg-0 my-1 mr-10">
									<button type="reset" class="btn btn-light-danger mr-2">Report</button>									
								</div>
							</div>
							<div class="card-body pt-5 pb-5">
								<p>Weekly update format:

									- Email sent to the instructor by Sunday Midnight. Update should include tasks undertaken, in progress, and completed over the week. This does not have a set format, but all group members must be cc-ed in it.

									Those of you who failed to submit a proposal should email me ASAP explaining the circumstances for the delay, and complete and submit your proposals by tomorrow (4/8/2020).</p>
							</div>							
						</div>
						<!--end: Data table-->
						<div class="d-flex align-items-center ml-15 mt-4">
							<span class="svg-icon svg-icon-gray-500">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
											<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
											<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
									</g>
										</svg>
															<!--end::Svg Icon-->
							</span>
							<a href="#" class="font-weight-bolder text-primary ml-2">6 Comments</a>
						</div>
						<!-- starts::comments  -->
						<div class="accordion accordion-light accordion-light-borderless accordion-svg-toggle ml-10" id="faq">													
													<!--begin::Item-->
													<div class="card border-top-0">
														<!--begin::Header-->
														<div class="card-header" id="faqHeading2">
															<a class="card-title text-dark collapsed" data-toggle="collapse" href="#faq2" aria-expanded="false" aria-controls="faq2" role="button">
																<span class="svg-icon svg-icon-primary">
																	<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-right.svg-->
																	<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																		<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																			<polygon points="0 0 24 0 24 24 0 24"></polygon>
																			<path d="M12.2928955,6.70710318 C11.9023712,6.31657888 11.9023712,5.68341391 12.2928955,5.29288961 C12.6834198,4.90236532 13.3165848,4.90236532 13.7071091,5.29288961 L19.7071091,11.2928896 C20.085688,11.6714686 20.0989336,12.281055 19.7371564,12.675721 L14.2371564,18.675721 C13.863964,19.08284 13.2313966,19.1103429 12.8242777,18.7371505 C12.4171587,18.3639581 12.3896557,17.7313908 12.7628481,17.3242718 L17.6158645,12.0300721 L12.2928955,6.70710318 Z" fill="#000000" fill-rule="nonzero"></path>
																			<path d="M3.70710678,15.7071068 C3.31658249,16.0976311 2.68341751,16.0976311 2.29289322,15.7071068 C1.90236893,15.3165825 1.90236893,14.6834175 2.29289322,14.2928932 L8.29289322,8.29289322 C8.67147216,7.91431428 9.28105859,7.90106866 9.67572463,8.26284586 L15.6757246,13.7628459 C16.0828436,14.1360383 16.1103465,14.7686056 15.7371541,15.1757246 C15.3639617,15.5828436 14.7313944,15.6103465 14.3242754,15.2371541 L9.03007575,10.3841378 L3.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.000003, 11.999999) rotate(-270.000000) translate(-9.000003, -11.999999)"></path>
																		</g>
																	</svg>
																	<!--end::Svg Icon-->
																</span>
																<div class="card-label text-dark pl-4">Do I need a designer to use Metronic?</div>
															</a>
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div id="faq2" class="collapse" aria-labelledby="faqHeading2" data-parent="#faq" style="">
															<div class="card-body text-dark-50 font-size-lg pl-12">Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.</div>
														</div>
														<!--end::Body-->
													</div>
													<!--end::Item-->	
												</div>
						<!-- END:: comments  -->
						<div class="form-group mb-5 mt-5 ml-10 mr-10">							
							<textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
						</div>
						<div class="d-flex align-items-center justify-content-between flex-wrap mb-10">
							<div class="mr-3">
								
							</div>
							<div class="my-lg-0 my-1 mr-10">
								<button type="reset" class="btn btn-light-primary mr-2">Submit</button>
								<button type="reset" class="btn btn-danger">Cancel</button>

							</div>
						</div>
					</div>
					<!-- END::view old post  -->
					<!-- start::view old post with file  -->					
					<div class="card card-custom gutter-b border border-1">
						<div class="card-header">
							<div class="card-title mt-10">
								<div class="symbol symbol-circle symbol-40 mr-3">
									<img alt="Pic" src="assets/media/users/75_1.jpg">
								</div>
								<div>
									<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Syed Athar Bin Amir</a>
									<span class="text-muted font-size-sm">Aug 3</span>
								</div>						
							</div>
							<div class="d-flex align-items-center justify-content-between flex-wrap mb-1 mt-5">								
								<div class="my-lg-0 my-1 mr-10">
									<button type="reset" class="btn btn-light-danger mr-2">Report</button>									
								</div>
							</div>
							<div class="card-body pt-5 pb-5">
							<div class="d-flex align-items-center justify-content-between mb-10">
								<div class="d-flex align-items-center mr-2 pr-5 border">
									<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
										<div class="symbol-label">
											<img src="assets/media/svg/files/pdf.svg" alt="" class="h-50">
										</div>
									</div>
									<div>
										<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Data analysis part II </a>
										<div class="font-size-sm text-muted font-weight-bold mt-1">PDF</div>
									</div>
								</div>														
							</div>
								<p>Weekly update format:

									- Email sent to the instructor by Sunday Midnight. Update should include tasks undertaken, in progress, and completed over the week. This does not have a set format, but all group members must be cc-ed in it.

									Those of you who failed to submit a proposal should email me ASAP explaining the circumstances for the delay, and complete and submit your proposals by tomorrow (4/8/2020).</p>
							</div>							
						</div>
						<!--end: Data table-->
						<div class="d-flex align-items-center ml-15 mt-4">
							<span class="svg-icon svg-icon-gray-500">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
											<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
											<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
									</g>
										</svg>
															<!--end::Svg Icon-->
							</span>
							<a href="#" class="font-weight-bolder text-primary ml-2">6 Comments</a>
						</div>
						<div class="form-group mb-5 mt-5 ml-10 mr-10">							
							<textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
						</div>
						<div class="d-flex align-items-center justify-content-between flex-wrap mb-10">
							<div class="mr-3">
								
							</div>
							<div class="my-lg-0 my-1 mr-10">
								<button type="reset" class="btn btn-light-primary mr-2">Submit</button>
								<button type="reset" class="btn btn-danger">Cancel</button>

							</div>
						</div>
					</div>
					<!-- END::view old post with file -->
					<!-- start::view old post with file  -->					
					<div class="card card-custom gutter-b border border-1">
						<div class="card-header">
							<div class="card-title mt-10">
								<div class="symbol symbol-circle symbol-40 mr-3">
									<img alt="Pic" src="assets/media/users/75_1.jpg">
								</div>
								<div>
									<a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Syed Athar Bin Amir</a>
									<span class="text-muted font-size-sm">Aug 3</span>
								</div>						
							</div>
							<div class="d-flex align-items-center justify-content-between flex-wrap mb-1 mt-5">								
								<div class="my-lg-0 my-1 mr-10">
									<button type="reset" class="btn btn-light-danger mr-2">Report</button>									
								</div>
							</div>
							<div class="card-body pt-5 pb-5">
							<div class="row">
								<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-10">
									<div class="d-flex align-items-center mr-2 pr-5 border">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="assets/media/svg/files/pdf.svg" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Data analysis part II </a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">PDF</div>
										</div>
									</div>														
								</div>
								<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-10">
									<div class="d-flex align-items-center mr-2 pr-5 border">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="assets/media/svg/files/doc.svg" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Data analysis part II </a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">PDF</div>
										</div>
									</div>														
								</div>
								<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-10">
									<div class="d-flex align-items-center mr-2 pr-5 border">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="assets/media/svg/files/doc.svg" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Data analysis part II </a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">PDF</div>
										</div>
									</div>														
								</div>
								<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-10">
									<div class="d-flex align-items-center mr-2 pr-5 border">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="assets/media/svg/files/pdf.svg" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Data analysis part II </a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">PDF</div>
										</div>
									</div>														
								</div>
								<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 mb-10">
									<div class="d-flex align-items-center mr-2 pr-5 border">
										<div class="symbol symbol-50 symbol-light mr-3 flex-shrink-0">
											<div class="symbol-label">
												<img src="assets/media/svg/files/pdf.svg" alt="" class="h-50">
											</div>
										</div>
										<div>
											<a href="#" class="font-size-h6 text-dark-75 text-hover-primary font-weight-bolder">Data analysis part II </a>
											<div class="font-size-sm text-muted font-weight-bold mt-1">PDF</div>
										</div>
									</div>														
								</div>								
							</div>	
								<p>Weekly update format:

									- Email sent to the instructor by Sunday Midnight. Update should include tasks undertaken, in progress, and completed over the week. This does not have a set format, but all group members must be cc-ed in it.

									Those of you who failed to submit a proposal should email me ASAP explaining the circumstances for the delay, and complete and submit your proposals by tomorrow (4/8/2020).</p>
							</div>							
						</div>
						<!--end: Data table-->
						<div class="d-flex align-items-center ml-15 mt-4">
							<span class="svg-icon svg-icon-gray-500">
								<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group-chat.svg-->
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24"></rect>
											<path d="M16,15.6315789 L16,12 C16,10.3431458 14.6568542,9 13,9 L6.16183229,9 L6.16183229,5.52631579 C6.16183229,4.13107011 7.29290239,3 8.68814808,3 L20.4776218,3 C21.8728674,3 23.0039375,4.13107011 23.0039375,5.52631579 L23.0039375,13.1052632 L23.0206157,17.786793 C23.0215995,18.0629336 22.7985408,18.2875874 22.5224001,18.2885711 C22.3891754,18.2890457 22.2612702,18.2363324 22.1670655,18.1421277 L19.6565168,15.6315789 L16,15.6315789 Z" fill="#000000"></path>
											<path d="M1.98505595,18 L1.98505595,13 C1.98505595,11.8954305 2.88048645,11 3.98505595,11 L11.9850559,11 C13.0896254,11 13.9850559,11.8954305 13.9850559,13 L13.9850559,18 C13.9850559,19.1045695 13.0896254,20 11.9850559,20 L4.10078614,20 L2.85693427,21.1905292 C2.65744295,21.3814685 2.34093638,21.3745358 2.14999706,21.1750444 C2.06092565,21.0819836 2.01120804,20.958136 2.01120804,20.8293182 L2.01120804,18.32426 C1.99400175,18.2187196 1.98505595,18.1104045 1.98505595,18 Z M6.5,14 C6.22385763,14 6,14.2238576 6,14.5 C6,14.7761424 6.22385763,15 6.5,15 L11.5,15 C11.7761424,15 12,14.7761424 12,14.5 C12,14.2238576 11.7761424,14 11.5,14 L6.5,14 Z M9.5,16 C9.22385763,16 9,16.2238576 9,16.5 C9,16.7761424 9.22385763,17 9.5,17 L11.5,17 C11.7761424,17 12,16.7761424 12,16.5 C12,16.2238576 11.7761424,16 11.5,16 L9.5,16 Z" fill="#000000" opacity="0.3"></path>
									</g>
										</svg>
															<!--end::Svg Icon-->
							</span>
							<a href="#" class="font-weight-bolder text-primary ml-2">6 Comments</a>
						</div>
						<div class="form-group mb-5 mt-5 ml-10 mr-10">							
							<textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
						</div>
						<div class="d-flex align-items-center justify-content-between flex-wrap mb-10">
							<div class="mr-3">
								
							</div>
							<div class="my-lg-0 my-1 mr-10">
								<button type="reset" class="btn btn-light-primary mr-2">Submit</button>
								<button type="reset" class="btn btn-Danger">Cancel</button>

							</div>
						</div>
					</div>
					<!-- END::view old post with file -->
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
