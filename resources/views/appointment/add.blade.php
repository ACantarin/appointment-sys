@extends("layout.system")

@section("title","Consultas")

@section("content")
    <div class="container">
        <h3 class="center">Adicionar Consulta</h3>
        <div class="row">
            <form class="" action="{{ route('appointments.save') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include("appointment.form")
            <button class="btn deep-orange">Salvar</button>
            </form>
        </div>
    </div>
@endsection
