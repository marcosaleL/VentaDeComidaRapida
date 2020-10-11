<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-11 20:33:28
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f834ff874b820_77387759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0df203d6b9f485bbbff78767d35411a3facb6612' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/header.tpl',
      1 => 1602441205,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f834ff874b820_77387759 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <header>
        <div class="logo">
            <figure class="figureLogo">
                <img src="" alt="">
            </figure>
        </div>
            <h1><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <nav>
                <ul class="listaNav">
                    <li>Inicio</li>
                    <li>Ofertas</li>
                    <li>Categorias</li>
                </ul>
            </nav>
    </header><?php }
}
