<!--Page for an index of advertisements-->
<?php 


	
$ads = Ads::all();


?>

<div class="col-xs-12 invisible invisibleFour">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sequi repellat reprehenderit suscipit, aliquam et obcaecati.</div>

<?php foreach ($ads as $listing): ?>
	<?=  '<div class="col-xs-12 col-sm-4 listing" id="lightbox">'?>
		<?= '<div class="col-xs-12 title">' . $listing->item . '</div>' ?>
		<?= '<div class="col-xs-12 title">' . ' - $' . $listing->price . '</div>' ?>
		<?= '<div class="col-xs-12"><img src="img/sample.png" class="img"></div>' ?>
		<?= '<div class="col-xs-12 summary">' . $listing->summary . '</div>' ?>
		<?= '<div class="col-xs-12 invisible">Lorem</div>' ?>
	<?= '</div>' ?>
<?php endforeach; ?>






