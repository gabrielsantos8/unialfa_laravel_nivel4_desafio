@extends('app')
@section('title', 'Links')

@section('content')
    <h1 class="text-center">Links</h1>
    <table class="table table-striped table-dark">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Descrição</th>
                <th scope="col">Link</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($links as $link)
                <tr>
                    <th scope="row">{{ $link->id }}</th>
                    <th scope="row">
                        <a
                            href="{{ route('links.redirect', str_replace('/', '$**$', str_replace('$**$', '', $link->link_encurtado))) }}">{{ $link->link_encurtado }}</a>
                    </th>
                    <th scope="row">{{ $link->link_original }}</th>
                    <th style="color:{{ $link->status == 1 ? 'green' : 'red' }};" scope="row">
                        {{ $link->status == 1 ? 'Ativo' : 'Inativo' }}</th>
                    <th>
                        <a class="btn btn-primary" href="{{ route('links.edit', $link) }}">Editar</a>
                        <form action="{{ route('links.destroy', $link) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger" type="submit"
                                onclick="return confirm('Tem certeza que deseja apagar?')">
                                Apagar
                            </button>
                        </form>
                    </th>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
