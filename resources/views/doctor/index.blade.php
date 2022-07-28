@extends("layout.system")

@section("title","Médicos")

@section("content")
    <div class="container">
        <h3 class="center">Médicos</h3>
        <div class="center add-button-wrapper">
            <a class="center btn green" href="{{ route('doctors.add') }}">Adicionar</a>
        </div>
    @if(!$doctors)
        <h4 class="grey">Nenhum médico cadastrado</h4>
    @else
        <div class="row ">
            <table>
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>CRM</th>
                        <th>Especialidade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                    <tr>
                        <td>{{ $doctor->name }}</td>
                        <td>{{ $doctor->register_number }}</td>
                        <td>{{ $doctor->specialty()->name }}</td>
                    </tr>
                    @endforeach        
                </tbody>
                </table>
        </div>
    @endif
    </div>
@endsection
