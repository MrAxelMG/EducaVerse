@php
    use App\Models\Categoria;
    $categoriasButton = Categoria::all();

    $categoriaAll = "";
    foreach ($categoriasButton as $categoriaButton) {
        $categoriaAll .= $categoriaButton->id.',';
    }
@endphp

<a href="" data-categoriacant="{{ $categoriaAll }}" data-nombre="{{ $nombre }}" data-precio="{{ $precio }}" data-descripcion="{{ $descripcion }}" data-plataformas="{{ $plataformas }}" data-jugadores="{{ $jugadores }}" data-categoriaid="{{ $categoria_id }}" data-materiaid="{{ $materiaid }}" data-imagen="{{ $imagen }}" data-imagen2="{{ $imagen2 }}" type="button" title="Vista previa" class="btn btn-primary btn-sm btn-icon view"> <i class="mdi mdi-eye"></i></a>
<a href="" data-id="{{ $id }}" data-categoriacant="{{ $categoriaAll }}" data-nombre="{{ $nombre }}" data-precio="{{ $precio }}" data-descripcion="{{ $descripcion }}" data-plataformas="{{ $plataformas }}" data-jugadores="{{ $jugadores }}" data-categoriaid="{{ $categoria_id }}" data-materiaid="{{ $materiaid }}" data-imagen="{{ $imagen }}" data-imagen2="{{ $imagen2 }}" type="button" title="Editar videojuegos" class="btn btn-success btn-sm btn-icon edit"> <i class="mdi mdi-lead-pencil"></i></a>
<a href="" data-id="{{ $id }}" type="button" title="Eliminar videojuegos" class="btn btn-danger btn-sm btn-icon delete"> <i class="mdi mdi-delete"></i></a>
