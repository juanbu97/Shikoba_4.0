<?php


$user_id = $_GET['user_id'];
$token =$_GET['token'];



?>
<html>
	<head>
		<title>Cambiar Password</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
        
		<link rel="stylesheet" href="css/index.css" >
	</head>
	<nav class="navbar bg-nav nav2">
        
        <span class="title">Cambiar Contraseña</span>
        
        
      </nav>
	<body>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Contraseña Modificada</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Su contraseña se ha modificado correctamente.
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" data-dismiss="modal" >Aceptar</button>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalError" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelError" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelError">Error al Modificar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Los campos introducidos no coinciden, por favor vuelva a rellenarlos correctamente.
            </div>
            <div class="modal-footer">
                
                <button type="button" class="btn btn-primary" data-dismiss="modal" >Aceptar</button>
            </div>
            </div>
        </div>
    </div>
		
		
		<div class="container">    
			<div id="loginbox" style="margin: 0 auto;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
				<div class="panel panel-info" >
					    
					
					<div style="padding-top:30px" class="panel-body" >
						
						<form id="loginform" class="form-horizontal" role="form" action="guarda_pass.php" method="POST" autocomplete="off">
							
							<input type="hidden" id="user_id" name="user_id" value ="<?php echo $user_id; ?>" />
							
							<input type="hidden" id="token" name="token" value ="<?php echo $token; ?>" />
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Nueva Contraseña</label>
								<div class="col-md-9">
									<input id="password" type="password" class="form-control" name="password" placeholder="Contraseña" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="con_password" class="col-md-3 control-label">Confirmar Contraseña</label>
								<div class="col-md-9">
									<input id="password_con" type="password" class="form-control" name="con_password" placeholder="Confirmar Contraseña" required>
								</div>
							</div>
							
							<div style="margin-top:10px" class="form-group">
								<div class="col-sm-12 controls">
									<button id="btn-login" type="submit" class="btn btn-md btn-primary ">Modificar</a>
								</div>
							</div>   
						</form>
					</div>                     
				</div>  
			</div>
		</div>
	</body>
    <script src="js/jquer.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    
   
    <script>
    $(document).ready(function(){
        $("#loginform").on("submit", function(e){
            console.log($('#user_id').val());
            e.preventDefault();
            if($('#password').val() === $('#password_con').val()){
                $.ajax({
                    type : 'post',	//Request method: GET, POST  
                    url : 'http://cpd.iesgrancapitan.org:9117/shikobapp/guarda_pass.php',  //Where to send the data
                    data: { pass: $('#password').val(), userid: $('#user_id').val()},  //What data you want to send
                    success:function(data) {  
                        
                        $('#exampleModal').modal('toggle');
                    }
             })
             
            }else{
                
                $('#exampleModalError').modal('toggle');
            }
            
        })
    });
    </script>
</html>