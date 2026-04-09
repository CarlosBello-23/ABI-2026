{{-- blade-formatter-disable --}}
<x-mail::message>
@if ($recipientRole === 'student')
Estimado estudiante, **{{ $recipientName }}**
@else
Estimado profesor, **{{ $recipientName }}**
@endif

Le informamos que su proyecto titulado **{{ $projectTitle }}** ha sido **rechazada** por el comité evaluador.

<x-mail::panel border="#E81717 solid 4px">
RECHAZADO
</x-mail::panel>

Puede revisar los comentarios del evaluador dentro de la plataforma.

Atentamente, 
**Comité Académico**

<x-mail::button url="home" color="success">
Banco de Ideas ABI
</x-mail::button>

</x-mail::message>

