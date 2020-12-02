<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 20:53:27
  from 'C:\xampp\htdocs\TPEWeb2\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7f0b7b8c190_12505990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9edae3be8b74a6d762e27ea3c0ecf46ad65fa89f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\categorias.tpl',
      1 => 1606938803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./header.tpl' => 1,
    'file:./footer.tpl' => 1,
  ),
),false)) {
function content_5fc7f0b7b8c190_12505990 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    <?php $_smarty_tpl->_subTemplateRender("file:./header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <!-- ESTE TEMPLATE  MUESTRA UN LISTADO DE CATEOGRIAS -->
    <div class ="mainDivPagina2">
        <h1 class="titulo"><?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <section class="sectionPagina2" >
            <article class="articleListCategory">  
                <p class="texto">Hasta el momento solo disponemos de una unica sucursal. <br>
                En esta se pueden encontrar los siguientes tipos de categorias:  <br>
                </p>
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
                        <li><h3 class="listado"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</h3></li>
                        <a class="botonDetalles" href="categorias/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
">Detalles</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <br>
            </article>
        </section>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:./footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
