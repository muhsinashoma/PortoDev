
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


            @foreach($single_post ->categories as $category)

                <li class="nav-item"><a class="nav-link" href="#">{{$category->cate_name}} ( {{  $category->subcategories->count()  }} )</a>

                    @foreach($category ->subcategories as $subcate)
                        <ul>
                            <li class="nav-item"><a class="nav-link" href="#">{{$subcate->sub_cate_name}}</a></li>
                        </ul>
                    @endforeach
                </li>
            @endforeach

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

                    </ul>
                </div>
                <div class="tab-pane" id="recentPosts">
                    <ul class="simple-post-list">
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
                    </ul>
                </div>
            </div>
        </div>
        <h5 class="font-weight-semi-bold pt-4">About Us</h5>
        <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
        <h5 class="font-weight-semi-bold pt-4">Latest from Twitter</h5>
        <div id="tweet" class="twitter mb-4" data-plugin-tweets data-plugin-options="{'username': 'oklerthemes', 'count': 2}">
            <p>Please wait...</p>
        </div>
        <h5 class="font-weight-semi-bold pt-4">Photos from Instagram</h5>


        <div class="instagram-feed" data-type="nomargins" class="mb-4 pb-1"></div>
        <h5 class="font-weight-semi-bold pt-4 mb-2">Tags</h5>
        <div class="mb-3 pb-1">

            @foreach($single_post -> tags as $tag)
                <a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">{{ $tag ->tag_name }}</span></a>
            @endforeach

        </div>
        <h5 class="font-weight-semi-bold pt-4">Find us on Facebook</h5>
        <div class="fb-page" data-href="https://www.facebook.com/OklerThemes/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OklerThemes/">Okler Themes</a></blockquote></div>
    </aside>
</div>

