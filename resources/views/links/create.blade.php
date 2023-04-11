@extends('app')
@section('title', 'Adicionando Link')
@section('content')

    <h1>Cadastrar Link</h1>

    <form class="bg-light text-black p-5" action="{{ route('links.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="link_encurtado" class="form-label">Descrição Encurtada:</label>
            <input type="text" name="link_encurtado" id="link_encurtado" required placeholder="Digite a descrição do link" class="form-control">
        </div>
        <div class="mb-3">
            <label for="link_original" class="form-label">Link Original:</label>
            <input type="text" name="link_original" id="link_original" required placeholder="Digite o link original" class="form-control">
        </div>
        <div class="mb-3">
            <label for="status" class="form-label">Status:</label>
            <select class="form-control" name="status" id="status">
                <option value="1">Ativo</option>
                <option value="0">Inativo</option>
            </select>
        </div>
        <button class="btn btn-success w-100" type="submit">Enviar</button>
    </form>

@endsection
