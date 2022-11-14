@php

    $plataforma_explode = explode(",", $plataformas);

    $plataformaNombre = "";
    foreach ($plataforma_explode as $plataforma) {
        $plataformaNombre .= $plataforma.', ';
    }

    $plataformaNombre = substr($plataformaNombre, 0, -4);
    
@endphp

{{ $plataformaNombre }}