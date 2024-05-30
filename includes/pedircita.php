<?php include_once "models/BBDD/mysql.php"; ?>
<?php include_once "models/Cita.php"; ?>
<?php include_once "models/DAO/daoCitas.php"; ?>
<?php include_once "models/servicios/servicioCitas.php"; ?>

<?php
$cita = Cita::fromBody();
?>

<div id="pedirCita" class="grupo-layout-reserve">
  <div class="grupo-container-reserve">
    <div class="grupo-row-reserve">
      <div class="grupo-col-title">
        <img src="media/fixedwidthfixedheight2552-1i7-200h.png" alt="line" class="grupo-blueline" />
        <p class="grupo-title-reserve h2">Pide cita</p>
        <p class="grupo-paragraph-reserve paragraph">
          Encuentra al profesional que mejor se adapte a tus
          necesidades y reserva una cita.
        </p>
      </div>
      <div class="grupo-col-form">
        <form class="grupo-form" method="POST" action="index.php" id="form">
          <div class="grupo-nombreyapellidos">
            <input class="grupo-textform" placeholder="Nombre y apellidos" type="text" name="nombre" id="formNombre"
              required>
          </div>
          <div class="grupo-email">
            <input class="grupo-textform" placeholder="E-mail" type="text" name="email" id="formEmail" required>
          </div>
          <div class="grupo-form-2col">
            <label for="jugador" class="grupo-form-col grupo-titleform">Psicólogo</label>
            <select name="nombre_psicologo" id="formPsicologo" class="grupo-form-col grupo-textform">
              <option>Luther Prosacco</option>
              <option>Bryant Lindt</option>
              <option>Melissa Pollich</option>
            </select>
          </div>
          <div class="grupo-form-2col">
            <label for="jugador" class="grupo-form-col grupo-titleform">Fecha</label>
            <input class="grupo-form-col grupo-textform" type="date" name="fecha_cita" id="formFecha">
          </div>
          <div class="grupo-form-2col">
            <label class="grupo-form-col grupo-titleform">Modalidad</label>
            <select name="modalidad" id="formModalidad" class="grupo-form-col grupo-textform">
              <option>Online</option>
              <option>Presencial</option>
            </select>
          </div>
          <button class="grupo-button-reserve grupo-titleform" name="reservar" value="reservar">RESERVAR</button>
      </div>
      <?php
      try {
        if (isset($_POST["reservar"])) {
          if (isset($_SESSION["autenticado"])) {
            ?>
            <script>alert(<? $_POST["nombre"] ?> +", le confirmamos que se ha reservado la cita con " + <? $_POST["nombre_psicologo"] ?> + " en el dia " + <? $_POST["fecha_cita"] ?> + " en la modalidad " + <? $_POST["modalidad"] ?> + ". Recibirá un correo de confirmación en la dirección: " + <? $_POST["email"] ?> + ".")</script><?php
                 //inserta en la tabla de citas
                 ServicioCitas::setCita($cita);

                 $idCita = ServicioCitas::getIdCita($cita);

                 if ($idCita != null) {
                   //NO inserta en la tabla de citas
                   ServicioCitas::setCita($cita, $idCita);
                 }
          } else {
            ?>
            <script>alert("Inicie sesión para reservar cita")</script><?php
          }
        }
      } catch (Exception $e) {
        $err_msg = $e->getMessage();
        echo "<script>console.log($err_msg)</script>";
      }
      ?>
      </form>
    </div>
  </div>
</div>
</div>