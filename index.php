<?php
echo "<p style=margin:40px color:red;>প্রশ্ন : যদি 20 ওয়াডের ২টি ফেন, 100 ওয়াডের 5টি এসি এবং 150 ওয়াডের ২টি ‍ফ্রিজ থাকে। মোট কত ওয়াড হবে?
প্রতি ওয়াডের দাম 14 টাকা হলে মোট কত টাকা আসবে? 
</p>";
$par_watt = 14;
//fan bill 
$fan = 20*2;
echo "<h4 style=margin:40px>Total Fan watt = $fan</h4>";
$fan_bill = $fan*$par_watt;
print "<h4 style=margin:40px>Total Fan bill = $fan_bill Tk</h4>";
//ac bill
$ac = 100*5;
printf("<h4 style=margin:40px>Total Ac watt = $ac </h4>");
$ac_bill = $ac*$par_watt;
print "<h4 style=margin:40px>Total Ac bill = $ac_bill Tk</h4>";
//fridge bill
$fridge = 150*2;
echo "<h4 style=margin:40px>Total Fridge watt = $fridge";
$fridge_bill = $fridge*$par_watt;
print "<h4 style=margin:40px>Total Fridge bill = $fridge_bill Tk</h4>";
//total watt
$total_watt = $fan+$ac+$fridge;
print "<h4 style=margin:40px>Total electricity used = $total_watt w</h4>";
//total bill
$total_bill = $fan_bill+$ac_bill+$fridge_bill;
print "<h4 style=margin:40px>Total electricity bill  = $total_bill Tk</h4>";
//Total electricity bill with function
function total_watt($fan,$ac,$fridge,$par_watt){
    $sfjdlk = $fan*2+$ac*5+$fridge*2;
    echo "<h3 style=margin:40px>Total electricity watt with function = $sfjdlk </h3>";
};
total_watt(20,100,150,14);
//Total electricity bill with function
function total_bill($fan,$ac,$fridge,$par_watt){
    $sfjdlk = $fan*2*$par_watt+$ac*5*$par_watt+$fridge*2*$par_watt;
    echo "<h3 style=margin:40px>Total electricity bill with function = $sfjdlk Tk</h3>";
};
total_bill(20,100,150,14);
?>