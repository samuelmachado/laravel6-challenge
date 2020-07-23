
@extends('layout')
@section('content')
<ul class="style1">
                @forelse ($articles as $article)
				<li>

					<h3><a href="{{$article->path()}}">{{$article->title}}</a></h3>
					<p><a href="#">In posuere eleifend odio. Quisque semper augue mattis wisi. Pellentesque viverra vulputate enim. Aliquam erat volutpat.</a></p>
				</li>
				@empty
					<p>0 records</p>
                @endforelse
			</ul>

@endsection