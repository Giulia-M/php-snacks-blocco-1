<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:

DD-MM-YYYY es 01-01-2007 
e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];
?>



<ul>

    <?php
    $array_Keys_Date = array_keys($posts);
    var_dump($array_Keys_Date);

    // 0 => string '10/01/2019' (length=10)
    // 1 => string '10/02/2019' (length=10)
    // 2 => string '15/05/2019' (length=10)

    for($i = 0; $i < count($array_Keys_Date); $i++) {
        $currentDate = $array_Keys_Date[$i];
        var_dump($currentDate);
        // 10/01/2019

        $currentChild = $posts[$currentDate];
        var_dump($currentChild);

            //         0 => 
            
            //       'title' => string 'Post 1' (length=6)
            //       'author' => string 'Michele Papagni' (length=15)
            //       'text' => string 'Testo post 1' (length=12)
            //   1 => 
           
            //       'title' => string 'Post 2' (length=6)
            //       'author' => string 'Michele Papagni' (length=15)
            //       'text' => string 'Testo post 2' (length=12)


        for ($j = 0; $j < count($currentChild); $j++) {
            $contentChild = $currentChild[$j];
            var_dump($contentChild);
              //       'title' => string 'Post 2' (length=6)
            //       'author' => string 'Michele Papagni' (length=15)
            //       'text' => string 'Testo post 2' (length=12)

    ?>
    
    

    <li><strong><?php echo $currentDate?></strong>
        <ul>
            <li><?php echo $contentChild["title"] ?></li>
            <li><?php echo $contentChild["author"] ?></li>
            <li><?php echo $contentChild["text"] ?></li>
        </ul>
    </li>

    <?php
        }
    }
    ?>
</ul>