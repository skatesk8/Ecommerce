<!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="vistas/css/carrito.css">

    <!--JS-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
<!--=====================================
TABLA CARRITO DE COMPRAS
======================================-->

<div class="container-fluid">

	<div class="container">
			
			<h1>Carrito</h1>

			<!--=====================================
			CABECERA CARRITO DE COMPRAS
			======================================-->

			<!--=====================================
			CUERPO CARRITO DE COMPRAS
			======================================-->

                 
        <div id="loginbox" style="margin-top:20px;" class="mainbox col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
            <!--_________________CARD______________-->
            <div class="card text-center center-block">
                <div class="card-header">Carrito de Compras</div>
                <!--_________________Cuerpa :V______________-->
                <div class="card-body mb-3">
                    <!--_________________Tabla______________-->
                    <table class="table">
                        <thead>
                            <TR>
                                <th scope="col">Eliminar </th>
                                <th scope="col">Imagen </th>
                                <th scope="col">PRODUCTO</th>
                                <th scope="col">PRECIO</th>
                                <th scope="col">CANTIDAD</th>
                                <th scope="col">SUBTOTAL</th>
                            </TR>
                        </thead>
                        <tbody>
                            <tr>
                                <!--________________Boton de eliminar______________-->
                                <td><button class="btn btn-warning glyphicon glyphicon-remove"></button></td>
                                <!--________________Imagen______________-->
                                <td><img width="100px" heigth="50px" src="z.png"></td>
                                <!--________________Nombre del producto_____________-->
                                <td>Zapatos Chingones</td>
                                <!--_________________Precio______________-->
                                <td>150</td>
                                <!--_________________Cantidad______________-->
                                <td>
                                    <input type="number" value="1" min="1" max="100" class="form-control"/>
                                </td>
                                <!--_________________Subtotal______________-->
                                <td>150</td>
                            </tr>
                            <tr>
                                <!--________________Boton de eliminar______________-->
                                <td><button class="btn btn-warning glyphicon glyphicon-remove"></button></td>
                                <!--________________Imagen______________-->
                                <td><img width="100px" heigth="50px" src="vistas/img/plantilla/z.png"></td>
                                <!--________________Nombre del producto_____________-->
                                <td>Zapatos Chingones</td>
                                <!--_________________Precio______________-->
                                <td>150</td>
                                <!--_________________Cantidad______________-->
                                <td>
                                    <input type="number" value="1" min="1" max="100" class="form-control"/>
                                </td>
                                <!--_________________Subtotal______________-->
                                <td>150</td>
                            </tr>
                        </tbody>
                    </table>
                    <!--_________________TABLA DE TOTAL ______________-->
                    <table class="table table-hover w-25 float-right">
                        <thead class="text-right">
                            <tr>
                                <th>Total</th>
                                <th>150</th>
                            </tr>
                        </thead>
                    </table>
                    <br><br></br>


                </div>
                <div class="card-footer text-muted">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-warning btn-xl js-scroll-trigger" data-toggle="modal"
                        data-target="#exampleModalLong">
                        REALIZAR PAGO
                    </button>
                </div>
            </div>
        </div>
    </div>



				

			<!--=====================================
			SUMA DEL TOTAL DE PRODUCTOS
			======================================-->

			
			<!--=====================================
			BOTÓN CHECKOUT
			======================================-->
			<!-- Button trigger modal -->
			

    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="panel panel-warning">
                        <!--_________________Titulo______________-->
                        <div class="panel-heading">
                            <div class="panel-title text-center">Realizar Pago</div>
                        </div>
                        <br>
                        <!--_________________Titulo elejir la forma de pago ______________-->
                        <div class="alert alert-secondary col-10 text-center center-block" role="alert">
                            Elejir la forma de pago
                        </div>
                        <!--________________RADIOBUTTONS____________-->
                        <div class="d-flex justify-content-center">
                            <label class="rad col-md-4">
                                <input type="radio" name="rad1" value="a">
                                <i></i>
                            </label>
                            <label class="rad">
                                <input type="radio" name="rad1" value="b" checked>
                                <i></i>
                            </label>
                        </div>
                        <!--_________________Imagenes______________-->
                        <div class="d-flex justify-content-center">
                            <img src="vistas/img/plantilla/paypal.png" class="rounded float-left w-50 col-md-4" alt="...">
                            <img src="vistas/img/plantilla/ima1.png" class="rounded float-right w-50 col-md-4" alt="...">
                        </div>
                        <!--_________________Titulo elejir la forma de pago ______________-->
                        <br>
                        <div class="alert alert-secondary col-10 text-center center-block" role="alert">
                            Productos a Comprar
                        </div>
                        <!--_________________TABLA DE PRODUCTOS ______________-->
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Cantidad</th>
                                    <th>Precio</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>John</td>
                                    <td>Doe</td>
                                    <td>john@example.com</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>
                        <!--_________________TABLA DE TOTAL ______________-->
                        <table class="table table-hover w-50 float-right" style="margin-bottom: 30px;">
                            <thead>
                                <tr>
                                    <td>Subtotal</td>
                                    <td>150</td>
                                </tr>
                                <tr>
                                    <td>Envio</td>
                                    <td>150</td>

                                </tr>
                                <tr>
                                    <td>Impuestos</td>
                                    <td>150</td>

                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <th>150</th>
                                </tr>
                            </thead>
                        </table>
                        <br>
                        <!--_________________Lista ______________-->
                        <div class="form-group col-md-4">
                            <select id="inputState" class="form-control">
                                <option selected>USD</option>
                                <option>Q</option>
                                <option>MXN</option>
                            </select>
                        </div>
                        <!--_________________BOTON DE PAGAR ______________-->
                        <button class="btn btn-warning col-10 text-center center-block">Pagar</button>
                        <br>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
	</div>
</div>