@extends("layout.system")

@section("title","Médicos")

@section("content")
    <div class="container">
    <h3 class="center">Adicionar Médico</h3>
    <div class="row">
        <form class="" action="{{ route('doctors.save') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include("doctor.form")
        <button class="btn deep-orange">Salvar</button>
        </form>
    </div>

    </div>
@endsection
