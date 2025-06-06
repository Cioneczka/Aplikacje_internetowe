<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once dirname (__FILE__).'/../config.php';

//1. pobierz nazwę akcji

$action = $_REQUEST['action'];

//2. wykonanie akcji
switch ($action) {
	default : // 'calcView'
	    // załaduj definicję kontrolera
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCompute' :
		// załaduj definicję kontrolera
		include_once $conf->root_path.'/app/calc/CalcCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCtrl ();
		$ctrl->process ();
	break;
	case 'CalcCredView' :
		include_once $conf->root_path.'/app/calc_kred/CalcCredCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCredCtrl ();
		$ctrl->generateView ();
	break;
	case 'calcCredCompute' :
		include_once $conf->root_path.'/app/calc_kred/CalcCredCtrl.class.php';
		// utwórz obiekt i uzyj
		$ctrl = new CalcCredCtrl ();
		$ctrl->process ();
	break;
}
