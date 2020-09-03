@extends('layouts.admin.main')
@section('title','MyBlog | All Posts')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Edit Doctor Info
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{route('home')}}"><i class="fa fa-dashboard"></i> Dashboard |</a></li>
        <li><a href="{{route('blogs.index')}}">Doctor |</a></li>
        <li class="active">Edit Doctor</li>
      </ol>
	</section>

    <section class="content">
        <div class="row">
            <div class="col-lg-12">
                <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body ">
                        {!!Form::model($blog, [
                            'method'=>'PUT',
                            'route' =>['blogs.update',$blog->id],
                          'files' =>true
                        ])!!}
                        <div class="form-group {{$errors->has('title')?'has-error':''}}">
                            {!!Form::label('name');!!}
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

                    </div>
                </div>
                <div class="input-group mb-3 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Image</span>
                    </div>
                    <div class="custom-file {{$errors->has('image')?'has-error':''}}">
                        <input type="file" class="custom-file-input" name="image" id="inputGroupFile01">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>

                    </div>
                    @if($errors->has('image'))
                        <span class="help-block">{{$errors->first('image')}}
                            </span>
                    @endif
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
