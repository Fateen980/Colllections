


@if(count($category) > 0)
    @foreach($category as $categories)

        <div class="column is-4">
            <div class="series-card h-100 wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <a href="{{url('subCategory/'.$categories->id)}}" class="h-100">
                    <div class="series-card-index">
                        <strong>{{$categories->name_a}}</strong>
                    </div>
                    <div class="series-card-thumbnail laravel h-100">
                        <img src="/images/{{$categories->path}}"  class="h-100  " >
                    </div>
                    <div class="series-card-details"><div class="series-card-difficulty">
                            </div> <div class="is-flex w-100 in-caps fs-smaller">
                                <p class="flex is-bold is-muted">
                                    {{$categories->name_a}}
                                </p>
                            </div>
                    </div>
                </a>
            </div>
        </div>


    @endforeach
@endif