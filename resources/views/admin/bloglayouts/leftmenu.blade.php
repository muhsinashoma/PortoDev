<div class="col-lg-3">
    <aside class="sidebar">

        <form action="{{route('blog.search')}}" method="POST">
            @csrf

            <div class="input-group mb-3 pb-1">
                <input name="search" type="text" class="form-control text-1" placeholder="Search..." id="s" >
                <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
            </div>
        </form>


        <h5 class="font-weight-semi-bold pt-4">Categories</h5>
        <ul class="nav nav-list flex-column mb-5">
            {{--<li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>--}}


            @foreach($all_categories as $category)

            <li class="nav-item">
                <a class="nav-link active" href="#">{{$category ->cate_name}} ( {{$category->subcategories->count()}} )</a>
                <ul>
                    @foreach($category ->subcategories as $sub_cate)
                         <li class="nav-item"><a class="nav-link" href="#">
                           {{$sub_cate->sub_cate_name}}
                        </a></li>
                    @endforeach
                </ul>
            </li>

            @endforeach

            {{--<li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>--}}
            {{--<li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>--}}
            {{--<li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>--}}
        </ul>
        <div class="tabs tabs-dark mb-4 pb-2">
            <ul class="nav nav-tabs">
                <li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Popular</a></li>
                <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Recent</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="popularPosts">
                    <ul class="simple-post-list">

                        @php
                            $all_data = \App\Models\PostModel::where('status', true) ->take(3)->latest() ->get();
                            $recent_posts = \App\Models\PostModel::whereDate('created_at', today())->take(3)->latest()->get();
                        @endphp


                        @foreach($all_data as $data)
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                    <a href="{{route('post.blog-single',$data->id)}}">
                                        @isset($data->image[0])
                                            <img src="{{URL::to('/')}}/photos/{{$data->image[0]->path}}" width="50" height="50" alt="">
                                         @endisset
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="{{route('post.blog-single',$data->id)}}">{{$data->post_title}}</a>
                                <div class="post-meta">
                                    {{--Nov 10, 2021--}}
                                    {{ date('M d, Y', strtotime($data->created_at)) }}
                                </div>
                            </div>
                        </li>
                         @endforeach


                    </ul>
                </div>


                <div class="tab-pane" id="recentPosts">
                    <ul class="simple-post-list">

                        @foreach($recent_posts as $recent)
                        <li>
                            <div class="post-image">
                                <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                    <a href="{{route('post.blog-single', $recent->id)}}">
                                        @isset($recent->image[0])
                                        <img src="{{URL::to('/')}}/photos/{{$recent->image[0]->path}}" width="50" height="50" alt="">
                                        @endisset
                                    </a>
                                </div>
                            </div>
                            <div class="post-info">
                                <a href="{{route('post.blog-single', $recent->id)}}">{{$recent ->post_title}}</a>
                                <div class="post-meta">
                                    {{date('M d, Y', strtotime($recent->created_at))}}
                                </div>
                            </div>
                        </li>

                         @endforeach

                    </ul>
                </div>
            </div>
        </div>
        <h5 class="font-weight-semi-bold pt-4">About Us</h5>
        <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
    </aside>
</div>