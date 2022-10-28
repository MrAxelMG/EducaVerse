@extends('admin.index')

@section('title', 'Gestión de materias')

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-primary mb-4 new text-white" data-bs-toggle="modal" data-bs-target="#formModal"> <i class="mdi mdi-plus me-1"> </i>Añadir una nueva materia</a>
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered text-center nowrap" id="materiasTable" style="width: 100%;" >
                        <thead>
                            <tr>
                                <th>Nombre</th>
                                <th>Nivel educativo</th>
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
                    <h5 class="modal-title" id="modalTitle">Añadir materia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="materiaForm" method="post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="idInput">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Ingresa el nombre de la materia" id="nombreInput" name="nombre" required>
                                    <label for="nombreInput">Nombre de la materia</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-floating mb-3">
                                    <select name="nivel_id" class="form-control" id="nivelIdInput">
                                        <option value="" disabled selected>Selecciona...</option>
                                        @foreach($niveles as $nivel)
                                        <option value="{{ $nivel->id }}">{{ $nivel->grado }}</option>
                                        @endforeach
                                    </select>
                                    <label for="nivelIdInput">Nivel educativo</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="subtmit" class="btn btn-primary" id="btnSubmit">Añadir materia</button>
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
    <script src="{{ asset('js/materias.js') }}"></script>
@endsection