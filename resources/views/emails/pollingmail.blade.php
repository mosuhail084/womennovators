Dear Sir/Madam
<br><br>
<h3>you have a new Challenge request </h3>
<p>Name :{{ $name ??'' }}</p>
<p>Email :{{ $email ??'' }}</p>
<p>Phone :{{ $phone ??'' }}</p>
<p>Challenge :
    @foreach($chall as $challenge)
    @if($challenge->challenge_id == 1 )
    <span>Creating Distribution Channel</span>
    @elseif($challenge->challenge_id == 2 )
    <span>Idea to Prototype to Final Product</span>
    @elseif($challenge->challenge_id == 3 )
    <span>Go to Market Strategy</span>
    @elseif($challenge->challenge_id == 4 )
    <span>Availment of Government Schemes</span>
    @elseif($challenge->challenge_id == 5 )
    <span>Funding</span>
    @elseif($challenge->challenge_id == 6 )
    <span>Social Media and branding</span>
    @elseif($challenge->challenge_id == 7 )
    <span>Finance, Accounts and compliance</span>
    @elseif($challenge->challenge_id == 8 )
    <span>Others... Type Your challenge</span>
    @endif
    @endforeach</p>
    <p>Comment :{!! $comment ??'' !!}</p>
