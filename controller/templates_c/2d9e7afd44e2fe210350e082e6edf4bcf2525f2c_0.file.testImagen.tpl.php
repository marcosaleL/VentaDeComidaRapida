<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-13 05:13:42
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/testImagen.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f851b669954f5_09128694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d9e7afd44e2fe210350e082e6edf4bcf2525f2c' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/testImagen.tpl',
      1 => 1602558276,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f851b669954f5_09128694 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test</title>
</head>
<body>
    <img height=100px width=100px src="data:image/jpg;base64, base64_encode(<?php echo $_smarty_tpl->tpl_vars['foto']->value;?>
);" alt="">
</body>
</html><?php }
}
