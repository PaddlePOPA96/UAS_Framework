<style>
    .content.showing {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 100vh;
    }
    .content.showing .background-image {
        position: absolute;
 
        width: 100%;
        height: 100%;
        background-size: cover;
        background-repeat: no-repeat;
    }
    p{
    text-size-adjust: 10rem;
    size: 2rem;
    line-height: 2;
    font-size: 1rem;
    color:black;
    /* padding: 1rem 0; */
    }
 

.text-left{
margin-left: 5rem;
margin-top:5rem;

}
</style>

<?php $__env->startSection('content'); ?>
<div class="content showing bg-auto" style="background-image: url(<?php echo e(Vite::asset('resources/images/home.jpg')); ?>); background-repeat: no-repeat; background-size: cover;">
    <div class="row">
      <div class="col-md-6 d-flex align-items-center justify-content-start">
        <div>
          <h3 class="text-left">make your smile shine</h3>
          <p class="text-left">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Deleniti, dolores. Ad rerum eum assumenda mollitia autem quo nulla, consequatur quisquam est? Dolorem fugiat fugit amet dolores provident velit eos est.</p>
          <button type="button" class="btn btn-primary">Primary</button>
        </div>
      </div>
    </div>
  </div>
  
  
  

    <div class="container mt-4">
        <h4><?php echo e($pageTitle); ?></h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-person-circle me-3 fs-1"></div>
            <div class="card-body">
                <?php if(session('status')): ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo e(session('status')); ?>

                    </div>
                <?php endif; ?>

                <?php echo e(__('You are logged in as')); ?> <?php echo e(Auth::user()->name); ?>!

                
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\fariduta\Documents\Framework\uAS\fitur_pihak-ketiga_laravel\resources\views/home.blade.php ENDPATH**/ ?>