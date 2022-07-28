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
                    </tr>
                </thead>
                <tbody>
                    @foreach($specialties as $specialty)
                    <tr>
                        <td>{{ $specialty->name }}</td>
                    </tr>
                    @endforeach        
                </tbody>
                </table>
        </div>
    @endif
    </div>
@endsection
