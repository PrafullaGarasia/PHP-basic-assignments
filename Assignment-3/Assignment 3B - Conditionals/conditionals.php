<?php
$quantity=$_POST['quantity'];
$cost=2000;
$discount=100;
$tax=0.13;

if(empty($quantity))
{
    echo "Please make sure that you have entered a quantity and then resubmit.";
}
else
{
    $quantity=abs($quantity);
    $discount=abs(100);
    $tax=($tax+1);
    $totalCost= $cost * $quantity;
    if($totalCost<5000)
    {
        echo "Your $100 discount will not apply because the total value of the sale is under $5000!";
    }
    elseif($totalCost>=5000)
    {
        $totalCost = $totalCost - $discount;
    }
    $totalCost = $totalCost * $tax;
    $payment= round($totalCost/12,2);

    echo "<h2>The PHP payment calculation conditionals program</h2>";
    echo "<h2>programmed by Prafulla Kalusinh Garasia(0797964)</h2>";
    echo "You requested to purchase $quantity widget(s) at $2000 each.<br>";
    echo "The total with tax,minus any discount, comes to \$";
    printf("%01.2f",$totalCost);
    echo "<br>You may purchase the widget(s) in 12 monthly installments of \$$payment each.";
    
}

?>


