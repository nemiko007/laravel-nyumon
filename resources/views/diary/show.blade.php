<h1>{{ $diary->title }}</h1>
<div>{{ $diary->content }}</div>
<div>{{ $diary->date }}</div>
<form action="{{ route('diary.destroy', $diary) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">削除</button>
</form>
