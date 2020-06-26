<?php $__env->startSection('contenido'); ?>
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Ventas <a href="venta/create"><button class="btn btn-success">Nuevo</button></a></h3>
		<?php echo $__env->make('ventas.venta.search', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Fecha</th>
					<th>Cliente</th>
					<th>Comprobante</th>
					<th>Impuesto</th>
					<th>Total</th>
					<th>Estado</th>
					<th>Opciones</th>
				</thead>
               <?php foreach($ventas as $ven): ?>
				<tr>
					<td><?php echo e($ven->fecha_hora); ?></td>
					<td><?php echo e($ven->nombre); ?></td>
					<td><?php echo e($ven->tipo_comprobante.': '.$ven->serie_comprobante.'-'.$ven->num_comprobante); ?></td>
					<td><?php echo e($ven->impuesto); ?></td>
					<td><?php echo e($ven->total_venta); ?></td>
					<td><?php echo e($ven->estado); ?></td>
					<td>
						<a href="<?php echo e(URL::action('VentaController@show',$ven->idventa)); ?>"><button class="btn btn-primary">Detalles</button></a>
                         <a href="" data-target="#modal-delete-<?php echo e($ven->idventa); ?>" data-toggle="modal"><button class="btn btn-danger">Anular</button></a>
					</td>
				</tr>
				<?php echo $__env->make('ventas.venta.modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
				<?php endforeach; ?>
			</table>
		</div>
		<?php echo e($ventas->render()); ?>

	</div>
</div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>