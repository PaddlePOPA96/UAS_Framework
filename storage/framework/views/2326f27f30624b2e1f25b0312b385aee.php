<?php
    $currentRouteName = Route::currentRouteName();
    $isLoggedIn = Auth::check();
?>
<style>
    #nav-item{
        background-color: black;
        font-display: 
    }
        
    
</style>

<nav class="shadow-lg navbar navbar-expand-sm navbar p-3 bg-red rounded">
        <div class="container">
            <a class="navbar-brand">
                <img src="<?php echo e(Vite::asset('resources/images/icon.png')); ?>" alt="" width="30" height="24" class="d-inline-block align-text-top">
                gigiku</a>

            
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-md-none text-white-50">
    
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a href="<?php echo e(route('home')); ?>"
                            class="nav-link <?php if($currentRouteName == 'home'): ?> active <?php endif; ?>">Home</a></li>
                    <li class="nav-item">
                           <a class="nav-link" href="<?php echo e(route('ourteam')); ?>">Our Team</a></li>

                     <?php if($isLoggedIn): ?>
                        <li class="nav-item">
                            <a href="<?php echo e(route('employees.index')); ?>" class="nav-link <?php if($currentRouteName == 'employees.index'): ?> active <?php endif; ?>">Employee</a>
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
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo e(Auth::user()->name); ?>

                            </a>
    
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a href="<?php echo e(route('profile')); ?>" class="dropdown-item"><i class="bi-person-circle me-1"></i> My
                                    Profile</a>
    
                                <hr>
                                <a class="dropdown-item text-danger" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                    <i class="bi bi-lock-fill"></i> <?php echo e(__('Logout')); ?>

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
<?php /**PATH C:\Users\User\Documents\frame\UAS_Framework\resources\views/layouts/nav.blade.php ENDPATH**/ ?>