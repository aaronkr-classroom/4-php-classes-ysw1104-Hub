<?php
/*
<classes>
고객 관리하는 클래스
*/
class Customer{
    public string $frist_name;
    public string $last_name;
    public string $email_name;
    public string $accounts;
    private string $password;

    public function __construct(
        string $frist_name = '',
        string $last_name = '',
        string $email = '',
        string $accounts = '',
        string $password = '',

    ){
        $this->frist_name = $frist_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->email = $email;
        $this->accounts = $accounts;
        $this->password = $password;

    }

    public function getFullname(): string{
        return $this->frist_name . ' ' . $this->last_name;
    }
}
?>