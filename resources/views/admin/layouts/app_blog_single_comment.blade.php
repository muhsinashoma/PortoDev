@guest

<p>Please <a href="{{route('admin.login')}}">login</a> first before place a comment </p>

@else


<div class="post-block mt-5 post-leave-comment">
    <h4 class="mb-3">Leave a comment</h4>

    <form class="contact-form p-4 rounded bg-color-grey" action="{{route('blog.post.comment')}}" method="POST">
        @csrf
        <div class="p-2">
            <div class="row">
                <div class="form-group col">
                    <input name="post_model_id" type="hidden" value="{{$single_post->id}}">
                    <label class="form-label required font-weight-bold text-dark">Comment</label>
                    <textarea name="comment" maxlength="5000" data-msg-required="Please enter your message." rows="3" class="form-control"  required></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col mb-0">
                    <input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading...">
                </div>
            </div>
        </div>
    </form>
</div>

@endguest
