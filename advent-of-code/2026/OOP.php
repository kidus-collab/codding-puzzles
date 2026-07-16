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

        self::$accountCount++;
    }
    // method 
    public function deposit($amount) { 
        if($amount > 0) { 
            $this->balance += $amount; 
            echo "Deposited: $".$amount .PHP_EOL; 
        }
    }
    public function withdraw($account) { 
        if($account > 0 && $this->balance - $amount >= self::MIN_BALANCE) { 
            $this->balance -= $amount; 
             echo "Withdraw: $" . $amount . PHP_EOL; 
        } else { 
             echo "withdraw failed." . PHP_EOL; 
        }
    }
    public function getBalance() { 
        return this->balance; 
    }
    public funtction getAccountCount() { 
        return self::$accountcount; 
    }
}

$accountOne = new BankAccount("kidus" , 1000);
$accounttwo = new BankAccount("meron" , 30000);

$accountOne.deposit(5000); 
$accountOne.withdraw(2000);


echo "Remaining Balance on Account one is : birr" . $accountOne->getBalance() . "/n"; 