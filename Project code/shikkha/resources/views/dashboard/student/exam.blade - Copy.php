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
                                <span
                                    class="d-block text-muted pt-2 font-size-sm">This semeseter all course shown here</span>
                            </h3>
                        </div>
                        <div class="card-title justify-content-between ">
                            <a href="exam"
                               class="btn btn-sm btn-success font-weight-bolder text-uppercase mr-3">Submit</a>
                        </div>

                    </div>
                    <!--end::Header-->
                    <div style="text-align: center; font-size:70px; margin-top: 0px;">
                        <h1>You Have left:</h1>
                        <h1 id="demo-timer"><h1>
                    </div>
                    <div class="card-body">
                        <div class="col-lg-12 col-xxl-12">
                            <div class="card card-custom card-stretch gutter-b">
                                <!-- main question page Start -->
                                <div class="card-header align-items-center border-0 mt-4">
                                </div>
                                <div class="card-body pt-4">
                                    <div style="text-align: left;">
                                        <h1 style="    font-size: 20px;margin-bottom: 20px;text-decoration: underline;">True/Flase:</h1>
                                    </div>
                                @foreach($quiz as $key=> $value)
                                    <?php
                                    if($value->q_type == 'tf'){
                                    ?>


                                    <!-- start::true and false  -->
                                        <div class="form-group mb-10">
                                            <label> <b>{{ ++$key }}.</b> {{ $value->q_name }}</label>
                                            <div class="radio-list" id="toastTypeGroup">
                                                <label class="radio radio-success">
                                                    <input type="radio" name="toasts1" value="success">True
                                                    <!-- checked="checked" -->
                                                    <span></span>
                                                </label>
                                                <label class="radio radio-danger">
                                                    <input type="radio" name="toasts1" value="info">False
                                                    <span></span>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- end::true and false  -->
                                    <?php

                                    }
                                    ?>
                                @endforeach
                                <!-- Start::multiple question ans -->
                                    <div class="form-group mb-10">
                                        <label> <b>1.</b> what is the ans of 2+2 = ? </label>
                                        <div class="radio-list" id="toastTypeGroup">
                                            <label class="radio">
                                                <input type="radio" name="toasts" value="success">2
                                                <!-- checked="checked" -->
                                                <span></span>
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="toasts" value="info">3
                                                <span></span>
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="toasts" value="warning">4
                                                <span></span>
                                            </label>
                                            <label class="radio">
                                                <input type="radio" name="toasts" value="error">1
                                                <span></span>
                                            </label>
                                        </div>
                                    </div>
                                    <!-- End::multiple question ans -->


                                    <!-- Start::multiple selections ans -->
                                    <div class="form-group mb-10">
                                        <label> <b>2.</b> what is the ans of 2+2 = ? </label>
                                        <div class="checkbox-list">
                                            <label class="checkbox">
                                                <input id="closeButton" type="checkbox" value="checked">I think pie +
                                                0.2584
                                                <span></span></label>
                                            <label class="checkbox">
                                                <input id="addBehaviorOnToastClick" type="checkbox" value="checked">It's
                                                must be 4
                                                <span></span></label>
                                            <label class="checkbox">
                                                <input id="debugInfo" type="checkbox" value="checked">The ans is 2
                                                <span></span></label>
                                            <label class="checkbox">
                                                <input id="progressBar" type="checkbox" value="checked">Its depend
                                                <span></span></label>
                                        </div>
                                    </div>
                                    <!-- End::multiple selections ans -->


                                    <!-- Start::choose ans -->
                                    <label> <b>3.</b> guess, where am I ? </label>
                                    <div class="col-lg-2 mb-10">
                                        <select class="form-control" id="kt_notify_placement_align">
                                            <option value="left" selected="selected">Select</option>
                                            <option value="left">Left</option>
                                            <option value="right">Right</option>
                                            <option value="center">Center</option>
                                            <option value="center">No where</option>
                                        </select>
                                    </div>
                                    <!-- End::choose ans -->
                                    <!-- Start::write short ans -->
                                    <label> <b>4.</b> Who is the Father of Modern Chemistry ? </label>
                                    <div class="form-group kt-form__grou col-lg-2 mb-10">
                                        <input id="showDuration" type="text" class="form-control"
                                               placeholder="your ans">
                                        <!-- value="300" -->
                                    </div>
                                    <!-- Start::write short ans -->
                                {{--									<!-- start::true and false  -->--}}
                                {{--									<div class="form-group mb-10">--}}
                                {{--										<label> <b>5.</b> Antoine Lavoisier is thee father of Chemistry </label>--}}
                                {{--										<div class="radio-list" id="toastTypeGroup">--}}
                                {{--											<label class="radio radio-success">--}}
                                {{--												<input type="radio" name="toasts1" value="success">True--}}
                                {{--												<!-- checked="checked" -->--}}
                                {{--													<span></span>--}}
                                {{--											</label>--}}
                                {{--											<label class="radio radio-danger">--}}
                                {{--												<input type="radio" name="toasts1" value="info">False--}}
                                {{--													<span></span>--}}
                                {{--											</label>--}}
                                {{--										</div>--}}
                                {{--									</div>--}}
                                {{--									<!-- end::true and false  -->--}}
                                <!-- Start::Drag and Drop  -->
                                    <label> <b>6.</b> Do the perfect arrangement </label>
                                    <div id="kt_kanban_1"></div>
                                    <div class="mb-10"></div>
                                    <!-- end::Drag and Drop  -->
                                    <!--begin::Long type question ans-->
                                    <label> <b>7.</b> Write a paragraph about planting trees (700 words)</label>
                                    <form>
                                        <div class="mr-20">
                                            <div class="summernote" id="kt_summernote_1">
                                            </div>
                                        </div>
                                    </form>
                                    <div class="mb-10"></div>
                                    <!--end::Long type question ans-->
                                    <label> <b>8.</b> Fill in the blanks </label>
                                    <p class="mr-20">Timmie Willie is a country
                                        <input
                                            type="text"
                                            class="ml-4 mr-4 mb-5"
                                            style="border: none; border-bottom: 1px solid black;">
                                        who is accidentally transported to a
                                        <input
                                            type="text"
                                            class="ml-4 mr-4 mb-5"
                                            style="border: none; border-bottom: 1px solid black;">
                                        in a vegetable
                                        <input
                                            type="text"
                                            class="ml-4 mr-4 mb-5"
                                            style="border: none; border-bottom: 1px solid black;">. When he
                                        <input
                                            type="text"
                                            class="ml-4 mr-4 mb-5"
                                            style="border: none; border-bottom: 1px solid black;">
                                        up, he
                                        <input
                                            type="text"
                                            class="ml-4 mr-4 mb-5"
                                            style="border: none; border-bottom: 1px solid black;">
                                        himself in a party and makes a
                                        <input
                                            type="text"
                                            class="ml-4 mr-4 mb-5"
                                            style="border: none; border-bottom: 1px solid black;">.
                                        When he is unable to bear the
                                        <input
                                            type="text"
                                            class="ml-4 mr-4 mb-5"
                                            style="border: none; border-bottom: 1px solid black;">
                                        life, he returns to his home but
                                        <input
                                            type="text"
                                            class="ml-4 mr-4 mb-5"
                                            style="border: none; border-bottom: 1px solid black;">
                                        his friend to the village. When his
                                        <input
                                            type="text"
                                            class="ml-4 mr-4 mb-5"
                                            style="border: none; border-bottom: 1px solid black;">
                                        visits him, something similar happens.
                                    </p>
                                    <div class="mb-10"></div>
                                    <!--START::Fill in the blanks-->
                                    <!--end::Choose file-->
                                    <label> <b>9.</b> Write a paragraph with hand written then take a photo and upload
                                        it here (700 words)</label><br>
                                    <input type="file">
                                    <div class="mb-10"></div>
                                    <!--START:Choose file

                                    <!--end::Fill in the blanks-->
                                </div>
                                <!-- main question page End -->
                            </div>
                        </div>
                    </div>
                    <!--begin::Body-->
                    <div class="card-body">
                        <!--begin: Datatable-->

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
