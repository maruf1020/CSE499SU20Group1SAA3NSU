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
                            <h3 class="card-label font-weight-bolder text-dark">Assign Task</h3>
                            <span
                                class="text-muted font-weight-bold font-size-sm mt-1">Exam and there information</span>
                        </div>
                        <div class="card-toolbar">


{{--                            <!-- Button trigger modal-->--}}
{{--                            <!--begin::Button-->--}}
{{--                            <a href="#" class="btn btn-primary font-weight-bolder mr-2" data-toggle="modal"--}}
{{--                               data-target="#exampleModalCenter">--}}
{{--                            <span class="svg-icon svg-icon-md">--}}
{{--                                <!--begin::Svg Icon | path:/metronic/theme/html/demo2/dist/assets/media/svg/icons/Design/Flatten.svg-->--}}
{{--                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"--}}
{{--                                     width="24px" height="24px" viewBox="0 0 24 24" version="1.1">--}}
{{--                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
{{--                                        <rect x="0" y="0" width="24" height="24"></rect>--}}
{{--                                        <circle fill="#000000" cx="9" cy="15" r="6"></circle>--}}
{{--                                        <path--}}
{{--                                            d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z"--}}
{{--                                            fill="#000000" opacity="0.3"></path>--}}
{{--                                    </g>--}}
{{--                                </svg>--}}
{{--                                <!--end::Svg Icon-->--}}
{{--                            </span>Assign a task</a>--}}
{{--                            <!--end::Button-->--}}










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


                                <!--begin::Body-->
                                <div class="card-body">

                                    <!-- Extra table::Start -->
                                    <div class="card card-custom">

                                        <div class="card-body">
                                            <!--begin: Datatable-->
                                            <table class="table table-bordered  table-head-custom table-checkable"
                                                   id="kt_datatable">
                                                <thead>
                                                <tr>
                                                    <th scope="col">Serial No</th>
                                                    <th scope="col">Task Name</th>
                                                    <th scope="col">Course & Section</th>
                                                    <th scope="col">Start Time</th>
                                                    <th scope="col">End Time</th>
                                                    <th scope="col">Duration</th>
                                                    <th scope="col">Total Marks</th>
                                                    <th scope="col">Actions</th>


                                                </tr>
                                                </thead>
                                                <tbody>

                                                @foreach ($sectionDetail as $key=>$value)
                                                    <tr class='value{{ $value->id }}'>

                                                        <th id='serial'>{{ ++$key }}</th>
                                                        <td>{{ $value->exam_name }}</td>
                                                        <td>{{ $value->initial }}</td>
                                                        <td>
                                                       <?php

                                                            $now = new DateTime($value->start);
                                                            echo $now->format('d-M-Y h:i:s');    // MySQL datetime format
                                                        ?>
                                                        </td>
                                                        <td>
                                                           <?php
                                                            $now1 = new DateTime($value->end);
                                                            echo $now1->format('d-M-Y h:i:s');    // MySQL datetime format
                                                           ?>
                                                        </td>
                                                        <td><?php
                                                            $date1 = new DateTime($value->start);
                                                            $date2 = new DateTime($value->end);


                                                            $diff=date_diff($date1,$date2);
                                                            $da= $diff->format('%d');
                                                            if($da>0){
                                                                echo $diff->format('%d day ');

                                                            }
                                                            echo $diff->format(' (%h h :  %i m )')."<br>";



                                                            //                                                            echo $diff->format('%s Seconds %i Minutes %h Hours %d days %m Months %y Year')."<br>";

                                                            ?>
                                                        </td>
                                                        <td>{{ $value->marks }}</td>
                                                        <td>
                                                            <?php
                                                            $today = date("Y-m-d H:i:s");
                                                            $start = new DateTime($value->start);
                                                            $start=$start->format('Y-m-d H:i:s');
                                                            $end = new DateTime($value->end);
                                                            $end=$end->format('Y-m-d H:i:s');

//                                                            $start_date = DateTime::createFromFormat("Y-m-d H:i:s", $value->start);
//                                                            $contractDateBegin = ;
//                                                            $contractDateEnd = $date2;
//                                                            echo $start_date;


                                                            if($today > $start && $today < $end) {
                                                                ?>

                                                                <a href="{{ route('student-task.show',$value->quiz_id) }}" class="btn btn-success mr-2">Start Now
                                                            </a>"
                                                                <?php
                                                            } else{
                                                                if($today > $end ){
                                                                    echo "<button type=\"button\" class=\"btn btn-danger mr-2\">expired</button>";
                                                                }
                                                                else{
                                                                    echo "<button type=\"button\" class=\"btn btn-warning mr-2\">Later</button>";

                                                                }

                                                            }
                                                            ?>
                                                        </td>


                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                            <!--end: Datatable-->
                                        </div>
                                    </div>
                                    <!-- Extra table::End  -->


                                </div>
                                <!--end::Body-->

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
    </div>
    <!--end::Content-->
    <script src="{{ asset('assets/js/createquiz.js') }}"></script>
    <script>
        $(document).ready(function () {

            $('.dynamic').change(function () {
                if ($(this).val() != '') {
                    var select = $(this).attr("id");
                    var value = $(this).val();
                    var dependent = $(this).data('dependent');
                    var fid = $(this).data('fid');
                    var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: "{{ route('data.fetch') }}",
                        method: "POST",
                        data: {select: select, value: value, _token: _token, dependent: dependent, fid: fid},
                        success: function (result) {
                            $('.' + dependent).html(result);
                        }

                    })
                }
            });

            $('#course').change(function () {
                $('#section').val('');
            });


        });
    </script>


    <script type="text/javascript">
    $(document).ready(function() {

    // function Edit POST
    $(document).on('click', '.edit', function() {

    // $('.modal-title').text('Post Edit');
    $('#id').val($(this).data('id'));
    var id = $(this).data('id');
    $('#start').val($(this).data('start'));
    $('#end').val($(this).data('end'));
    $('#quiz1').val($(this).data('quiz1'));
    $('#marks').val($(this).data('marks'));

    });

    });
    </script>

    <script type="text/javascript">
        $('#update-form').on('submit', function(event) {
            event.preventDefault();
            var id = document.getElementById("id").value;
            var serial = document.getElementById("serial").innerHTML;

            $.ajax({
                type: 'PUT',
                url: "/assign-work/" + id,
                data: {
                    '_token': $('input[name=_token]').val(),
                    'id': $("#id").val(),
                    'start': $('#start').val(),
                    'end': $('#end').val(),
                    'quiz_id': $('#quiz_id').val(),
                    'course_id': $('.course').val(),
                    'section_id': $('.section').val(),
                    'marks': $('#marks').val(),


                },
                dataType: 'JSON',

                success: function(data) {
                    $('.value' + data.id).replaceWith(" " +
                        "<tr class='value" + data.id + "'>" +
                        "<td>" + serial + "</td>" +
                        "<td>" + data.quiz_id + "</td>" +
                        "<td>" + data.course_id + "</td>" +
                        "<td>" + data.start + "</td>" +
                        "<td>" + data.end + "</td>" +
                        "<td>" + data.end + "</td>" +
                        "<td>" + data.marks + "</td>" +
                        "<td>" + data.marks + "</td>" +
                        "<td><a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.id+"' data-name='"+data.name+"' data-phone='"+data.phone+"' data-email='"+data.email+"' data-initial='"+data.initial+"' data-dob='"+data.dob+"' data-address='"+data.address+"'>"+
                        "<i class='far fa-edit'></i></a>"+
                        "<a href='javascript:;' data-toggle='modal' data-target='#edit' class='btn btn-sm btn-clean btn-icon mr-2 edit' title='Edit details' data-id='"+data.phone+"' data-phone='"+data.phone+"' data-email='"+data.email+"' data-initial='"+data.initial+"' data-dob='"+data.dob+"' data-address='"+data.address+"'>"+
                        "<i class='fas fa-trash'></i></a>"+
                        "</td>" +
                        "</tr>");


                    Swal.fire({
                        title: "Success!",
                        text: "Task Updated Succesfully!",
                        icon: "success",
                        buttonsStyling: false,
                        confirmButtonText: "Close!",
                        customClass: {
                            confirmButton: "btn btn-primary"
                        }

                    });
                }
            });
            document.getElementById('close').click();


        });
    </script>
@endsection
