{{$conversation->title}}

{{$conversation->body}}

@if($conversation->best_reply_id)
    <span>Best reply!</span>
@endif

@can('update', $conversation)
<form method = "POST" action="/best-replies/{{$conversation->id}}" method="POST">
@csrf
<button type="submit">Ok</button>
@endcan
</form>