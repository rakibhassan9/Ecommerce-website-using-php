<?php require_once 'partial/header.php'; ?>

<main role="main" class="login-page">
    <div class="container">
        <form class="form-signin">
            <img class="mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
            <h1 class="h3 mb-3 font-weight-normal">Please Register Here</h1>
            <label for="inputUsername" class="sr-only">UserName</label>
            <input type="text" id="inputUsername" class="form-control" placeholder="UserName" required autofocus>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required>
            
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
            <div class="checkbox mb-3">
            <label for="inputPhoto" class="sr-only">Profile Picture</label>
            <input type="file" id="inputPhoto" class="form-control" required>
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
            <p class="mt-5 mb-3 text-muted">&copy; Tech Studio, Ecommerce System 2019</p>
        </form>
    </div>
    </main>
<?php require_once 'partial/footer.php'; ?>