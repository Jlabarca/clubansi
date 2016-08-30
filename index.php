<!DOCTYPE html>
<!--[if IE 8]>          <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>          <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
<head>
    <!-- Page Title -->
    <title>Club ANSI</title>

    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Meta Tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Theme Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Dosis:300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/cropper.min.css">
    <link rel="stylesheet" href="css/cropManager.css">
    <link rel="stylesheet" href="css/sweetalert.css">

    <link rel="stylesheet" type="text/css" href="components/owl-carousel/owl.carousel.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/owl-carousel/owl.transitions.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="components/owl-carousel/owl.transitions.css" media="screen" />
    <!-- Magnific Popup core CSS file -->

    <!-- Main Style -->
    <link id="main-style" rel="stylesheet" href="css/style.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Updated Styles -->
    <link rel="stylesheet" href="css/updates.css">

    <!-- Responsive Styles -->
    <link rel="stylesheet" href="css/responsive.css">

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
        <link rel="stylesheet" type="text/css" href="css/ie.css" />
    <![endif]-->


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script type='text/javascript' src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
      <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
</head>
<body class="blank-page">
    <div id="page-wrapper">
        <header id="header">
            <div class="container">
                <div class="header-inner">
                    <div class="branding" style = "text-align: center !important;">
                        <h1 class="logo" >
                          <br>
                           <a href="index.html">Club
                             <img src="images/ansi\logo.png" style = "max-width: 63%; width:70px">
                           </a>
                          <br>
                        </h1>
                    </div>

                </div>
            </div>

        </header>

        <div id="content" class = "boxes">
          <div id="index" class="container">
            <hr class="color-light1">
            <p>Bienvenido a nuestro servicio de asesoramiento online, donde podrás encontrar los mejores planes nutricionales, de entrenamiento y recomendaciones para tu correcta suplementación.</p>
            <img src="images/ansi\athlete.png" style = "max-width: 63%; width:230px">
            <br>
            <br>
            <div class="box"><a href="javascript:transition()" class="btn btn-lg style1">Ingresar</a></div>
            <div class="box"><a href="https://www.ansi.cl/" class="btn btn style4">Volver</a></div>
              <div id="main" class="col-md-10 col-lg-8">
                <div class="copyright-area">
                    <div class="copyright">
                          &copy;  Club ANSI 2016
                    </div>
                </div>
            </div>
          </div>
          <div id="login" class="container">
            <hr class="color-light1">
            <p>Ingresa con tu cuenta de usuario</p>
            <br>
            <input type="text" id="lemail"placeholder="Usuario" class="input-text">
            <br><br>
            <input type="password" id="lcontraseña" placeholder="Contraseña" class="input-text" >
            <br><br>
            <div class="box"><a href="javascript:login()" class="btn btn-lg style1">Ingresar</a></div>
            <a href="#" ><img src="images/fb_login.png" style = "max-width: 63%; width:230px"></a>
            <br><br>
            <div class="box"><a href="javascript:transition()" class="btn btn style4">Crear Cuenta</a></div>
              <div id="main" class="col-md-10 col-lg-8">
                <div class="copyright-area">
                    <div class="copyright">
                          &copy;  Club ANSI 2016
                    </div>
                </div>
            </div>
          </div>
          <div id="datos" class="container">
              <br><br>
              <form>

                  <div class="form-group column-2 no-column-bottom-margin">
                  </div>
                  <div class="row">
                      <input type="text" id="email" placeholder="Email" class="input-text">
                  </div>
                  <br>
                  <div class="row">
                    <input type="text" id="nombre" placeholder="Nombre" class="input-text">
                  </div>
                  <br>
                  <div class="row">
                    <input type="text" id="apellido" placeholder="Apellido" class="input-text">
                  </div>
                  <br>

                  <br>
                  <br>
                  <div class="row">
                    <div class="col-md-6">
                      <a id = "man" href = "javascript:window.sexo='H';checkInputs();" class="animatedImage">Hombre<img src="images/ansi\athlete_3.png" style = "max-width: 70%; width:300px"></a>
                    </div>
                    <div class="col-md-6">
                      <a id = "woman" href="javascript:window.sexo='M';checkInputs()" class="animatedImage">Mujer<img src="images/ansi\athlete_2.png" style = "max-width: 65%; width:260px"></a>
                    </div>
                  </div>

              </form>

            </div>
          <div id="objetivo" class="container">
                <br><br>

                <form>
                    <h4>Elige tu objetivo</h4>
                    <div class="form-group column-2 no-column-bottom-margin">
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <a id = "muscular" href = "javascript:window.objetivo=1;transition()" class="animatedImage">Ganar masa muscular<br><img src="images/ansi\manfitness2.png" style = "max-width: 80%; width:300px"></a>
                        </div>
                        <div class="col-md-4">
                          <a id = "pgrasa" href = "javascript:window.objetivo=2;transition()" class="animatedImage">Perder grasa<br><img src="images/ansi\right-boxer.png" style = "max-width: 120%; width:300px"></a>
                        </div>
                        <div class="col-md-4">
                          <a id = "sbien" href = "javascript:window.objetivo=3;transition()" class="animatedImage">Sentirse bien<br><img src="images/ansi\fitness.png" style = "max-width: 50%; width:300px"></a>
                        </div>

                    </div>


                </form>

              </div>


              <div id="edad" class="container">
                    <br><br>

                    <form>
                        <h4>Elige tu rango etario</h4>
                        <div class="form-group column-2 no-column-bottom-margin">
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                              <a id = "joven" href = "javascript:window.retario=1;transition()" class="animatedImage">Joven<br><img src="images/ansi\joven.png" style = "max-width: 80%; width:300px"></a>
                            </div>
                            <div class="col-md-4">
                              <a id = "medio" href = "javascript:window.retario=2;transition()" class="animatedImage">20-39<br><img src="images/ansi\medio.png" style = "max-width: 120%; width:300px"></a>
                            </div>
                            <div class="col-md-4">
                              <a id = "senior" href = "javascript:window.retario=3;transition()" class="animatedImage">Sobre 40<br><img src="images/ansi\senior.png" ></a>
                            </div>

                        </div>


                    </form>

                  </div>


              <div id="imagen" class="container">
                      <br><br>

                      <form>
                          <h4>Para terminar carga tu imagen de perfil y elige una contraseña</h4>
                          <div class="form-group column-2 no-column-bottom-margin">
                          </div>
                          <div class="row">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-4">
                                  <!-- <h3 class="page-header">Demo:</h3> -->
                                  <div class="img-container">
                                    <img id="image" alt="Picture">
                                  </div>
                                </div>
                                <div class="col-md-4"></div>


                              </div>
                              <br>
                              <label class="btn btn-primary btn-upload" for="inputImage" title="Upload image file">
                                        <input type="file" class="sr-only" id="inputImage" name="file" accept="image/*">
                                        <span class="docs-tooltip" data-toggle="tooltip" title="Buscar Imagen">Buscar Imagen
                                        </span>
                                      </label>
                            </div>



                          </div>
                          <br><br><br>
                          <div class="row">
                            <input type="password" id = "contraseña" placeholder="Contraseña" class="input-text" >
                            <br><br>
                            <input type="password" id = "contraseña2" placeholder="Repetir Contraseña" class="input-text" >
                          </div>
                          <br><br>
                          <div class="box"><a href="javascript:checkContraseña()" class="btn btn-lg style1">Ingresar</a></div>
                          <div id="resultado"></div>

                      </form>


              </div>
      </div>


    </div>

    <!-- Javascript -->
    <script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
    <script type="text/javascript" src="js/modernizr.2.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate-1.2.1.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Magnific Popup core JS file -->
    <script type="text/javascript" src="components/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.stellar.min.js"></script>

    <!-- waypoint -->
    <script type="text/javascript" src="js/waypoints.min.js"></script>

    <!-- Owl Carousel -->
    <script type="text/javascript" src="components/owl-carousel/owl.carousel.min.js"></script>

    <!-- plugins -->
    <script type="text/javascript" src="js/jquery.plugins.js"></script>

    <script type="text/javascript" src="js/velocity.js"></script>
    <script type="text/javascript" src="js/velocity.ui.js"></script>
    <script type="text/javascript" src="js/cropper.min.js"></script>
    <script type="text/javascript" src="js/cropManager.js"></script>
    <script type="text/javascript" src="js/sweetalert.min.js"></script>

    <!-- load page Javascript -->
    <script type="text/javascript" src="js/main.js"></script>

    <script type="text/javascript">


        $(".animatedImage").hover(function() { // mouse enter
          $(this).velocity({ opacity: 0.5 }, { duration: 200 });
        }, function() { // mouse exit
          $(this).velocity({ opacity:  1 }, { duration: 200 });
        });


        $(document).ready(function () {
            $(".animatedImage").hide();
            var allBoxes = $("div.boxes").children("div");
            allBoxes.each(function () {
                $(this).hide();
            });
            allBoxes.first().show();
            //transitionBox(null, allBoxes.first());

        });


        function transition(){

          var from = $(".boxes").children(":visible").first();
          var to =  from.next("div");

          from.fadeOut(500, function () {
            to.fadeIn(500, function () {
              animar(to);
            });
          });
        }



        function animar(to){
          $(".animatedImage").hide();
          switch(to.attr('id')){
            case 'datos':
              $("#man").velocity("transition.slideRightBigIn");
              $("#woman").velocity("transition.slideLeftBigIn");
              break;
            case 'objetivo':
              $("#muscular").velocity("transition.slideRightBigIn");
              $("#pgrasa").velocity("transition.slideLeftBigIn");
              $("#sbien").velocity("transition.slideLeftBigIn");
              break;
            case 'edad':
              $("#joven").velocity("transition.slideRightBigIn");
              $("#medio").velocity("transition.slideLeftBigIn");
              $("#senior").velocity("transition.slideLeftBigIn");
              break;
            case 'imagen':
              $("#image").attr("src", "images/user.png");
              break;
          }

        }


//Datos ingreso
      window.sexo = "";
      window.objetivo = 0;
      window.retario = 0;


      function checkDatos(){
          console.log($("#email").val());
          console.log($("#nombre").val());
          console.log($("#apellido").val());
          console.log(window.sexo);
          console.log(window.objetivo);
          console.log(window.retario);
      }

      function checkInputs(step){
        //checkDatos();
        if(!isEmail($("#email").val()))
            swal(
              'Error',
              'Dirección de correo electrónico no válida',
              'error'
            )
        else if(!$("#nombre").val()  || !$("#apellido").val())
          swal(
            'Error',
            'Rellenar campos vacios',
            'error'
          )
        else
          transition();

      }
      function isEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        return regex.test(email);
      }

      function checkContraseña() {
        if($("#contraseña").val()==$("#contraseña2").val())
            registrarUsuario()
        else
            sweetAlert({
              title: "Error",
              text: "Las contraseñas no coinciden",
              type: "error"
            });
      }
      function registrarUsuario() {
        swal({
        						title: "Registrando",
        						showConfirmButton: false,
        						imageUrl: "images/progress.gif",
        						imageSize: '140x140',
        						timer: 1000
        					}, function() {
        						$.ajax({
        							type: 'POST',
        							url: "php/insertarUsuario.php",
        							dataType: 'JSON',
        							data: "&email="+$("#email").val()+
                            "&nombre="+$("#nombre").val()+
                            "&apellido="+$("#apellido").val()+
                            "&contrasena="+$("#contraseña").val()+
                            "&sexo="+window.sexo+
                            "&objetivo="+window.objetivo+
                            "&retario="+window.retario,
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
        							success: function(data) {

                        console.log(data);
                        if(data.error){
                          sweetAlert({
                            title: "Error",
                            text: data.msg,
                            type: "error"
                          });
                        }else{
                          try {
                            storeImage(data.id);
                          }
                          catch(e) {
                             console.log("Imagen default");
                          }
                          sweetAlert({
                            title: "",
                            text: data.msg,
                            type: "success",
                            confirmButtonText: "Entrar"
                            }, function(isConfirm){
                              if (isConfirm){
                                $("#lemail").val($("#email").val());
                                $("#lcontraseña").val($("#contraseña").val());
                                login();
                              }
                          });
                        }
                      }
    							});
                  }
              );
      }

      function login(){

        $.ajax({
            type: "POST",
            dataType:"json",
            url: "php/checklogin.php",
            data: "email="+$("#lemail").val()+"&contrasena="+$("#lcontraseña").val(),
            tryCount : 0,
            retryLimit : 3,
            success: function(data){
              if(!data.error)
                document.location.href = "admin.php";
              else
                sweetAlert({
                  title: "Error",
                  text: data.msg,
                  type: "error"
                });

            },
            error : function(xhr, textStatus, errorThrown ) {
              sweetAlert({
                title: "Error",
                text: "Error en el servidor",
                type: "error"
              });
            }
            });

      }



      function storeImage(id){
        $("#image").cropper('getCroppedCanvas').toBlob(function (blob) {
                var formData = new FormData();

                formData.append('image', blob);
                $.ajax({
                  url: 'php/storeImage.php?id='+id,
                  method: "POST",
                  data: formData,
                  processData: false,
                  contentType: false,
                  success: function (data) {
                    console.log('Upload success');
                  //  console.log(data);
                    //$( "#resultado").append( data );

                  },
                  error: function () {
                    console.log('Upload error');
                  }
                });
              });
      }
    </script>



</body>
</html>
<style>

</style>
