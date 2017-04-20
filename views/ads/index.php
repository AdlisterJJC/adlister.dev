<!--Page for an index of advertisements-->
<?php 


	
$ads = Ads::all();

?>

<div class="col-xs-12 invisible invisibleFour">Lorem ipsum dolor sit amet, consectetur adipisicing elit. At sequi repellat reprehenderit suscipit, aliquam et obcaecati.</div>


<?php foreach ($ads as $listing): ?>

	<?= '<div class="col-xs-12 col-sm-6 col-md-4 portfolio-item" id="lightbox">
            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="img/book_header.jpg" class="img-responsive img" alt="">
            </a>
            <div class="portfolio-caption">
                <h4>' . $listing->item . '</h4><h4>$' . $listing->price . '</h4>
                <p class="text-muted">' . $listing->summary . '</p>
            </div>
        </div></div>' ?>

<?php endforeach; ?>



<?php foreach ($ads as $listing): ?>

	<?= '<div class="col-xs-12 col-sm-6 col-md-4 portfolio-item" id="lightbox">
            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="img/sample.png" class="img-responsive img" alt="">
            </a>
            <div class="portfolio-caption">
                <h4>' . $listing->item . '</h4><h4>$' . $listing->price . '</h4>
                <p class="text-muted">' . $listing->summary . '</p>
            </div>
        </div></div>' ?>

<?php endforeach; ?>



<?php foreach ($ads as $listing): ?>

	<?= '<div class="col-xs-12 col-sm-6 col-md-4 portfolio-item" id="lightbox">
            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="img/brick_header.jpg" class="img-responsive img" alt="">
            </a>
            <div class="portfolio-caption">
                <h4>' . $listing->item . '</h4><h4>$' . $listing->price . '</h4>
                <p class="text-muted">' . $listing->summary . '</p>
            </div>
        </div></div>' ?>

<?php endforeach; ?>



<?php foreach ($ads as $listing): ?>

	<?= '<div class="col-xs-12 col-sm-6 col-md-4 portfolio-item" id="lightbox">
            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="img/city_header.jpg" class="img-responsive img" alt="">
            </a>
            <div class="portfolio-caption">
                <h4>' . $listing->item . '</h4><h4>$' . $listing->price . '</h4>
                <p class="text-muted">' . $listing->summary . '</p>
            </div>
        </div></div>' ?>



<?php endforeach; ?>







