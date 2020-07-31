@extends('backend.layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Add Notice</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Notice</li>
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
	        			<a href="{{route('site.notice')}}" class="btn btn-info btn-sm"><i class="fas fa-stream"></i>View Notice</a>
	        		</div>
		            <div class="card-body">
		           		<form method="post" action="{{ !empty($editData)? route('site.notice.update', $editData->id): route('site.notice.store')}}" enctype="multipart/form-data">
                    @csrf
                    		 <div class="form-row">
                                <div class="form-group col-sm-12">
                                  <label>Notice Tile</label>
                                  <input type="text" value="{{ !empty($editData)? $editData->notice_title:'' }}" class="form-control" name="notice_title" ><span>@if($errors){{$errors->first('notice_title') }} @endif</span>
                                </div> 
                                
                                <div class="form-group col-sm-12">
                                  <label>Notice Description</label>
                                  <textarea type="textArea" value="{{ !empty($editData)? $editData->notice_description:'' }}" class="form-control" name="notice_description">{{ !empty($editData)? $editData->notice_description:'' }}</textarea><span>@if($errors){{$errors->first('notice_description') }} @endif</span>
                                </div> 
                                <div class="form-group col-sm-12">
                                  <label>Notice Date</label>
                                  <input type="Date" value="{{ !empty($editData)? $editData->notice_date:'' }}" class="form-control" name="notice_date" ><span>@if($errors){{$errors->first('notice_date') }} @endif</span>
                                </div>
	                              <div class="form-group col-sm-12">
	                                <label>Notice Image</label>
	                                <input type="file" value="{{!empty($editData)? $editData->notice_image:'' }}" class="form-control" name="notice_image" accept="image/*"><span>@if($errors){{$errors->first('notice_image') }} @endif</span>
	                              </div>  
                                                             
                            </div>                         	 
                   
                    		<button class="btn bg-gradient-success btn-flat"><i class="fas fa-save"></i> 
		                    {{ !empty($editData)? 'Update':'Save' }}</button>
		                </form>
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

