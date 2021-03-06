<?php $__env->startSection('content'); ?>
<?php echo $__env->make('pages.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h3>Detail Category</h3>
				<hr>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="form-group">
					<strong>Category Title :</strong> <?php echo e($cat->cat_title); ?>

				</div>	
			</div>
			<div class="col-md-12">
				<div class="form-group">
					<strong>Category Description :</strong> <?php echo e($cat->cat_des); ?>

				</div>	
			</div>
			<div class="col-md-12">
				<a href="<?php echo e(route('cat.index')); ?>" class="btn btn-sm btn-success">Back</a>
			</div>
		</div>
	</div>
<?php echo $__env->make('pages.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel\SubProjectUp\resources\views/cat/detail.blade.php ENDPATH**/ ?>