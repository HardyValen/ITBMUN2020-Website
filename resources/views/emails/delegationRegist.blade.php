@component('mail::message')
## Hi

The body of your message.

- One
- Two
- Three

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
