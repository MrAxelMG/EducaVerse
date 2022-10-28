@extends('admin.index')

@section('title', 'Gestión de niveles educativos')

@section('styles')
    <link href="{{ asset('/assets/plugins/plugin.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <a class="btn btn-primary mb-4 new text-white" data-bs-toggle="modal" data-bs-target="#formModal"> <i class="mdi mdi-plus me-1"> </i>Añadir un nuevo nivel</a>
                <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered text-center nowrap" id="nivelEducativoTable" style="width: 100%;" >
                        <thead>
                            <tr>
                                <th>Grado</th>
                                <th>Nivel</th>
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
                    <h5 class="modal-title" id="modalTitle">Añadir nivel educativo</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="nivelEducativoForm" method="post">
                    <div class="modal-body">
                        @csrf
                        <input type="hidden" name="id" id="idInput">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Ingresa el grado" id="gradoInput" name="grado" required>
                                    <label for="gradoInput">Grado</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" placeholder="Ingresa el nivel" id="nivelInput" name="nivel" required>
                                    <label for="nivelInput">Nivel</label>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-floating mb-3">
                                    <select name="escuela_id" class="form-control" id="escuelaIdInput">
                                        <option value="" disabled selected>Selecciona...</option>
                                        @foreach($escuelas as $escuela)
                                        <option value="{{ $escuela->id }}">{{ $escuela->nombre }}</option>
                                        @endforeach
                                    </select>
                                    <label for="escuelaIdInput">Escuela</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="subtmit" class="btn btn-primary" id="btnSubmit">Añadir escuela</button>
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
    <script src="{{ asset('js/nivel-educativo.js') }}"></script>
@endsection