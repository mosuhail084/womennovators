@component('mail::message')

<img src="	https://womennovators.com/globalsummit/images/logo.png"  style="display: block;margin: 0 auto; width: 160px;" class="css-class" alt="alt text">

<br>

<p>Dear {{$data['name'] ??''}},  </p>
<br>
<p>Thank you for completing the registration process with Womennovator!</p>
<br>
<p>You have been nominated to <b>Become the Influencer of the country: {{$data['countryname'] ??''}},
@if($data['type']==1)
Area : {{$data['area'] ??''}} 
@else
Sector : {{$data['area'] ??''}}
@endif</b></p><br>

<br>
<h2>Your Roles and Responsibilities  </h2><br>
<p>As an Influencer you have a rare opportunity to make a difference in the lives of many women. </p><br>
<p>You will find all the <b>resources and templates you need to conduct and promote the WE-Talks and WE-Pitching competition </b> on your Dashboard. You will have to customize them for your country/city/sector. </p>
<br>

<p >You must log into your Womennovator account by clicking on the below URL or copying and pasting it in your browser.</p><br>
<br>


<p ><a href="https://womennovators.com/influencer/login">https://womennovators.com/influencer/login</a>
</p><br>
<p >Next, enter the email ID and Password </p><br>
<p ><b>Email ID: {{$data['email'] ??''}}</b> 
<br>
<b>Password:</b> 12345678</p><br>

<p >We value your privacy & request you to change your password at the first login. Please to create a strong password. <br>
We look forward to an exciting journey of connecting and co-creating an equitable world for women.	
</p><br>
<br>
<p >
<b>Wish to learn more about WE-Pitches</b> <br>
<a href="https://www.youtube.com/c/WEPitch">Go to some Amazing WE-Pitches</a> <br>
<a href="https://www.womennovator.co.in/faq/">Click to access User Guides & FAQs here</a> <br>
<a href="https://docs.google.com/presentation/d/1k9daEShhnCo0OtLM8PjHEtq4ka9fQAbF/edit#slide=id.gecf7ec4f19_0_307">Go to: Resources for Planning WE-Pitches</a> <br>
<!--
<b>What’s there for me: Advantage WE-Pitches </b>-->
</p><br>
<p style="color:#ce199a;"><b>Building a Better Working World for Women </b></p><br>
<p ><b>Team Womemnovator</b> <a href="https://womennovators.com/"></a>I  www.womennovators.com</a></p>

<p>If you are facing any problems reach us at: </p>

<p style="color:#ce199a;"><b >Helpdesk </b></p>
<p>
In case of any clarification mail us at : contact@womennovators.com
<br>


@endcomponent
