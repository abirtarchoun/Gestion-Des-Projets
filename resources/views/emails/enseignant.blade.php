@component('mail::message')


# gestion_des_depots

Dear **{{ $enseignant->nom.' '.$enseignant->prenom }}**

We are happy to announce that your account has been created.<br>
These are the informations that we registred for you, can you please check and tell us if there is any mistake:
- **Phone**: {{ $enseignant->phone }}
- **Email**: {{ $enseignant->email }}
- **Addresse**: {{ $enseignant->adresse }}

{{--@component('mail::button', ['url' => ''])
Button Text
@endcomponent--}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
