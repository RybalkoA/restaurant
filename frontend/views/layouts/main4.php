<?php

use yii\bootstrap\ActiveForm;
use common\models\LoginForm;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
\frontend\assets\AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
     <script>
	new WOW().init();
</script>
</head>

<body>
    <?php $this->beginBody() ?>
        
<?php
    NavBar::begin([
        
        'options' => [
            'class' => 'navbar navbar-fixed-top',
        ],
    ]);
    $menuItems = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'Contact', 'url' => ['/site/contact']],
    ];
    if (Yii::$app->user->isGuest) {
        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
    } else {
        $menuItems[] = '<li>'
            . Html::beginForm(['/site/logout'], 'post')
            . Html::submitButton(
                'Logout (' . Yii::$app->user->identity->username . ')',
                ['class' => 'btn btn-link']
            )
            . Html::endForm()
            . '</li>';
    }
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => $menuItems,
    ]);
    NavBar::end();
    ?>
			
<!-- ======================================================================================================================== -->	
<div id="mainBody" class="container">
<header id="header">
<div class="row">
<div class="span12">
	<a href="<?=Url::toRoute('/site')?>"><img src="/assets/img/logo.jpg" alt=""/></a>
<div class="pull-right"> <br/>
    
    <a href="<?= Url::toRoute('cart/index')?>"> <span class="btn btn-mini" id="cart-count"><?= \frontend\components\Cart::countItems();?></span> </a>
	<a href="<?= Url::toRoute('cart/index')?>"><span class="btn btn-mini active"><?= \frontend\widgets\Total::widget()?></span></a>
	<span class="btn btn-mini">грн.</span> 
</div>
</div>
</div>
<div class="clr"></div>
</header>
<!-- ==================================================Header End====================================================================== -->

		
		  
	<div class="row">
	<div id="sidebar" class="span3">
	<ul class="nav nav-list bs-docs-sidenav" style="display: block;">											
		<li class="subMenu"><a> МЕНЮ</a>
    <ul>
  <?php echo \frontend\widgets\Menu::widget();?>
    </ul>
		</li>
		
		<li style="border:0"> &nbsp;</li>						
                <li> <a href="<?= Url::toRoute('cart/index')?>"><strong>Вы заказали: <?= \frontend\components\Cart::countItems();?><span class="badge badge-warning pull-right" style="line-height:18px;"><?= \frontend\widgets\Total::widget()?></span>  </strong></a></li>
		<li style="border:0"> &nbsp;</li>	
		
	  </ul>
</div>
           
<div class="span9"><?= $content;?></div>
	
<!-- Footer ------------------------------------------------------ -->
<hr class="soft">
<div  id="footerSection">
	<div class="row">
		<div class="span3">
			<h5>ACCOUNT</h6>
			<a href="<?=Url::toRoute('/cabinet')?>">YOUR ACCOUNT</a>
			
		 </div>
		<div class="span3">
			<h5>INFORMATION</h5>
			<a href="<?=Url::toRoute('site/contact')?>">CONTACT</a>  
                        <a href="<?=Url::toRoute('site/signup')?>">REGISTRATION</a>  
			
		 </div>
		<div class="span3">
			
		 </div>
		<div id="socialMedia" class="span3 pull-right">
			
		 </div> 
	 </div>
	 <hr class="soft">
	
</div><!-- /container -->
<!--<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addajax/"+id, {}, function (data) {
            $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>-->

   
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>		
