<h1>Create Diary</h1>
<form action="/diary" method="post">
    @csrf
    <input type="text" name="title" />
    <textarea name="body"></textarea>
    <button type="submit">Submit</button>
</form>
