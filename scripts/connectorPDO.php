<?php

$link_webhook  = "https://discordapp.com/api/webhooks/765635734165127220/BhDaUfwYVs57ITI_7yHR_FV_LT4eB60zeN5KDngsxScD5xvYcIO72meeXDKGWkVvs12k";
$base_dados  = 'zenitsudev';
$usuario_bd  = 'zenitsudev';
$senha_bd    = 'apolinario2018c0';
$host_db     = 'mysql.zenitsudev.kinghost.net';
$charset_db  = 'UTF8';
$conexao_pdo = null;

$detalhes_pdo  = 'mysql:host=' . $host_db . ';';
$detalhes_pdo .= 'dbname='. $base_dados . ';';
$detalhes_pdo .= 'charset=' . $charset_db . ';';

try {
    $conexao_pdo = new PDO($detalhes_pdo, $usuario_bd, $senha_bd);
} catch (PDOException $e) {
    print "Erro: " . $e->getMessage() . "<br/>";
    die();
}
$ip = $_SERVER['REMOTE_ADDR'];
$inserir_view = $conexao_pdo->prepare("INSERT INTO ZENITSU_VIEW_HOME (ip) VALUES('$ip');");
$inserir_view->execute();

?>