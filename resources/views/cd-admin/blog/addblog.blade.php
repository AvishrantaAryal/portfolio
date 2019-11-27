@extends('cd-admin.home-master')

@section('page-title')  
Add Blog
@endsection

@section('content')

<div class="content-wrapper">

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      ADD BLOG
    </h1>

    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
      <li><a href="#">Blog</a></li>
      <li class="active">Add Blog</li>
    </ol>
  </section>


  <section class="content">
    <div class="row">

      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary" style="margin-top: 20px">
          <div class="box-header with-border">
            <h3 class="box-title">Add Blog</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          <form action= "{{url('storeblog')}}" enctype="multipart/form-data" method="post">
           {{csrf_field()}}
           <div class="box-body">
            <div class="form-group">
              <label for="name">Blog Title</label>
              <div class="text text-danger">{{$errors->first('title')}}</div>
              <input type="text" class="form-control" name="name"  id="name" placeholder="Enter Blog Title" value="{{old('name')}}">

            </div>
            
            <div class="form-group">
              <label for="exampleInputFile">Image</label>
              <div class="text text-danger">{{$errors->first('image')}}</div>
              <input type="file" class="form-control" name="image" id="image" placeholder="Choose Image" value="{{old('image')}}">
            </div>
            <div class="form-group">
              <label for="imgalt">Alternative Image Text</label>
              <div class="text text-danger">{{$errors->first('imagealt')}}</div>
              <input type="text" class="form-control" name="imagealt" id="imagealt" value="{{old('imagealt')}}" placeholder="Enter Alternative Image Text">
            </div>

            <div class="form-group">
              <label for="text">Blog Details</label>
              <div class="text text-danger">{{$errors->first('service')}}</div>
              <textarea name="service" id="summernote" rows="20" cols="80"value="{{old('service')}}">

              </textarea>
            </div>




            <div class="form-group">
              <p>Status</p>
              <div class="text text-danger">{{$errors->first('status')}}</div>
              <label>
                <input type="radio" name="status" class="minimal" value="active">Active
              </label>
              <label>
                <input type="radio" name="status" class="minimal" value="inactive">Inactive
              </label>

            </div>

              <div class="form-group">
              <label for="seo">Seo Title</label>
              <div class="text text-danger">{{$errors->first('seotitle')}}</div>
              <input type="text" class="form-control" name="seotitle" id="seotitle" value="{{old('seotitle')}}" placeholder="Enter SEO Title">
            </div>

            <div class="form-group">
              <label for="seo">Seo Keywords</label>
              <div class="text text-danger">{{$errors->first('seokeyword')}}</div>
              <input type="text" class="form-control" name="seokeyword" id="seokeyword" value="{{old('seokeyword')}}" placeholder="Enter SEO Keyword">
            </div>

            <div class="box-footer" >
              <button type="submit" class="btn btn-info pull-right">Add Blog</button>
            </div>

          </form>
          <div class="box-footer pull-left" style="margin-left: 10px;">
            <a href="{{URL()->previous()}}"><button type="submit" class="btn btn-danger">Cancel</button></a>
          </div>

        </div>
    </div>
  </div>
</div>
</section>
        <!-- /.box -->



    
  

  @endsection