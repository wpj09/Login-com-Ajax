@extends('admin.master')

@section('title', 'Listagem')

@section('content')
<div class="container my-3">
    <h1>Listagem de cadastros</h1>

    @if(!empty($clients))
        <table class='table table-striped table-hover'>
            <thead class='bg-primary text-white'>
            <td>#</td>
            <td>Nome</td>
            <td>Data de Nascimento</td>
            <td>Pai</td>
            <td>Mãe</td>
            </thead>
            @foreach ($clients as $client)
                <tr>
                    <td>{{$client->id}}</td>
                    <td>{{$client->firstName .' '. $client->secondName}}</td>
                    <td>{{ date('d/m/Y', strtotime($client->birthDate)) }}</td>
                    <td>{{$client->father}}</td>
                    <td>{{$client->mom}}</td>
                </tr>
        @endforeach
        </table>
    @endif
</div>
@endsection
