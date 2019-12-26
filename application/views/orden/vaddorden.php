<h1>Nueva Orden</h1>
<div class="box box-primary">
  <div class="box-body">
	<div class="col-sm-6">
	  <div class="box box-primary">
	   
	  	<form method="post" action="<?php echo base_url();?>corden/addOrden" method="POST" enctype="multipart/form-data">
	      <table class="table table-bordered table-striped" style="width: 496px">
			<thead>
				<?php $id = $this->session->userdata('s_idPersona');?>
				<?php //echo $id;?>
			  <tr>
		        <th style="width: 160px;background-color: #006699; color: white;">Id</th>
		        <th style="background-color: #006699; color: white;"><input type="text" id="txtId" name="txtId" value="<?php echo $id?>" style="width: 320px;background-color: white; color: black;" readonly></th>
			  </tr>
			  <tr>
		        <th style="width: 160px;background-color: #006699; color: white;">Numero de Orden</th>
		        <th style="background-color: #006699; color: white;"><input type="text" name="txtIdOrden" value="" style="width: 320px;background-color: white; color: black;" ></th>
			  </tr>
              <tr>
		        <th style="width: 160px;background-color: #006699; color: white;">Cliente</th>
		        <th style="background-color: #006699; color: white;"><input type="text" name="txtCliente" value="" style="width: 320px;background-color: white; color: black;" ></th>
			  </tr>
			  <tr>
		        <th style="width: 160px;background-color: #006699; color: white;">Nombre de Articulo</th>
		        <th style="background-color: #006699; color: white;"><input type="text" name="txtNomArticulo" value="" style="width: 320px;background-color: white; color: black;" ></th>
			  </tr>
			  <tr>
		        <th style="width: 160px;background-color: #006699; color: white;">Tipo de Articulo</th>
		        <th style="background-color: #006699; color: white;"><input type="text" name="txtTipArticulo" value="" style="width: 320px;background-color: white; color: black;" ></th>
			  </tr>
              <tr>
		        <th style="width: 160px;background-color: #006699; color: white;">Fecha de Orden</th>
		        <th style="background-color: #006699; color: white;"><input type="date" name="txtFecha" value="" style="width: 320px;background-color: white; color: black;" ></th>
			  </tr>
			</thead>
		    <tbody>	
		    </tbody>
		  </table>
		  <input type="submit" value="Add" class="btn btn-primary btn-lg btn-block btn-success">
		</form>

	  </div>
	  <a class="enlace" href="<?php echo base_url('corden/index/'.$id);?>"><h4>Volver atras</h4></a>
	  <!--<a class="btn btn-primary btn-lg btn-block btn btn-danger" href="<?php //echo base_url('corden/index/'.$id);?>">Cancelar</a>-->
	</div>
  </div>
</div>