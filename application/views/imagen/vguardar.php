<h1>Guardar Informacion</h1>
<div class="box box-primary">
  <div class="box-body">
	<div class="col-sm-6">
	  <div class="box box-primary">
	    <form method="post" action="<?php echo base_url(); ?>cimagen/actualizarImagen">
	      <table id="tblPersonas" class="table table-bordered table-striped" style="width: 319px">
			<thead>
			  <tr>
			    <?php foreach ($res as $item): ?>
		      <th style="width: 25px;background-color: #006699; color: white;">ID</th>
		      <th style="background-color: #006699; color: white;"> <input type="text" name="idImagen" value="<?php echo $item->idImagen;?>" style="width: 220px;background-color: white; color: black;"></th>
		    	<th>
				<td rowspan="3" valign="middle" align="left"><img src="<?=base_url()?>uploads/imagenes/thumbs/<?php echo $item->ruta;?>" /></td>
			  </th>
			</tr>
			<tr>
		      <th style="width: 25px;background-color: #006699; color: white;">Titulo</th>
		      <th style="background-color: #006699; color: white;"><input type="text" name="titulo" value="<?php echo $item->titulo;?>" style="width: 220px;background-color: white; color: black;" ></th>
			</tr>
			<tr>
			  <th style="width: 25px;background-color: #006699; color: white;">Nombre</th>
			  <th style="background-color: #006699; color: white;"><input type="text" name="ruta" value="<?php echo $item->ruta;?>" style="width: 220px;background-color: white; color: black;" ></th>
			  <?php endforeach; ?>
			</tr>
			</thead>
		    <tbody>	
		      <!-- <tr>
				<td colspan="4"><input type="submit" value="Guardar" class="btn btn-primary btn-lg btn-block btn-success"><i class="glyphicon glyphicon-floppy-disk"></i></td>
			  </tr> -->
		    </tbody>
		  </table>
		  <input type="submit" value="Guardar" class="btn btn-primary btn-lg btn-block btn-success">
		</form>
	  </div>
	  <a class="btn btn-primary btn-lg btn-block btn btn-danger" href="<?php echo base_url('cimagen');?>">Cancelar</a>
	</div>
  </div>
</div>

