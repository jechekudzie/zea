@component('mail::message')
<img src="{{asset('logo.png')}}">

<h4 style="color: black;"> Dear ZEA, </h4>
<br>
<p style="color: black;">  {{$contact['message']}}</p>
<br>

Regards,<br>
{{$contact['name']}},<br>
{{$contact['phone']}}
@endcomponent
