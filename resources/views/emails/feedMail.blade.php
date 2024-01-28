@component('mail::message')


# {{Session::get('fsubject')}}

{{Session::get('fbody')}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
