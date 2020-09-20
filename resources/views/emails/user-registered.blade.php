@component('mail::message')
# Introduction

Hello {{$fullName}} you are Registered in our website :)

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
