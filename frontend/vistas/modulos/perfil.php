 	<!--BOOTSTRAP-->
 	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="vistas/modulos/css/perfil.css">

    <!--FONTAWESOME-->

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 
    <script>
       if ($("#nav-profile-tab").attr("checked")){
            $("#nav-home-tab").css("display", "block");
        }else{
        $("#nav-home-tab").css("display", "none");
        }

        if ($("#nav-home-tab").attr("checked")){
            $("#nav-profile").css("display", "block");
        }else{
        $("#nav-profile").css("display", "none");
        }
    </script>



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

				<nav>
					<div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
						<a class="nav-item nav-link" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
							aria-controls="nav-home" aria-selected="true"><i class="fa fa-list-ul"></i> MIS COMPRAS</a>
						<a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
							role="tab" aria-controls="nav-profile" aria-selected="false"><i class="fa fa-list-ul"></i>
							MI LISTA DE DESEOS</a>
						<a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
							role="tab" aria-controls="nav-contact" aria-selected="false"><i class="fa fa-list-ul"></i>
							EDITAR PERFIL</a>
						<a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about" role="tab"
							aria-controls="nav-about" aria-selected="false"><i class="fa fa-list-ul"></i> VER OFERTAS</a>
					</div>
                </nav>
                
				<div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                    <!--=====================================
			            PESTAÑA DE MIS COMPRAS
			        ======================================-->
					<div class="tab-pane fade" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <br> 
                        <div class="card mt-2">
                            <div class="row">
                                <div class="col-md-2">
									
                                    <img class="img-fluid" src="vistas/modulos/img/productos/accesorios/accesorios01.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="card-title mt-3 text-uppercase">UNDERGROUD</h2>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima assumenda nemo, autem fuga non, ullam recusandae earum nesciunt omnis vitae quod molestias id accusamus nobis dolor dolorum. Quas, error et!</p>
                                   
								<button type="button" class="btn btn-outline-secondary">VER EL LIBRO</button>
								<p class="float-right">Comprado el 20-05-2019</p>		
                                </div>
                                <div class="col-md-2">
									
									<button type="button" class="btn btn-warning mt-3 " style="color: white;">Calificar Producto </button>
									<br> <br>
									<div class="stars">
                                        <form action="">
                                            <input class="star star-5" id="star-5" type="radio" name="star"/>
                                            <label class="star star-5" for="star-5"></label>
                                            <input class="star star-4" id="star-4" type="radio" name="star"/>
                                            <label class="star star-4" for="star-4"></label>
                                            <input class="star star-3" id="star-3" type="radio" name="star"/>
                                            <label class="star star-3" for="star-3"></label>
                                            <input class="star star-2" id="star-2" type="radio" name="star"/>
                                            <label class="star star-2" for="star-2"></label>
                                            <input class="star star-1" id="star-1" type="radio" name="star"/>
                                            <label class="star star-1" for="star-1"></label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                         </div>
						<br>
						<div class="card mt-2">
                            <div class="row">
                                <div class="col-md-2">
                                    <img class="img-fluid" src="C:/Users/Lucia/Desktop/imagenes/KATYA2.jpg" alt="">
                                </div>
                                <div class="col-md-8">
                                    <h2 class="card-title mt-3 text-uppercase">UNDERGROUD</h2>
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima assumenda nemo, autem fuga non, ullam recusandae earum nesciunt omnis vitae quod molestias id accusamus nobis dolor dolorum. Quas, error et!</p>
                                   
									<div class="btn-group" role="group" aria-label="Basic example">
										<button type="button" class="btn btn-primary"> <i class="fas fa-check"></i> Despachado</button>
										<button type="button" class="btn btn-info"><i class="fas fa-clock"></i> Enviado</button>
										<button type="button" class="btn btn-success"><i class="fas fa-clock"></i> Entregado</button>
									</div>
								<p class="float-right">Comprado el 20-05-2019</p>		
								<br>
                                </div>
                                <div class="col-md-2">
									
									<button type="button" class="btn btn-warning mt-3 " style="color: white;">Calificar Producto </button>
									<br> <br>
									<div class="stars">
                                        <form action="">
                                            <input class="star star-5" id="star-5" type="radio" name="star"/>
                                            <label class="star star-5" for="star-5"></label>
                                            <input class="star star-4" id="star-4" type="radio" name="star"/>
                                            <label class="star star-4" for="star-4"></label>
                                            <input class="star star-3" id="star-3" type="radio" name="star"/>
                                            <label class="star star-3" for="star-3"></label>
                                            <input class="star star-2" id="star-2" type="radio" name="star"/>
                                            <label class="star star-2" for="star-2"></label>
                                            <input class="star star-1" id="star-1" type="radio" name="star"/>
                                            <label class="star star-1" for="star-1"></label>
                                        </form>
                                    </div>
                                </div>
                            </div>
                         </div>
					</div>
					

			        <!--=====================================
			        PESTAÑA DESEOS
                    ======================================-->
					<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
						
                        <br> <br>
						<div id="products" class="row view-group">
							<div class="item col-xs-4 col-lg-3">
								<div class="thumbnail card">
									<div class="img-event">
										<div class="img-box">
											<!--Div para efecto zoom-hover-->
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
												<!--BOTON DE VER DETALLES DE PRODUC.-->
												<a class="mi-boton btn btn-danger glyphicon glyphicon-heart"
													href="#"></a>
												<!--BOTON QUE AGREGA A FAVORITOS.-->
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
												<!--BOTON DE VER DETALLES DE PRODUC.-->
												<a class="mi-boton btn btn-danger glyphicon glyphicon-heart"
													href="#"></a>
												<!--BOTON QUE AGREGA A FAVORITOS.-->
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
												<!--BOTON DE VER DETALLES DE PRODUC.-->
												<a class="mi-boton btn btn-danger glyphicon glyphicon-heart"
													href="#"></a>
												<!--BOTON QUE AGREGA A FAVORITOS.-->
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
												<!--BOTON DE VER DETALLES DE PRODUC.-->
												<a class="mi-boton btn btn-danger glyphicon glyphicon-heart"
													href="#"></a>
												<!--BOTON QUE AGREGA A FAVORITOS.-->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
                    </div>
                    
					<!--=====================================
			        PESTAÑA PERFIL
			        ======================================-->
					<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
						
					<div class="card mt-3">
						<!---->
                            <div class="row">
                                <div class="col-md-2 center-block">
									<img class="img-fluid mt-5 " src="vistas/modulos/css/usuarios/40/944.jpg" alt="">
									<button type="button" class="btn btn-secondary mt-5 ">Cambiar foto</button>
								</div>

								<div class="col-md-1"> </div> 
						<!---->
                    			<div class="col-md-8 float-right">
										<form class="form-horizontal " role="form">
											<fieldset>
												<div class="input-group mt-5">
													<span class="input-group-addon"><i class="fa fa-user"></i></span>
													<input type="text" class="form-control ng-pristine ng-valid" placeholder="website url" ng-model="memberData.website">
												</div>

												<div class="input-group mt-5">
													<span class="input-group-addon"><i class="fa fa-globe"></i></span>
													<input type="text" class="form-control ng-pristine ng-valid" placeholder="website url" ng-model="memberData.website">
												</div>

												<div class="input-group mt-5">
													<span class="input-group-addon"><i class="fa fa-globe"></i></span>
													<input type="text" class="form-control ng-pristine ng-valid" placeholder="website url" ng-model="memberData.website">
												</div>
												<button type="button" class="btn btn-warning mt-5">Actualizar Datos</button>
												<button type="button" class="btn btn-danger float-right mt-5">Eliminar Cuenta</button>
											</fieldset>
										</form>
								</div>
							<!---->
                            </div>
                         </div>
						
						
                        
					</div>
					<!--=====================================
			        PESTAÑA VER OFERTAS
			        ======================================-->
					<div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
						<br>
						Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim
						occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit
						dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse
						consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod
						tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non
						adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat
						ex.
					</div>
				</div>
			</div>
	<!--=====================================
	 VENTANA MODAL PARA COMENTARIOS
	 ======================================-->
    </div>
</div>