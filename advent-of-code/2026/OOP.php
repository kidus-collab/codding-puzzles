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
    public $accountOwner; 
    private $balance ;
    private final  MIN_BALANCE = 0; 
    private static $accountCount = 0; 

    public function _construct($accountOwner , $balance) { 
        $this->accountOwner = $accountOwner; 
        $this->balance = $balance; 
    }
    // method 
    public function deposit($amount) { 
        if($amount > 0) { 
            $this->balance += $amount; 

        }
    }
    public function withdraw($account) { 
        if($balance < $account) { 
            echo "Amount has been withdraw " . $balance ; 
        }
    }
    public function getBalance() { 
        return this->getBalance(); 
    }
}

$accountOne = new BankAccount();
$accounttwo = new BankAccount();

$accountOne.deposit(); 
$accounttwo.withdraw();

$userOne = new User(); 
$userOne->login(); 
