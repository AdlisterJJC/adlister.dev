<?php  

require_once __DIR__ . '/Model.php';

class Ads extends Model {

	protected static $table = 'ads';

	public static function findAdByKeyword($keyword){
		// connect to database;
		self::dbConnect();

		$query = 'SELECT * FROM ' . self::$table . ' WHERE item LIKE %:item%';

		$stmt = self::$dbc->prepare($query);
		$stmt->bindValue(':item', $keyword, PDO::PARAM_STR);
		$stmt->execute();

		$results = $stmt->fetch(PDO::FETCH_ASSOC);

		$instance = null;
		if($results) {
			$instance = new static;
			$instance->attributes = $results;
		}

		return $instance;

	}

	public static function all() {
		// TODO: call dbConnect to ensure we have a database connection

		self::dbConnect();
		// TODO: use the $connection static property to query the database for all the
		//       records in the parks table

		$ads = self::$dbc->query('SELECT * FROM ' . self::$table);
		// TODO: iterate over the results array and transform each associative
		//       array into a Park object

		$adsArray = [];

		foreach ($ads as $ad) {

			$singleAd = new Ads();

			$singleAd->id = $ad['id'];
			$singleAd->date_posted = $ad['date_posted'];
			$singleAd->user_id = $ad['user_id'];
			$singleAd->categories = $ad['categories'];
			$singleAd->price = $ad['price'];
			$singleAd->email = $ad['email'];
			$singleAd->item = $ad['item'];
			$singleAd->summary = $ad['summary'];
			$singleAd->description = $ad['description'];

			array_push($adsArray, $singleAd);
			
		}

		// TODO: return an array of Park objects
		return $adsArray;
	   
	}

	public static function findAdsbyCategory($category) {

		self::dbConnect();

		$ads = self::$dbc->query('SELECT * FROM ' . self::$table . ' WHERE categories LIKE \'%' . $category . '%\' OR item LIKE \'%' . $category . '%\' OR summary LIKE \'%' . $category . '%\' OR description LIKE \'%' . $category . '%\'');

		$adsArray = [];

		foreach ($ads as $ad) {

			$singleAd = new Ads();

			$singleAd->id = $ad['id'];
			$singleAd->date_posted = $ad['date_posted'];
			$singleAd->user_id = $ad['user_id'];
			$singleAd->categories = $ad['categories'];
			$singleAd->price = $ad['price'];
			$singleAd->email = $ad['email'];
			$singleAd->item = $ad['item'];
			$singleAd->summary = $ad['summary'];
			$singleAd->description = $ad['description'];

			array_push($adsArray, $singleAd);
			
		}

		// TODO: return an array of Park objects
		return $adsArray;


	}

	public static function findAdsbyAccount($id) {

		self::dbConnect();

		$ads = self::$dbc->query('SELECT * FROM ' . self::$table . ' WHERE user_id = ' . $id);

		$adsArray = [];

		foreach ($ads as $ad) {

			$singleAd = new Ads();

			$singleAd->id = $ad['id'];
			$singleAd->date_posted = $ad['date_posted'];
			$singleAd->user_id = $ad['user_id'];
			$singleAd->categories = $ad['categories'];
			$singleAd->price = $ad['price'];
			$singleAd->email = $ad['email'];
			$singleAd->item = $ad['item'];
			$singleAd->summary = $ad['summary'];
			$singleAd->description = $ad['description'];

			array_push($adsArray, $singleAd);
			
		}

		// TODO: return an array of Park objects
		return $adsArray;


	}


	public static function insertAd() {

		self::dbConnect();

		$statement = self::$dbc->prepare('INSERT INTO ads (date_posted, user_id, categories, price, email, item, summary, description) VALUES (:date_posted, :user_id, :createCategories, :createPrice, :contactEmail, :createTitle, :createSummary, :createDescription)');

		$statement->bindValue(':date_posted', date("Y-m-d"), PDO::PARAM_STR);
		$statement->bindValue(':user_id', $_SESSION['LOGGED_IN_ID'], PDO::PARAM_INT);		
		$statement->bindValue(':createCategories', $_POST['createCategories'], PDO::PARAM_STR);
		$statement->bindValue(':createPrice', $_POST['createPrice'], PDO::PARAM_INT);
		$statement->bindValue(':contactEmail', $_POST['contactEmail'], PDO::PARAM_STR);
		$statement->bindValue(':createTitle', $_POST['createTitle'], PDO::PARAM_STR);
		$statement->bindValue(':createSummary', $_POST['createSummary'], PDO::PARAM_STR);
		$statement->bindValue(':createDescription', $_POST['createDescription'], PDO::PARAM_STR);	

		$statement->execute();
	
	}

}

?>