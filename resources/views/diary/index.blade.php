@foreach ($diaries as $diary)
    <div>{{ $diary->title }}</div>
    <div>{{ $diary->body }}</div>
    <div>{{ $diary->date }}</div>
@endforeach
