<?php require_once "views/partials/header.php"; ?>
<div class="col-sm-9">
    <div class="container-fluid tableContainer">
        <div class="tableTitle">
            <div class="buttonDiv">
                <a href="/movies/create" class="btn btn-secondary">+</a>
            </div>
            <div class="titlePage">
                <h2>MOVIES</h2>
            </div>
        </div>
        <div class="row wrapperTable">
            <div class="col-7 md-6">
                <table class="table">
                    <thead class="thead">
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>GENRE</th>
                        <th>ACTIONS</th>
                    </tr>
                    </thead>
                    <?php foreach ($movies as $movie): ?>
                        <tr>
                            <td><?= $movie->id ?></td>
                            <td><?= $movie->movieName ?></td>
                            <td><?= $movie->type ?></td>
                            <td><a href="/movies/show?id=<?= $movie->id ?>" class="btn btn-light">Show</a> <a href="/movies/edit?id=<?=
                                $movie->id ?>" class="btn btn-secondary">Edit</a> <a href="/movie/destroy?id=<?=
                                $movie->id ?>" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>
        </div>
    </div>


    <?php require_once "views/partials/footer.php"; ?>


