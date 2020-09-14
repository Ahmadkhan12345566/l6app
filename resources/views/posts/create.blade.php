<html>
<body>
<?php if ($errors->any()){
    ?>
<ul >

<?php
   foreach ($errors->all() as $error){
  ?>
     <li><?php echo $error;  ?></li>
<?php } ?> </ul>
<?php }?>
<form method="post" enctype="multipart/form-data" action="{{route('post.store')}}" }}>
    @csrf
    <h2>Create new Post </h2>
    <input type="text" name="title" ><br><br>
    <label for="photo">Select File</label>
    <input type="file" name="photo"><br><br>
    <button type="submit">Save</button>

</form>
</body>
</html>
