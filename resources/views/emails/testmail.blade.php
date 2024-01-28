@component('mail::message')
# Welcome for ApparelLK

{{Session::get('cname')}}

Your OTP is {{Session::get('cotp')}}



Thanks,<br>
ApparelLK
@endcomponent
