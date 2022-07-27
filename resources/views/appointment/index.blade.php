@extends("layout.system")

@section("title","Consultas")

@section("content")
    <div class="container">
        <h3 class="center">Consultas</h3>
        <div class="center add-button-wrapper">
            <a class="center btn green" href="{{ route('appointments.add') }}">Adicionar</a>
        </div>
    @if(!$appointments)
        <h4 class="center grey">Nenhuma consulta cadastrada</h4>
    @else
        <div class="row ">
            <table>
                <thead>
                    <tr>
                        <th>Data</th>
                        <th>Paciente</th>
                        <th>Médico</th>
                        <th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($appointments as $appointment)
                    <tr>
                        <td>{{ $appointment->date }}</td>
                        <td>{{ $appointment->patient()->name }}</td>
                        <td>{{ $appointment->doctor()->name }}</td>
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
