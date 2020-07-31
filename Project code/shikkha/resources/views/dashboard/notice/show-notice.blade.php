@extends('backend.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Slider</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Slider</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
        	<div class="col-lg-12">
	        	<div class="card">
	        		<div class="card-header">
	        			<a href="{{route('site.notice.add')}}" class="btn btn-sm btn-info"><i class="fas fa-plus"></i> Add Notice</a>
	        		</div>
		            <div class="card-body">

		              <table id="dataTable" class="table table-sm table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>SL</th>
		                  <th>Notice Title</th>
                      <th>Notice Image</th>
		                  <th>Action</th>
		                </tr>
		                </thead>
		                <tbody>
                      @foreach($notice as $value)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $value->notice_title}}</td>
                        <td><img src="{{ asset('public/uploads/notice/'.$value->notice_image) }} "height="42" width="42"></td>
                        <td>
                          <a href="{{ route('site.notice.edit',$value->id) }}" class="btn btn-primary btn-flat btn-sm edit"><i class="fas fa-edit"></i></a> |
                          <a href="javascript:void(0)" data-url="{{ route('site.notice.delete',$value->id) }}" class="btn btn-danger btn-flat btn-sm delete"><i class="fas fa-trash"></i></a>
                        </td>

                      </tr>
                      @endforeach


		                </tbody>
		              </table>
		            </div>
	            <!-- /.card-body -->
          		</div>
          <!-- /.card -->
        	</div>
        </div>
      </div>
      <!--/. container-fluid -->
    </section>
@endsection
