
<?php $__env->startSection('content'); ?>

<div> 
    <h1>Peliculas en cartelera </h1>
</div>

    
<table class="table">
    <thead>
        <tr>
            <th>Nombre de la pelicula</th>
            <th>Sinopsis</th>
            <th>Categoria</th>
            <th>Director</th>
            <th>Duracion</th>
            <th>Actores</th>
            <th>Genero</th>
        </tr>
    </thead>
    <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tbody>
        <tr>
            <td><?php echo e($movie ->name); ?></td>
            <td><?php echo e($movie ->synopsis); ?></td>
            <td><?php echo e($movie ->category); ?></td>
            <td><?php echo e($movie ->director); ?></td>
            <td><?php echo e($movie ->duracion); ?></td>
            <td><?php echo e($movie ->actors); ?></td>
            <td><?php echo e($movie ->genre); ?></td>
        </tr>
    </tbody>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</table>
    


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine1R\resources\views/movies/exportToPDF.blade.php ENDPATH**/ ?>