<?php require_once "views/partials/header.php"; ?>

<div class="login">
    <form action="/login" method="post">
        <h4>Log In</h4>
        <div class="form-group">
            <input type="text" id="email" name="email" class="form-control" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="loginBtn">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
        <div class="registerBackArrow">
            <a href="/">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M5.854 4.646a.5.5 0 0 1 0 .708L3.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                    <path fill-rule="evenodd" d="M2.5 8a.5.5 0 0 1 .5-.5h10.5a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                </svg>
            </a>
        </div>
    </form>
</div>


<?php require_once "views/partials/footer.php"; ?>

