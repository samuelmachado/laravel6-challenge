{{$conversation->title}}

{{$conversation->body}}


@can('update', $conversation)
<form method = "POST" action="/best-replies/{{$conversation->id}}" method="POST">
@csrf
<button type="submit">Ok</button>
@endcan
</form>