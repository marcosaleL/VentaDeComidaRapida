<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 07:33:07
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f853c13a3f988_07714389',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0df203d6b9f485bbbff78767d35411a3facb6612' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/header.tpl',
      1 => 1602567184,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f853c13a3f988_07714389 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <?php echo '<script'; ?>
 src="../js/scripts.js"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <header>
         <!--<figure class="figureLogo">
               <img class="imglogo" src="../images/logo2.png">
         </figure>-->
         <img class="imglogo" src="../images/logo2.png">
        <nav>
            <ul class="listaNav">
                <li><a class="button" href="">Inicio</a></li>
                <li><a class="button" href="">Ofertas</a></li>
                <li><a class="button" href="">Categorias</a></li>
            </ul>
        </nav>
    </header>
<?php }
}
