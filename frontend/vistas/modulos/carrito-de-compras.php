<!--BOOTSTRAP-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="estiloLucia.css">

    <!--FONT-->
    <link href="https://fonts.googleapis.com/css2?family=Raleway&display=swap" rel="stylesheet">

    <!--JS-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
		crossorigin="anonymous"></script>
		
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

				<!-- item1 -->
				

			<!--=====================================
			SUMA DEL TOTAL DE PRODUCTOS
			======================================-->

			
			<!--=====================================
			BOTÓN CHECKOUT
			======================================-->
			<!-- Button trigger modal -->
			<button type="button" class="btn btn-warning btn-xl js-scroll-trigger" data-toggle="modal"
        data-target="#exampleModalLong">
        REALIZAR PAGO
    </button>

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
                            <img src="ima2.png" class="rounded float-left w-50 col-md-4" alt="...">
                            <img src="ima1.png" class="rounded float-right w-50 col-md-4" alt="...">
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

</div>