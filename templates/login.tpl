{include file="./header.tpl"}
<div class="login">
    <h1 class="titulo">Login to Web App</h1>
    <div class="alertMessage">
        {$message}
    </div>
    <form action="verifyUser" method="post">
        <p><input type="text" id="user" name="input_user" placeholder="Email" required></p>
        <p><input type="password" class="form-control" id="pass" name="input_pass" placeholder="Password" required></p>
        <p class="submit"><input type="submit" name="commit" value="Login"></p>
    </form>
</div>
{include file="./footer.tpl"}