<!--Page for an index of advertisements-->
<?php 


	
$ads = Ads::all();


?>

<div class="col-xs-12 invisible invisibleFour">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sequi repellat reprehenderit suscipit, aliquam et obcaecati.</div>

<?php foreach ($ads as $ad): ?>
	<?=  '<div class="col-xs-offset-1 col-xs-10 col-sm-4">'?>
		<?= '<div class="col-xs-12 title">' . $ad->item . ' - $' . $ad->price . '</div>' ?>
		<?= '<div class="col-xs-12 summary">' . $ad->summary . '</div>' ?>
	<?= '</div>' ?>
<?php endforeach; ?>




