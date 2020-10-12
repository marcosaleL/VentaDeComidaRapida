
<div class="container">

<div class="alert alert-danger" role="alert">
    {$message}
</div>
        <!--Hay que hacer un if para veficar que no ingrese datos vacio--->
       <form action="verifyUser" method="post">
                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input class="form-control" placeholder="Ingrese su correo electronico" id="user" name="input_user">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="input_pass">
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
        </form>
</div>

