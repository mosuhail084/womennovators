 {{-- <h3>you have a new contact via the contact form</h3>
<p>Name : {{ $name ??'' }}</p>
<p>Email : {{ $email ??'' }}</p>
<p>Phone No : {{ $phone }}</p>
<p>Message : {{ $mesge ??'' }}</p> --}}

Respected   {{ $juryy
 }},
<br><br><br><br>
@if ($attachment != null)
<img style="height:500px;width:500px;"  src="{{url('backEnd/attachment/'.$attachment ??'')}}"
                                                            alt="">
@endif
<br><br><br>
{!! $msg ??'' !!}
<br>
