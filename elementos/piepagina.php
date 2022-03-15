
<footer style="background-color: rgb(33,37,41);">
    <div class="container-fluid bg-dark text-white text-center p-2 fs-6">
      <h5>Información</h5>
      <div style="text-align: left;margin-left: 20px;">
        <input onClick="informacion()" type="radio" name="INFORMACION" value="histo" id="historia">
        <label for="historia">Historia</label>
        <input onClick="informacion()" type="radio" name="INFORMACION" value="mivi" id="misvis">
        <label for="misvis">Mision & Vision</label>
        <input onClick="informacion()" type="radio" name="INFORMACION" value="borrar" id="borrar">
        <label style="color:gray;position:absolute; right:-15px;" for="borrar"><i class="bi bi-recycle"></i></label>
        <div id="info">
        </div>
        <i class="bi bi-telephone-fill" style="margin-bottom:5px"></i>&nbsp;+504 9636-4564
        <br>
        <i class="bi bi-envelope-fill"></i>&nbsp;devsandjobs@trabajohn.com
        <br>
        <i class="bi bi-facebook"></i>&nbsp;Devs&Jobs 
        <br>
        <br>
        <button style="color:gray;background-color:inherit;"><a href="registro.php" style="margin:10px" >Registrarse</a> </button>
      </div>
      <a href="#inicio" style="position:relative;bottom:0em;right:0;width:50px;height:50px">
        <i class="bi bi-arrow-bar-up" style="color:white;width:50px;"></i>
      </a>
    </div>
    
    <div style="background-color:black; color: white; padding-left: 15px; border-top:1px solid gray;">
      <marquee behavior="" direction="">Desarrollado por Devs & Jobs 2021 © Todos los derechos reservados.</marquee> 
    </div>
  </footer>
  <script src="elementos/informacion.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script> <!-- IMPORTANTEEEEEEEEEEE -->
  </body>
</html>