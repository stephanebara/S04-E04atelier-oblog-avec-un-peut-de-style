<?php

/*
--------------------------------------------------------------------------------------------
--- NOUVELLE VERSION DU FICHIER inc/data.php A UTILISER UNIQUEMENT A PARTIR DE L'ETAPE 4 ---
--------------------------------------------------------------------------------------------
*/

// Les différents articles sous forme d'objet
$dataArticlesList = [
    1 => new Article(
        'Ivre, il refait tous les challenges en un week-end sans dormir.',
        'Ou comment j\'ai appris plein de choses en faisant une nouvelle fois tous les challenges que j\'avais loupé.',
        new Author('Alexandre'),
        '2017-07-13',
        new Category('Ma Vie De Dev')
    ),
    2 => new Article(
        'POO or not POO, that is the question.',
        'La POO est-elle vraiment indispensable pour une architecture solide ? Etude de cas avec PHP.',
        new Author('Julie'),
        '2017-07-04',
        new Category('TeamBack')
    ),
    3 => new Article(
        'Git, pour les n00bs.',
        'Un p\'tit récap rapide pour tout ceux qui, comme moi, ont galéré sur ce magnifique outil de versionning.',
        new Author('Lucie'),
        '2017-06-19',
        new Category('Collaboration')
    ),
    4 => new Article(
        'Le syndrome de la page blanche',
        'Cette frustration quand le code ne vient pas, le temps passe, la deadline approche...',
        new Author('Xavier'),
        '2017-05-06',
        new Category('Ma Vie De Dev')
    ),
];

// Les catégories
$dataCategoriesList = [
    // ID => objet Category
    1 => new Category('TeamBack'),
    2 => new Category('TeamFront'),
    3 => new Category('Collaboration'),
    4 => new Category('Ma Vie De Dev')
];

// Les auteurs
$dataAuthorsList = [
    // ID => objet Author
    1 => new Author('Maxime'),
    2 => new Author('Anthony'),
    3 => new Author('Alexandre'),
    4 => new Author('Dario'),
    5 => new Author('Julie'),
    6 => new Author('Lucie'),
    7 => new Author('Xavier')
];