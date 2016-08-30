<?php
  require_once 'header.php';
  require_once("php/facade.php");
  $db = new Facade();
	$db->beginTransaction();
?>
<link rel="stylesheet" href="css/sweetalert.css">

        <div class="page-title-container">
            <div class="page-title">
                <div class="container">
                </div>
            </div>


            <section id="content">
                <div class="container">
                    <div id="main">
                        <div class="woocommerce">
                            <div class="tab-container dashboard row">
                                <div class="col-sm-4 col-md-3" style = "text-align: center;">
                                  <img class = "imagenUsuario" src="userImages/<?php echo $_SESSION['imagen']?>">
                                  <br><br>
                                  <h4><?php echo $_SESSION['nombre']." ".$_SESSION['apellidos'];?></h4>
                                  <br>
                                  <ul class="tabs arrow-circle size-medium box" style = "text-align: left;">
                                        <li class="active"><a href="#account-dashboard" data-toggle="tab">General</a></li>
                                        <li><a href="#personal-info" data-toggle="tab">Información</a></li>
                                        <li><a href="#direccion" data-toggle="tab">Dirección</a></li>
                                        <li><a href="#my-plan" data-toggle="tab">Plan</a></li>
                                        <li><a href="#my-pay" data-toggle="tab">Forma de Pago</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-8 col-md-9">
                                    <div id="account-dashboard" class="tab-content in active">
                                        <h4 class="full-name skin-color">Hola <?php echo $_SESSION['nombre']  ?>!</h4>
                                        <div class="description">
                                            <p>Desde ésta sección tienes la posibilidad de ver y modificar los datos de tu cuenta de usuario.
                                        </div>
                                        <hr class="color-light1">
                                        <h4>General</h4>
                                        <div class="row view-personal-info same-height add-clearfix">
                                            <div class="col-md-6 box">
                                                <div class="Información">
                                                    <h5>Información</h5>
                                                    <div class="description">
                                                        <p>

                                                            <?php echo $_SESSION['email']  ?>
                                                            <br>
                                                            <?php echo 'Objetivo: '.$db->getObjetivo(Array("id"=>$_SESSION['objetivo']))[0]['nombre']  ?>
                                                            <br>
                                                            <?php echo 'Rango Etario: '.$db->getRetario(Array("id"=>$_SESSION['rango_etario']))[0]['nombre']  ?>
                                                        </p>
                                                    </div>
                                                    <a href="#personal-info" data-toggle="tab" class="btn btn-sm style4">modificar</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="Información">
                                                    <h5>Plan</h5>
                                                    <div class="description">
                                                      <p>
                                                      <?php
                                                        if($_SESSION['plan'] != null)
                                                          echo $db->getPlan(Array("id"=>$_SESSION['plan']))[0]['nombre'];
                                                        else
                                                          echo "No estás suscrito a ningún plan.";
                                                      ?>

                                                      </p>
                                                    </div>
                                                    <a href="#my-plan" data-toggle="tab" class="btn btn-sm style4">modificar</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="Información">
                                                    <h5>Forma de pago</h5>
                                                    <div class="description">
                                                        <p>
                                                            No has establecido una forma de pago.
                                                        </p>
                                                    </div>
                                                    <a href="#my-pay" data-toggle="tab" class="btn btn-sm style4">modificar</a>

                                                </div>
                                            </div>
                                            <div class="col-md-6 box">
                                                <div class="Información">
                                                    <h5>Dirección</h5>
                                                    <div class="description">
                                                        <p>
                                                            No has establecido una dirección.
                                                        </p>
                                                    </div>
                                                    <a href="#direccion" data-toggle="tab" class="btn btn-sm style4">modificar</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="personal-info" class="tab-content">
                                        <div class="row">
                                            <div >
                                                <h4>Información de la cuenta</h4>
                                                <form id = "informacion">
                                                    <div class="form-group">
                                                        <input type="text" class="input-text " placeholder="Nombre" name = "nombre"  id = "nuevo_nombre">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" class="input-text " placeholder="Apellido" name="apellidos" id = "nuevo_apellido">
                                                    </div>
                                                    <div class="form-group">
                                                        Objetivo<br>
                                                        <select name = "objetivo">
                                                          <option value="1">Ganar masa muscular</option>
                                                          <option value="2">Perder grasa</option>
                                                          <option value="3">Sentirse bien</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                      Rango etario<br>
                                                      <select name = "rango_etario">
                                                        <option value="1">Joven</option>
                                                        <option value="2">20-40</option>
                                                        <option value="3">Sobre 40</option>
                                                      </select>
                                                    </div>
                                                    <div class="form-group">
                                                      <a  href="javascript:updateUsuario('<?php echo $_SESSION['email']?>')" class="btn style4"> Guardar Información</a>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="my-plan" class="tab-content">
                                      <div class="pricing-table-container">
                                          <div class="row">
                                              <div class="col-sms-6 col-sm-6 col-md-4">
                                                  <div class="pricing-table style2">
                                                      <div class="pricing-table-header">
                                                        <h4 class="pricing-type"  >Plan Básico</h4>
                                                          <div class="pricing-row">
                                                              <div class="st-table">
                                                                  <div class="st-td">
                                                                      <span class="currency-symbol">$</span><span class="price-value">50.000</span>
                                                                      <small>Al mes</small>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <p>Plan Anual</p>

                                                      </div>
                                                      <div class="pricing-table-content">
                                                          <ul>
                                                              <li>1 Plan nutricional</li>
                                                              <li>&nbsp</li>
                                                              <li>1 Plan de entrenamientos al mes</li>

                                                          </ul>
                                                      </div>
                                                      <div class="pricing-table-footer">
                                                        <a  href="javascript:updatePlan('<?php echo $_SESSION['email']?>',1)" class="btn style4"> Seleccionar</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-sms-6 col-sm-6 col-md-4">
                                                  <div class="pricing-table style2 active">
                                                      <div class="pricing-table-header">
                                                        <h4 class="pricing-type"  >Plan Full</h4>
                                                          <div class="pricing-row">
                                                              <div class="st-table">
                                                                  <div class="st-td">
                                                                      <span class="currency-symbol">$</span><span class="price-value">100.000</span>
                                                                      <small>Al mes</small>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <p>Plan Anual</p>

                                                      </div>
                                                      <div class="pricing-table-content">
                                                          <ul>
                                                              <li>1 Plan nutricional</li>
                                                              <li>&nbsp</li>
                                                              <li>2 Planes de entrenamientos al mes</li>

                                                          </ul>
                                                      </div>
                                                      <div class="pricing-table-footer">
                                                        <a  href="javascript:updatePlan('<?php echo $_SESSION['email']?>',2)" class="btn style4"> Seleccionar</a>
                                                      </div>
                                                  </div>
                                              </div>
                                              <div class="col-sms-6 col-sm-6 col-md-4">
                                                  <div class="pricing-table style2">
                                                      <div class="pricing-table-header">
                                                        <h4 class="pricing-type" >Plan Deluxe</h4>
                                                          <div class="pricing-row">
                                                              <div class="st-table">
                                                                  <div class="st-td">
                                                                      <span class="currency-symbol">$</span><span class="price-value">150.000</span>
                                                                      <small>Al mes</small>
                                                                  </div>
                                                              </div>
                                                          </div>
                                                          <p>Plan Anual</p>

                                                      </div>
                                                      <div class="pricing-table-content">
                                                          <ul>
                                                            <li>1 Plan nutricional</li>
                                                            <li>2 Planes de entrenamientos al mes</li>
                                                            <li>1 sesión de kinesiología al mes</li>
                                                          </ul>
                                                      </div>
                                                      <div class="pricing-table-footer">
                                                        <a  href="javascript:updatePlan('<?php echo $_SESSION['email']?>',3)" class="btn style4"> Seleccionar</a>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div id="my-pay" class="tab-content">
                                    Próximamente
                                  </div>
                                    <div id="direccion" class="tab-content">
                                        <div class="row">
                                            <div class="col-md-10 col-lg-8">
                                                <form>
                                                    <h4>Dirección</h4>

                                                    <div class="form-group dropdown">
                                                        <select class="selector full-width  -style">
                                                            <option value="">Pais</option>
                                                            <option value="US">Chile</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group">
                                                        <input type="text" placeholder="Dirección" class="input-text full-width">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Departamento, unidad, etc. (opcional)" class="input-text full-width">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="text" placeholder="Ciudad" class="input-text full-width">
                                                    </div>
                                                    <div class="form-group column-2 no-margin">
                                                        <input type="text" placeholder="Región" class="input-text">
                                                        <input type="text" placeholder="Código Zip" class="input-text">
                                                    </div>
                                                    <div class="form-group column-2 no-margin">
                                                        <input type="text" placeholder="Teléfono" class="input-text">
                                                    </div>
                                                </form>

                                            </div>

                                        </div>
                                        <button onClick="soon()" class="btn btn-medium style1">Guardar</button>

                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


        </div>

        <section id="content">
        </section>

<?php
  $db->close();
  require_once 'footer.php';
?>
<script type="text/javascript" src="js/sweetalert.min.js"></script>

<script>
 function soon(){
   swal("Próximamente!","  ", "info")

 }
  function updatePlan(email, plan){

        $.ajax({
           url: 'php/updatePlan.php',
           dataType: 'json',
           data: "email="+email+"&plan="+plan,
           error: function(xhr, status, error) {
             console.log(error);
             console.log(status);
             console.log(xhr);
             sweetAlert({
               title: "Error",
               text: error,
               type: "error"
             });
           },
           success: function(data){
                console.log(data);
                swal("Plan Registrado!", "El plan se ha registrado exitosamente", "success")
           }
        });
    }

    function updateUsuario(email){
        var form = $('#informacion');
        if($('#nuevo_nombre').val().length > 1 && $('#nuevo_apellido').val().length > 2)
          $.ajax( {
            dataType: 'json',
            url: "php/updateUsuario.php",
            data: form.serialize()+"&email="+email,
            error: function(xhr, status, error) {
              console.log(error);
              console.log(status);
              console.log(xhr);
              sweetAlert({
                title: "Error",
                text: error,
                type: "error"
              });
            },
            success: function( response ) {
              console.log( response );
              swal("Datos Actualizados!", " ", "success")
              setTimeout(function(){
                 window.location.reload(1);
              }, 1000);
            }

        });
        else {
          sweetAlert({
            title: "Error",
            text: "Valores muy cortos",
            type: "error"
          });
        }

      }


      $(document).ready( function() {

      } );
</script>
