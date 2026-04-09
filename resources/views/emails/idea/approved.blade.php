{{-- blade-formatter-disable --}}
<x-mail::message>
@if ($recipientRole === 'student')
Estimado estudiante, **{{ $recipientName }}**
@else
Estimado profesor, **{{ $recipientName }}**
@endif

Le informamos que su proyecto titulado **{{ $projectTitle }}** ha sido **aprobada** por el comité evaluador.

<x-mail::panel border="#27F54D solid 4px">
APROBADO
</x-mail::panel>


A partir de este momento puede continuar con la siguiente fase del proceso académico.

Para revisar los comentarios del evaluador y el estado detallado del proyecto, ingrese al sistema

Atentamente, 
**Comité Académico**

<x-mail::button url="home" color="success">
Banco de Ideas ABI
</x-mail::button>

</x-mail::message>
