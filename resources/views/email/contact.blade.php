@component('mail::message')
 Olá temos mais um contato pelo Vai, meninas Site!

 Nome: {{ $reply_name }}

 Email: {{ $reply_email }}

 Mensagem:
    @component('mail::panel')
        {{ $message }}
    @endcomponent
@endcomponent
