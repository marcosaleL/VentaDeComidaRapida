<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-30 23:06:42
  from '/opt/lampp/htdocs/VentaDeComidaRapida/templates/vue/CommentSection.vue' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc56cf263b741_84759553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fd568c61b92f86fc9ca922606bd5faec04652355' => 
    array (
      0 => '/opt/lampp/htdocs/VentaDeComidaRapida/templates/vue/CommentSection.vue',
      1 => 1606773998,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc56cf263b741_84759553 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="commentSection" class=" text-left">
    <ul class="list-group text-dark">
        <li v-if="commentexists" v-for="comment in comments" class="list-group-item">
            <p>{{comment.id_usario}}</p>
            <div class="row">
                <div class="col-7">{{comment.valoracion}}</div>
                <div class="col-5">{{comment.timestamp}}</div>
            </div>
            <p> {{comment.texto}}</p>
            <template v-if="superUser">
                <button v-on:click="fetchDeleteComment(comment.id)" type="button"
                    class="deleteComment btn btn-danger">Delete</button>
            </template>
        </li>
    </ul>
</div>
<form id="commentForm" class="commentForm"> 
    <input class="textField" required type="text" name="comment" id="commentInput" placeholder="your comment here">
    <label for="rating">rating</label>
    <select id="rating" name="rating">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5" selected>5</option>
    </select>
    <div class="form-row text-center">
        <button type="submit" class="btn btn-primary mx-auto">Comentar</button>
    </div>
</form>
<?php }
}
