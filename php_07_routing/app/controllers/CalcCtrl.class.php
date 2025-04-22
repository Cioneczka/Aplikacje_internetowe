<?php

namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {

    private $inputData; // Zmieniona nazwa
    private $outputData; // Zmieniona nazwa

    public function __construct() {
        $this->inputData = new CalcForm();
        $this->outputData = new CalcResult();
    }

    public function loadParams() { // Zmieniona nazwa funkcji
        $this->inputData->loanAmount = getFromRequest('kw'); // Zmienione nazwy
        $this->inputData->term = getFromRequest('ok');
        $this->inputData->interest = getFromRequest('op');
    }

    public function validateInputs() { // Zmieniona nazwa funkcji
        if (!(isset($this->inputData->loanAmount) && isset($this->inputData->term) && isset($this->inputData->interest))) {
            return false; // Jeśli brakujące dane, pomijamy walidację
        }

        if ($this->inputData->loanAmount == "") {
            getMessages()->addError('Proszę podać kwotę kredytu.');
        }
        if ($this->inputData->term == "") {
            getMessages()->addError('Proszę określić okres spłaty kredytu.');
        }
        if ($this->inputData->interest == "") {
            getMessages()->addError('Proszę podać oprocentowanie kredytu.');
        }

        if (!getMessages()->isError()) {
            // Sprawdzanie poprawności typów danych
            if (!is_numeric($this->inputData->loanAmount)) {
                getMessages()->addError('Kwota kredytu musi być liczbą.');
            }

            if (!is_numeric($this->inputData->term)) {
                getMessages()->addError('Okres spłaty musi być liczbą.');
            }

            if (!is_numeric($this->inputData->interest)) {
                getMessages()->addError('Oprocentowanie musi być liczbą.');
            }
        }

        return !getMessages()->isError(); // Zwraca true, jeśli brak błędów
    }

	public function action_calcCompute() {

		$this->loadParams(); // Pobranie danych z żądania
	
		if ($this->validateInputs()) {
			
			$this->inputData->loanAmount = floatval($this->inputData->loanAmount); 
			$this->inputData->term = intval($this->inputData->term);
			$this->inputData->interest = floatval($this->inputData->interest); 
	
			getMessages()->addInfo('Wprowadzono poprawne dane.');
	
			// Sprawdzenie uprawnień dla użytkowników
			if (!inRole('admin') && $this->inputData->interest <= 5) {
				getMessages()->addError('Tylko administrator ma dostęp do tej funkcji dla oprocentowania poniżej 5%.');
			} else {
				// Obliczenie miesięcznej raty kredytu
				$loanAmount = $this->inputData->loanAmount; 
				$termInMonths = $this->inputData->term * 12; 
				$monthlyRate = $this->inputData->interest / 100 / 12; 
	
				if ($monthlyRate > 0) {
					// Obliczanie za pomocą wzoru na równą ratę (annuitetową)
					$q = 1 + $monthlyRate; // Współczynnik odsetkowy
					$numerator = $loanAmount * pow($q, $termInMonths) * $monthlyRate; 
					$denominator = pow($q, $termInMonths) - 1; 
	
					
					if ($denominator > 0) {
						$this->outputData->result = round($numerator / $denominator, 2); 
					} else {
						getMessages()->addError('Błąd matematyczny: mianownik równy zero.');
						return;
					}
				} else {
				
					$this->outputData->result = round($loanAmount / $termInMonths, 2);
				}
			}
	
			getMessages()->addInfo('Obliczenia zostały wykonane pomyślnie.');
		}
	
		$this->generateView(); // Generowanie widoku
	}
	
    public function action_calcShow() {
        getMessages()->addInfo('Zapraszamy do skorzystania z kalkulatora kredytowego.');
        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('user', unserialize($_SESSION['user'])); // Przypisanie danych użytkownika
        getSmarty()->assign('page_title', 'Kalkulator kredytowy - Twoje finanse pod kontrolą');
        getSmarty()->assign('form', $this->inputData);
        getSmarty()->assign('res', $this->outputData);
        getSmarty()->assign('page_header', 'Kalkulator kredytowy. <br> Oblicz, ile będą wynosić Twoje raty kredytowe.');
        getSmarty()->display('CalcView.tpl'); // Wyświetlenie szablonu
    }
}
