<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Usuario: <?php echo e($usuario->name); ?></h3>
			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php foreach($errors->all() as $error): ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>

			<?php echo Form::model($usuario,['method'=>'PATCH','route'=>['seguridad.usuario.update',$usuario->id]]); ?>

            <?php echo e(Form::token()); ?>

		 
			<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
				<label for="name" class="col-md-4 control-label">Nombre</label>

				<div class="col-md-6">
					<input id="name" type="text" class="form-control" name="name" value="<?php echo e($usuario->name); ?>">

					<?php if($errors->has('name')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('name')); ?></strong>
						</span>
					<?php endif; ?>
				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
				<label for="email" class="col-md-4 control-label">E-Mail</label>

				<div class="col-md-6">
					<input id="email" type="email" class="form-control" name="email" value="<?php echo e($usuario->email); ?>">

					<?php if($errors->has('email')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('email')); ?></strong>
						</span>
					<?php endif; ?>
				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
				<label for="password" class="col-md-4 control-label">Password</label>

				<div class="col-md-6">
					<input id="password" type="password" class="form-control" name="password">

					<?php if($errors->has('password')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('password')); ?></strong>
						</span>
					<?php endif; ?>
				</div>
			</div>

			<div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
				<label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

				<div class="col-md-6">
					<input id="password-confirm" type="password" class="form-control" name="password_confirmation">

					<?php if($errors->has('password_confirmation')): ?>
						<span class="help-block">
							<strong><?php echo e($errors->first('password_confirmation')); ?></strong>
						</span>
					<?php endif; ?>
				</div>
			</div>
			
			

            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

			<?php echo Form::close(); ?>		
            
		</div>
	</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>