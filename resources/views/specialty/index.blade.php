@extends("layout.system")

@section("title","Especialidades")

@section("content")
    <div class="container">
        <h3 class="center">Especialidades</h3>
        <div class="center add-button-wrapper">
            <a class="center btn green" href="{{ route('specialties.add') }}">Adicionar</a>
        </div>
    @if(!$specialties)
        <h4 class="center grey">Nenhuma especialidade cadastrada</h4>   
    @else
        <div class="row">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($specialties as $specialty)
                    <tr>
                        <td>{{ $specialty->name }}</td>
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
