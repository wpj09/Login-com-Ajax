@extends('admin.master')

@section('title', 'Casdastro')

@section('content')
<div class="container my-3">
    <h1>Formulário de Cadastro</h1>

    <form action="{{ url('/admin/store') }}" method="post">

        @csrf

        <div class="form-group">
            <label for="firstName">Primeiro nome</label>
            <input type="text" name="firstName" id="firstName" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="secondName">Sobre Nome</label>
            <input type="text" name="secondName" id="secondName" class="form-control"required>
        </div>

        <div class="form-group">
            <label for="birthDate">Data de Nascimento</label>
            <input type="date" name="birthDate" id="birthDate" class="form-control"required>
        </div>

        <div class="form-group">
            <label for="father">Nome do Pai</label>
            <input type="text" name="father" id="father" class="form-control"required>
        </div>

        <div class="form-group">
            <label for="mom">Nome do da Mãe</label>
            <input type="text" name="mom" id="mom" class="form-control"required>
        </div>

        <button type="submit" class="btn btn-primary">Cadastrar</button>

    </form>
</div>
@endsection
