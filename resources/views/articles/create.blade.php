@extends('layout')
@section('head')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.0/bulma.sass">
@endsection
@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1 class=" heading has-text-weight-bold">New article</h1>
        <form action="/articles" method="POST">
            @csrf
            <label for="">Title</label>
            <input type="text" class="input @error('title') is-danger @enderror" value="{{old('title')}}" name="title">
            @error("title")
                <p class="help is-danger">{{$errors->first('title')}}</p>
            @enderror
            <textarea name="excerpt" id="" cols="30" rows="10">{{old('excerpt')}}</textarea>
            @error("excerpt")
                <p class="help is-danger">{{$errors->first('excerpt')}}</p>
            @enderror
            <textarea name="body" id="" cols="30" rows="10">{{old('body')}}</textarea>
            @error("body")
                <p class="help is-danger">{{$errors->first('body')}}</p>
            @enderror


            <select name="tags[]" id="" multiple>
                @foreach ($tags as $tag)
                    <option value="{{$tag->id}}"> {{$tag->name}}</option>
                @endforeach
            </select>
            @error('tags')
                <p>{{$message}}</p>
            @enderror
            <input type="submit" value="Submit">
        </form>
    </div>
</div>
@endsection