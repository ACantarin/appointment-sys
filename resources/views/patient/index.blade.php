@extends("layout.system")

@section("title","Pacientes")

@section("content")
    <div class="container">
        <h3 class="center">Pacientes</h3>
        <div class="center add-button-wrapper">
            <a class="center btn green" href="{{ route('patients.add') }}">Adicionar</a>
        </div>
    @if(!$patients)
        <h4 class="center grey">Nenhum paciente cadastrado</h4>   
    @else
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>E-Mail</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                    <tr>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->document }}</td>
                        <td>{{ $patient->email }}</td>
                    </tr>
                    @endforeach        
                </tbody>
                </table>
        </div>
    @endif
    </div>
@endsection
