<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
    <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->theem == 0): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/main.css')); ?>">
        <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/light.css')); ?>">
        <?php endif; ?>
    <?php endif; ?>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
                <a class="navbar-brand"  href="<?php echo e(route('admin.dashboard')); ?>">
                    Drive
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        <?php if(auth()->guard()->check()): ?>
                        <li>
                            <a class="nav-link" href="<?php echo e(route('drives.index')); ?>">Your files</a>
                        </li>
                        <li>
                            <a class="nav-link" href="<?php echo e(route('drives.create')); ?>">Create file</a>
                        </li>

                        <li>
                            <a class="nav-link" href="<?php echo e(route('drives.publicfiles')); ?>">Public files</a>
                        </li>
                        <?php endif; ?>
                    </ul>




                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>


                        
                            <?php if(Route::has('login')): ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Route::has('register')): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                                </li>
                            <?php endif; ?>
                        <?php else: ?>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('user.changetheem',Auth::user()->id)); ?>"><i class="fa-regular fa-lightbulb" style="color: #ffffff;"></i></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo e(route('user.showprofile')); ?>"><i class="fa-regular fa-user" style="color: #28cce2;"></i></a>
                        </li>


                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->email); ?>

                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>

                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>

    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH E:\Fullstack course\Backend\Tasks\Final App Laravel\resources\views/layouts/app.blade.php ENDPATH**/ ?>