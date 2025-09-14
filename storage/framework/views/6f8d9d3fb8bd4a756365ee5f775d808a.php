<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>SohBug - Produtos</title>
  <!-- Bootstrap CDN (rápido para protótipo) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
    <div class="container">
      <a class="navbar-brand" href="<?php echo e(route('products.index')); ?>">SohBug - Produtos</a>
    </div>
  </nav>

  <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php /**PATH C:\laragon\www\SohBug\laravel-listProducts\resources\views/layouts/app.blade.php ENDPATH**/ ?>