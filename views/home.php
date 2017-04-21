<?php 

$ads = Ads::all();
// var_dump($ads);

$ads = array_slice($ads, -3, 3, true);
$ads = array_reverse($ads);
$i=0;


?>

<div class="col-xs-12 homepageHeader">
    <div class="col-xs-12 invisible jjcAdlister">lorem</div>
    <div class="col-xs-12 jjcAdlister">
        Ad-Up
    </div>
    <div class="col-xs-12 invisible jjcAdlister">lorem</div>
    <div class="col-xs-12 searchHeader">
		<form action="" method="GET">
			<div class="col-xs-offset-2 col-xs-6">
				<input type="text" name="search" id="search" class="searchBar" placeholder="search by keywords (car, tv, furniture)">
			</div>
			<div class="col-xs-offset-1 col-xs-1">
				<button type="submit" class="searchSubmit">Search</button>
			</div>
		</form>
    </div>
    <div class="col-xs-12 invisible invisibleTwo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates consectetur amet voluptate excepturi obcaecati consequatur est, qui sequi distinctio exercitationem quam, perferendis odit similique vero possimus. Qui, vitae repellendus corrupti?</div>
</div>

<div class="col-xs-12 featureListingHeader">
    Recent Listings
</div>

<?php foreach ($ads as $listing): ?>

    <?php $i++; ?>

    <?= '<div class="col-xs-12 col-sm-6 col-md-4 portfolio-item" id="lightbox">
            <a href="#portfolioModal' . $i . '" class="portfolio-link" data-toggle="modal">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
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
                                <img class="img-responsive img-centered" src="img/sample.png" alt="">
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





