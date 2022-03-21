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

            @foreach($all_tag as $tag)
               <a href="#"><span class="badge badge-dark badge-sm rounded-pill text-uppercase px-2 py-1 me-1">{{$tag->tag_name}}</span></a>
             @endforeach

        </div>
        <a href="https://themeforest.net/item/porto-responsive-html5-template/4106987" target="_blank" class="my-4 pt-3 d-block">
            <img alt="Porto" class="img-fluid" src="porto/img/blog/blog-ad-1-medium.jpg" />
        </a>
        <h5 class="font-weight-semi-bold pt-4">Find us on Facebook</h5>
        <div class="fb-page" data-href="https://www.facebook.com/OklerThemes/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true"><blockquote cite="https://www.facebook.com/OklerThemes/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/OklerThemes/">Okler Themes</a></blockquote></div>
    </aside>
</div>