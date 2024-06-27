@component('mail::message')
# Verify Your Email

Thank you for booking. Please click the button below to verify your email address before proceeding with your booking.

@component('mail::button', ['url' => route('verify.email', ['token' => $token])])
Verify Email
@endcomponent

If you did not request this, no further action is required.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
