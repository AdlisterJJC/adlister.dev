<?php 

$ads = Ads::all();
$i = 0;


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
    <?php if ($i == 3) { break; } ?>

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
                <h4>' . $listing->item . '</h4><h4>' . $listing->price . '</h4>
                <p class="text-muted">' . $listing->summary . '</p>
            </div>
        </div></div>' ?>
<?php $i++; endforeach; ?>




