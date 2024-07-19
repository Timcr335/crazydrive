<?php
$ftp_server = "192.168.1.35";
$ftp_port = 21002;
$ftp_user_name = "service_WEB";
$ftp_user_pass = "m^6TH-~68fU2@9d3pC=,7TyW_L9XC%uQ@Dz6j+T2v!%9mH!26At9~R#67dK8iaax.Z4iAt.5d";

// set up basic connection
$conn_id = ftp_connect($ftp_server, $ftp_port);

// check connection
if (!$conn_id) {
    die("Connexion FTP échouée !");
}

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// check login
if (!$login_result) {
    die("Identifiants de connexion FTP invalides !");
}

// get contents of the current directory
$contents = ftp_nlist($conn_id, ".");

// check contents
if (!$contents) {
    die("Impossible de récupérer le contenu du répertoire !");
}

// output $contents
print_r($contents);

// close the connection
ftp_close($conn_id);
?>