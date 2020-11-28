{include file="header.tpl"}
    <!-- ESTE TEMPLATE  MUESTRA EL DETALLE DEL PRODUCTO POR ID -->
       <div class ="mainDivPagina2">
            <h1>{$titulo}</h1>
            <section class="sectionPagina2" >
                <article class="articleListProduct">  
                    <div class = "productoContainer">
                        <div class = "divNameAndButton">
                            <h3>{$producto->nombre}</h3>
                            {if $producto->imagen}
                                <img src="./uploads/{$producto->imagen}" class="img-prod">
                            {/if}
                        </div>
                        <p>Descripcion: {$producto->descripcion}</p>
                        <p>Precio: ${$producto->precio}</p>
                    </div>    
                </article>
            </section>
        </div>
{include file="./footer.tpl"}