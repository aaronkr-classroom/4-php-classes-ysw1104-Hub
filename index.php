<?php
require_once('classes/Account.php');
require_once('classes/Customer.php');

$account = [];//아니면 array();

$account1 = new Account();
//$account -> acct_num = '20260331';
//$account -> type = 'Saving';
//$account -> balance = '12345678.89'

$account1->type = "Checking";
$account1->acct_num = new AccountNumber(20260331, 1);
$account1->deposit(1000);// 입금 함수

$account2 = new Account(
    new AccountNumber(20260331, 2), 'Savings', 1234567.89);//새 게좌
$account2->withdraw(1000000);// 출금 함수

$accounts = [$account1, $account2];

$user = new Customer('kisu','hong');
?>

<?php include ('includes/header.php'); ?>

<h2><?php echo $user->getFullName(); ?>'s Account</h2>
<?php foreach ($accounts as $a){ ?>
<ul>
    <li>Number: <?php echo $a->acct_num->routing_num . '-' . $a->acct_num->account_num; 
    ?></li>
    <li>Type: <?php echo $a->type; ?></li>
    <li>Balance: <?php echo $a->balance; ?></li>
</ul>
<?php } ?>

<?php include ('includes/footer.php'); ?>