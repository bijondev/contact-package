@component('mail::message')
# Introduction
Name: {{$name}} <br/>
<br>Message: </b>{{$message}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
