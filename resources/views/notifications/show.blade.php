 @forelse($notifications as $notification) 

<li>
    @if($notification->type === 'App\Notifications\PaymentReceived')
    <p>We have received a payment of {{$notification->data['amount']}} you.</p>
    @endif
 
@empty
<p>Não há novas notificações</p>
 @endforelse