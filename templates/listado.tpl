    
    {include file="./header.tpl"}
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
            <article class="articleListProduct">  
                <p>Hasta el momento solo disponemos de una unica sucursal. <br>
                En esta se pueden encontrar los siguieten tipos de productos:  <br>
                </p>
                    {foreach from=$productos item=producto}
                        <div class = "productoContainer">
                            <div class = "divNameAndButton">
                                <h3>{$producto->nombre}</h3> 
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