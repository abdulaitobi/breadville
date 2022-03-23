@component('mail::message')
# You have a message

Customer Name: {{ $name }} <br>
Customer Email: {{ $email }} <br>
Subject : {{ $subject }} <br>
Message: {{ $message }}

{{-- @component('mail::button', ['url' => ''])
View Message
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
