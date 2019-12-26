<h1>Guardar Orden</h1>
<?php $id = $this->session->userdata('s_idPersona');?>
<div class="box box-primary">
  <div class="box-body">
	<div class="col-sm-6">
	  <div class="box box-primary">
	    <form method="post" action="<?php echo base_url(); ?>corden/saveOrden">
	      <table id="tblPersonas" class="table table-bordered table-striped" style="width: 319px">
			<thead>
			  <tr>
			    <?php foreach ($res as $item): ?>
			  <tr>
		        <th style="width: 25px;background-color: #006699; color: white;">Id</th>
		        <th style="background-color: #006699; color: white;"><input type="text" name="txtId" value="<?php echo $item->idOrden?>" style="width: 220px;background-color: white; color: black;" readonly></th>
			  </tr>

		      <th style="width: 25px;background-color: #006699; color: white;">Tecnico</th>
		      <th style="background-color: #006699; color: white;"> <input type="text" name="txtId" value="<?php echo $item->nombre." ".$item->appaterno." ".$item->apmaterno;;?>" style="width: 220px;background-color: white; color: black;" readonly></th>

			</tr>
			<tr>
		      <th style="width: 25px;background-color: #006699; color: white;">Cliente</th>
		      <th style="background-color: #006699; color: white;"><input type="text" name="txtCliente" value="<?php echo $item->cliente;?>" style="width: 220px;background-color: white; color: black;" ></th>
			</tr>
			<tr>
			  <th style="width: 25px;background-color: #006699; color: white;">Fecha</th>
			  <th style="background-color: #006699; color: white;"><input type="text" name="txtFecha" value="<?php echo $item->fechaOrden;?>" style="width: 220px;background-color: white; color: black;" ></th>
			  <?php endforeach; ?>
			</tr>
			</thead>
		    <tbody>	
		    </tbody>
		  </table>
		  <input type="submit" value="Update" class="btn btn-primary btn-lg btn-block btn-success">
		</form>
	  </div>
	  <a class="enlace" href="<?php echo base_url('corden/index/'.$id);?>"><h4>Volver atras</h4></a>
	</div>
  </div>
</div>

