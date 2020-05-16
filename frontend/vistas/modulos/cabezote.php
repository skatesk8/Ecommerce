
<body>
    <nav class="navbar navbar-expand-lg navbar-dark gris scrolling-navbar fixed-top">

      <div class="container">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">



          <ul class="navbar-nav mr-auto">
          <li class="nav-item">
              <a href="https://www.facebook.com" class="nav-link" target="_blank">
                <i class="fa fa-facebook"></i>
              </a>
            </li>

            <li class="nav-item">
              <a href="https://twitter.com" class="nav-link" target="_blank">
                <i class="fa fa-twitter"></i>
              </a>
            </li>

            <li class="nav-item">
              <a href="https://youtube.com" class="nav-link" target="_blank">
                <i class="fa fa-youtube"></i>
              </a>
            </li>

            <li class="nav-item">
              <a href="https://instagram.com" class="nav-link" target="_blank">
                <i class="fa fa-instagram"></i>
              </a>
            </li>

            
          </ul>
<!--------------------------------- INGRESAR------------------------------------------------------------------------------------------------>
          <ul class="navbar-nav nav-flex-icons">  
          <button type="button"class="btn btn-warning" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Ingresar</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"  id="exampleModalLabel">Ingresar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Correo Electronico:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="password" name="password" id="password" class="form-control" /> 
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning">Enviar</button>
      </div>
    </div>
  </div>
</div>
<!--------------------------------- INGRESAR------------------------------------------------------------------------------------------------>

<!--------------------------------- REGISTRAR------------------------------------------------------------------------------------------------>
<button type="button" name="login"  class="btn btn-warning" data-toggle="modal" data-target="#loginModal">Registrar</button>  
               
<div id="loginModal" class="modal fade" role="dialog">  
      <div class="modal-dialog">  
   <!-- Modal content-->  
           <div class="modal-content">  
                <div class="modal-header">  
                <h4 class="modal-title">Registrar</h4>
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                       
                </div>  
                <div class="modal-body">  
                     <label>Username</label>  
                     <input type="text" name="username" id="username" class="form-control" />  
                     <br />  
                     <label>Username</label>  
                     <input type="text" name="username" id="username" class="form-control" />  
                     <br /> 
                     <label>Password</label>  
                     <input type="password" name="password" id="password" class="form-control" />  
                     <br /> 
                     <button type="button" name="login_button" id="login_button" class="btn btn-warning">Login</button>  
                </div>  
           </div>  
      </div>  
 </div>  
</ul>
<!--------------------------------- REGISTRAR------------------------------------------------------------------------------------------------>

      </nav>

      <section class="fondo">
        

      </section>


</body>
