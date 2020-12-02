<?php
/* Smarty version 3.1.34-dev-7, created on 2020-12-02 20:38:56
  from 'C:\xampp\htdocs\TPEWeb2\templates\vue\CommentSection.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc7ed5098b566_71711288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bbefd046aa608b2d081da869dc63c3ec2852ad1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\vue\\CommentSection.tpl',
      1 => 1606937208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc7ed5098b566_71711288 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="commentSection" class="divComentarios">
    <ul class="listaComentarios">
        <li v-if="commentexists" v-for="comment in comments" class="liComentario">
            <div> <span class="spanNombre">{{comment.nombre}}:</span> <span class="spanValor"> {{comment.valoracion}} ✩<span> </div>
            <p> {{comment.texto}}</p>
            <!--
            <template v-if="admin">
            -->
            <template>
                <button v-on:click="fetchDeleteComment(comment.id_comentario)" type="button" class="deleteComment">Delete</button>
            </template>
            
        </li>
    </ul>
</div>
<form action ="" method = "POST" id="commentForm" class="commentForm"> 
    <input class="textField" required type="text" name="comment" id="commentTexto" placeholder="your comment here">
    <label for="valoracion">Valoracion</label>
    <select id="valoracion" name="valoracion">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <button id ="commentButton" type="submit" class="">Comentar</button>

</form>
<?php }
}
