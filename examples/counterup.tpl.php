<?php require(QCUBED_CONFIG_DIR . '/header.inc.php'); ?>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>


	<style>
        /* For only a temporary example */
		.example {
			font-family: 'Open Sans', sans-serif;
			-webkit-transition: all 400ms ease;
			-moz-transition: all 400ms ease;
			-o-transition: all 400ms ease;
			transition: all 400ms ease;
			text-align: center;
		}
		h3 {
			margin-bottom: 30px;
			color: #999;
			font-weight: 600;
			text-transform: uppercase;
		}
		span {
			font-size: 33px;
			color: #555;
			margin-bottom: 250px;
			display: inline-block;
			font-weight: 400;
			text-align: center;
		}
		span > span {
			margin-bottom: 0;
		}
		.circle {
			background: #2980b9;
			width: 200px;
			line-height: 200px;
			display: inline-block;
			color: #fff;
			border-radius: 100%;
		}

		#tagline { height: 30px; }
		#tagline a span { color: #fff; font-size: 1em; font-weight: 700; line-height: 30px; margin-left: 10px; text-decoration: none; }

		@media only screen and (max-width: 1024px) {
			span {
				font-size: 22px;
				margin-bottom: 200px;
			}
		}
		@media only screen and (max-width: 800px) {
			div > span {
				font-size: 33px;
				display: block;
				width: 100% !important;
				margin-bottom: 100px;
			}
			span {
				font-size: 33px;
			}
		}
	</style>

	<?php $this->RenderBegin(); ?>

	<div class="instructions" style="margin-bottom: 50px;">
		<h1 class="instruction_title">QCounterUp: Counter-Up is a lightweight jQuery plugin
            that counts up to a targeted number when the number becomes visible)</h1>
		<p>
            <b>QCounterUp</b> uses the plugin  <a href="http://ciromattia.github.io/jquery.counterup/demo/index.html">Counter-Up</a>.
            Counter-Up is a jQuery plugin that animates a number from zero (counting up towards it).
		</p>
	</div>

	<div class="example">

	<h3>(Scroll down)</h3>

		<span style="height: 100px; margin-top: 45px;"><?php $this->strCounterUp1->render(); ?></span>
		<span style="height: 100px; margin-left: 20px; margin-top: 45px; font-size: 14px;">
			Here is a simple example Person from class: lists the number of people.</span>

		<div>
			<?php $this->strCounterUp2->render(); ?>
			<?php $this->strCounterUp3->render(); ?>
			<?php $this->strCounterUp4->render(); ?>
		</div>
		<div>
			<?php $this->strCounterUp5->render(); ?>
			<?php $this->strCounterUp6->render(); ?>
			<?php $this->strCounterUp7->render(); ?>
		</div>
		<div>
			<span style="display: inline-block; width: 32%"><span>$</span><?php $this->strCounterUp8->render(); ?></span>
			<span style="display: inline-block; width: 32%"><?php $this->strCounterUp9->render(); ?><span>€</span></span>
			<?php $this->strCounterUp10->render(); ?>
		</div>
		<div>
			<?php $this->strCounterUp11->render(); ?>
			<?php $this->strCounterUp12->render(); ?>
			<?php $this->strCounterUp13->render(); ?>
		</div>

	</div>

<?php $this->RenderEnd(); ?>
<?php require(QCUBED_CONFIG_DIR . '/footer.inc.php'); ?>