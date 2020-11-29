<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-29 22:02:37
  from 'C:\xampp\htdocs\TPEWeb2\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc40c6dc19879_94968857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7420b1e7c9e2ac9c03b809a763987226131aae6c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\header.tpl',
      1 => 1606683743,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc40c6dc19879_94968857 (Smarty_Internal_Template $_smarty_tpl) {
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
        <div class="botonera">
            <nav>
                <ul class="listaNav">
                    <li><a class="button" href="home">Inicio</a></li>
                    <li><a class="button" href="productos">Productos</a></li>
                    <li><a class="button" href="categorias">Categorias</a></li>
                    <li><a class="button" href="login">Sign In</a></li>
                    <li><a class="button" href="">Registrarse</a></li>
                    <li><a class="button" href="">Sign Out</a></li>
                    <li><a class="button" href="administracion">Administrador</a></li>
                </ul>
            </nav>
        </div>
    </header>
<?php }
}
