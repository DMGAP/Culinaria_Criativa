<?php
session_start() ;
    if (!isset($_SESSION['autenticado']) || ($_SESSION['autenticado']!='SIM' ))
    {
	header('Location: conta.html');
  }
?>