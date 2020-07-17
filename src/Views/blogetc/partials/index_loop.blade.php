{{--Used on the index page (so shows a small summary--}}
{{--See the guide on webdevetc.com for how to copy these files to your /resources/views/ directory--}}
{{--https://webdevetc.com/laravel/packages/blogetc-blog-system-for-your-laravel-app/help-documentation/laravel-blog-package-blogetc#guide_to_views--}}

<div class="col-md-6">
    <div class="blog-item">

        <div class='text-center blog-image'>
            <?=$post->image_tag("medium", true, ''); ?>
        </div>
        <div class="blog-inner-item">
            <h3 class=''><a href='{{$post->url()}}'>{{$post->title}}</a></h3>
            <h5 class=''>{{$post->subtitle}}</h5>

            @if (config('blogetc.show_full_text_at_list'))
                <p>{!! $post->post_body_output() !!}</p>
            @else
                <p>{!! mb_strimwidth($post->post_body_output(), 0, 400, "...") !!}</p>
            @endif

            <div class="post-details-bottom">
                <span class="light-text">Authored by: </span> {{$post->author->name}} <span class="light-text">Posted at: </span> {{date('d M Y ', strtotime($post->posted_at))}}
            </div>
            <div class='text-center'>
                <a href="{{$post->url()}}" class="btn btn-primary">View Post</a>
            </div>
        </div>
    </div>

</div>