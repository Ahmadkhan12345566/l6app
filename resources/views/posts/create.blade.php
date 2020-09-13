<html>
<body>
<form method="post"  action="{{route('post.store')}}" }}>
    @csrf
    <h2>Create new Post </h2>
    <input type="text" name="title" >
    <button type="submit">Save</button>
</form>
</body>
</html>
