@component('mail::message')
# welcome

User has been Created Successfully:
@component('mail::button', ['url' => 'https::www.google.com'])
Visit Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
