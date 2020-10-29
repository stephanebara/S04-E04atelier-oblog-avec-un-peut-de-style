<div class="container">
<h1 class="card-header text-center text-white"><?= $categoryToDisplay->categoryName ?></h1>
<ul class="list-group list-group-flush">
         
        
<?php foreach($dataArticlesList as $articleId => $articleObject):
       
           if ($articleObject->category == $categoryToDisplay->categoryName) {
            ?>
        <div class="card mb-4">
            <div class="card-header text-center"><a href="index.php?page=article&id=<?= $articleId ?>"><?= $articleObject->title ?></a></div>
            <div class="card-body">
                <p class="card-text text-white"><?= $articleObject->content ?></p>
                <div class="text-muted">Posté par <?= $articleObject->author ?> Le <?= $articleObject->date ?>dans <?= $articleObject->category ?></div>
            </div>
        </div>
    <?php } endforeach; ?>

</ul>
</div>
