<h1>Nueva Foto</h1>
<div class="box box-primary">
  <div class="box-body">
	<div class="col-sm-4">
	  <div class="box box-primary">
	    <form method="post" action="<?php echo base_url();?>cimagen/subirImagen" method="POST" enctype="multipart/form-data">
	      <table class="table table-bordered table-striped" style="width: 332	px">
			<thead>
			  <tr>
		      <th style="width: 25px;background-color: #006699; color: white;">ID</th>
		      <th style="background-color: #006699; color: white;"> <input type="text" name="idImagen" value="" style="width: 220px;background-color: white; color: black;"></th>
		    	<!--<th>
				  <td rowspan="3" valign="middle" align="left"><img src="<?=base_url()?>uploads/imagenes/thumbs/<?php echo $item->ruta;?>" /></td>
			    </th>-->	
			</tr>
			<tr>
		      <th style="width: 25px;background-color: #006699; color: white;">Titulo</th>
		      <th style="background-color: #006699; color: white;"><input type="text" name="titImagen" value="" style="width: 220px;background-color: white; color: black;" ></th>
			</tr>
			<tr>
			  <th style="width: 25px;background-color: #006699; color: white;">Cargar Imagen</th>
			  <th style="background-color: #006699; color: white;"><input type="file" name="fileImagen" value="" style="width: 220px;background-color: white; color: black;" ></th>
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
		<?php echo $error;?>
	  </div>
	  <a class="btn btn-primary btn-lg btn-block btn btn-danger" href="<?php echo base_url('cimagen');?>">Cancelar</a>
	</div>
  </div>
</div>