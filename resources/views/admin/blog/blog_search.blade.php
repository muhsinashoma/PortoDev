@extends('admin.bloglayouts.app_blog')


@section('main-content')


    <div class="body">

        @include('admin.bloglayouts.header')

        <div role="main" class="main">


            @include('admin.bloglayouts.headline')

            <div class="container py-4">

                <div class="row">


                    @include('admin.bloglayouts.leftmenu')


                    <div class="col-lg-6">
                        <div class="blog-posts">

                            <div class="row px-3">

                                 @foreach($all_data as $data )

                                    <div class="col-12">
                                    <article class="post post-medium border-0 pb-0 mb-5">
                                        <div class="post-image">
                                            <a href="{{route('post.blog-single', $data->id)}}">
                                                {{--<img src="porto/img/blog/wide/blog-1.jpg" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />--}}

                                                        {{--{{dd($data->image[0]->path)}}--}}

                                                @isset($data->image[0])
                                                   <img src="{{URL::to('')}}/photos/{{$data->image[0]->path}}" style="width: 600px; height: 200px"  class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                                @endisset


                                            </a>
                                        </div>

                                        <div class="post-content">

                                            <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="{{route('post.blog-single', $data->id)}}">{{$data->post_title}}</a></h2>
                                            <p> {!! Str::of(htmlspecialchars_decode($data->post_content)) ->words(20) !!}</p>

                                            <div class="post-meta">
                                                <span><i class="far fa-user"></i> By <a href="#">Bob Doe</a> </span>

                                                {{--<span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>--}}

                                                <span><i class="far fa-folder"></i> <a href="#">
                                                        @foreach($data ->tags as $tag )
                                                          {{ $tag->tag_name }},
                                                        @endforeach
                                                    </a> </span>


                                                <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                                <span class="d-block mt-2"><a href="{{route('post.blog-single', $data->id)}}" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                            </div>

                                        </div>
                                    </article>
                                </div>

                                  @endforeach
                            </div>

                           @include('admin.bloglayouts.pagination')

                        </div>
                    </div>



                   @include('admin.bloglayouts.rightmenu')
                </div>

            </div>

        </div>


         @include('admin.bloglayouts.footer')

    </div>


@endsection