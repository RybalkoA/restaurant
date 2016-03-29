
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
  
    
    echo Nav::widget(
        [
        'options' => ['class' => 'nav nav-pills'],
        'items' => [
           [ 'label'=>'Home',
            'url' => ['/site/index']],
            
            [ 'label'=>'Группа',
             'items'=>[
                 [
                     'label'=>'Мои группы',
                     'url' => ['groups/mygroups'],
                 ],
                 [
                     'label'=>'Найти/Вступить в группу',
                     'url' => ['groups/search'],
                 ],
                  [
                     'label'=>'Создать группу',
                     'url' => ['groups/create'],
                 ],
             ]
            ]
            ]
        
        
   ]);
    /* NavBar::end();
    ?>


NavBar::begin([
            'options' => [
            'class' => '',
        ],
    ]);
    $menuItems = [
        ['label' => '', 'url' => ['/site/index']],
        ['label' => 'Группа', 'url' => ['/cabinet/groups/mygroups']],
        ['label' => 'Contact', 'url' => ['/cabinet/friends']],
    ];*/