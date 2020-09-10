<?php require_once "views/partials/header.php"; ?>
<div class="col-sm-9">
    <div class="container-fluid table">
        <div class="tableTitle">
            <div class="buttonDiv">
                <a href="/users/create" class="btn btn-secondary">+</a>
            </div>
            <div class="titlePage">
                <h2>USERS</h2>
            </div>
        </div>
        <div class="row wrapperTable">
            <div class="col-7">
                <table class="table">
                    <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>USER</th>
                        <th>MAIL</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $user->id ?></td>
                            <td><?= $user->name ?></td>
                            <td><?= $user->email ?></td>
                            <td><a href="/users/show?id=<?= $user->id ?>"
                                <a href="/users/edit?id=<?= $user->id ?>" class="btn btn-secondary">Edit</a>
                                <a href="/users/destroy?id=<?= $user->id ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>

    <?php require_once "views/partials/footer.php"; ?>


