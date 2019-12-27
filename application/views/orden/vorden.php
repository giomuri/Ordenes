	<br><br><br>
	<div class="box box-primary">
		<div class="box-body">
		<div class="col-sm-10">
	    	<!-- <div class="box box-primary"> -->
	    	<table id="tblPersonas" class="table table-bordered table-striped">
	    		<?php $id_tecnico = $this->session->userdata('s_idPersona');?>
	    		<?php echo $id_tecnico;?>
			    <thead>
				    <tr>
				      <th style="width: 5%;background-color: #006699; color: white;">#</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Numero Orden</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Cliente</th>
				      <th style="width: 10%;background-color: #006699; color: white;">Tecnico</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Articulo</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Fecha Orden</th>
                      <th style="width: 10%;background-color: #006699; color: white;">...</th>
                      <th style="width: 10%;background-color: #006699; color: white;">Accion</th>
				    </tr>
			    </thead>
			    <tbody>
			    	<?php $i=0; ?>
			    	<?php foreach ($res as $item): ?>
			    		<?php 
			    			$id = $item->idOrden;
			    			$i++; 

			    		?>
			    	<tr>
			            <th><?php echo $i;?></th>
			            <th><a href="<?php echo base_url('corden/updateOrdenId/'.$item->idOrden.'/'.$id_tecnico);?>"><?php echo $item->idOrden;?></a></th>
			            <th><?php echo $item->cliente;?></th>
                        <th><?php echo $item->nombre." ".$item->appaterno." ".$item->apmaterno;?></th>
                        <th><?php echo $item->nomArticulo;?></th>
                        <th><?php echo $item->fechaOrden;?></th>
			            <th></th>
			            <th>
			            	<!--<a class="btn btn-default" href="<?php echo base_url('corden/verOrdenId/'.$id);?>"><i class="glyphicon glyphicon-eye-open"></i></a>-->
			            	<a class="btn btn-default" href="<?php echo base_url('corden/deleteOrdenId/'.$item->idOrden.'/'.$id_tecnico);?>"><i class="glyphicon glyphicon-trash"></i></a>

			            	<a class="btn btn-default" href="<?php //echo base_url('corden/getOrdenId/'.$item->idOrden);?>"><i class="glyphicon glyphicon-pencil"></i></a>
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

	<a class="btn btn-success" href="<?php echo base_url('corden/newOrden');?>"><i class="glyphicon glyphicon-plus"></i> &nbsp;Agregar orden</a>
