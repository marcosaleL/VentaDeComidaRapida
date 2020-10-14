<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-14 18:59:15
  from 'C:\xampp\htdocs\TPEWeb2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f872e63d09765_85776703',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7420b1e7c9e2ac9c03b809a763987226131aae6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\header.tpl',
      1 => 1602694330,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f872e63d09765_85776703 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <?php echo '<script'; ?>
 src="./js/scripts.js"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <header>
         <!--<figure class="figureLogo">
               <img class="imglogo" src="../images/logo2.png">
         </figure>-->
         <img class="imglogo" src="./images/logo2.png">
        <nav>
            <ul class="listaNav">
                <li><a class="button" href="home">Inicio</a></li>
                <li><a class="button" href="listado">Listado</a></li>
                <li><a class="button" href="administracion">Categorias</a></li>
            </ul>
        </nav>
    </header>
<?php }
}
