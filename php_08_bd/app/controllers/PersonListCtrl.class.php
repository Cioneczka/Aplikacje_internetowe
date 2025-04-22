<?php

namespace app\controllers;

use app\forms\PersonSearchForm;
use PDOException;

class PersonListCtrl {

	private $form; //dane formularza wyszukiwania
	private $records; //rekordy pobrane z bazy danych

	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->form = new PersonSearchForm();
	}
		
	public function validate() {
		// 1. sprawdzenie, czy parametry zostały przekazane
		// - nie trzeba sprawdzać
		$this->form->surname = getFromRequest('sf_surname');
	
		// 2. sprawdzenie poprawności przekazanych parametrów
		// - nie trzeba sprawdzać
		
		return ! getMessages()->isError();
	}
	
	public function action_personList() {
		// 1. Walidacja danych formularza
		$this->validate();
		
		// 2. Przygotowanie mapy z parametrami wyszukiwania (nazwa_kolumny => wartość)
		$search_params = []; //przygotowanie pustej struktury
		if (isset($this->form->surname) && strlen($this->form->surname) > 0) {
			$search_params['surname[~]'] = $this->form->surname . '%'; // dodanie symbolu % zastępuje dowolny ciąg znaków na końcu
		}
		
		// 3. Pobranie listy rekordów z bazy danych
		$num_params = sizeof($search_params);
		if ($num_params > 1) {
			$where = ["AND" => $search_params];
		} else {
			$where = $search_params;
		}
		$where["ORDER"] = "surname"; // dodanie frazy sortującej po nazwisku
		
		// Wykonanie zapytania do bazy danych
		try {
			$this->records = getDB()->select("person", [
				"name",
				"surname",
				"birthdate",
				"idperson",
				"tel"
			], $where);
			
			// Debugowanie zapytania
			var_dump($this->records);
		} catch (PDOException $e) {
			getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
			if (getConf()->debug) getMessages()->addError($e->getMessage());
		}
		
		// 4. Generowanie widoku
		getSmarty()->assign('searchForm', $this->form); // dane formularza
		getSmarty()->assign('people', $this->records);  // lista rekordów z bazy danych
		getSmarty()->display('PersonList.tpl');
	}
}	