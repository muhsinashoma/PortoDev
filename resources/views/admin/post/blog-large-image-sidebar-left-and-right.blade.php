@extends('admin.layouts.app_single_blog')


   @section('main-content')

       <div role="main" class="main">

           <section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12 align-self-center p-static order-2 text-center">
                           <h1 class="text-dark font-weight-bold text-8">All Posts</h1>
                           <span class="sub-title text-dark">Check out our Latest News!</span>
                       </div>
                       <div class="col-md-12 align-self-center order-1">
                           <ul class="breadcrumb d-block text-center">
                               <li><a href="#">Home</a></li>
                               <li class="active">Blog</li>
                           </ul>
                       </div>
                   </div>
               </div>
           </section>

           <div class="container py-4">

               <div class="row">
                   <div class="col-lg-3">
                       <aside class="sidebar">
                           <form action="https://www.okler.net/previews/porto/9.0.0/page-search-results.html" method="get">
                               <div class="input-group mb-3 pb-1">
                                   <input class="form-control text-1" placeholder="Search..." name="s" id="s" type="text">
                                   <button type="submit" class="btn btn-dark text-1 p-2"><i class="fas fa-search m-2"></i></button>
                               </div>
                           </form>
                           <h5 class="font-weight-semi-bold pt-4">Categories</h5>
                           <ul class="nav nav-list flex-column mb-5">
                               <li class="nav-item"><a class="nav-link" href="#">Design (2)</a></li>
                               <li class="nav-item">
                                   <a class="nav-link active" href="#">Photos (4)</a>
                                   <ul>
                                       <li class="nav-item"><a class="nav-link" href="#">Animals</a></li>
                                       <li class="nav-item"><a class="nav-link active" href="#">Business</a></li>
                                       <li class="nav-item"><a class="nav-link" href="#">Sports</a></li>
                                       <li class="nav-item"><a class="nav-link" href="#">People</a></li>
                                   </ul>
                               </li>
                               <li class="nav-item"><a class="nav-link" href="#">Videos (3)</a></li>
                               <li class="nav-item"><a class="nav-link" href="#">Lifestyle (2)</a></li>
                               <li class="nav-item"><a class="nav-link" href="#">Technology (1)</a></li>
                           </ul>
                           <div class="tabs tabs-dark mb-4 pb-2">
                               <ul class="nav nav-tabs">
                                   <li class="nav-item"><a class="nav-link show active text-1 font-weight-bold text-uppercase" href="#popularPosts" data-bs-toggle="tab">Popular</a></li>
                                   <li class="nav-item"><a class="nav-link text-1 font-weight-bold text-uppercase" href="#recentPosts" data-bs-toggle="tab">Recent</a></li>
                               </ul>
                               <div class="tab-content">
                                   <div class="tab-pane active" id="popularPosts">
                                       <ul class="simple-post-list">
                                           <li>
                                               <div class="post-image">
                                                   <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                       <a href="blog-post.html">
                                                           <img src="{{asset('porto/img/blog/square/blog-11.jpg')}}" width="50" height="50" alt="">
                                                       </a>
                                                   </div>
                                               </div>
                                               <div class="post-info">
                                                   <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                                   <div class="post-meta">
                                                       Nov 10, 2021
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="post-image">
                                                   <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                       <a href="blog-post.html">
                                                           <img src="{{asset('porto/img/blog/square/blog-24.jpg')}}" width="50" height="50" alt="">
                                                       </a>
                                                   </div>
                                               </div>
                                               <div class="post-info">
                                                   <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                                   <div class="post-meta">
                                                       Nov 10, 2021
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="post-image">
                                                   <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                       <a href="blog-post.html">
                                                           <img src="{{asset('porto/img/blog/square/blog-42.jpg')}}" width="50" height="50" alt="">
                                                       </a>
                                                   </div>
                                               </div>
                                               <div class="post-info">
                                                   <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                                   <div class="post-meta">
                                                       Nov 10, 2021
                                                   </div>
                                               </div>
                                           </li>
                                       </ul>
                                   </div>
                                   <div class="tab-pane" id="recentPosts">
                                       <ul class="simple-post-list">
                                           <li>
                                               <div class="post-image">
                                                   <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                       <a href="blog-post.html">
                                                           <img src="img/blog/square/blog-24.jpg" width="50" height="50" alt="">
                                                       </a>
                                                   </div>
                                               </div>
                                               <div class="post-info">
                                                   <a href="blog-post.html">Vitae Nibh Un Odiosters</a>
                                                   <div class="post-meta">
                                                       Nov 10, 2021
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="post-image">
                                                   <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                       <a href="blog-post.html">
                                                           <img src="img/blog/square/blog-42.jpg" width="50" height="50" alt="">
                                                       </a>
                                                   </div>
                                               </div>
                                               <div class="post-info">
                                                   <a href="blog-post.html">Odiosters Nullam Vitae</a>
                                                   <div class="post-meta">
                                                       Nov 10, 2021
                                                   </div>
                                               </div>
                                           </li>
                                           <li>
                                               <div class="post-image">
                                                   <div class="img-thumbnail img-thumbnail-no-borders d-block">
                                                       <a href="blog-post.html">
                                                           <img src="img/blog/square/blog-11.jpg" width="50" height="50" alt="">
                                                       </a>
                                                   </div>
                                               </div>
                                               <div class="post-info">
                                                   <a href="blog-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                                   <div class="post-meta">
                                                       Nov 10, 2021
                                                   </div>
                                               </div>
                                           </li>
                                       </ul>
                                   </div>
                               </div>
                           </div>
                           <h5 class="font-weight-semi-bold pt-4">About Us</h5>
                           <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
                       </aside>
                   </div>


                   <div class="col-lg-6">

                       <div class="blog-posts">


                           @php
                           $tags=\App\Models\Tag::all();
                           @endphp

                           <article class="post post-large">
                               <div class="post-image">
                                   <a href="blog-post.html">
                                       <img src="{{asset('photos/')}}/{{$single_post->path}}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="" />
                                   </a>
                               </div>

                               <div class="post-date">
                                   <span class="day">{{ date('d ', strtotime($single_post->created_at)) }}</span>
                                   <span class="month">{{ date('F, Y', strtotime($single_post->created_at)) }}</span>
                               </div>

                               <div class="post-content">

                                   <h2 class="font-weight-semibold text-6 line-height-3 mb-3"><a href="blog-post.html">{{$single_post ->post_title }}</a></h2>
                                   <p>{!! htmlspecialchars_decode($single_post->post_content) !!}</p>

                                   <div class="post-meta">
                                       <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                       <span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
                                       <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                       <span class="d-block d-sm-inline-block float-sm-end mt-3 mt-sm-0"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                   </div>

                               </div>
                           </article>



                           <ul class="pagination float-end">
                               <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                               <li class="page-item active"><a class="page-link" href="#">1</a></li>
                               <li class="page-item"><a class="page-link" href="#">2</a></li>
                               <li class="page-item"><a class="page-link" href="#">3</a></li>
                               <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                           </ul>

                       </div>
                   </div>


                   <div class="col-lg-3">
                       <aside class="sidebar pb-4">
                           <h5 class="font-weight-semi-bold">Latest from Twitter</h5>
                           <div id="tweet" class="twitter mb-4" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
                               <p>Please wait...</p>
                           </div>
                           <h5 class="font-weight-semi-bold pt-4">Photos from Instagram</h5>
                           <div class="instagram-feed" data-type="nomargins" class="mb-4 pb-1"></div>
                           <h5 class="font-weight-semi-bold pt-4 mb-2">Tags</h5>
                           <div class="mb-3 pb-1">
                               @foreach($tags as $tag)
                                 <a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">{{$tag->tag_name}}</span></a>
                                @endforeach
                           </div>
                           <a href="https://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="my-4 pt-3 d-block">
                               <img alt="Porto" class="img-fluid" src="{{asset('porto/img/blog/blog-ad-1-medium.jpg')}}" />
                           </a>
                           <h5 class="font-weight-semi-bold pt-4">Find us on Facebook</h5>
                           <div class="fb-page" data-href="https://www.facebook.com/OklerThemes/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OklerThemes/">Okler Themes</a></blockquote></div>
                       </aside>
                   </div>
               </div>

           </div>

       </div>


    @endsection