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
                                        <h1 style="    font-size: 20px;margin-bottom: 20px;text-decoration: underline;">
                                            True/Flase:</h1>
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


                                    <div style="text-align: left;">
                                        <h1 style=" margin-top:50px;   font-size: 20px;margin-bottom: 20px;text-decoration: underline;">
                                            Multiple Choice Question:</h1>
                                    </div>
                                    @foreach($quiz as $key=> $value)

                                        <?php
                                        if($value->q_type == 'mcq'){
                                        ?>
                                    <!-- Start::multiple selections ans -->
                                        <div class="form-group mb-10">
                                            <label> <b>{{ ++$key }} .</b>{{ $value->q_name }} </label>
                                            <div class="checkbox-list">
                                                <?php
                                                $q_option = explode(',', $value->q_option);
                                                ?>
                                                @foreach($q_option as $key1=> $value1)
                                                    <label class="checkbox">
                                                        <input id="closeButton" type="checkbox" value="checked">
                                                        {{ $value1 }}
                                                        <span></span></label>
                                                @endforeach

                                            </div>
                                        </div>
                                        <?php

                                        }
                                        ?>
                                    @endforeach
                                <!-- End::multiple selections ans -->

                                    <div style="text-align: left;">
                                        <h1 style=" margin-top:50px;   font-size: 20px;margin-bottom: 20px;text-decoration: underline;">
                                            Answer In One Word:</h1>
                                    </div>
                                    @foreach($quiz as $key=> $value)

                                        <?php
                                        if($value->q_type == 'ow'){
                                        ?>
                                    <!-- Start::write short ans -->
                                        <label> <b>{{++$key}} .</b>{{ $value->q_name }}</label>
                                        <div class="form-group kt-form__grou col-lg-2 mb-10">
                                            <input id="showDuration" type="text" class="form-control"
                                                   placeholder="Type your answer">
                                            <!-- value="300" -->
                                        </div>
                                        <?php

                                        }
                                        ?>
                                    @endforeach

                                    <div style="text-align: left;">
                                        <h1 style=" margin-top:50px;   font-size: 20px;margin-bottom: 20px;text-decoration: underline;">
                                            Short Question Answer:</h1>
                                    </div>
                                    @foreach($quiz as $key=> $value)

                                        <?php
                                        if($value->q_type == 'sq'){
                                        ?>

                                        <label> <b>{{++$key}}. </b> {{ $value->q_name }}</label>
                                        <div class="form-group kt-form__grou col-lg-12 mb-10">
                                            <textarea class="form-control" id="exampleTextarea" rows="2"></textarea>
                                            <!-- value="300" -->
                                        </div>

                                        <?php

                                        }
                                        ?>
                                    @endforeach


                                    <div style="text-align: left;">
                                        <h1 style=" margin-top:50px;   font-size: 20px;margin-bottom: 20px;text-decoration: underline;">
                                            Descriptive Question Answer:</h1>
                                    </div>
                                    @foreach($quiz as $key=> $value)

                                        <?php
                                        if($value->q_type == 'dq'){
                                        ?>

                                        <label> <b>{{++$key}}. </b> {{ $value->q_name }}</label>
                                        <div class="form-group kt-form__grou col-lg-12 mb-10">
                                            <textarea class="form-control" id="exampleTextarea" rows="6"></textarea>
                                            <!-- value="300" -->
                                        </div>

                                    <?php

                                    }
                                    ?>
                                @endforeach


                                <!--begin::Long type question ans-->

                                    <div class="mb-10"></div>
                                    <!--end::Long type question ans-->

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
