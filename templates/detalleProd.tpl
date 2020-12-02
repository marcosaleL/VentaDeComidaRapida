{include file="./header.tpl"}
    <!-- ESTE TEMPLATE  MUESTRA EL DETALLE DEL PRODUCTO POR ID -->
       <div class ="mainDivPagina2">
            <h1 class="titulo">{$titulo}</h1>
            <section class="sectionPagina2" >
                <article class="articleListProduct">  
                    <div class="contenedorProducto">
                        <div class = "divNameAndButton">
                            <h3 class="listado">{$producto->nombre}</h3>
                            {if $producto->imagen}
                                <img src="./uploads/{$producto->imagen}" class="img-prod">
                            {/if}
                        </div>
                        <p class="texto">Descripcion: {$producto->descripcion}</p>
                        <p class="texto">Precio: ${$producto->precio}</p>
                    </div>    
                </article>
            </section>
            {include file="./vue/CommentSection.tpl"}
        </div>
        <script src="js/comments.js"></script>
{include file="./footer.tpl"}