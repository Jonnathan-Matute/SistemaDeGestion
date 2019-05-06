<?php
      session_start();
      $_SESSION['isLogged'] === FALSE) {
          header("Location: /SistemaDeGestion/public/vista/login.html");
      }
?>