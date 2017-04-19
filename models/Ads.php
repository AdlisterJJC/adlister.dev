<?php  

require_once __DIR__ . '/Model.php';

class Ads extends Model {
	protected static $table = 'ads';

	public static function findAdByKeyword($keyword){
		// connect to database;
		self::dbConnect();

		$query = 'SELECT * FROM' . self::$table . ' WHERE item LIKE %:item%';

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

}
?>