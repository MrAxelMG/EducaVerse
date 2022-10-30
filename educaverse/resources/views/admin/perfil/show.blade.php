@extends('admin.index')

@section('title', 'Perfil')

@section('content')

    <?php $foto = auth()->user()->foto;  ?>

    <section class="section">
        <div class="row align-items-center">
            <div class="col-lg-4">
                <div class="card pt-4">
                    <div class="card-body text-center">
                        <img src="{{ asset("images/usuarios/$foto") }}" alt="avatar" id="imgPerfil" class="img-fluid imgPerfil">
                        <h5 class="mt-3"><span id="perfilNombreCard">{{ auth()->user()->nombre }}</span> <span id="perfilApellidopCard">{{ auth()->user()->apellidop }}</span></h5>
                        <p class="text-muted mb-4">{{ auth()->user()->correo }}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <a href="" data-id="{{ auth()->user()->id }}" type="button" class="btn btn-success editar" title="Editar perfil"><i class="bi bi-pencil"></i> Editar perfil</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 ">
                <div class="card pt-4" >
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="mb-0">Nombre</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="ml-0 text-muted mb-0" id="perfilNombre">{{ auth()->user()->nombre }}</p>
                            </div>
                        </div>
                        <hr style="margin-left: 0">
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="mb-0">Apellido Paterno</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="text-muted mb-0" id="perfilApellidop">{{ auth()->user()->apellidop }}</p>
                            </div>
                        </div>  
                        <hr style="margin-left: 0">                    
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="mb-0">Apellido Materno</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="text-muted mb-0" id="perfilApellidom">{{ auth()->user()->apellidom }}</p>
                            </div>
                        </div>
                        <hr style="margin-left: 0">                    
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="mb-0">Privilegio</p>
                            </div>
                            <div class="col-sm-8">
                                <p class="text-muted mb-0" id="perfilPrivilegio">
                                    Admin
                                    {{-- @if (auth()->user()->is_ps_encargado)
                                        PS ENCARGADO
                                    @elseif(auth()->user()->is_ps_asistente)
                                        PS ASISTENTE
                                    @elseif(auth()->user()->is_cliente)
                                        CLIENTE
                                    @elseif (auth()->user()->is_cliente_ps_encargado)
                                        CLIENTE & PS ENCARGADO
                                    @elseif(auth()->user()->is_cliente_ps_asistente)
                                        CLIENTE & PS ASISTENTE
                                    @else
                                        <span style="text-transform: uppercase">{{ auth()->user()->privilegio }}</span>
                                    @endif --}}
                                </p>
                            </div>
                        </div>                                                                                                   
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection