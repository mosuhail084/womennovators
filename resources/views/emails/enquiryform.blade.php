@component('mail::message')

you have a new enquiry via the enquiry form<br><br>

Mobile No: {{ $data['mobile'] }}<br>
Category: {{ $data['category'] ??'' }}<br>
Quantity: {{ $data['quantity'] ??'' }}<br>
Tenure: {{ $data['tenure'] ??'' }}<br>
Remark: {{ $data['remark'] ??'' }}<br>



Thanks,<br>
{{ config('app.name') }}
@endcomponent
