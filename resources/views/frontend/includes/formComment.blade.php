<div class="comment-respond">
    <h2 class="church-section-heading">[ Leave Your Reply ]</h2>
    <p>Your email address will not be published. Required fields are marked *</p>
    {!! Form::open(['route' => ['post.comments', $post->id] ]) !!}
{{--        <input type="hidden" name="post_id" value="{{$post_id}}">--}}
        <p class="church-full-form">
            <label>Comment</label>
            {!! Form::textarea('body',null, ['class' => "commenttextarea", 'placeholder'=>"Type here"] ) !!}
{{--            <textarea name="comment" placeholder="Type here" class="commenttextarea"></textarea>--}}
        </p>
        <p>
            <label>Name</label>
            {!! Form::text('author_name', null,['placeholder'=>"Type here",'onblur'=>"if(this.value == '') { this.value ='Type here'; }" ,'onfocus'=>"if(this.value =='Type here') { this.value = ''; }"]) !!}
{{--            <input type="text" value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }">--}}
        </p>
    <p>
        <label>Email</label>
        {!! Form::email('author_email', null,['placeholder'=>"Type here",'onblur'=>"if(this.value == '') { this.value ='Type here'; }" ,'onfocus'=>"if(this.value =='Type here') { this.value = ''; }"]) !!}
{{--        <input type="text" value="Type here" onblur="if(this.value == '') { this.value ='Type here'; }" onfocus="if(this.value =='Type here') { this.value = ''; }">--}}
    </p>
    <p><input type="submit" value="Submit Now"></p>
    {!! Form::close() !!}
</div>
