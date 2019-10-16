@component('mail::message')
## Dear, Hardy Valenthio Amansyah

We are very pleased to welcome you to ITBMUN 2020! We have accepted your
registration with the following summary:

<big><b>1. Personal Information</b></big>
    * __Name:__ Hardy Valenthio Amansyah
    * __Institution:__ Institut Teknologi Bandung

<big><b>2. Council Preferences</b></big>
    * __1st:__ UNCA (Indonesia, Malaysia, Singapore)
    * __2nd:__ WHA (Thailand, Laos, Myanmar)
    * __3nd:__ DISEC (Brunei, Timor Leste, Vietnam)

<big><b>3. Package:</b> Full Accommodation</big>
@component('mail::panel')
<b>International Delegate:</b> US$112,90<br>
<b>National Delegate:</b> Rp1.490.000,00
@endcomponent
---

## Payment Mechanism

Please proceed to fulfill your payment to the following account

@component('mail::table')

| <big><b>Account Info</b></big>        | <big><b>Values</b></big>                                                                                                                                                        |
|:------------------------------------- |:------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| <small><b>Account No</b></small>      | <small>7772148677</small>                                                                                                                                                       |
| <small><b>Account Holder</b></small>  | <small>Josephine Emmanuel</small>                                                                                                                                               |
| <small><b>Bank Issuer</b></small>     | <small>Bank Central Asia (BCA) Menara BCA,<br>Grand Indonesia MH Thamrin St. No. 1<br>Jakarta, Indonesia 10310<br><b>(p)</b> (021) 235 88000 <b>(f)</b> (021) 235 88300 </small>|

@endcomponent

Within 3 days from the moment you received this email, we would expect to receive a
reply from you through this mail thread with the payment proof document attached either in
.pdf or .jpg or .png format. Upon receiving your payment proof, the Committee will proceed
to secure your seat and send you a confirmation email as soon as we have done so. However,
failure to fulfill your payment within 3 days will result in the termination of your registration.

Please note that there’s no refund policy after the payment has been made. For delegate
substitution matters please contact our email by the following format to receive substitution
form : “[Your Full Name]_Request To Subsitute_DAA”.

Thanks,<br>
{{ config('app.name') }}

@endcomponent
