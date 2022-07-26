@extends("layout.system")

@section("title","Pacientes")

@section("content")
    <div class="container">
        <h3 class="center">Pacientes</h3>
        <div class="center add-button-wrapper">
            <a class="center btn green" href="#">Adicionar</a>
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
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($patients as $patient)
                    <tr>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->document }}</td>
                        <td>{{ $patient->email }}</td>
                        <td>
                        <a class="btn blue" href="#">Editar</a>
                        <a class="btn red" href="#">Deletar</a>
                        </td>
                    </tr>
                    @endforeach        
                </tbody>
                </table>
        </div>
    @endif
    </div>
@endsection
