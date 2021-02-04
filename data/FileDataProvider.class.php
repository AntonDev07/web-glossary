<?php 

require('DataProvider.class.php');

class FileDataProvider extends DataProvider
{
   
	public function get_terms() {
		$json = $this->get_data();

		return json_decode($json);
	}
	public function get_term($term) {
		$terms = $this->get_terms();

		foreach ($terms as $item) {
			if ($item->term === $term) {
				return $item;
			}
		}
		return false;
	}

	public function search_terms($search) {
		$items = $this->get_terms();

		$searchItems = array_filter($items, function ($item) use ($search){
			// 'Hello, world'  // 'H' => 0
			// 0 === false
			if(strpos($item->term, $search) !== false || 
				strpos($item->definition, $search) !== false) {
				return $item;
			}
			return false;
		});

		return $searchItems;
	}


	public function add_term($term, $definition) {
		$terms = $this->get_terms();

		$terms[] = new GlossaryTerm($term, $definition);
		// $obj = (object) [
		// 	'term' => $term,
		// 	'definition' => $definition
		// ];

		// $terms[] = $obj;

		$this->set_data($terms);

	}

	public function update_term($original_term, $new_term, $definition) {
		$terms = $this->get_terms();

		foreach ($terms as $item) {
			if ($item->term === $original_term) {
				$item->term = $new_term;
				$item->definition = $definition;
				break;
			}
		}

		$this->set_data($terms);
	}

	public function delete_term($term) {
		$terms = $this->get_terms();

		for($i = 0; $i < count($terms); $i++) {
			if ($terms[$i]->term === $term) {
				unset($terms[$i]);
				break;
			}
		}

		$new_terms = array_values($terms);

		$this->set_data($new_terms);
	}

	private function set_data($arr) {

		$json = json_encode($arr);

		file_put_contents($this->source, $json);
	}

	private function get_data() {

		$json = '';

		if (!file_exists($this->source)) {
			file_put_contents($this->source, '');
		} else {
			$json = file_get_contents($this->source);
		}

		return $json;

	}



}
