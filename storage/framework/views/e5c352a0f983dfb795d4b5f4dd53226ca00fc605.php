

<?php $__env->startSection('name', 'Peliculas'); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">

        <div class="col-sm-2">
            <a href="<?php echo e(route('movies.create')); ?>">
                <button class="btn btn-info">Agregar</button>
            </a>
        </div>
        <div class="col-sm-10">
            <h1>Cartelera</h1>
            <div class="btn-group col-2" role="group" aria-label="Basic example">
                <a href="<?php echo e(route('movies.pdf')); ?>" class="btn btn-dark">PDF </a>
                <a href="/moviesXLS"class="btn btn-primary">xls </a>
                <a href="/moviesCSV"class="btn btn-dark">csv </a>
                <a href="/consumablesxml"class="btn btn-primary">xml</a>
              </div>


    <?php $__empty_1 = true; $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>

        <!-- <div class="row">-->
        <div class="card col-sm bg-light" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo e($movie->name); ?></h5>
                <h6 class="card-title"><?php echo e($movie->director); ?></h6>
                <p class="card-text"><?php echo e($movie->synopsis); ?></p>
                <p class="card-text text-muted"> Duracion:<?php echo e($movie->duracion); ?></p>


                <form action="<?php echo e(route('movies.destroy', $movie->id)); ?>" method="post">
                    <a href="<?php echo e(route('movies.show', $movie->id)); ?>">Ver</a>
                    <a href="<?php echo e(route('movies.edit', $movie->id)); ?>">Editar</a>

                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit" class="btn btn-danger"> Eliminar</button>
                </form>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <h1>No hay peliculas en este momento</h1>

    <?php endif; ?>

    <?php echo e($movies->links()); ?>



<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine1R\resources\views/movies/index.blade.php ENDPATH**/ ?>