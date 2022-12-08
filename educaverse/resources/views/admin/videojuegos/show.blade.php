@extends('admin.index')

@section('title', 'Gestión de videojuegos')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                @php
                    $categoriaAll = "";
                    foreach ($lista_categorias as $categoriaButton) {
                        $categoriaAll .= $categoriaButton->id.',';
                    }
                @endphp
                <a class="btn btn-primary mb-4 new text-white" data-categoriacant="{{ $categoriaAll }}" data-bs-toggle="modal" data-bs-target="#formModal"> <i class="mdi mdi-plus me-1"> </i>Añadir un nuevo videojuego</a>
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered text-center nowrap" id="videojuegosTable" style="width: 100%;" >
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Categoría</th>
                                <th>Materia</th>
                                <th>Plataformas</th>
                                <th>Jugadores</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>
    </div>

    <div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Añadir videojuego</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="videojuegoForm" method="post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="idInput">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="nombreInput" name="nombre" required>
                                    <label for="nombreInput">Nombre</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-floating mb-3">
                                    <select name="jugadores" class="form-control" id="jugadoresInput" required>
                                        <option selected disabled>Selecciona...</option>
                                        <option value="Individual">Individual</option>
                                        <option value="Multijugador">Multijugador</option>
                                    </select>
                                    <label for="jugadoresInput">Jugadores</label>
                                </div>
                            </div>  
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-floating mb-3">
                                    <textarea type="text" class="form-control" id="descripcionInput" name="descripcion" style="height: 100px"></textarea>
                                    <label for="descripcionInput">Descripcion</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-floating mb-3">
                                    <input type="number" class="form-control" id="precioInput" name="precio" required>
                                    <label for="precioInput">Precio</label>
                                </div>
                            </div>  
                            <div class="col-md-6 col-12">
                                <div class="form-floating mb-3">
                                    <select name="materia_id" class="form-control" id="materiaIdInput" required>
                                        <option value="" disabled selected>Selecciona...</option>
                                        @foreach($lista_materias as $materia)
                                            <option value="{{ $materia->id }}">{{ $materia->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <label for="materiaIdInput">Materia</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div><label for="plataformasInput">Plataformas</label></div>
                                <div class="d-flex align-items-center" style="margin-top: -15px">
                                    <div class="form-check px-0">
                                        <input class="form-check-input me-0 ms-0" name="plataformas[]" type="checkbox" id="windowsInput" value="Windows">
                                        <label class="form-check-label ms-2" for="windowsInput">Windows</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input me-0 ms-0" name="plataformas[]" type="checkbox" id="macInput" value="Mac">
                                        <label class="form-check-label ms-2" for="macInput">Mac</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input me-0 ms-0" name="plataformas[]" type="checkbox" id="xboxInput" value="Xbox">
                                        <label class="form-check-label ms-2" for="xboxInput">Xbox</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input me-0 ms-0" name="plataformas[]" type="checkbox" id="playstationInput" value="Playstation">
                                        <label class="form-check-label ms-2" for="playstationInput">Playstation</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input me-0 ms-0" name="plataformas[]" type="checkbox" id="androidInput" value="Android">
                                        <label class="form-check-label ms-2" for="androidInput">Android</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div><label for="categoriaIdInput">Categorias</label></div>
                                <div class="d-flex align-items-center" style="margin-top: -15px">
                                    @foreach($lista_categorias as $categoria)
                                        <div class="form-check px-0 pe-4">
                                            <input class="form-check-input me-0 ms-0" name="categoria_id[]" type="checkbox" value="{{ $categoria->id }}" id="{{ $categoria->id }}">
                                            <label class="form-check-label ms-2" for="{{ $categoria->id }}">
                                                {{ $categoria->nombre }}
                                            </label>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="subtmit" class="btn btn-primary" id="btnSubmit">Añadir videojuego</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="{{ asset('js/videojuegos.js') }}"></script>
@endsection