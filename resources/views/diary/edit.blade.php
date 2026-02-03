<h1>Edit Diary</h1>
<form action="/diary/{{ $diary->id }}" method="post">
    @csrf
    @method('PATCH')
    <input type="text" name="title" value="{{ $diary->title }}" />
    <textarea name="body">{{ $diary->body }}</textarea>
    <button type="submit">更新する</button>
</form>
