

<?php $__env->startSection('content'); ?>
  <h1 class="mb-4">Produtos</h1>

  <?php if($products->isEmpty()): ?>
    <div class="alert alert-info">Nenhum produto cadastrado.</div>
  <?php else: ?>
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
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <tr>
            <td><?php echo e($product->nome); ?></td>
            <td><?php echo e($product->quantidade); ?></td>
            <td>R$ <?php echo e(number_format($product->preco, 2, ',', '.')); ?></td>
            <td><a href="<?php echo e(route('products.show', $product)); ?>" class="btn btn-sm btn-primary">Ver</a></td>
          </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </tbody>
    </table>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\SohBug\laravel-listProducts\resources\views/products/index.blade.php ENDPATH**/ ?>