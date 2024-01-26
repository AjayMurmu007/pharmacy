@component('mail::message')
    
<p> hello {{ $user->name }} </p>

<p>We understand it happens.</p>

@component('mail::button',['url'=> url('reset/'.$user->remember_token)])

Reset your password..
    
@endcomponent

<p> In Case you have issue recovering your password, please contact us... </p>

Thanks <br/>

{{ config('app.name') }}

@endcomponent