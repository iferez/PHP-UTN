<?php

function conn(){
  // $hostname = "localhost";
  // $usuariodb = "root";
  // $passworddb = "";
  // $dbname = "ferez_ivan";
  // $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
  // return $conectar;

  $hostname = "localhost";
  $usuariodb = "id19217799_iferez";
  $passworddb = "EaYQp~#52G<&rxP(";
  $dbname = "id19217799_ferez_ivan";

  $conectar = mysqli_connect($hostname, $usuariodb, $passworddb, $dbname);
  return $conectar;
}

?>