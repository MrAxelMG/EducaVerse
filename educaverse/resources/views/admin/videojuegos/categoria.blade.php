@php

use App\Models\Categoria;

    $categoria_id_explode = explode(",", $categoria_id);

    $categoriaNombre = "";
    foreach ($categoria_id_explode as $id) {
        if (strlen($id) > 0) {
            $categorias = Categoria::find($id);
            $categoriaNombre .= $categorias->nombre.', ';
        }
    }
    $categoriaNombre = substr($categoriaNombre, 0, -2);
    
@endphp

{{ $categoriaNombre }}
