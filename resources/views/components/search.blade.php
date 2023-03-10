{{-- Propiedades del icono tamaño y color que por defecto seran de 35 y gris --}}
@props(['size' => 35, 'color' => 'gray'])

{{-- swtich para definir el color en base a lo que le pasen --}}
@php
switch ($color) {
    case 'gray':
        $col = '#374151';
        break;
    case 'white':
        $col = '#ffffff';
        break;
    default:
        $col = '#374151';
        break;
}

@endphp

{{-- asignamos la propiedad tamaño y stroke a las variables creadas --}}
<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search" width="{{$size}}" height="auto" viewBox="0 0 24 24" stroke-width="1.5" stroke="{{$col}}" fill="none" stroke-linecap="round" stroke-linejoin="round">
    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
    <circle cx="10" cy="10" r="7" />
    <line x1="21" y1="21" x2="15" y2="15" />
</svg>