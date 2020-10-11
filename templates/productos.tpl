    
    {include file="header.tpl"}

    $currentCategory = "" ;
    <section class = "sectionProductos" >
        <article>
             <!-- por cada item de productos, voy a agregando al article los products con misma categoria -->
             <!-- si encuentro uno con categoria diferente, agrego el separador de categorias -->
            {foreach from=$productos item=producto}
                {if $producto->nombreCategoria != $currentCategory}
                    $currentCategory =  $producto->nombreCategoria;
                    <div class = "categorySeparator">
                        <h3 class = "categoryName">$producto->nombreCategoria</h3>
                        <div class = "divisorLine"><div>
                    </div>                   
                {/if}
                <div class = "itemContainer">
                        <!-- Aca tambien irian la img pero no se como asociarla al item -->
                        <!-- Quiza la solucion sea agregar la url de la img a la base de datos  -->
                        <h4>$producto->nombre</h4>
                </div>
                <div> 
            {/foreach}
        </article>
    </section>

    {include file="footer.tpl"}