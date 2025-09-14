

<?php $__env->startSection('content'); ?>
  <h1 class="mb-4">Detalhe do Produto</h1>

  <div class="card mb-3">
    <div class="card-body">
      <h3 class="card-title"><?php echo e($product->nome); ?></h3>
      <p class="card-text"><strong>Quantidade:</strong> <?php echo e($product->quantidade); ?></p>
      <p class="card-text"><strong>Preço:</strong> R$ <?php echo e(number_format($product->preco, 2, ',', '.')); ?></p>
      <p class="card-text"><small class="text-muted">Criado em: <?php echo e($product->created_at->format('d/m/Y H:i')); ?></small></p>
      <a href="<?php echo e(route('products.index')); ?>" class="btn btn-secondary">Voltar à lista</a>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\laravel-listProducts-fixed\laravel-listProducts\resources\views/products/show.blade.php ENDPATH**/ ?>