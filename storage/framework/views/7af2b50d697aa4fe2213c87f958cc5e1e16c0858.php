<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Nuevo Articulo</h3>
			<?php if(count($errors)>0): ?>
			<div class="alert alert-danger">
				<ul>
				<?php foreach($errors->all() as $error): ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; ?>
				</ul>
			</div>
			<?php endif; ?>
		</div>
	</div>
			<?php echo Form::open(array('url'=>'almacen/articulo','method'=>'POST','autocomplete'=>'off','files'=>'true')); ?>

			<?php echo e(Form::token()); ?>

			
	<div class="row">

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			
			<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="<?php echo e(old('nombre')); ?>" class="form-control" placeholder="Nombre...">
            </div>

		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label>Categoria</label>
				<select name="idcategoria" class="form-control">
					<?php foreach( $categorias as $cat ): ?>
						<option value="<?php echo e($cat->idcategoria); ?>"><?php echo e($cat->nombre); ?></option>
						
					<?php endforeach; ?>

				</select>

			</div>

		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

			<div class="form-group">
            	<label for="codigo">Codigo</label>
            	<input type="text" name="codigo" required value="<?php echo e(old('codigo')); ?>" class="form-control" placeholder="Codigo del Articulo...">
            </div>

		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

			<div class="form-group">
            	<label for="stock">Stock</label>
            	<input type="text" name="stock" required value="<?php echo e(old('stock')); ?>" class="form-control" placeholder="Stock del Articulo...">
            </div>
		</div>
	
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

			<div class="form-group">
            	<label for="descripcion">Descripcion</label>
            	<input type="text" name="descripcion" required value="<?php echo e(old('descripcion')); ?>" class="form-control" placeholder="Descripcion del Articulo...">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

			<div class="form-group">
            	<label for="imagen">Imagen</label>
            	<input type="file" name="imagen"  class="form-control">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

			<div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<button class="btn btn-danger" type="reset">Cancelar</button>
            </div>

		</div>

		
	</div>

          
           
			<?php echo Form::close(); ?>		
            
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>