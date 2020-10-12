    
    {include file="./header.tpl"}
    <h1>{$titulo}</h1>
    <section class="sectionProductos" >
        <article class="showArticle">  
             <!-- por cada item de productos, voy a agregando al article los products con misma categoria -->
             <!-- si encuentro uno con categoria diferente, agrego el separador de categorias -->
            {foreach from=$productos item=producto}
                {if $producto->nombreCategoria != {$currentCategory}}
                    {assign "currentCategory" $producto->nombreCategoria}
                    <div class="categorySeparator">
                        <h2> {$producto->nombreCategoria} </h2>
                    </div>
                    <div class="divisorLine"></div>              
                {/if}

                <div class="itemContainer">
                        <!-- Aca tambien irian la img pero no se como asociarla al item -->
                        <!-- Quiza la solucion sea agregar la url de la img a la base de datos  -->
                        <h3>{$producto->nombre}</h3>
                        <p>{$producto->descripcion}</p>
                        <p><span>Precio: </span>{$producto->precio}</p>
                </div>
            {/foreach}
        </article>
    </section>

    {include file="./footer.tpl"}

