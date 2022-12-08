@component('mail::message')
# Hola

{{ $request['name'] }} te ha enviado un mensaje desde la web para solicitar información acerca de la venta de terrenos.

## Detalles del mensaje

Nombre: {{ $request['name'] }} <br>
Correo electrónico: {{ $request['email'] }} <br>
Teléfono: {{ $request['phone'] }} <br>
Mensaje: {{ $request['message'] }}

Gracias,<br>
{{ config('app.name') }}
@endcomponent
