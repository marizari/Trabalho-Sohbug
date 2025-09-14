@extends('layouts.app')

@section('content')
  <h1 class="mb-4">Produtos</h1>

  @if ($products->isEmpty())
    <div class="alert alert-info">Nenhum produto cadastrado.</div>
  @else
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Nome</th>
          <th>Quantidade</th>
          <th>Preço</th>
          <th>Detalhes</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($products as $product)
          <tr>
            <td>{{ $product->nome }}</td>
            <td>{{ $product->quantidade }}</td>
            <td>R$ {{ number_format($product->preco, 2, ',', '.') }}</td>
            <td><a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-primary">Ver</a></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  @endif
@endsection
