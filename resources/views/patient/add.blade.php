@extends("layout.system")

@section("title","Pacientes")

@section("content")
    <div class="container">
    <h3 class="center">Adicionar Paciente</h3>
    <div class="row">
        <form class="" action="{{ route('patients.save') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include("patient.form")
        <button class="btn deep-orange">Salvar</button>
        </form>
    </div>

    </div>
@endsection
