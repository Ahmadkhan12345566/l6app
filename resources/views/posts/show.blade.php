@extends('layouts.posts')

@section('title', 'Post')

@section('content')
<ul>
<!--    --><?php //foreach($data as $row){?>
    <li>{{$data['title']}}</li>
<!--    --><?php //} ?>
</ul>
@endsection

