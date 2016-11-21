<?php

class databaseModel {
	private
		$serveur 	= '',
		$database 	= '',
		$id 		= '',
		$password 	= '',
		$link 		= '',
		$debug 		= true,
		$nbRequests	= 0;

	/**
	 * Connexion à la base de données et à la base
	 * 	$serveur 	: hôte 
	 *	$database 	: base de données
	 * 	$id 		: utilisateur
	 *	$password 	: mot de passe 
	 */
	public function __construct($serveur='localhost', 
								$database='base', 
								$id='root', 
								$password=''){
		$this->serveur 	= $serveur;
		$this->database = $database;
		$this->id 		= $id;
		$this->password = $password;
		$this->link 	= mysql_connect($this->serveur, $this->id, $this->password);

		if (!$this->link && $this->debug){
			throw new MySQLException('Erreur de connexion au serveur MySQL');
		} 

		$base = mysql_select_db($this->database, $this->link);

		if (!$base && $this->debug){
			throw new MySQLException('Erreur de connexion à la base de données');
		}
	}

	/**
	 * retourne le nombre de requêtes effectuées par l'objet
	 * 
	 * @return Integer 
	 */
	public function getNbRequests(){
		return $this->nbRequests;
	}

	/**
	 * envoie une requête SQL et récupère le résultat sous forme de tableau
	 * 
	 * @param $request
	 * @return $result Array
	 */
	public function getResultSQL($request){
		$i = 0;
		$resource = mysql_query($request, $this->link);
		$result = array();

		if (!$resource && $this->debug){
			throw new MySQLException('Erreur de requête SQL');
		}

		while ($line = mysql_fetch_assoc($resource)){
			foreach ($line as $key => $value){
				$result[$i][$key] = $value;
			}		
		}

		mysql_free_result($resource);
		$this->nbRequests++;

		return $result;
	}

	/**
	 * retourne le dernier id généré par un champ de type AUTO_INCREMENT
	 *
	 * @return Integer 
	 */
	public function getLastId(){
		return mysql_insert_id($this->link);
	}

	/**
	 * envoie une requête SQL et retourne le nombre de tables affectées
	 *
	 * @param $request
	 * @return Array $done
	 */
	public function executeSQL($request){
		$resource = mysql_query($request, $this->link);

		if (!$resource && $this->debug){
			throw new MySQLException('Erreur de requête SQL');
		}

		$this->nbRequests++;
		$done = mysql_affected_rows();

		return $done;
	}
}