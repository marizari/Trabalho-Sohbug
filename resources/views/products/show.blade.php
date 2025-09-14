@extends('layouts.app')

@section('content')
  <h1 class="mb-4">Detalhe do Produto</h1>

  <div class="card mb-3">
    <div class="card-body">
      <h3 class="card-title">{{ $product->nome }}</h3>
      <p class="card-text"><strong>Quantidade:</strong> {{ $product->quantidade }}</p>
      <p class="card-text"><strong>Preço:</strong> R$ {{ number_format($product->preco, 2, ',', '.') }}</p>
      <p class="card-text"><small class="text-muted">Criado em: {{ $product->created_at->format('d/m/Y H:i') }}</small></p>
      <a href="{{ route('products.index') }}" class="btn btn-secondary">Voltar à lista</a>
    </div>
  </div>
@endsection
