Dear Sir/Madam
<br><br>
<h3>you have a new Live Series request </h3>
<p>Name :{{ $name ??'' }}</p>
<p>Email :{{ $email ??'' }}</p>
<p>Phone :{{ $phone ??'' }}</p>
<p>State:{{ $state ??''}}</p>
<p>City:{{ $city ??''}}</p>
<p>Address:{{ $address ??''}}</p>
<p>Company Name:{{ $company ??''}}</p>
<p>Designation:{{ $designation ??''}}</p>
<p>Gender:{{ $gender ??''}}</p>
<p>How are you associated with womennovator? :{{ $are ??''}}</p>
<p>Referred by Whom :{{ $referred ??''}}</p>
<p>Sector of Interest:{{ $sectors ??''}}</p>
<p>Session:
    @foreach($live as $sessionData)
    @if($sessionData->session_id == 1 )
    <span>Creating Distribution Channel</span>
    @elseif($sessionData->session_id == 2 )
    <span>Idea to Prototype to Final Product</span>
    @elseif($sessionData->session_id == 3 )
    <span>Go to Market Strategy</span>
    @elseif($sessionData->session_id == 4 )
    <span>Availment of Government Schemes</span>
    @elseif($sessionData->session_id == 5 )
    <span>Funding</span>
    @elseif($sessionData->session_id == 6 )
    <span>Social Media and branding</span>
    @elseif($sessionData->session_id == 7 )
    <span>Finance, Accounts and compliance</span>
    @elseif($sessionData->session_id == 8 )
    <span>Others... Type Your sessionData</span>
    @endif
    @endforeach</p>
    <p>Comment :{{ $comment ??'' }}</p>