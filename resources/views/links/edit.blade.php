@extends('app')
@section('title', 'Editando Link')
@section('content')

    <h1>Cadastrar Link</h1>

    <form class="bg-light text-black p-5" action="{{ route('links.update', $link) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="link_encurtado" class="form-label">Descrição Encurtada:</label>
            <input type="text" name="link_encurtado" id="link_encurtado" value="{{$link->link_encurtado}}" required placeholder="Digite a descrição do link" class="form-control">
        </div>
        <div class="mb-3">
            <label for="link_original" class="form-label">Link Original:</label>
            <input type="text" name="link_original" id="link_original" value="{{$link->link_original}}" required placeholder="Digite o link original" class="form-control">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select class="form-control" name="status" id="status">
                <option {{$link->status == 1 ? 'selected' : ''}} value="1">Ativo</option>
                <option {{$link->status == 0 ? 'selected' : ''}} value="0">Inativo</option>
            </select>
        </div>
        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>

@endsection
