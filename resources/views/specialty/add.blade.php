@extends("layout.system")

@section("title","Especialidades")

@section("content")
    <div class="container">
    <h3 class="center">Adicionar Especialidade</h3>
    <div class="row">
        <form class="" action="{{ route('specialties.save') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include("specialty.form")
        <button class="btn deep-orange">Salvar</button>
        </form>
    </div>

    </div>
@endsection
