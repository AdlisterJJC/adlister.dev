<!--Page for an index of advertisements-->
<?php 


	
$ads = Ads::all();
$i=0;

?>

<div class="col-xs-12 invisible invisibleFour">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sequi repellat reprehenderit suscipit, aliquam et obcaecati.</div>


<?php foreach ($ads as $listing): ?>

	<?php $i++; ?>

	<?= '<div class="col-xs-12 col-sm-6 col-md-4 portfolio-item" id="lightbox">
            <a href="#portfolioModal' . $i . '" class="portfolio-link" data-toggle="modal">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="img/book_header.jpg" class="img-responsive img" alt="">
            </a>
            <div class="portfolio-caption">
                <h3>' . $listing->item . '</h3><h4>$' . $listing->price . '</h4>
                <p class="text-muted">' . $listing->summary . '</p>
            </div>
        </div></div>' ?>

<?php endforeach; ?>

<?php $i=0; ?>

<?php foreach ($ads as $listing): ?>
	<?php $i++; ?>
	<?= 
	'<div class="portfolio-modal modal fade" id="portfolioModal' . $i . '" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content background">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h1>' . $listing->item . '</h1>
                                <a href="https://caydensimler.github.io/simple-simon.html" target="_blanK"><img class="img-responsive img-centered" src="img/sample.png" alt=""></a>
                                <h4>' . $listing->description . '</h4>
                                <h2>$' . $listing->price . '</h2>
                                <h4>' . $listing->email . '</h4>
                                <div class="col-xs-12 invisible invisibleThree">filler text</div>

                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Return to Results</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>' ?>

	
<?php endforeach; ?>







