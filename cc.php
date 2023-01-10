<?
class CreditCard{
    private $number;
    private $cvc;
    private $expiry;

    public function __construct($number, $cvc, $expiry)
    {
        $this->setNumber($number);
        $this->setCvc($cvc);
        $this->setExpiry($expiry);
    }

    
    public function setNumber($number)
    {
        if(is_int($number) && (strlen((string)$number) == 16)){
            $this->number = $number;
        }
    }

    public function setCvc($cvc)
    {
        if(is_int($cvc)){
            $this->cvc = $cvc;
        }
    }

    public function setExpiry($expiry)
    {
        if(is_string($expiry)){

            $today = date('d/m/Y');
            $checktoday = DateTime::createFromFormat('d/m/Y', $today);
            $expiry = DateTime::createFromFormat('d/m/Y', $expiry);
            
            if($expiry > $checktoday){
                $this->expiry = true; 
            } else {
                $this->expiry = false;
            }
            

        }

    }
}

$card1 = new CreditCard(1234567891234567, 235, '01/01/2027');

var_dump($card1);