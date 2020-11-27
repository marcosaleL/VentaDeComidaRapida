<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-27 23:44:40
  from '/opt/lampp/htdocs/tpweb2/VentaDeComidaRapida/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc18158bb9229_65775437',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e7b57462ba81c63d34d73d7898555c2e2a01307' => 
    array (
      0 => '/opt/lampp/htdocs/tpweb2/VentaDeComidaRapida/templates/header.tpl',
      1 => 1606517074,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc18158bb9229_65775437 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
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
                <li><a class="button" href="productos">Productos</a></li>
                <li><a class="button" href="categorias">Categorias</a></li>
                <li><a class="button" href="administracion">Administrador</a></li>
            </ul>
        </nav>
    </header>
<?php }
}
