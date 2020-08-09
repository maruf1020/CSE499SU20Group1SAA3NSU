@extends('dashboard.layout.master')

@section('section')

<!--begin::Content-->

<!--begin::Entry-->

< div class = "d-flex flex-column-fluid" >
<!--begin::Container-->

<div class="container">
    <!--begin::Card-->
    <div class="card card-custom">
        <!--begin::Header-->
        <div class="card-header flex-wrap border-0 pt-6 pb-0">
            <div class="card-title justify-content-between ">
                <h3 class="card-label">Your Friends
                    <span class="d-block text-muted pt-2 font-size-sm">All Your Friends shown here</span>
                </h3>
            </div>
            <div class="input-group input-group-solid col-xl-4 col-lg-6 col-md-6 col-sm-6">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <span class="svg-icon svg-icon-lg">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                width="24px"
                                height="24px"
                                viewBox="0 0 24 24"
                                version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24"></rect>
                                    <path
                                        d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
                                        fill="#000000"
                                        fill-rule="nonzero"
                                        opacity="0.3"></path>
                                    <path
                                        d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
                                        fill="#000000"
                                        fill-rule="nonzero"></path>
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                    </span>
                </div>
                <input type="text" class="form-control py-4 h-auto" placeholder="Email"></div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <!-- Content::stard -->
            <div class="card-body">
                <div class="d-flex flex-column flex-grow-1">
                    <!--begin::Row-->
                    <div class="row">

                        <!--begin::Col-->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                            <!--begin::Card-->
                            <div class="card card-custom gutter-b card-stretch">
                                <!--begin::Body-->
                                <div class="card-body pt-4">
                                    <!--begin::Toolbar-->
                                    <div class="d-flex justify-content-end">
                                        <div
                                            class="dropdown dropdown-inline"
                                            data-toggle="tooltip"
                                            title=""
                                            data-placement="left"
                                            data-original-title="Quick actions">
                                            <a
                                                href="#"
                                                class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                data-toggle="dropdown"
                                                aria-haspopup="true"
                                                aria-expanded="false">
                                                <i class="ki ki-bold-more-hor"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                <!--begin::Navigation-->
                                                <ul class="navi navi-hover">
                                                    <li class="navi-header font-weight-bold py-4">
                                                        <span class="font-size-lg">Actions</span>
                                                        <i
                                                            class="flaticon2-information icon-md text-muted"
                                                            data-toggle="tooltip"
                                                            data-placement="right"
                                                            title=""
                                                            data-original-title="Click to learn more..."></i>
                                                    </li>
                                                    <li class="navi-separator mb-3 opacity-70"></li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-success">Send Message</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-warning">send email</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                    <li class="navi-item">
                                                        <a href="#" class="navi-link">
                                                            <span class="navi-text">
                                                                <span class="label label-xl label-inline label-light-danger">Delete Friend</span>
                                                            </span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <!--end::Navigation-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Toolbar-->
                                    <!--begin::User-->
                                    <div class="d-flex align-items-end mb-7">
                                        <!--begin::Pic-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Pic-->
                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                <div class="symbol symbol-circle symbol-lg-75">
                                                    <img src="assets/media/users/300_1.jpg" alt="image"></div>
                                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                        <!-- <span class="font-size-h3 font-weight-boldest">JM</span> -->
                                                    </div>
                                                </div>
                                                <!--end::Pic-->
                                                <!--begin::Title-->
                                                <div class="d-flex flex-column">
                                                    <a
                                                        href="#"
                                                        class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Maruf Billah</a>
                                                    <span class="text-muted font-weight-bold">ECE Department</span>
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::User-->
                                        <!--begin::Desc-->

                                        <!--begin::Info-->
                                        <div class="mb-7">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                <a href="#" class="text-muted text-hover-primary">marufbillah1020@gmail.com</a>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-cente my-1">
                                                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                                <a href="#" class="text-muted text-hover-primary">+8801675708783</a>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                                                <span class="text-muted font-weight-bold">Dhaka</span>
                                            </div>
                                        </div>
                                        <!--end::Info-->
                                        <a
                                            href="#"
                                            class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
                                    </div>
                                    <!--end::Body-->
                                </div>
                                <!--end:: Card-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                <!--begin::Card-->
                                <div class="card card-custom gutter-b card-stretch">
                                    <!--begin::Body-->
                                    <div class="card-body pt-4">
                                        <!--begin::Toolbar-->
                                        <div class="d-flex justify-content-end">
                                            <div
                                                class="dropdown dropdown-inline"
                                                data-toggle="tooltip"
                                                title=""
                                                data-placement="left"
                                                data-original-title="Quick actions">
                                                <a
                                                    href="#"
                                                    class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                    data-toggle="dropdown"
                                                    aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="ki ki-bold-more-hor"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                    <!--begin::Navigation-->
                                                    <ul class="navi navi-hover">
                                                        <li class="navi-header font-weight-bold py-4">
                                                            <span class="font-size-lg">Actions</span>
                                                            <i
                                                                class="flaticon2-information icon-md text-muted"
                                                                data-toggle="tooltip"
                                                                data-placement="right"
                                                                title=""
                                                                data-original-title="Click to learn more..."></i>
                                                        </li>
                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-success">Send Message</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-warning">send email</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                        <li class="navi-item">
                                                            <a href="#" class="navi-link">
                                                                <span class="navi-text">
                                                                    <span class="label label-xl label-inline label-light-danger">Delete Friend</span>
                                                                </span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!--end::Navigation-->
                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Toolbar-->
                                        <!--begin::User-->
                                        <div class="d-flex align-items-end mb-7">
                                            <!--begin::Pic-->
                                            <div class="d-flex align-items-center">
                                                <!--begin::Pic-->
                                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                    <div class="symbol symbol-circle symbol-lg-75">
                                                        <img src="assets/media/users/300_1.jpg" alt="image"></div>
                                                        <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                            <!-- <span class="font-size-h3 font-weight-boldest">JM</span> -->
                                                        </div>
                                                    </div>
                                                    <!--end::Pic-->
                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a
                                                            href="#"
                                                            class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Maruf Billah</a>
                                                        <span class="text-muted font-weight-bold">ECE Department</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::User-->
                                            <!--begin::Desc-->

                                            <!--begin::Info-->
                                            <div class="mb-7">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                    <a href="#" class="text-muted text-hover-primary">marufbillah1020@gmail.com</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-cente my-1">
                                                    <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                                    <a href="#" class="text-muted text-hover-primary">+8801675708783</a>
                                                </div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                                                    <span class="text-muted font-weight-bold">Dhaka</span>
                                                </div>
                                            </div>
                                            <!--end::Info-->
                                            <a
                                                href="#"
                                                class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end:: Card-->
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                    <!--begin::Card-->
                                    <div class="card card-custom gutter-b card-stretch">
                                        <!--begin::Body-->
                                        <div class="card-body pt-4">
                                            <!--begin::Toolbar-->
                                            <div class="d-flex justify-content-end">
                                                <div
                                                    class="dropdown dropdown-inline"
                                                    data-toggle="tooltip"
                                                    title=""
                                                    data-placement="left"
                                                    data-original-title="Quick actions">
                                                    <a
                                                        href="#"
                                                        class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                        data-toggle="dropdown"
                                                        aria-haspopup="true"
                                                        aria-expanded="false">
                                                        <i class="ki ki-bold-more-hor"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                        <!--begin::Navigation-->
                                                        <ul class="navi navi-hover">
                                                            <li class="navi-header font-weight-bold py-4">
                                                                <span class="font-size-lg">Actions</span>
                                                                <i
                                                                    class="flaticon2-information icon-md text-muted"
                                                                    data-toggle="tooltip"
                                                                    data-placement="right"
                                                                    title=""
                                                                    data-original-title="Click to learn more..."></i>
                                                            </li>
                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-success">Send Message</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-warning">send email</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                            <li class="navi-item">
                                                                <a href="#" class="navi-link">
                                                                    <span class="navi-text">
                                                                        <span class="label label-xl label-inline label-light-danger">Delete Friend</span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!--end::Navigation-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Toolbar-->
                                            <!--begin::User-->
                                            <div class="d-flex align-items-end mb-7">
                                                <!--begin::Pic-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Pic-->
                                                    <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                        <div class="symbol symbol-circle symbol-lg-75">
                                                            <img src="assets/media/users/300_1.jpg" alt="image"></div>
                                                            <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                                <!-- <span class="font-size-h3 font-weight-boldest">JM</span> -->
                                                            </div>
                                                        </div>
                                                        <!--end::Pic-->
                                                        <!--begin::Title-->
                                                        <div class="d-flex flex-column">
                                                            <a
                                                                href="#"
                                                                class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Maruf Billah</a>
                                                            <span class="text-muted font-weight-bold">ECE Department</span>
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::User-->
                                                <!--begin::Desc-->

                                                <!--begin::Info-->
                                                <div class="mb-7">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                        <a href="#" class="text-muted text-hover-primary">marufbillah1020@gmail.com</a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-cente my-1">
                                                        <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                                        <a href="#" class="text-muted text-hover-primary">+8801675708783</a>
                                                    </div>
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                                                        <span class="text-muted font-weight-bold">Dhaka</span>
                                                    </div>
                                                </div>
                                                <!--end::Info-->
                                                <a
                                                    href="#"
                                                    class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end:: Card-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                        <!--begin::Card-->
                                        <div class="card card-custom gutter-b card-stretch">
                                            <!--begin::Body-->
                                            <div class="card-body pt-4">
                                                <!--begin::Toolbar-->
                                                <div class="d-flex justify-content-end">
                                                    <div
                                                        class="dropdown dropdown-inline"
                                                        data-toggle="tooltip"
                                                        title=""
                                                        data-placement="left"
                                                        data-original-title="Quick actions">
                                                        <a
                                                            href="#"
                                                            class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                            data-toggle="dropdown"
                                                            aria-haspopup="true"
                                                            aria-expanded="false">
                                                            <i class="ki ki-bold-more-hor"></i>
                                                        </a>
                                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                            <!--begin::Navigation-->
                                                            <ul class="navi navi-hover">
                                                                <li class="navi-header font-weight-bold py-4">
                                                                    <span class="font-size-lg">Actions</span>
                                                                    <i
                                                                        class="flaticon2-information icon-md text-muted"
                                                                        data-toggle="tooltip"
                                                                        data-placement="right"
                                                                        title=""
                                                                        data-original-title="Click to learn more..."></i>
                                                                </li>
                                                                <li class="navi-separator mb-3 opacity-70"></li>
                                                                <li class="navi-item">
                                                                    <a href="#" class="navi-link">
                                                                        <span class="navi-text">
                                                                            <span class="label label-xl label-inline label-light-success">Send Message</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="navi-item">
                                                                    <a href="#" class="navi-link">
                                                                        <span class="navi-text">
                                                                            <span class="label label-xl label-inline label-light-warning">send email</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li class="navi-item">
                                                                    <a href="#" class="navi-link">
                                                                        <span class="navi-text">
                                                                            <span class="label label-xl label-inline label-light-danger">Delete Friend</span>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <!--end::Navigation-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Toolbar-->
                                                <!--begin::User-->
                                                <div class="d-flex align-items-end mb-7">
                                                    <!--begin::Pic-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Pic-->
                                                        <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                            <div class="symbol symbol-circle symbol-lg-75">
                                                                <img src="assets/media/users/300_1.jpg" alt="image"></div>
                                                                <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                                    <!-- <span class="font-size-h3 font-weight-boldest">JM</span> -->
                                                                </div>
                                                            </div>
                                                            <!--end::Pic-->
                                                            <!--begin::Title-->
                                                            <div class="d-flex flex-column">
                                                                <a
                                                                    href="#"
                                                                    class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Maruf Billah</a>
                                                                <span class="text-muted font-weight-bold">ECE Department</span>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Title-->
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Desc-->

                                                    <!--begin::Info-->
                                                    <div class="mb-7">
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                            <a href="#" class="text-muted text-hover-primary">marufbillah1020@gmail.com</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-cente my-1">
                                                            <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                                            <a href="#" class="text-muted text-hover-primary">+8801675708783</a>
                                                        </div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                                                            <span class="text-muted font-weight-bold">Dhaka</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Info-->
                                                    <a
                                                        href="#"
                                                        class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end:: Card-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                            <!--begin::Card-->
                                            <div class="card card-custom gutter-b card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body pt-4">
                                                    <!--begin::Toolbar-->
                                                    <div class="d-flex justify-content-end">
                                                        <div
                                                            class="dropdown dropdown-inline"
                                                            data-toggle="tooltip"
                                                            title=""
                                                            data-placement="left"
                                                            data-original-title="Quick actions">
                                                            <a
                                                                href="#"
                                                                class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                                data-toggle="dropdown"
                                                                aria-haspopup="true"
                                                                aria-expanded="false">
                                                                <i class="ki ki-bold-more-hor"></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                                <!--begin::Navigation-->
                                                                <ul class="navi navi-hover">
                                                                    <li class="navi-header font-weight-bold py-4">
                                                                        <span class="font-size-lg">Actions</span>
                                                                        <i
                                                                            class="flaticon2-information icon-md text-muted"
                                                                            data-toggle="tooltip"
                                                                            data-placement="right"
                                                                            title=""
                                                                            data-original-title="Click to learn more..."></i>
                                                                    </li>
                                                                    <li class="navi-separator mb-3 opacity-70"></li>
                                                                    <li class="navi-item">
                                                                        <a href="#" class="navi-link">
                                                                            <span class="navi-text">
                                                                                <span class="label label-xl label-inline label-light-success">Send Message</span>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="navi-item">
                                                                        <a href="#" class="navi-link">
                                                                            <span class="navi-text">
                                                                                <span class="label label-xl label-inline label-light-warning">send email</span>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="navi-item">
                                                                        <a href="#" class="navi-link">
                                                                            <span class="navi-text">
                                                                                <span class="label label-xl label-inline label-light-danger">Delete Friend</span>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                                <!--end::Navigation-->
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Toolbar-->
                                                    <!--begin::User-->
                                                    <div class="d-flex align-items-end mb-7">
                                                        <!--begin::Pic-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Pic-->
                                                            <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                                <div class="symbol symbol-circle symbol-lg-75">
                                                                    <img src="assets/media/users/300_1.jpg" alt="image"></div>
                                                                    <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                                        <!-- <span class="font-size-h3 font-weight-boldest">JM</span> -->
                                                                    </div>
                                                                </div>
                                                                <!--end::Pic-->
                                                                <!--begin::Title-->
                                                                <div class="d-flex flex-column">
                                                                    <a
                                                                        href="#"
                                                                        class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Maruf Billah</a>
                                                                    <span class="text-muted font-weight-bold">ECE Department</span>
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::User-->
                                                        <!--begin::Desc-->

                                                        <!--begin::Info-->
                                                        <div class="mb-7">
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                                <a href="#" class="text-muted text-hover-primary">marufbillah1020@gmail.com</a>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-cente my-1">
                                                                <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                                                <a href="#" class="text-muted text-hover-primary">+8801675708783</a>
                                                            </div>
                                                            <div class="d-flex justify-content-between align-items-center">
                                                                <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                                                                <span class="text-muted font-weight-bold">Dhaka</span>
                                                            </div>
                                                        </div>
                                                        <!--end::Info-->
                                                        <a
                                                            href="#"
                                                            class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
                                                    </div>
                                                    <!--end::Body-->
                                                </div>
                                                <!--end:: Card-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                                <!--begin::Card-->
                                                <div class="card card-custom gutter-b card-stretch">
                                                    <!--begin::Body-->
                                                    <div class="card-body pt-4">
                                                        <!--begin::Toolbar-->
                                                        <div class="d-flex justify-content-end">
                                                            <div
                                                                class="dropdown dropdown-inline"
                                                                data-toggle="tooltip"
                                                                title=""
                                                                data-placement="left"
                                                                data-original-title="Quick actions">
                                                                <a
                                                                    href="#"
                                                                    class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                                    data-toggle="dropdown"
                                                                    aria-haspopup="true"
                                                                    aria-expanded="false">
                                                                    <i class="ki ki-bold-more-hor"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                                    <!--begin::Navigation-->
                                                                    <ul class="navi navi-hover">
                                                                        <li class="navi-header font-weight-bold py-4">
                                                                            <span class="font-size-lg">Actions</span>
                                                                            <i
                                                                                class="flaticon2-information icon-md text-muted"
                                                                                data-toggle="tooltip"
                                                                                data-placement="right"
                                                                                title=""
                                                                                data-original-title="Click to learn more..."></i>
                                                                        </li>
                                                                        <li class="navi-separator mb-3 opacity-70"></li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-success">Send Message</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-warning">send email</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="navi-item">
                                                                            <a href="#" class="navi-link">
                                                                                <span class="navi-text">
                                                                                    <span class="label label-xl label-inline label-light-danger">Delete Friend</span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                    <!--end::Navigation-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Toolbar-->
                                                        <!--begin::User-->
                                                        <div class="d-flex align-items-end mb-7">
                                                            <!--begin::Pic-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Pic-->
                                                                <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                                    <div class="symbol symbol-circle symbol-lg-75">
                                                                        <img src="assets/media/users/300_1.jpg" alt="image"></div>
                                                                        <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                                            <!-- <span class="font-size-h3 font-weight-boldest">JM</span> -->
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Pic-->
                                                                    <!--begin::Title-->
                                                                    <div class="d-flex flex-column">
                                                                        <a
                                                                            href="#"
                                                                            class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Maruf Billah</a>
                                                                        <span class="text-muted font-weight-bold">ECE Department</span>
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::Title-->
                                                            </div>
                                                            <!--end::User-->
                                                            <!--begin::Desc-->

                                                            <!--begin::Info-->
                                                            <div class="mb-7">
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                                    <a href="#" class="text-muted text-hover-primary">marufbillah1020@gmail.com</a>
                                                                </div>
                                                                <div class="d-flex justify-content-between align-items-cente my-1">
                                                                    <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                                                    <a href="#" class="text-muted text-hover-primary">+8801675708783</a>
                                                                </div>
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                                                                    <span class="text-muted font-weight-bold">Dhaka</span>
                                                                </div>
                                                            </div>
                                                            <!--end::Info-->
                                                            <a
                                                                href="#"
                                                                class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
                                                        </div>
                                                        <!--end::Body-->
                                                    </div>
                                                    <!--end:: Card-->
                                                </div>
                                                <!--end::Col-->
                                                <!--begin::Col-->
                                                <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6">
                                                    <!--begin::Card-->
                                                    <div class="card card-custom gutter-b card-stretch">
                                                        <!--begin::Body-->
                                                        <div class="card-body pt-4">
                                                            <!--begin::Toolbar-->
                                                            <div class="d-flex justify-content-end">
                                                                <div
                                                                    class="dropdown dropdown-inline"
                                                                    data-toggle="tooltip"
                                                                    title=""
                                                                    data-placement="left"
                                                                    data-original-title="Quick actions">
                                                                    <a
                                                                        href="#"
                                                                        class="btn btn-clean btn-hover-light-primary btn-sm btn-icon"
                                                                        data-toggle="dropdown"
                                                                        aria-haspopup="true"
                                                                        aria-expanded="false">
                                                                        <i class="ki ki-bold-more-hor"></i>
                                                                    </a>
                                                                    <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                                                                        <!--begin::Navigation-->
                                                                        <ul class="navi navi-hover">
                                                                            <li class="navi-header font-weight-bold py-4">
                                                                                <span class="font-size-lg">Actions</span>
                                                                                <i
                                                                                    class="flaticon2-information icon-md text-muted"
                                                                                    data-toggle="tooltip"
                                                                                    data-placement="right"
                                                                                    title=""
                                                                                    data-original-title="Click to learn more..."></i>
                                                                            </li>
                                                                            <li class="navi-separator mb-3 opacity-70"></li>
                                                                            <li class="navi-item">
                                                                                <a href="#" class="navi-link">
                                                                                    <span class="navi-text">
                                                                                        <span class="label label-xl label-inline label-light-success">Send Message</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="navi-item">
                                                                                <a href="#" class="navi-link">
                                                                                    <span class="navi-text">
                                                                                        <span class="label label-xl label-inline label-light-warning">send email</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="navi-item">
                                                                                <a href="#" class="navi-link">
                                                                                    <span class="navi-text">
                                                                                        <span class="label label-xl label-inline label-light-danger">Delete Friend</span>
                                                                                    </span>
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                        <!--end::Navigation-->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end::Toolbar-->
                                                            <!--begin::User-->
                                                            <div class="d-flex align-items-end mb-7">
                                                                <!--begin::Pic-->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Pic-->
                                                                    <div class="flex-shrink-0 mr-4 mt-lg-0 mt-3">
                                                                        <div class="symbol symbol-circle symbol-lg-75">
                                                                            <img src="assets/media/users/300_1.jpg" alt="image"></div>
                                                                            <div class="symbol symbol-lg-75 symbol-circle symbol-primary d-none">
                                                                                <!-- <span class="font-size-h3 font-weight-boldest">JM</span> -->
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Pic-->
                                                                        <!--begin::Title-->
                                                                        <div class="d-flex flex-column">
                                                                            <a
                                                                                href="#"
                                                                                class="text-dark font-weight-bold text-hover-primary font-size-h4 mb-0">Maruf Billah</a>
                                                                            <span class="text-muted font-weight-bold">ECE Department</span>
                                                                        </div>
                                                                        <!--end::Title-->
                                                                    </div>
                                                                    <!--end::Title-->
                                                                </div>
                                                                <!--end::User-->
                                                                <!--begin::Desc-->

                                                                <!--begin::Info-->
                                                                <div class="mb-7">
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <span class="text-dark-75 font-weight-bolder mr-2">Email:</span>
                                                                        <a href="#" class="text-muted text-hover-primary">marufbillah1020@gmail.com</a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-cente my-1">
                                                                        <span class="text-dark-75 font-weight-bolder mr-2">Phone:</span>
                                                                        <a href="#" class="text-muted text-hover-primary">+8801675708783</a>
                                                                    </div>
                                                                    <div class="d-flex justify-content-between align-items-center">
                                                                        <span class="text-dark-75 font-weight-bolder mr-2">Location:</span>
                                                                        <span class="text-muted font-weight-bold">Dhaka</span>
                                                                    </div>
                                                                </div>
                                                                <!--end::Info-->
                                                                <a
                                                                    href="#"
                                                                    class="btn btn-block btn-sm btn-light-warning font-weight-bolder text-uppercase py-4">write message</a>
                                                            </div>
                                                            <!--end::Body-->
                                                        </div>
                                                        <!--end:: Card-->
                                                    </div>
                                                    <!--end::Col-->

                                                </div>
                                                <!--end::Row-->
                                            </div>
                                        </div>
                                        <!-- Content::stard -->

                                        <!-- Content::stard -->

                                        <!-- content::end -->

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