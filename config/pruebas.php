<?php

require_once "require.php";
require_once "sku_db_mysqli.php";
require_once "sku_db_sqlsrv_33.php";
// require_once "../models/sku_lista.php";
require_once "../models/sku_crear.php";

header("Content-Type: text/html;charset=utf-8");
// header('Content-type: application/json'); 

// getOptionsSelected('grupouso','Niñós');
// getOptionsSelected('material','ALGODÓN');

// probando();

echo $env;



// echo "holota";
// echo "cantidad de registros";
// echo $mysqli->quantityRecords('SELECT codigo FROM articulo WHERE lista_id=2');
// ini_set('max_execution_time', 300);
// $first=getFirstBarcode();
// echo json_encode($first);
// echo "<br>\n";
// echo gettype($first);

// echo $mysqli->quantityRecords("select codigo from articulo where lista_id=41");
// echo getNameFromId('subdpto',3);

// echo $mysqli->getColumnFromColumn('presentacion','abreviatura','id','NUMBER',2);

// echo getControlDigit("780000023572");
// echo "<br>";
// echo getControlDigit("780000023571");

// if(existArticle('63.1170','SAP'))
//   echo 'existe';
// else
//   echo 'NO EXISTE';

function probando(){
  global $env;
  $destinatario = ( $env=='dev' ) ? 'aobando@outlook.cl' : 'otros';
  echo $destinatario;
}