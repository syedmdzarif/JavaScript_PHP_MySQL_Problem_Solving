<?php
    $quantity = intval($_POST['quantity']);
    $tips = $_POST['tips'];
    $item = $_POST['item'];
    $delivery = $_POST['home'];


    $each = 12.50;
    $total = 0;
    $total = ($quantity * $each);
    if($quantity > 0 && $quantity < 11){
        $discount = ($total * 10)/100;
        $total = $total - $discount;
    }
    elseif($quantity > 10 && $quantity < 21){
        $discount = ($total * 15)/100;
        $total = $total - $discount;
    }
    else{
        $discount = ($total * 20)/100;
        $total = $total - $discount;
    }
    $total = $total + (($total * 20) / 100);

    $total = $total + $tips;
    if($delivery == "Yes"){
        $total = $total + 50;
    }

    echo "<label>Your total is ". $total . " BDT </label>";
?>