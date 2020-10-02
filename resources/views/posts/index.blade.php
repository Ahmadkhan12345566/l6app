
@extends('layouts.posts')

@section('title', 'Posts')

@section('content')
<ul>
    <?php foreach($data as $row){?>
    <li>{{$row['name']}}</li>
    <?php } ?>
</ul>
@endsection

