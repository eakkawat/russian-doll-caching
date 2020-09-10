<ul>
    @foreach ($card->notes as $note)
            <h1>{{ $note->body }}</h1>
    @endforeach
</ul>