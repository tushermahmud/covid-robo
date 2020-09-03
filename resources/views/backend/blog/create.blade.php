@extends('layouts.admin.main')
@section('title','MyBlog | All Posts')
@section('content')
<div style="padding-left:10px" class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Doctor
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('admin.dashboard')}}"><i class="fa fa-dashboard"></i> Dashboard |</a></li>
        <li><a href="{{route('blogs.index')}}">Doctor |</a></li>
        <li class="active">Create New Doctor</li>
      </ol>
	</section>
    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body ">
                        {!!Form::model($blog, [
                            'method'=>'POST',
                            'route' =>'blogs.store',
                        'files' =>true
                        ])!!}
                        <div class="form-group {{$errors->has('name')?'has-error':''}}">
                            {!!Form::label('Name');!!}
                            {!!Form::text('name',null,['class'=>"form-control","placeholder"=>"Name"]);!!}
                            @if($errors->has('name'))
                                <span class="help-block">{{$errors->first('name')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('body')?'has-error':''}}">
                            {!!Form::label('body');!!}
                            {!!Form::textarea('body',null,['class'=>"form-control","placeholder"=>"Content"]);!!}
                            @if($errors->has('body'))
                                <span class="help-block">{{$errors->first('body')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('category_id')?'has-error':''}}">
                            {!!Form::label('Category');!!}
                            {!!Form::select('category_id',App\Category::pluck('title','id'),null,['class'=>"form-control","placeholder"=>"Choose Category"]);!!}
                            @if($errors->has('category_id'))
                                <span class="help-block">{{$errors->first('category_id')}}</span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('available')?'has-error':''}}">
                            {!!Form::label('available');!!}
                            {!!Form::text('available',null,['class'=>"form-control","placeholder"=>"Availability"]);!!}
                            @if($errors->has('available'))
                                <span class="help-block">{{$errors->first('available')}}</span>
                            @endif
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                    <div class="box">

                        <div class="box-body">
                            <div class="form-group
                                {{$errors->has('created_at')?'has-error':''}}" id="created_at">
                                {!!Form::label('Created Date');!!}
                                <div class='input-group date' id='datetimepicker1'>
                                    {!!Form::date('created_at',null,['class'=>"form-control","id"=>"created_at"]);!!}
                                    <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </span>
                                </div>
                                @if($errors->has('created_at'))
                                    <span class="help-block">{{$errors->first('created_at')}}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file {{$errors->has('image')?'has-error':''}}">
                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                        @if($errors->has('image'))
                            <span class="help-block">{{$errors->first('image')}}
                            </span>
                        @endif
                    </div>
                </div>
                <div class="box">
                    <div class="box-header">
                    </div>

                    <div class="box-footer clearfix">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                {!!Form::submit('Submit',["class"=>"btn btn-md btn-primary form-control",'name' => 'submitbutton']);!!}
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                {!!Form::submit('Draft',["class"=>"btn btn-md btn-warning form-control",'name' => 'submitdraftbutton']);!!}
                            </div>
                        </div>

                    </div>
                </div>

                {!!Form::close()!!}
            </div>

        </div>
        <!-- ./row -->
    </section>
    </div>
@endsection
