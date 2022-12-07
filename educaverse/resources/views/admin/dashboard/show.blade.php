@extends('admin.index')

@section('title', 'Educaverse | Panel de administración')

@section('styles')
  <link href="{{ asset('/assets/plugins/plugin.css') }}" rel="stylesheet">
@endsection

@section('content')
  <div class="row">
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
            <div class="float-left">
              <i class="mdi mdi-school text-danger icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Total de escuelas</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">{{ $escuelasCount }}</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
            <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> 80% de confianza </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
            <div class="float-left">
              <i class="mdi mdi-book text-warning icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Total de materias</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">{{ $materiasCount }}</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
            <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> Materias educativas </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
            <div class="float-left">
              <i class="mdi mdi-playstation text-success icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Videojuegos</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">{{ $videojuegosCount }}</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
            <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> Nuevo juego en 1 semana </p>
        </div>
      </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
      <div class="card card-statistics">
        <div class="card-body">
          <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
            <div class="float-left">
              <i class="mdi mdi-account-multiple text-info icon-lg"></i>
            </div>
            <div class="float-right">
              <p class="mb-0 text-right">Usuarios</p>
              <div class="fluid-container">
                <h3 class="font-weight-medium text-right mb-0">{{ $usuariosCount }}</h3>
              </div>
            </div>
          </div>
          <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
            <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Administradores activos </p>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <div class="d-sm-flex justify-content-between align-items-center mb-4">
            <h2 class="card-title mb-0" style="text-transform: none;">Analítica de los servicios</h2>
            <div class="wrapper d-flex">
              <div class="d-flex align-items-center mr-3">
                <span class="dot-indicator bg-success"></span>
                <p class="mb-0 ml-2 text-muted">Videojuegos</p>
              </div>
              <div class="d-flex align-items-center">
                <span class="dot-indicator bg-primary"></span>
                <p class="mb-0 ml-2 text-muted">Usuarios</p>
              </div>
            </div>
          </div>
          <div class="chart-container">
            <canvas id="dashboard-area-chart" height="80"></canvas>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tareas</h4>
          <div class="add-items d-flex">
            <input type="text" class="form-control todo-list-input" placeholder="Qué necesito hacer hoy?">
            <button class="add btn btn-primary font-weight-medium todo-list-add-btn">Añadir</button>
          </div>
          <div class="list-wrapper">
            <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
              <li class="completed">
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>Crear BD</label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
              <li class="completed">
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox" checked>Diseñar dashboard</label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">Crear videojuegos</label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
              <li>
                <div class="form-check form-check-flat">
                  <label class="form-check-label">
                    <input class="checkbox" type="checkbox">Acomodar dashboard</label>
                </div>
                <i class="remove mdi mdi-close-circle-outline"></i>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-xl-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Tareas</h4>
          <div class="shedule-list d-flex align-items-center justify-content-between mb-3">
            <h3>{{ \Carbon\Carbon::now()->isoFormat('D \d\e MMMM \d\e\l Y'); }}</h3>
            <small>21 Eventos</small>
          </div>
          <div class="event border-bottom py-3">
            <p class="mb-2 font-weight-medium">Presentar proyecto</p>
            <div class="d-flex align-items-center">
              <div class="badge badge-success">12:00 PM</div>
              <small class="text-muted ml-2">Durango, Dgo</small>
              <div class="image-grouped ml-auto">
                <img src="{{ url('assets/images/faces/face10.jpg') }}" alt="profile image">
                <img src="{{ url('assets/images/faces/face13.jpg') }}" alt="profile image"> </div>
            </div>
          </div>
          <div class="event py-3 border-bottom">
            <p class="mb-2 font-weight-medium">Vender el proyecto</p>
            <div class="d-flex align-items-center">
              <div class="badge badge-warning">13:30 PM</div>
              <small class="text-muted ml-2">Durango, Dgo</small>
              <div class="image-grouped ml-auto">
                <img src="{{ url('assets/images/faces/face20.jpg') }}" alt="profile image">
                <img src="{{ url('assets/images/faces/face17.jpg') }}" alt="profile image">
                <img src="{{ url('assets/images/faces/face14.jpg') }}" alt="profile image"> </div>
            </div>
          </div>
          <div class="event py-3">
            <p class="mb-2 font-weight-medium">Mostrar resultados</p>
            <div class="d-flex align-items-center">
              <div class="badge badge-danger">14:30 PM</div>
              <small class="text-muted ml-2">Durango, Dgo</small>
              <div class="image-grouped ml-auto">
                <img src="{{ url('assets/images/faces/face21.jpg') }}" alt="profile image">
                <img src="{{ url('assets/images/faces/face16.jpg') }}" alt="profile image"> </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-12 col-xl-4 grid-margin stretch-card">
      <div class="row flex-grow">
        <div class="col-md-6 col-xl-12 grid-margin grid-margin-md-0 grid-margin-xl stretch-card">
          <div class="card card-revenue">
            <div class="card-body d-flex align-items-center">
              <div class="d-flex flex-grow">
                <div class="mr-auto">
                  <p class="highlight-text mb-0 text-white"> ${{ $ventasMes }} </p>
                  <p class="text-white">  Ventas de este mes </p>
                  <div class="badge badge-pill"> Creció un 18% </div>
                </div>
                <div class="ml-auto align-self-end">
                  <div id="revenue-chart" sparkType="bar" sparkBarColor="#e6ecf5" barWidth="2"> 4,3,10,9,4,3,8,6,7,8 </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-xl-12 stretch-card">
          <div class="card card-revenue-table">
            <div class="card-body">
              <div class="revenue-item d-flex">
                <div class="revenue-desc">
                  <h6>Beneficio</h6>
                  <p class="font-weight-light"> Beneficio semanal promedio </p>
                </div>
                <div class="revenue-amount">
                  <p class="text-primary"> +168.900 </p>
                </div>
              </div>
              <div class="revenue-item d-flex">
                <div class="revenue-desc">
                  <h6>Total de beneficio</h6>
                  <p class="font-weight-light"> Pedidos de clientes semanales </p>
                </div>
                <div class="revenue-amount">
                  <p class="text-primary"> +6,890.00 </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-4">
    <div class="col-sm-6 col-md-6 col-lg-6 grid-margingrid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-5 d-flex align-items-center">
              <canvas id="UsersDoughnutChart" class="400x160 mb-4 mb-md-0" height="200"></canvas>
            </div>
            <div class="col-md-7">
              <h4 class="card-title font-weight-medium mb-0 d-none d-md-block" style="text-transform: none;">Usuarios activos en este momento</h4>
              <div class="wrapper mt-4">
                <div class="d-flex justify-content-between mb-2">
                  <div class="d-flex align-items-center">
                    <p class="mb-0 font-weight-medium">558</p>
                    <small class="text-muted ml-2">Cuenta de correo</small>
                  </div>
                  <p class="mb-0 font-weight-medium">80%</p>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
              <div class="wrapper mt-4">
                <div class="d-flex justify-content-between mb-2">
                  <div class="d-flex align-items-center">
                    <p class="mb-0 font-weight-medium">431</p>
                    <small class="text-muted ml-2">Peticiones</small>
                  </div>
                  <p class="mb-0 font-weight-medium">34%</p>
                </div>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-md-6 col-lg-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="row">
            <div class="col-md-7">
              <h4 class="card-title font-weight-medium mb-3">Ventas totales</h4>
              <h1 class="font-weight-medium mb-0">${{ $ventas }}</h1>
              <p class="mb-0">Ventas por videojuegos y app</p>
            </div>
            <div class="col-md-5 d-flex align-items-end mt-4 mt-md-0">
              <canvas id="conversionBarChart" height="150"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <div class="row">
    <div class="col-lg-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Ordenes</h4>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th> # </th>
                  <th> Nombre </th>
                  <th> Progreso </th>
                  <th> Total </th>
                  <th> Venta </th>
                  <th> Fecha </th>
                </tr>
              </thead>
              <tbody>
                @foreach ($ventaFinal as $venta)                  
                  <tr>
                    <td class="font-weight-medium"> {{ $venta->ventasid }} </td>
                    <td> {{ $venta->nombre }} </td>
                    <td>
                      <div class="progress">
                        <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </td>
                    <td> ${{ $venta->total }}.00 </td>
                    <td class="text-success"> {{ $venta->ventasid + 23.5 }}% <i class="mdi mdi-arrow-up"></i>
                    </td>
                    <td> {{ \Carbon\Carbon::parse($venta->fecha)->formatLocalized('%d de %B de %Y') }} </td>
                  </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Mensajes</h5>
          <div class="fluid-container">
            @if (sizeof($mensajes) > 0)
              @foreach ($mensajes as $mensaje)              
                <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                  <div class="col-md-1">
                    <img class="img-sm rounded-circle mb-4 mb-md-0 d-block mx-md-auto" src="{{ asset("images/usuarios/default.png") }}" alt="profile image"> </div>
                  <div class="ticket-details col-md-9">
                    <div class="d-flex">
                      <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">{{ $mensaje->nombre }} : </p>
                      <p class="text-primary mr-1 mb-0">[#{{ $mensaje->id }}]</p>
                      <p class="mb-0 ellipsis">{{ $mensaje->email }}</p>
                    </div>
                    <p class="text-gray ellipsis mb-2">{{ $mensaje->mensaje }}.</p>
                    <div class="row text-gray d-md-flex d-none">
                      <div class="col-12 d-flex">
                        <small class="mb-0 mr-2 text-muted text-muted">Última actualización : </small>
                        <small class="Last-responded mr-2 mb-0 text-muted text-muted">{{ ucfirst(Carbon\Carbon::parse($mensaje->fecha)->diffForHumans()) }}</small>
                      </div>
                    </div>
                  </div>
                  <div class="ticket-actions col-md-2">
                    <div class="btn-group dropdown">
                      <button type="button" class="btn btn-success dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Acciones </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{ url('/admin/contacto') }}">
                          <i class="fa fa-reply fa-fw"></i>Ver mensajes
                        </a>
                        <a class="dropdown-item" href="#">
                          <i class="fa fa-history fa-fw"></i>Eliminar mensaje
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              @endforeach              
            @else
              <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">                
                <div class="ticket-details col-md-9">
                  <div class="d-flex">
                    <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap">No hay ningun mensaje.</p>
                  </div>
                </div>
              </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row mb-0 mt-4">
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body py-5">
          <div class="d-flex flex-row justify-content-center align-items">
            <i class="mdi mdi-facebook text-facebook icon-lg"></i>
            <div class="ml-3">
              <h6 class="text-facebook font-weight-semibold mb-0">50k Me gustas</h6>
              <p class="text-muted card-text">Gente que confía en nosotros</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body py-5">
          <div class="d-flex flex-row justify-content-center align-items">
            <i class="mdi mdi-instagram text-instagram icon-lg"></i>
            <div class="ml-3">
              <h6 class="text-instagram font-weight-semibold mb-0">58.3k Seguidores</h6>
              <p class="text-muted card-text">Los cuales les gusta nuestro contenido</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
      <div class="card">
        <div class="card-body py-5">
          <div class="d-flex flex-row justify-content-center align-items">
            <i class="mdi mdi-twitter text-twitter icon-lg"></i>
            <div class="ml-3">
              <h6 class="text-twitter font-weight-semibold mb-0">60k Seguidores</h6>
              <p class="text-muted card-text">Que ven nuestros productos</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('/assets/plugins/chartjs/chart.min.js') }}"></script>
  <script src="{{ asset('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
  <script src="{{ asset('/assets/js/dashboard.js') }}"></script>
@endsection