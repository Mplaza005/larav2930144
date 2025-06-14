@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Categorías</h1>

        <a href="{{ route('category.create') }}" class="btn btn-warning btn-sm mb-4">crear</a>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category['id'] }}</td>
                        <td>{{ $category['name'] }}</td>

                        <td>
                            <a href="{{ route('category.show', $category['id']) }}" class="btn btn-info btn-sm">Ver más</a>
                        </td>
                        <td><a href="{{ route('category.edit', $category->id) }}"class="btn btn-success btn-sm">Editar</a>
                        </td>
                        <td>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger d-flex align-items-center gap-2">
                                    <i class="bi bi-trash-fill"></i> Eliminar
                                </button>
                            </form>
                        </td>
                          <td> 
                           <iframe src="{{ 'http://localhost/larav2930144/public/storage/imagenes/'.$category->urlPdf }}"  frameborder="0"></iframe>
                          </td>
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
