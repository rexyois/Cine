<!--Original-->


<!--Copia de formulario de inicio de sesion-->

<!--Agregar bootstrap y hoja de estilis CSS3-->


<?php $__env->startSection('content'); ?>

<html></html>
<link href="<?php echo e(asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
<link href="<?php echo e(asset('css/estilos.css')); ?>" rel="stylesheet">
<script type="text/javascript" src="<?php echo e(asset('bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/jquery.js')); ?>"></script>

<body style="background-color:#191970bd">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="row">
  
    <div class="col-sm-2 col-lg-4 col-md-4"></div>

    <div class="col-sm-8 col-lg-4 col-md-4 loginCard">
        <div>
            <div>
                <div class="card cardplus">

                    <div class="card-body">

                        <div align="center" class="alinearCentro">
                            <img class="rounded-circle imagenCard" src="<?php echo e(asset('logos/logo.jpg')); ?>" alt=""  style="height: 150px">
                        </div>
<br>
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <!--<label for="email"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address')); ?></label>-->

                                <div align="center">
                            <div class="col-md-10">
                                <input id="email" placeholder="Correo electronico" type="email"
                                    class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email"
                                    value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>

                                <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <!--<label for="password"
                                class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password')); ?></label>-->

                            <div class="col-md-8">
                                <input placeholder="Contraseña" id="password" type="password"
                                    class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password"
                                    required autocomplete="current-password">

                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <span class="invalid-feedback" role="alert">
                                    <strong><?php echo e($message); ?></strong>
                                </span>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        <?php echo e(old('remember') ? 'checked' : ''); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('guardar datos')); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    <?php echo e(__('inicia sesion')); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                                        <?php echo e(__('olvido su contraseña?')); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="cold-4"></div>
</body>



<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\cine1R\resources\views/auth/login.blade.php ENDPATH**/ ?>