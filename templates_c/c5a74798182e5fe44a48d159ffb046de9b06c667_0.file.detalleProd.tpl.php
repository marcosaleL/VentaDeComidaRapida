<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-01 21:53:12
  from 'C:\xampp\htdocs\TPEWeb2\templates\detalleProd.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc6ad3895df06_49664490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5a74798182e5fe44a48d159ffb046de9b06c667' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\detalleProd.tpl',
      1 => 1606850738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./vue/CommentSection.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc6ad3895df06_49664490 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- ESTE TEMPLATE  MUESTRA EL DETALLE DEL PRODUCTO POR ID -->
       <div class ="mainDivPagina2">
            <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
            <section class="sectionPagina2" >
                <article class="articleListProduct">  
                    <div class="contenedorProducto">
                        <div class = "divNameAndButton">
                            <h3 class="listado"><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</h3>
                            <?php if ($_smarty_tpl->tpl_vars['producto']->value->imagen) {?>
                                <img src="./uploads/<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" class="img-prod">
                            <?php }?>
                        </div>
                        <p class="texto">Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</p>
                        <p class="texto">Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</p>
                    </div>    
                </article>
            </section>
            <?php $_smarty_tpl->_subTemplateRender("file:./vue/CommentSection.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        </div>
        
        <?php echo '<script'; ?>
 src="js/comments.js"><?php echo '</script'; ?>
>
    
<?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
