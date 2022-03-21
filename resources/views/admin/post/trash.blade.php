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
                            <h3 class="box-title">All Posts (Trash)</h3>
                        </div>

                        <a class="btn btn-primary btn-sm" href="{{route('post.index')}}">Published</a>
                        <a class="btn btn-danger btn-sm" href="{{route('post.trash')}}">Trash</a>

                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Author</th>
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
                                        <td>{{$data->user}}</td>
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
                                                      $foo = \File::extension($image->path);      //print_r($foo);
                                                      $exten_val = array('jpg','jpeg','png','webm','mp4','mp2','mpg','mpeg','mpe','mpv');

                                                 @endphp



                                                  {{--@foreach($exten_val as $ext)--}}
                                                    {{--{{   $ext}}--}}

                                                    {{--@if($foo==$ext)--}}
                                                    {{--<img src="{{URL::to('')}}/photos/{{$image->path}}" style="width: 100px; height: 100px">--}}

                                                     {{--@elseif($foo==$ext)--}}
                                                        {{--<iframe src="photos/{{$image->path}}" style="width: 100px; height: 100px"> </iframe>--}}
                                                    {{--@endif--}}

                                                  {{--@endforeach--}}


                                                 @if($foo==$exten_val[0])

                                                    <img src="{{URL::to('')}}/photos/{{$image->path}}" style="width: 100px; height: 100px">

                                                 @elseif($foo==$exten_val[1])

                                                    <img src="{{URL::to('')}}/photos/{{$image->path}}" style="width: 100px; height: 100px">

                                                 @elseif($foo==$exten_val[2])

                                                    <img src="{{URL::to('')}}/photos/{{$image->path}}" style="width: 100px; height: 100px">

                                                @elseif($foo==$exten_val[3])

                                                    <iframe src="{{URL::to('')}}/photos/{{$image->path}}" style="width: 100px; height: 100px"></iframe>

                                                @elseif($foo==$exten_val[4])

                                                    <iframe src="{{URL::to('')}}/photos/{{$image->path}}" style="width: 100px; height: 100px"></iframe>
                                                @endif


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



