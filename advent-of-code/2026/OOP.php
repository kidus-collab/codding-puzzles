<?php 

declare(strict_types=1);

class user { 
  
   public $email; 
   public $name; 
   
   public function __construct() { 
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
    private const  MIN_BALANCE = 0; 
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
    public function withdraw($amount) { 
        if($amount > 0 && $this->balance - $amount >= self::MIN_BALANCE) { 
            $this->balance -= $amount; 
             echo "Withdraw: $" . $amount . PHP_EOL; 
        } else { 
             echo "withdraw failed." . PHP_EOL; 
        }
    }
    public function getBalance() { 
        return $this->balance; 
    }
    public function getAccountCount() { 
        return self::$accountcount; 
    }
}

class savingsAccount extends BankAccount { 

}



$accountOne = new BankAccount("kidus" , 1000);
$accounttwo = new BankAccount("meron" , 30000);
$savingsAccount = new savingsAccount("Kidus-savings" , 1000); 

echo "The amount I have in savings is " . $savingsAccount->getBalance() . "birr" ; 

$accountOne->deposit(5000); 
$accountOne->withdraw(2000);


echo "Remaining Balance on Account one is : birr" . $accountOne->getBalance() . "\n"; 