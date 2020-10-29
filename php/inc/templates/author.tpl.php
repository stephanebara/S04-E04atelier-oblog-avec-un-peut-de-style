<div class="container mt-4">
<h3 class="card-header text-center text-white rounded"><?= $authorToDisplay->authorName ?></h3>
<article class="card border-bottom-0 ">
        
<?php foreach($dataArticlesList as $articleId => $articleObject):
       
           if ($articleObject->author == $authorToDisplay->authorName) {
            ?>
        <div class="card ">
            <div class="card-header text-center"><a href="index.php?page=article&id=<?= $articleId ?>"><?= $articleObject->title ?></a></div>
            <div class="card-body">
                <p class="card-text text-white"><?= $articleObject->content ?></p>
                <div class="text-muted">Posté par <?= $articleObject->author ?> Le <?= $articleObject->date ?>dans <?= $articleObject->category ?></div>
            </div>
        </div>
    <?php } endforeach; ?>
    </article>
</div>
</div>


