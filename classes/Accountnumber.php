<?php

class AccontNumber{
    public int $routing_num;
    public int $account_num;

    public function __construct(
        int $routing_num, int $account_num
    ) {
        $this->$routing_num = $routing_num;
        $this->$account_num = $account_num;
    }
}

?>