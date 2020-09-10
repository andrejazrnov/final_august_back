
<?php require_once "views/partials/header.php"; ?>


<div class="container-fluid">
    <div class="actionDiv">
        <div class="action-title"><h4>Add new <span>user</span>:</h4></div>
        <form action="/users" method="post">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
            <div class="backArrowCreate">
                <a href="/users">
                    <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-arrow-90deg-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M6.104 2.396a.5.5 0 0 1 0 .708L3.457 5.75l2.647 2.646a.5.5 0 1 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
                        <path fill-rule="evenodd" d="M2.75 5.75a.5.5 0 0 1 .5-.5h6.5a2.5 2.5 0 0 1 2.5 2.5v5.5a.5.5 0 0 1-1 0v-5.5a1.5 1.5 0 0 0-1.5-1.5h-6.5a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
            </div>
        </form>
    </div>
</div>

<?php require_once "views/partials/footer.php"; ?>