{include file="./header.tpl"}
    <!-- ESTE TEMPLATE  MUESTRA UN LISTADO DE CATEOGRIAS -->
       <div class ="mainDivPagina2">
            <h1 class="titulo">{$titulo}</h1>
            <section class="sectionPagina2" >
                <p class="texto">Hasta el momento solo disponemos de una unica sucursal. <br>
                    En esta se pueden encontrar los siguientes tipos de productos:  <br>
                </p>
                <article class="articleListProduct">  
                        {foreach from=$productos item=producto}
                            <div class = "productoContainer">
                                <div class = "divNameAndButton">
                                    <h3 class="listado">{$producto->nombre}</h3>
                                    {if $producto->imagen}
                                        <img src="./uploads/{$producto->imagen}" class="img-prod">
                                    {/if}
                                    <a class="botonDetalles" href="productos/{$producto->id_producto}">Detalles</a>
                                </div>
                            </div>
                        {/foreach}
                </article>
            </section>
        </div>
{include file="./footer.tpl"}