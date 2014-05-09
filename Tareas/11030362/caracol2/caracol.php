<?php
include ('../layouts/header.php');
?>
<?php // echo BASEURL . "views/images/imgEventos/" . $arreglo[$key]['imagen']; ?>


<div class="container-fluid" id="tapete"> 
		<div class="row">
		<div class="col-md-12 color7"><h1>"</h1></div>
		</div>
	<div class="row">
        <div class="col-md-3">
			<div class="row">
            <div class="col-md-12">
				<div class="input-group">
				<span class="input-group-addon">Produndidad:</span>
				<input type="text" class="form-control"  id="txt_pozo" placeholder="En metros">	
				</div>
				</div>
					
            <div class="col-md-12">
				<div class="input-group">
				<span class="input-group-addon" >Sube:</span>
				<input type="text" class="form-control" id="txt_sube" placeholder="En metros">
				</div>
				</div>
					
            <div class="col-md-12">
                <div class="input-group">
				<span class="input-group-addon">Resbala:</span>
				<input type="text" class="form-control" id="txt_resbala" placeholder="En metros">
				</div>
                </div>
						
            <div class="col-md-12">  <!--BOTON....-->
                <button type="button" class="btn btn-warning" id="btn_aceptar">ACEPTAR</button>
                </div>
				</div>
				</div>
			 
             <div <div class="col-md-4"> <!--IMAGEN CAMBIANTE-->
                <center><img src="" id="cambio_imag" height="200" alt=""></center>
                </div>
			
             <div class="col-md-4"><!--NÚMERO DE DÍAS....-->
                 <center><h1><span class="label label-primary">Número de días:</span></h1></center>
                 <center><h2 id="dia_numero"><p>0</p></h2></center>
				 </div>
				
             <div class="row" id="fondo"> <!--IMAGENES....-->
                 <div class="col-md-12" id="fondo">
                 <center><img src="../img/caracol2.png" id="caracol_agropecuario" height="80" alt="Img_caracol">
                 </center>
                 <center><img src="../img/pozo.jpg" id="id_pozo" height="500" alt="Img_pozo">
                 </center>
				 </div>
                 </div>
    </div>
    </div>
	

<?php
include ('../layouts/footer.php');
?>