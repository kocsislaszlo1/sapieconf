@component('mail::message')
<h2>Hey !</h2> <br>

You received an email from : {{ $msg['name']}}  <br>

User information:

Email: {{ $msg['email'] }}<br>

Subject: {{ $msg['subject']}}<br>
Message: {{ $msg['message'] }}<br>
 <br>


Thanks
{{ config('app.name') }}
@endcomponent
