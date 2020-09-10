@foreach ($cards as $card)
        @cache($card)
                <article>
                        {{ $card->title }}
                        @include('cards._notes')
                </article>
        @endcache
        
@endforeach
