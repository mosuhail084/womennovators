@component('mail::message')

you have a new enquiry via the enquiry form<br><br>


Event name: {{ $data['Eventname'] ??'' }}<br>
Description: {!! $data['description'] !!}<br>






Thanks,<br>
{{ config('app.name') }}
@endcomponent
