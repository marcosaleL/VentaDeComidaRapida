<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-12 05:11:33
  from 'C:\xampp\htdocs\TPEWeb2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f83c96550d487_97956870',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b95291874904653d760e08ee6140b334e5162a5c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\header.tpl',
      1 => 1602472290,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f83c96550d487_97956870 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
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
