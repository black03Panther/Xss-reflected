<?php
session_start();

// Sitzung beenden
session_unset();
session_destroy();

// Zurück zur Anmeldeseite weiterleiten
header("location: index.php");
exit();
?>
