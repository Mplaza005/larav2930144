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
                        
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection


