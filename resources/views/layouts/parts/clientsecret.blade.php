@php
use Laravel\Passport\Client;

$client = Client::where('password_client', true)->first();
$id = '';
$secret = '';

if ($client) {
    $id = $client->id;
    $secret = $client->secret;
}
@endphp

<script>
window.cliento = {
    id: '{{ $id }}',
    secret: '{{ $secret }}'
}
</script>