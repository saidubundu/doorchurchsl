@if($post->comments)
<h2 class="church-section-heading">[ Comments ]</h2>
<div class="comments-area">
    <!--// coments \\-->
    <ul class="comment-list">
  <?php $post->comments = $post->comments()->simplePaginate(4) ?>
        <!-- #comment-## -->
        @foreach($post->comments as $comment)

        <li>
            <div class="thumb-list">
                <figure><img alt="" src="extra-images/comment-img2.jpg"></figure>
                <div class="text-holder">
                    <h6>{{$comment->author_name}}</h6>
                    <time class="post-date" datetime="2008-02-14 20:00">{{$comment->created_at->diffForHumans()}}</time>
                    <p>{!! $comment->body !!}</p>
                    <a class="comment-reply-link" href="#">Reply</a>
                    <a class="comment-reply-link" href="#">Like</a>
                </div>
            </div>
{{--            <ul class="children">--}}
{{--                <li>--}}
{{--                    <div class="thumb-list">--}}
{{--                        <figure><img alt="" src="extra-images/comment-img3.jpg"></figure>--}}
{{--                        <div class="text-holder">--}}
{{--                            <h6>Sam Buttler</h6>--}}
{{--                            <time class="post-date" datetime="2008-02-14 20:00">2 Hours Ago</time>--}}
{{--                            <p>Cras varius est vel massa ultricies, ac rutrum urna hendrerit. Donec eu porta velit. Nam at urna eu libero.</p>--}}
{{--                            <a class="comment-reply-link" href="#">03 Like</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </li>--}}
{{--                <!-- #comment-## -->--}}
{{--            </ul>--}}
            <!-- .children -->
        </li>
        @endforeach
        <!-- #comment-## -->
    </ul>

    {!! $post->comments->render() !!}
    <!--// coments \\-->

    <!--// comment-respond \\-->
</div>
@endif
