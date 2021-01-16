@extends('layout.template')
@section('main')
    <h1>Listagem de Usuários</h1>

    <table class="table table-dark table-striped mt-5">
        <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome do Usuário</th>
            <th scope="col">E-mail</th>
            <th scope="col">Data de Verificação do E-mail</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td scope="col">{{$user->id}}</td>
                <td scope="col">{{$user->name}}</td>
                <td scope="col">{{$user->email}}</td>
                <td scope="col">{{$user->email_verified_at->format('d/m/Y')}}</td>
                <td scope="col"></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="div mt-5">
        {{$users->links()}}
    </div>
@endsection
