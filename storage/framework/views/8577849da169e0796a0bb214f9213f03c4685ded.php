<?php $__env->startSection('contenido'); ?>
<div class="row">
	<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
		<div class="form-group">
			<label for="proveedor">Cliente</label>
			<p><?php echo e($venta->nombre); ?></p>
		</div>
	</div>
	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		<div class="form-group">
			<label>Tipo Comprobante</label>
			<p><?php echo e($venta->tipo_comprobante); ?></p>
		</div>
	</div>
	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		<div class="form-group">
			<label for="serie_comprobante">Serie Comprobante</label>
			<p><?php echo e($venta->serie_comprobante); ?></p>
		</div>
	</div>
	<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
		<div class="form-group">
			<label for="num_comprobante">Numero Comprobante</label>
			<p><?php echo e($venta->num_comprobante); ?></p>
		</div>
	</div>
</div>
<div class="row">
	<div class="panel panel-primary">
		<div class="panel-body">
			
			<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
				<thead style="background-color: #A9D0F5">
					
					<th>Articulo</th>
					<th>Cantidad</th>
					<th>Precio Venta</th>
					<th>Descuento</th>
					<th>Subtotal</th>
				</thead>
				<tfoot>
				
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th><h4 id="total"><?php echo e($venta->total_venta); ?></h4></th>
				</tfoot>
				<tbody>
					<?php foreach( $detalles as $det ): ?>
						<tr>
							<td><?php echo e($det->articulo); ?></td>
							<td><?php echo e($det->cantidad); ?></td>
							<td><?php echo e($det->precio_venta); ?></td>
							<td><?php echo e($det->descuento); ?></td>
							<td><?php echo e($det->cantidad*$det->precio_venta-$det->descuento); ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
				</table>
			</div>
		</div>
	</div>
	
</div>
	
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>