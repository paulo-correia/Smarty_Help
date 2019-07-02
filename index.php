<?php


require_once "smarty-3.1.33/libs/Smarty.class.php";
$smarty = new Smarty();
$smarty->template_dir = "templates/default";
$smarty->compile_dir = "templates_c";


$array['nome'] = "Paulo";
$array['email'] = "nome@dominio.com.br";


$params = $_GET;


$smarty->assign("array", $array);
$smarty->assign("params", $params);


$smarty->display('index.tpl');
