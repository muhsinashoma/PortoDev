@extends('admin.layouts.app')

@section('main-content')

    @include('admin.layouts.header')

    @include('admin.layouts.leftmenu')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Version 2.0 <b>{{Auth::user()->name}}</b> </small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->


            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">CPU Traffic</span>
                            <span class="info-box-number">90<small>%</small></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Likes</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">Sales</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box">
                        <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

                        <div class="info-box-content">
                            <span class="info-box-text">New Members</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->



            <div class="row">
                <div class="col-md-12">

                    <br>

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Post Details</h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">


                                    <div class="form-group">
                                        <label for="postfomat">Post Format</label>
                                        <select class="form-control" name="post_type" id="post_format" required>
                                            <option>-Select-</option>
                                            <option value="Image">Image</option>
                                            <option value="Gallery">Gallery</option>
                                            <option value="Video">Video</option>
                                            <option value="Audio">Audio</option>
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Post Title</label>
                                        <input type="text" name="post_title" class="form-control" id="exampleInputEmail1" placeholder="Post Title" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Post Category : </label>
                                        @foreach($all_categories as $category)
                                            <input type="checkbox" name="post_category[]" value="{{$category->id}}"  > {{$category->cate_name}}
                                        @endforeach
                                    </div>




                                    {{--<div class="form-group">--}}
                                    {{--<label for="exampleInputPassword1">Post Tag</label>--}}
                                    {{--<select name="post_tag[]" class="post_tag_select" multiple="multiple">--}}
                                    {{--@foreach($all_tags as $tag)--}}
                                    {{--<option  value="{{$tag ->id}}" >{{$tag ->tag_name}}</option>--}}
                                    {{--@endforeach--}}
                                    {{--</select>--}}
                                    {{--</div>--}}


                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Post Tag</label>
                                        @foreach($all_tags as $tag)
                                            <input type="checkbox" name="post_tag[]"  value="{{$tag ->id}}"  > {{$tag ->tag_name}}
                                        @endforeach
                                    </div>


                                    <div class="form-group single_image">
                                        <h5><b>Post Image</b></h5>
                                        <img width="200" class="post_img_load" src="" alt="">
                                        <br><br>
                                        <label for="featured_image"><img style="width: 100px; cursor: pointer" src="{{URL::to('admin/dist/img/featured-image.png')}}"> </label>
                                        <input style="display: none" type="file" name="post_image" id="featured_image" >
                                    </div>

                                    <div class="form-group post_gallery">
                                        <h5><b>Post Gallery</b></h5>
                                        <div class="post_gallery_img"></div>

                                        <br><br>
                                        <label for="post_img_select_g"><img style="width: 100px; cursor: pointer" src="{{URL::to('admin/dist/img/featured-image.png')}}"> </label>
                                        <input style="display: none" type="file" name="image_gallery[]" id="post_img_select_g"  multiple >
                                    </div>

                                    <div class="form-group post_video">
                                        <h5>Post Video Link </h5>

                                        <div class="post_vedio_upload"> </div>

                                        <label for="post_vedio_icon"><img style="width: 100px; cursor: pointer" src="{{URL::to('admin/dist/img/vedio_icon.png')}}"> </label>
                                        <input style="display: none" type="file" name="vedio_link[]" id="post_vedio_icon" multiple >
                                    </div>

                                    <div class="form-group post_audio" >
                                        <label>Post Audio Link</label>
                                        <input type="text" class="form-control" name="audio_link" >
                                    </div>


                                    <div class="form-group">
                                        <label>Content</label>
                                        <textarea class="form-control" id="editor1" name="post_content" ></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label>Update Link </label>
                                        <input type="text" class="form-control" name="special_link" >
                                    </div>



                                    <div class="form-group" style="display: none" >
                                        <label>User Role </label>
                                        <input type="hidden" name="user_role" class="form-control" value="{{Auth::user() ->role_id}}"  >
                                    </div>

                                </div>
                                <!-- /.box-body -->

                                <div class="box-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>




                <div class="col-md-12">
                    <br>
                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Post Details</h3>
                        </div>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Post Type</th>
                                    <th>Post Title </th>
                                    <th>Category</th>
                                    <th>Tag</th>
                                    <th>Featured</th>
                                    <th>Content</th>
                                    <th>Role User</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>

                                <tbody>

                                @foreach($all_data as $data )

                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$data ->post_type}}</td>
                                        <td>{{$data->post_title}} </td>
                                        <td>
                                            <ul>
                                                @foreach ($data->categories as $category)
                                                    <li>{{$category->cate_name}}

                                                        <ul>
                                                            @foreach($category->subcategories as $sub_cate)
                                                                <li>{{ $sub_cate ->sub_cate_name }} </li>
                                                            @endforeach
                                                        </ul>

                                                    </li>
                                                @endforeach

                                            </ul>
                                        </td>
                                        <td>
                                            <ul>
                                                @foreach($data ->tags as $tag)
                                                    <li>{{$tag ->tag_name}}</li>
                                                @endforeach
                                            </ul>
                                        </td>

                                        <td>
                                            {{--<img src="photos/{{$data ->image->path}}"  style="width: 30px; height: 30px">--}}
                                            @foreach($data -> image as $image)

                                                 @php
                                                     $foo = \File::extension($image->path);
                                                      print_r($foo);

                                                      $exten = array('jpg', 'webm', 'mp4');

                                                  @endphp

                                                 {{--{{dd($foo)}}    mp4,wemb,rreter--}}





                                                <iframe src="photos/{{$image->path}}" style="width: 100px; height: 100px"> </iframe>


                                            @endforeach


                                        </td>

                                        <td>{!! Str::of(htmlspecialchars_decode($data->post_content))->words(20) !!}</td>
                                        <td>

                                        </td>
                                        <td>{{$data->created_at->diffForHumans()}}</td>
                                        <td style="display: inline-block">
                                            <a class="btn btn-sm btn-info" href="{{route('post.blog-single', $data->id)}}">View</a>
                                            <a class="btn btn-sm btn-warning" href="#">Edit</a>
                                            <a class="btn btn-sm btn-danger" href="#">Delte</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>SL</th>
                                    <th>Post Type</th>
                                    <th>Post Title </th>
                                    <th>Category</th>
                                    <th>Tag</th>
                                    <th>Content</th>
                                    <th>Role User</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->




        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    @include('admin.layouts.footer')



    </div>
    <!-- ./wrapper -->

@endsection



