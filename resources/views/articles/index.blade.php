
@extends('layout')
@section('content')
<ul class="style1">
                @foreach ($articles as $article)
				<li>
					<h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
					<p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
				</li>
                @endforeach
			</ul>

@endsection