
@extends('layouts.posts')

@section('title', 'Posts')

@section('content')
<ul>
    @component('Components.message',["title"=>"Component title"])
    I am hear
    @endcomponent
    <?php foreach($data as $row){?>
    <li>{{$row['name']}}</li>
    <?php } ?>
</ul>
@endsection

