<h1>IPT Systems</h1>

<p>
    Welcome <strong>{{$user->name}}!</strong>
</p>

<p>
    You received this email as a result of your registration to our web site.
    Please click on the verification link to verify your account.
</p>

<p>
    <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}">Click here</a>
</p>
