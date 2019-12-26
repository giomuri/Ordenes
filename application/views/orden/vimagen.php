	<br><br><br>
	<!-- <div class="box box-primary"> 
		<ul>
         <?php foreach ($res as $item): ?>
            <li> <?php echo $item->idImagen.": ".$item->ruta ?> </li>
            
            	<img src="<?=base_url()?>uploads/imagenes/thumbs/<?php echo $item->ruta;?>" />
            
         <?php endforeach; ?>
        </ul>
	-->
	<div class="box box-primary">
		<div class="box-body">
		<div class="col-sm-10">
	    	<!-- <div class="box box-primary"> -->
	    	<table id="tblPersonas" class="table table-bordered table-striped">
			    <thead>
				    <tr>
				      <th style="width: 5%;background-color: #006699; color: white;">#</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Titulo</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Imagen</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Accion</th>
				    </tr>
			    </thead>
			    <tbody>
			    	<?php $i=0; ?>
			    	<?php foreach ($res as $item): ?>
			    		<?php 
			    			$id = $item->idImagen;
			    			$i++; 

			    		?>
			    	<tr>
			            <th><?php echo $i;?></th>
			            <th><?php echo $item->titulo;?></th>
			            <th><img src="<?=base_url()?>uploads/imagenes/thumbs/<?php echo $item->ruta;?>" /></th>
			            <th>
			            	<a class="btn btn-default" href="<?php echo base_url('cimagen/verImagenId/'.$id);?>"><i class="glyphicon glyphicon-eye-open"></i></a>
			            	<a class="btn btn-default" href="<?php echo base_url('cimagen/eliminarImagen/'.$id);?>"><i class="glyphicon glyphicon-trash"></i></a>

			            	<a class="btn btn-default" href="<?php echo base_url('cimagen/getImagenId/'.$id);?>"><i class="glyphicon glyphicon-pencil"></i></a>
			            </th>
			        </tr>
			         <?php endforeach; ?>
			    </tbody>
			  </table>

			<!-- </div> -->
		</div>
		<div class="col-sm-2"><span class='label label-warning' id="spSuma"></span></div>
		</div>
	</div>

	<a class="btn btn-success" href="<?php echo base_url('cimagen/addImagen');?>"><i class="glyphicon glyphicon-plus"></i> &nbsp;Agregar</a>

