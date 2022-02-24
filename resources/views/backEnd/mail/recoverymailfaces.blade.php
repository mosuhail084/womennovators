@component('mail::message')

<img src="https://womennovators.com/globalsummit/images/logo.png"  style="display: block;margin: 0 auto; width: 160px;" class="css-class" alt="alt text">

<br>
<p>Hello {{$data['name']}} ,  </p>
<br>
<p>
	you can now reset your password for {{$data['email']}} via the button below.
	<br>
	<div style="text-align:center;">
	<a style="text-decoration: none;background-color: #93148f;padding: 4px 10px;display: inline-block;border-radius: 5px;color: #fff!important;" href="{{url('/we/change/password/'. $data['id'])}}">Click Here</a>
		<div>
		</p><br>

@endcomponent
