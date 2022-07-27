<html lang="pt-BR">
  <head>
    <title>@yield("title", "Consultas")</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <script>
        var message = "{{Session::get('alert')}}";
        if (message) {
            alert(message);
        }
    </script>

  </head>

  <body>
<header>

  <nav>
    <div class="nav-wrapper blue">
      <a href="#" class="brand-logo">Controle de Consultas</a>
      <a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{ route('appointments.index') }}">Consultas</a></li>
        <li><a href="{{ route('patients.index') }}">Pacientes</a></li>
        <li><a href="{{ route('doctors.index') }}">Médicos</a></li>
        <li><a href="{{ route('specialties.index') }}">Especialidades</a></li>
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile">
    <li><a href="#">Consultas</a></li>
    <li><a href="{{ route('patients.index') }}"">Pacientes</a></li>
    <li><a href="{{ route('doctors.index') }}"">Médicos</a></li>
    <li><a href="{{ route('specialties.index') }}"">Especialidades</a></li>
  </ul>

</header>
