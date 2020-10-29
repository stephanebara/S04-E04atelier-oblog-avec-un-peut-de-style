
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">

                <?php foreach($articlesList as $articleId => $articleObject): ?>
                    <div class="card mb-4 bg-transparent border border-white">
                        <div class="card-header  border border-white"><a href="index.php?page=article&id=<?= $articleId ?>"><?= $articleObject->title ?></a></div>
                        <div class="card-body ">
                            <p class="card-text text-white"><?= $articleObject->content ?></p>
                            <div class="text-muted">Meta info</div>
                        </div>
                    </div>
                <?php endforeach; ?>

                <nav aria-label="Page navigation" class="mb-4">
                    <ul class="pagination justify-content-between">
                        <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
                        <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                    </ul>
                </nav>
            </div>

            <div class="col-lg-4 col-md-12">
                <form class="form mb-4 ">
                    <div class="form-row ">
                        <div class="col-7">
                            <label for="search" class="sr-only">Rechercher</label>
                            <input type="text" class="form-control mr-2" id="search">
                        </div>
                        <div class="col-5">
                            <button type="submit" class="btn btn-primary form-control">Rechercher</button>
                        </div>
                    </div>
                </form>
                <!-- emmet : (div.card.mb-4>div.card-header+ul.list-group.list-group-flush>li.list-group-item*4>a)*2 -->
                <div class="card mb-4 bg-transparent">
                    <div class="card-header text-white  border border-white">Catégories</div>
                    <ul class="list-group list-group-flush">
                        <?php foreach($dataCategoriesList as $categoryId => $category) : ?>
                        <li class="list-group-item bg-transparent border border-white"><a href="index.php?page=category&id=<?= $categoryId ?>"><?= $category->categoryName ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="card mb-4 bg-transparent ">
                    <div class="card-header text-white border border-white ">Auteurs</div>
                    <ul class="list-group list-group-flush">
                        <?php foreach($dataAuthorsList as $authorId => $author) : ?>
                        <li class="list-group-item bg-transparent border border-white"><a href="index.php?page=author&id=<?= $authorId ?>"><?= $author->authorName ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>