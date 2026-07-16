class user { 
  
   public $email; 
   public $name; 
   
   public function _construct() { 
       $this->email = $email; 
       $this->name = $name; 
   }

   public function login() { 
       echo 'user is logged in'; 
   }
}

class BankAccount { 
    public $account_owner; 
    private $balance ;
    static $account;  
    final $minbalance = 0 ; 
    
    public function _construct() { 
        $this->account_owner = $account_owner; 
        $this->balance = $balance; 
    }
    // method 
    public function deposit() { 
        if($balance > 0) { 
            echo "Amount has been deposited " . $balance ; 
        }
    }
    public function deposit() { 
        if($balance > 0) { 
            echo "Amount has been deposited " . $balance ; 
        }
    }
    public function getBalance() { 
        return this->getBalance() ; 
    }
}

$accountOne = new BankAccount();
$accounttwo = new BankAccount();


$userOne = new User(); 
$userOne->login(); 
