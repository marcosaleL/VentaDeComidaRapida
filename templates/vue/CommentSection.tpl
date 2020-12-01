{literal}
<div id="commentSection" class="divComentarios">
    <ul class="listaComentarios">
        <li v-if="commentexists" v-for="comment in comments" class="liComentario">
            <p> {{comment.id_usuario}} </p>
            <div class="">
                <div class="col-7">{{comment.valoracion}}</div>
            </div>
            <p> {{comment.texto}}</p>
            <!--
            <template v-if="superUser">
                <button v-on:click="fetchDeleteComment(comment.id)" type="button"
                    class="deleteComment">Delete</button>
            </template>
            -->
        </li>
    </ul>
</div>
<form method = "POST" id="commentForm" class="commentForm"> 
    <input class="textField" required type="text" name="comment" id="commentTexto" placeholder="your comment here">
    <label for="valoracion">Valoracion</label>
    <select id="valoracion" name="valoracion">
        <option value="1" selected>1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
    </select>
    <div class="">
        <button id ="commentButton" type="submit" class="">Comentar</button>
    </div>
</form>
{/literal}