{{-- blade-formatter-disable --}}
@props([
    'border' => '#000 solid 4px'
])
<table class="panel" width="100%" cellpadding="0" cellspacing="0" role="presentation"  style=" border-left: {{ $border }}">
<tr>
<td class="panel-content">
<table width="100%" cellpadding="0" cellspacing="0" role="presentation">
<tr>
<td class="panel-item">
{{ Illuminate\Mail\Markdown::parse($slot) }}
</td>
</tr>
</table>
</td>
</tr>
</table>
