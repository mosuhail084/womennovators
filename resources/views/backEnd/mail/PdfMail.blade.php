@component('mail::message')

<img src="	https://womennovators.com/globalsummit/images/logo.png"  style="display: block;margin: 0 auto; width: 160px;" class="css-class" alt="alt text">

<br>
<p>
    Dear {{$data['name']}}
</p>
<p>Thanks a lot for reaching out to Womennovator- {{$data['linkname']}}   </p>
<br>
<p>Please feel free to download to  <a href="{{$data['linkstore']}}">{{$data['linkname']}}.</a> </p>
<br>

<p >
<br>
Thanks,<br>
Womennovator
</p><br>



@endcomponent
