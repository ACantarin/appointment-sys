@extends("layout.system")

@section("titulo","Médicos")

@section("content")
    <div class="container">
    <h3 class="center">Adicionar Médico</h3>
    <div class="row">
        <form class="" action="#" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include("doctor.form")
        <button class="btn deep-orange">Salvar</button>
        </form>
    </div>

    </div>
@endsection
