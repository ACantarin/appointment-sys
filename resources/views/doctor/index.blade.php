@extends("layout.system")

@section("title","Médicos")

@section("content")
    <div class="container">
        <h3 class="center">Lista de Médicos</h3>
    @if(!$doctors)
        <h4 class="center grey">Nenhum médico cadastrado</h4>
    @else
        <div class="row">
        <a class="btn green" href="#">Adicionar</a>
        </div>
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CRM</th>
                        <th>Especialidade</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $patient->name }}</td>
                        <td>{{ $patient->register_number }}</td>
                        <td>Clínico Geral</td>
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
