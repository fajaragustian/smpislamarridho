<h1>Forget Password Email</h1>

@component('mail::message')
<h2>Hello {{$name}} </h2>
<p>The email is a sample email for Laravel Tutorial: How to Send an Email using Laravel 8 from @component('mail::button', route('home'))
Bacancy Technology
@endcomponent</p>

<p>Visit @component('mail::button', route('home'))
    <a href="{{ route('admin.reset.password', $token) }}">Reset Password</a>
@endcomponent and learn more about the Laravel framework.</p>


Happy coding!<br>

Thanks,<br>
{{ config('app.name') }}<br>
Laravel Team.
@endcomponent
