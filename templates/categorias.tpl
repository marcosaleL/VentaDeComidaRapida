    
    {include file="./header.tpl"}
    <!-- ESTE TEMPLATE  MUESTRA UN LISTADO DE CATEOGRIAS -->
    <div class ="mainDivPagina2">
        <h1  class="holaol" >{$titulo}</h1>
        <section class="sectionPagina2" >
            <article class="articleListCategory">  
                <p>Hasta el momento solo disponemos de una unica sucursal. <br>
                En esta se pueden encontrar los siguieten tipos de productos:  <br>
                </p>
                <ul>
                    {foreach from=$categorias item=categoria}
                        <li>{$categoria->nombre}</li>
                    {/foreach}
                </ul>
                <br>
            </article>
        </section>
    </div>

    {include file="./footer.tpl"}