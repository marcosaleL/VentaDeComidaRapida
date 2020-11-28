{include file="./header.tpl"}
    <!-- ESTE TEMPLATE  MUESTRA UN MENSAJE DE SI EL PRODUCTO O LA CATEGORIA NO EXISTE -->
    <div class ="mainDivPagina2">
    <h1 class="titulo">{$titulo}</h1>
    <section class="sectionPagina2" >
        <article class="articleListProduct">  
            {if $nombre=="producto"}
                <p class="texto">El {$nombre} con el ID: {$id} no existe en nuestro catalogo.</p> 
            {else}
                <p class="texto">La {$nombre} con el ID: {$id} no existe en nuestro catalogo.</p>
            {/if} 
        </article>
    </section>
</div>

{include file="./footer.tpl"}