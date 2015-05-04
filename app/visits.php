<?php

class Visits
{
	/**
	 * @var null Database Connection
	 */
	private $db = null;
	
	/**
	 * constructor : get the database connection
	 */
	function __construct() {
		try {
			$options = array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ, PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING);
			$this->db = new PDO(DB_TYPE . ':host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS, $options);
		} catch (PDOException $e) {
			exit('Database connection could not be established.');
		}
	}

	/**
	 * Get all visits from database
	 * @return all the visits
	 */
	function getVisits()
	{
		$sql = "SELECT * FROM visits ORDER BY date_visite ";
		$query = $this->db->prepare($sql);
		$query->execute();
		
		return $query->fetchAll();
	}

	/**
	 * Add a visit to database
	 */
	public function addVisits()
	{
		$ip = $_SERVER['REMOTE_ADDR'];
		
		$sql = "INSERT INTO visits (ip , date_visite , pages_vues) VALUES (:ip , NOW(), 1)
			   ON DUPLICATE KEY UPDATE pages_vues = pages_vues + 1";
		$query = $this->db->prepare($sql);
		$query->execute(array(':ip' => $ip,));
	}
	
	/**
	 * Print all visits
	 */
	public function printVisits()
	{
		$visits = $this->getVisits();
		
		?>
		<table>
			<thead><tr><th>IP</th><th>Date de visite</th><th>Pages vues</th></tr></thead>
		<?php
			$nb_visit = 0;
			foreach ($visits as $visit) { 
				$nb_visit= $nb_visit + $visit->pages_vues; ?>
				<tr><td><?php echo $visit->ip; ?></td><td><?php echo $visit->date_visite; ?></td><td><?php echo $visit->pages_vues; ?></td></tr>
		<?php } ?>
			<tr><th></th><th>view pages : </th><th><?php echo $nb_visit; ?></th></tr>
		</table>
		<?php
	}
}
?>
