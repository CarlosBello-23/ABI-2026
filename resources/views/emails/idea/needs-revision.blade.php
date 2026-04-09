{{-- blade-formatter-disable --}}
<x-mail::message>
@if ($recipientRole === 'student')
Estimado estudiante, **{{ $recipientName }}**
@else
Estimado profesor, **{{ $recipientName }}**
@endif

Le informamos que su proyecto titulado **{{ $projectTitle }}** ha sido **devuelto** para correcciones por parte del evaluador.

<x-mail::panel border="#E1E817 solid 4px">
DEVUELTO
</x-mail::panel>

Se han identificado algunos aspectos que deben ajustarse antes de continuar con la evaluación.

Por favor revise los comentarios del evaluador en la plataforma y actualice su propuesta antes de la fecha límite indicada.

Una vez corregido, podrá enviarlo nuevamente para revisión.

Atentamente, 
**Comité Académico**

<x-mail::button url="home" color="success">
Banco de Ideas ABI
</x-mail::button>

</x-mail::message>

