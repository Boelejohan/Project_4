<main class="container">
<form action="./index.php?content=login_script" method="post">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp"
            placeholder="Enter email" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="InputPassword">Wachtwoord</label>
        <input type="password" class="form-control" id="InputPassword" placeholder="Password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>
</main>
