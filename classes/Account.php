<?php
/* 
    Claases/Account.php 
    계좌괸리 클래스
*/
include_once('AccountNumber.php');
class Account{
    //계좌속성
    public AccountNumber $acct_num; //정수
    public string $type; // 문자열 checking. saving
    public float $balance; //실수

    //생성자
    public function __construct(
        AccountNumber $acct_num = null, string $type = '', float $balance = 0.0){
        $this->acct_num = $acct_num ?? new AccountNumber();
        $this->type = $type;
        $this->balance = $balance;
    }

    //계좌의 메소드(함수)
    public function deposit(float $amount): float {
        $this->balance += $amount;
        return $this->getBalance();
        //예금에 대한 코드
    }
    public function withdraw(float $amount): float {
        $this->balance -= $amount;
        return $this->getBalance();
        //출금에 대한 코드
    }
    public function getBalance(): float{
        return $this->balance;
    }
}
?>

<?php
/*
    AccountNumber
*/
class AccountNumber{
    public int $routing_num;
    public int $account_num;

    public function __construct(
        int $routing_num = 0, int $account_num = 0
    ) {
        $this->routing_num = $routing_num;
        $this->account_num = $account_num;
    }
}
