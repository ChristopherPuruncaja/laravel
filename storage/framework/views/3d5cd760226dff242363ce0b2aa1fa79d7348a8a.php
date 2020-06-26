<?php $__env->startSection('contenido'); ?>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Articulo: <?php echo e($articulo->nombre); ?></h3>
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

			<?php echo Form::model($articulo,['method'=>'PATCH','route'=>['almacen.articulo.update',$articulo->idarticulo],'files'=>'true']); ?>

            <?php echo e(Form::token()); ?>


            <div class="row">

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			
			<div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" required value="<?php echo e($articulo->nombre); ?>" class="form-control" >
            </div>

		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label>Categoria</label>
				<select name="idcategoria" class="form-control">
					<?php foreach( $categorias as $cat ): ?>
					<?php if($cat->idcategoria==$articulo->idcategoria): ?>
						<option value="<?php echo e($cat->idcategoria); ?>" selected><?php echo e($cat->nombre); ?></option>
						<?php else: ?>
							<option value="<?php echo e($cat->idcategoria); ?>"><?php echo e($cat->nombre); ?></option>
						<?php endif; ?>
					<?php endforeach; ?>

				</select>

			</div>

		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

			<div class="form-group">
            	<label for="codigo">Codigo</label>
            	<input type="text" name="codigo" required value="<?php echo e($articulo->codigo); ?>" class="form-control">
            </div>

		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

			<div class="form-group">
            	<label for="stock">Stock</label>
            	<input type="text" name="stock" required value="<?php echo e($articulo->stock); ?>" class="form-control">
            </div>
		</div>
	
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

			<div class="form-group">
            	<label for="descripcion">Descripcion</label>
            	<input type="text" name="descripcion" required value="<?php echo e($articulo->descripcion); ?>" class="form-control" placeholder="Descripcion del Articulo...">
            </div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">

			<div class="form-group">
            	<label for="imagen">Imagen</label>
            	<input type="file" name="imagen" class="form-control">
            	<?php if(($articulo->imagen)!=""): ?>

            	<img src="<?php echo e(asset('imagenes/articulos/',$articulo->imagen)); ?>" height="300px" width="300px">

            	<?php endif; ?>
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