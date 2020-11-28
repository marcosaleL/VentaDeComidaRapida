<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 03:09:48
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc1b16c1a2e33_24174747',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e74a6a9dde44bcfbf25408f212f133abc9ed524' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/header.tpl',
      1 => 1606529361,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc1b16c1a2e33_24174747 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?php echo BASE_URL;?>
">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">
    <?php echo '<script'; ?>
 src="js/scripts.js"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</title>
</head>
<body>
    <header>
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
