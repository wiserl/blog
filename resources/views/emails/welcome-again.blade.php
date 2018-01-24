@component('mail::message')
# Introduction

thanks so much for registering.

@component('mail::button', ['url' => 'https://laracasts.com'])
Start Browsing
@endcomponent

@component('mail::panel', ['url' => ''])
Lorem Ipsum 
@endcomponent


Thanks,<br>
{{ config('app.name') }}
@endcomponent
