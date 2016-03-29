<?php
use yii\helpers\Html;

?>

<div class="col-sm-8 post-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    foreach ($restmenus->models as $restmenu) {
        echo $this->render('shortView', [
            'model' => $restmenu
        ]);
    }
    ?>

</div>

<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
    <h1>Категории</h1>
    <ul>
    <?php
    foreach ($types->models as $type) {
        echo $this->render('//type/shortViewType', [
            'model' => $type
        ]);
    }
    ?>
    </ul>
</div>