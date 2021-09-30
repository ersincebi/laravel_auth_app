<p>
	Hello, {{$email_data['name']}}
</p>
<p>
	Thanks for registration.
</p>
<p>
	Please click the below link to verify your email and activate your account!
</p>
<p>
	<a href="{{Request::url()}}/verify?code={{$email_data['verification_code']}}">Click Here!</a>
</p>

