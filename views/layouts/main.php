<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\assets\PublicAsset;
use yii\helpers\Url;

PublicAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
	<meta charset="<?= Yii::$app->charset ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php $this->registerCsrfMetaTags() ?>
	<title><?= Html::encode($this->title) ?></title>
	<?php $this->head() ?>
</head>

<body>
	<?php $this->beginBody() ?>

	<nav class="navbar main-menu navbar-default">
		<div class="container">
			<div class="menu-content">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">
						<span>Чай Кофе Чайкофский</span>
					</a>
				</div>


				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

					<ul class="nav navbar-nav text-uppercase">
						<li><a data-toggle="dropdown" class="dropdown-toggle" href="/">Home</a>

						</li>
					</ul>
					<div class="i_con">
						<ul class="nav navbar-nav text-uppercase">
							<?php if (Yii::$app->user->isGuest) : ?>
								<li><a href="<?= Url::toRoute(['auth/login']) ?>">Login</a></li>
								<li><a href="<?= Url::toRoute(['auth/signup']) ?>">Register</a></li>
							<?php else : ?>
								<?= Html::beginForm(['/auth/logout'], 'post')
									. Html::submitButton(
										'Logout (' . Yii::$app->user->identity->name . ')',
										['class' => 'btn btn-link logout', 'style' => "padding-top:10px;"]
									)
									. Html::endForm() ?>
							<?php endif; ?>
						</ul>
					</div>

				</div>
				<!-- /.navbar-collapse -->
			</div>
		</div>
		<!-- /.container-fluid -->
	</nav>


	<?= $content ?>


	<!--footer start-->


	<footer class="footer-widget-section">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<aside class="footer-widget">
						<div class="about-img"><span>Чай Кофе Чайкофский</span></div>
						<div class="about-content">Сайт про чай, кофе (интересно, полезно, познавательно)
						</div>
						<div class="address">
							<h4 class="text-uppercase">contact Info</h4>

							<p> г.Донецк</p>

							<p> эл.почта:</p>

							<p>serejasuvorov1979@gmail.com</p>

							<a href="http://y66698u9.beget.tech/">Блог про чай,кофе,шоколад</a>

						</div>

					</aside>
				</div>

				<div class="col-md-4">
					<aside class="footer-widget">
						<h3 class="widget-title text-uppercase">Это интересно</h3>

						<div id="myCarousel" class="carousel slide" data-ride="carousel">
							<!--Indicator-->
							<ol class="carousel-indicators">
								<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
								<li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<div class="single-review">
										<div class="review-text">
											<p>Добро пожаловать! Мы вам рады!</p>
										</div>
										<div class="author-id">
											<img src="/public/images/author.png" alt="">

											<div class="author-text">
												<h4>Sophia</h4>

												<h4>CEO, ReadyTheme</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="single-review">
										<div class="review-text">
											<p>На главной странице вашему вниманию представлены все статьи с возможностью листать страницы
												Для ознакомления, сделайте щелчок по обложке или заголовку статьи
											</p>
										</div>
										<div class="author-id">
											<img src="/public/images/author.png" alt="">

											<div class="author-text">
												<h4>Sophia</h4>

												<h4>CEO, ReadyTheme</h4>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="single-review">
										<div class="review-text">
											<p>Комментарии могут оставлять только зарегистрированные пользователи
												Категорию статей выбирайте в соответствующем разделе
											</p>
										</div>
										<div class="author-id">
											<img src="/public/images/author.png" alt="">

											<div class="author-text">
												<h4>Sophia</h4>

												<h4>CEO, ReadyTheme</h4>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</aside>
				</div>
				<div class="col-md-4">
					<aside class="footer-widget">
						<h3 class="widget-title text-uppercase">Спасибо за внимание !</h3>


						<div class="custom-post">
							<div>
								<a href="#"><img src="/public/images/related-post-1.jpg" alt=""></a>
							</div>
							<div>
								<a href="#" class="text-uppercase">Мы надеемся, что вам у нас понравилось</a>
								<span class="p-date">2021</span>
							</div>
						</div>
					</aside>
				</div>
			</div>
		</div>
		<div class="footer-copy">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-center">&copy; 2021 <a href="#">Чай Кофе</a> сделано <i class="fa fa-heart"></i> с <a href="#">любовью</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>