
@extends('layouts.posts')

@section('title', 'Create Post')

@section('content')
    <p>This is my body content.</p>

    <ul >

        <?php
        foreach ($errors->all() as $error){
        ?>
        <li><?php echo $error;  ?></li>
        <?php } ?> </ul>
    <form method="post" enctype="multipart/form-data" action="{{route('post.store')}}" }}>
        @csrf
        <h2>Create new Post </h2>

        <?php if (Session::has("message")){ ?>
        <span style="color: green"><?php echo Session::get("message");?></span><br><br>
        <?php } ?>
        <label>Title</label>
        <input type="text" name="title" ><br><br>
        <label for="photo">Select File</label>
        <input type="file" name="photo"><br><br>
        <label for="tos">Accept TOS</label>
        <input type="checkbox" name="tos"/><br><br>
        <?php
        foreach ($errors->get("tos") as $error){
        ?>
        <li style="color: red"> <?php echo $error;  ?></li>
        <?php } ?> </ul>

        <label for="web">Website Address</label>
        <input type="text" name="web"/><br><br>
        <?php
        foreach ($errors->get("web") as $error){
        ?>
        <li style="color: red"> <?php echo $error;  ?></li>
        <?php } ?> </ul>
        <label for="web">Date</label>
        <input type="date" name="dt"/><br><br>
        <?php
        foreach ($errors->get("dt") as $error){
        ?>
        <li style="color: red"> <?php echo $error;  ?></li>
        <?php } ?> </ul>

        <button type="submit">Save</button>

    </form>
@endsection

