<?php
require_once $conf->root_path.'/lib/smarty/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc_kred/CalcCredForm.class.php';
require_once $conf->root_path.'/app/calc_kred/CalcCredResult.class.php';


class CalcCredCtrl{

    private $msgs;
    private $infos;
    private $form;
    private $result;
    private $hide_intro;
    private $credMultiplier;

    public function __construct(){

        $this->msgs = new Messages();
        $this->form = new CalcCredForm();
        $this->result = new CalcCredResult();
        $this->hide_intro = false;
    }

    public function getParams(){
        $this->form->LoanAmount = isset($_REQUEST['LoanAmount']) ? $_REQUEST['LoanAmount'] : null;
        $this->form->LoanTerm = isset($_REQUEST['LoanTerm']) ? $_REQUEST['LoanTerm'] : null;
        $this->form->InterestRate = isset($_REQUEST['InterestRate']) ? $_REQUEST['InterestRate'] : null;
    }

    public function validation(){
        if(!(isset($this->form->LoanAmount) && isset($this->form->InterestRate) && isset($this->form->LoanTerm) )){
            return false;
        } else{
            $this->hide_intro = true;
        }
        if (! $this->msgs->isError()) {
            if($this->form->InterestRate == ""){
                $this->msgs->addError('Nie podano oprocentowania');
            }

            if($this->form->LoanAmount == ""){
                $this->msgs->addError('Nie podano kwoty kredytu');
            }

            if($this->form->LoanTerm == ""){
                $this->msgs->addError('Nie podano długości spłaty (w miesiącach)');
            }
        }
        return ! $this->msgs->isError();

    }
    public function process(){

        $this->getParams();

        if($this->validation()){
            $this->form->LoanAmount = intval($this->form->LoanAmount);
			$this->form->LoanTerm = intval($this->form->LoanTerm);
            $this->form->InterestRate = floatval($this->form->InterestRate);
            $this->msgs->addInfo('Parametry poprawne.');

            $monthlyInterestRate = ($this->form->InterestRate / 100) / 12;  // miesięczna stopa oprocentowania
            
            $this->result->result = 
                ($this->form->LoanAmount * $monthlyInterestRate * (1 + $monthlyInterestRate) ** $this->form->LoanTerm) / 
                ((1 + $monthlyInterestRate) ** $this->form->LoanTerm - 1);
            
            $this->msgs->addInfo('Wykonano obliczenia.');

        }
        $this->generateView();
    }
//generate view



public function generateView(){
    global $conf;

    $smarty = new Smarty();
    $smarty->assign('conf',$conf);

    $smarty->assign('page_title','Przykład 06');
		$smarty->assign('page_description','Aplikacja z jednym "punktem wejścia". Model MVC, w którym jeden główny kontroler używa różnych obiektów kontrolerów w zależności od wybranej akcji - przekazanej parametrem.');
		$smarty->assign('page_header','Kontroler główny');
				
		$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc_kred/CalcCredView.html');
}







}



