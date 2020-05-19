 	<!--BOOTSTRAP-->
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <!--FONTAWESOME-->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 




<!--=====================================
VALIDAR SESIÓN
======================================-->

<!--=====================================
BREADCRUMB PERFIL
======================================-->

<!--=====================================
SECCIÓN PERFIL
======================================-->
<div class="container-fluid">
     <div id="loginbox" style="margin-top:20px;"
                class="mainbox col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">


			<!--PESTAÑAS-->
			<nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-compras"
                        role="tab" aria-controls="nav-home" aria-selected="true" aria-controls="compras"
                        aria-selected="true"><i class="fa fa-list-ul"></i> MIS COMPRAS</a>
                    </a>

                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-deseos" role="tab"
                        aria-controls="nav-profile" aria-selected="false"><i class="fa fa-list-ul"></i> MI LISTA DE
                        DESEOS</a>

                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-editar" role="tab"
                        aria-controls="nav-contact" aria-selected="false"><i class="fa fa-list-ul"></i> EDITAR
                        PERFIL</a>

                    <a class="nav-item nav-link" id="nav-ofertas-tab" data-toggle="tab" href="#nav-ofertas" role="tab"
                        aria-controls="nav-contact" aria-selected="false"><i class="fa fa-list-ul"></i> VER OFERTAS</a>
                </div>
            </nav>

			<!--=====================================
			PESTAÑA COMPRAS
			======================================-->
			<div class="tab-content" id="myTabContent">
                <!--_________MIS COMPRAS________-->

                <div class="tab-pane fade show active" id="nav-compras" role="tabpanel"
                    aria-labelledby="nav-compras-tab">
                    <!--
                    <div id="products" class="row view-group">
                        <div class="item col-xs-4 col-lg-3">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <div class="img-box">
                                        <!-Div para efecto zoom-hover->
                                        <img class="group list-group-image img-fluid"
                                            src="vistas/img/productos/accesorios/accesorio01.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="caption card-body">
                                    <h6>465</h6>
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Anillo Diamantes</h4>
                                    <p class="group inner list-group-item-text">
                                        GRATIS</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                            </p>
                                        </div>
                                        <div class="col-xs-2 col-md-6">
                                            <a class="btn btn-outline-secondary glyphicon glyphicon-eye-open"
                                                href="#"></a>
                                            <!-BOTON DE VER DETALLES DE PRODUC.->
                                            <a class="mi-boton btn btn-warning glyphicon glyphicon-heart" href="#"></a>
                                            <!-BOTON QUE AGREGA A FAVORITOS.->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item col-xs-4 col-lg-3">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <div class="img-box">
                                        <img class="group list-group-image img-fluid"
                                            src="vistas/img/productos/accesorios/accesorio02.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="caption card-body">
                                    <h6>205</h6>
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Bolso Deportivo Gris</h4>
                                    <p class="group inner list-group-item-text">
                                        GRATIS</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-outline-secondary glyphicon glyphicon-eye-open"
                                                href="#"></a>
                                            <!-BOTON DE VER DETALLES DE PRODUC.->
                                            <a class="mi-boton btn btn-warning glyphicon glyphicon-heart" href="#"></a>
                                            <!-BOTON QUE AGREGA A FAVORITOS.->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item col-xs-4 col-lg-3">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <div class="img-box">
                                        <img class="group list-group-image img-fluid"
                                            src="vistas/img/productos/accesorios/accesorio03.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="caption card-body">
                                    <h6>205</h6>
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Bolso Militar</h4>
                                    <p class="group inner list-group-item-text">
                                        GRATIS</p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-outline-secondary glyphicon glyphicon-eye-open"
                                                href="#"></a>
                                            <!-BOTON DE VER DETALLES DE PRODUC.->
                                            <a class="mi-boton btn btn-warning glyphicon glyphicon-heart" href="#"></a>
                                            <!--BOTON QUE AGREGA A FAVORITOS.->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="item col-xs-4 col-lg-3">
                            <div class="thumbnail card">
                                <div class="img-event">
                                    <div class="img-box">
                                        <img class="group list-group-image img-fluid"
                                            src="vistas/img/productos/accesorios/accesorio04.jpg" alt="" />
                                    </div>
                                </div>
                                <div class="caption card-body">
                                    <h6>325</h6>
                                    <h4 class="group card-title inner list-group-item-heading">
                                        Collar Diamantes</h4>
                                    <p class="group inner list-group-item-text">
                                        GRATIS </p>
                                    <div class="row">
                                        <div class="col-xs-12 col-md-6">
                                            <p class="lead">
                                            </p>
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                            <a class="btn btn-outline-secondary glyphicon glyphicon-eye-open"
                                                href="#"></a>
                                            <!---BOTON DE VER DETALLES DE PRODUC.->
                                            <a class="mi-boton btn btn-warning glyphicon glyphicon-heart" href="#"></a>
                                            <!--------BOTON QUE AGREGA A FAVORITOS.->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container p-4" style="background-color:#FAF0E6"></div>
                -->

                </div>

		  	<!--=====================================
			PESTAÑA DESEOS
			======================================-->
	 			 <!--LISTA DE DESEOS-->
				  <div class="tab-pane fade" id="nav-deseos" role="tabpanel" aria-labelledby="profile-tab">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Provident aspernatur mollitia quod
                        libero
                        dolorum commodi ex, quasi magnam quam, perferendis debitis harum, corporis sed expedita
                        consectetur
                        dolores dicta molestias officiis!</p>
                </div>
		 

			<!--=====================================
			PESTAÑA PERFIL
			======================================-->
	 			<!--EDITAR PERFIL-->
				 <div class="tab-pane fade" id="nav-editar" role="tabpanel" aria-labelledby="contact-tab">
	 				<div class=" col-md-auto ">
							 <br> 
							 <!--imagen-->
							<img src="vistas/img/usuarios/40/944.jpg" class="rounded float-left" alt="usuario">
							<br> <br>
							<!--button de cambiar imagen-->
						<button type="button" class="btn btn-light float-left">Cambiar foto de perfil</button>

						<div class="input-group mb-3 float-right">
  							<div class="input-group-prepend">
    							<span class="input-group-text" id="basic-addon1"><i class="fav fa-user"></i> </span>
  							</div>
  								<input type="text" class="form-control mb-3" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
						</div>

					</div>

				</div>
		 
<!--=====================================
VENTANA MODAL PARA COMENTARIOS
======================================-->
<div class="tab-pane fade" id="nav-ofertas" role="tabpanel" aria-labelledby="contact-tab">...</div>


            </div>

        </div>

    </div>