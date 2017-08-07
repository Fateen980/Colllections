
{{--<div class="column is-2-tablet has-text-centered is-offset-1-tablet wow fadeInLeftBig" style="visibility: visible; animation-name: fadeInLeftBig;">--}}
    {{--<a href="/skills/laravel">--}}
        {{--<img src="/images/{{$item->path}}" width="200" height="200" alt="Laravel Skill" class="mb-1"></a>--}}
    {{--<h4 class="title skill-heading in-caps"><a href="/skills/laravel">{{$item->name_a}}</a></h4>--}}
    {{--<span class="h-divider"></span> <ul><li><strong class="color-success">100</strong>--}}
            {{--<span class="color-text-lighter">Cards</span></li>--}}
        {{--<li><strong class="color-primary">{{$item->price}}</strong>--}}
            {{--<span class="color-text-lighter"></span></li></ul>--}}
{{--</div>--}}
@if( ! empty($items))
    @foreach($items as $item)
        <div class="post-masonry col-md-3  hero-feature">

            <div class="thumbnail">
            <a href="{{url('item/detail/'.$item->category_id.'/'.$item->id)}}">
                {{ Html::image('images/'.$item->path) }}
            </a>
                <div class="caption">
                    <h4 class="title skill-heading in-caps">{{$item->name_a}}</h4>
                    <p><strong class="color-success">100 Cards</strong></p>
                    <p><strong class="color-primary">{{$item->price}}</strong></p>
                </div>

            </div>
        </div>


    @endforeach
@endif
