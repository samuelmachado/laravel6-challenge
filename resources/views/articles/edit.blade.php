@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/bulma.sass">
@endsection
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class=" heading has-text-weight-bold">Update  article</h1>
        <form action="/articles/{{$article->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="">Title</label>
            <input type="text" name="title" value="{{$article->title}}">
            <textarea name="excerpt" id="" cols="30" rows="10">{{$article->excerpt}}</textarea>
            <textarea name="body" id="" cols="30" rows="10">{{$article->body}}</textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
@endsection 