
    <?php
    foreach ($model as $type) {
        echo $this->render('//type/shortViewType', [
            'model' => $type
        ]);
    }
    ?>