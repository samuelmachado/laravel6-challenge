<form action="/contact" method="POST">
@csrf
<input type="text" name="email">
@error('email')
{{$message}}
@enderror
<input type="submit" value="Ok">
</form>

@if(session('message'))
<div>
{{session('message')}}
</div>
@endif