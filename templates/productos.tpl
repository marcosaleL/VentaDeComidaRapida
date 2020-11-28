{include file="./header.tpl"}
    <!-- ESTE TEMPLATE  MUESTRA UN LISTADO DE CATEOGRIAS -->
       <div class ="mainDivPagina2">
            <h1 class="titulo">{$titulo}</h1>
            <section class="sectionPagina2" >
                <article class="articleListProduct">  
                    <p class="texto">Hasta el momento solo disponemos de una unica sucursal. <br>
                    En esta se pueden encontrar los siguientes tipos de productos:  <br>
                    </p>
                        {foreach from=$productos item=producto}
                            <div class = "productoContainer">
                                <div class = "divNameAndButton">
                                    <h3 class="listado">{$producto->nombre}</h3>
                                    {if $producto->imagen}
                                        <img src="./uploads/{$producto->imagen}" class="img-prod">
                                    {/if}
                                    <button name = "{$index}" class = "btnShowMore more"   ></button>
                                </div>
                                <div id = "div{$index}" class = "hidden productDetail" >
                                    <p>Descripcion: {$producto->descripcion}</p>
                                    <p>Precio: ${$producto->precio}</p>
                                </div>
                                {assign "index" $index+1}
                            </div>
                        {/foreach}
                </article>
            </section>
        </div>
{include file="./footer.tpl"}