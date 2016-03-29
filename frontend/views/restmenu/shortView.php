<?php

use yii\helpers\Html;

?>

<h1><?= $model->title ?></h1>

<div class="span3">
    <p> Категория: <?= Html::a($model->type->type, ['type/view', 'id' => $model->type->id]) ?></p>
</div>
<?php foreach ($model->getImages() as $image):?>
                                          
        <a  href=""><img src="<?= $image->getUrl('200x100')?>" alt=""/></a>
     <?php endforeach ?>
<div class="caption">
        <?= $model->title ?>
    
    <h4><a  href="<?=  yii\helpers\Url::toRoute(['cart/add', 'id' => $model->id]) ?>" class="btn btn-default add-to-cart" data-id="<?php echo $model->id; ?>"><i class="fa fa-shopping-cart"></i>В корзину</a> 
        <span class="pull-right"><?=$models->price?></span></h4>
</div>


<?= Html::a('Читать далее', ['restmenu/view', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
