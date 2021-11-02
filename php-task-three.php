<div class="city_list">
    <div>
        <?php echo 'PHP Work! -> task THREE'; ?>
    </div>
    <div>
        <?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        include_once './parser/simple_html_dom.php';
        $html = file_get_html(
            'https://hotline.ua/dom/produkty-napitki-alkogol/alkogol/'
        );

        for ($i = 0; $i < 10; $i++) { ?><div class="parser-colum">
            <?php
            $weather = $html->find('.h4');
            echo $weather[$i] . ' ';
            $prance = $html->find('.price-md');
            echo $prance[$i] . ' ';
            ?></div><?php }

/*
        foreach ($html->find('ul') as $ul) {
            foreach ($ul->find('li') as $li) {
                // do something...
                //$weather = $html->find('span.price-format');
                //echo $weather[$count] . ' ';
                echo $li;
                $count = $count + 1;
            }
        }*/
?></div>


</div>