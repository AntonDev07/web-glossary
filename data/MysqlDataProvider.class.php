<?php 


class MysqlDataProvider extends DataProvider {
   
	public function get_terms() {
		return $this->query('SELECT * FROM terms');
	}
	public function get_term($term) {

		$db = $this->connect();

		if ($db == null) {
			return;
		}

		$sql = 'SELECT * FROM terms WHERE id = :id ';

		$stm = $db->prepare($sql);

		$stm->execute([
			':id' => $term,
		]);

		$data = $stm->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

		$query = null;
		$db = null;

		if (empty($data)) {
			return;
		}

	
		return $data[0];

	}

	public function search_terms($search) {

		return $this->query(
			'SELECT * FROM terms WHERE term LIKE :search OR definition LIKE :search ',
			[
				':search' => '%'.$search.'%',
			]
		);
	}


	public function add_term($term, $definition) {

		return $this->execute(
			'INSERT INTO terms (term, definition) VALUES (:term, :definition)',
			[
				':term' => $term,
				':definition' => $definition
			]
		);

	}

	public function update_term($id, $new_term, $definition) {

		return $this->execute(
			'UPDATE terms SET term =  :term, definition = :definition WHERE id = :id',
			[
				':id' => $id,
				':term' => $new_term,
				':definition' => $definition,
			]
		);
	}

	public function delete_term($id) {

		return $this->execute(
			'DELETE FROM terms WHERE id = :id',
			[
				':id' => $id,
			]	
		);
	
	}
	private function query($sql, $sql_params = null)
	{
		$db = $this->connect();

		if ($db == null) {
			return [];
		}
		$query = null;

		if (empty($sql_params)) {
			$query = $db->query($sql);
		} else {
			$query = $db->prepare($sql);
			$query->execute($sql_params);
		}

		$data = $query->fetchAll(PDO::FETCH_CLASS, 'GlossaryTerm');

		$query = null;
		$db = null;

		return $data;
	}

	private function execute($sql, $sql_params)
	{
		$db = $this->connect();

		if ($db == null) {
			return ;
		}

		$stm = $db->prepare($sql);

		$stm->execute($sql_params);
		$stm = null;
		$db = null;
	}


	private function connect() {
		try {
			
			return new PDO($this->source, CONFIG['db_user'], CONFIG['db_pass']);

		} catch (PDOException $e) {
			return null;
		}
	}


}
