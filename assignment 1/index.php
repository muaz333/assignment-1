<!-- 1 -->
<?php
$a = 10;
$b = 20;

echo ($a > $b) ? "$a is maximum" : "$b is maximum";
?>
<br>
<!-- 2 -->
<?php
$a = 10;
$b = 20;
$c = 15;

$max = max($a, $b, $c);
echo "The maximum number is $max";
?>
<br>
<!-- 3 -->
<?php
$num = -5;
if ($num > 0) {
    echo "Positive";
} elseif ($num < 0) {
    echo "Negative";
} else {
    echo "Zero";
}
?>
<br>
<!-- 4 -->
<?php
$num = 55;

if ($num % 5 == 0 && $num % 11 == 0) {
    echo "$num is divisible by both 5 and 11";
} else {
    echo "$num is not divisible by both 5 and 11";
}
?>
<br>
<!-- 5 -->
<?php
$num = 6;

echo ($num % 2 == 0) ? "Even" : "Odd";
?>
<br>
<!-- 6 -->
<?php
$year = 2024;

if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
    echo "$year is a leap year";
} else {
    echo "$year is not a leap year";
}
?>
<br>
<!-- 7 -->
<?php
$char = 'A';

if (ctype_alpha($char)) {
    echo "$char is an alphabet";
} else {
    echo "$char is not an alphabet";
}
?>
<br>
<!-- 8 -->
<?php

$char = 'e';

if (ctype_alpha($char)) {
    if (in_array(strtolower($char), ['a', 'e', 'i', 'o', 'u'])) {
        echo "$char is a vowel";
    } else {
        echo "$char is a consonant";
    }
} else {
    echo "$char is not an alphabet";
}
?>
<br>
<!-- 9 -->
<?php
$char = '@';

if (ctype_alpha($char)) {
    echo "Alphabet";
} elseif (ctype_digit($char)) {
    echo "Digit";
} else {
    echo "Special character";
}
?>
<br>
<!-- 10 -->
<?php
$char = 'a';

if (ctype_alpha($char)) {
    echo (ctype_upper($char)) ? "Uppercase" : "Lowercase";
} else {
    echo "Not an alphabet";
}
?>
<br>
<!-- 11 -->
<?php
$weekNumber = 3;

$days = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
echo ($weekNumber >= 1 && $weekNumber <= 7) ? $days[$weekNumber - 1] : "Invalid week number";
?>
<br>
<!-- 12 -->
<?php
$monthNumber = 2;
$year = 2024;

$days = cal_days_in_month(CAL_GREGORIAN, $monthNumber, $year);
echo "Number of days: $days";
?>
<br>
<!-- 13 -->
<?php
$amount = 2750;
$notes = [2000, 500, 200, 100, 50, 20, 10, 5, 2, 1];
$count = [];

foreach ($notes as $note) {
    $count[$note] = intdiv($amount, $note);
    $amount %= $note;
}

foreach ($count as $note => $quantity) {
    if ($quantity > 0) {
        echo "$note x $quantity\n";
    }
}
?>
<br>
<!-- 14 -->
<?php
$role = "admin";

switch ($role) {
    case "admin":
        echo "Welcome Admin!";
        break;
    case "editor":
        echo "Welcome Editor!";
        break;
    case "viewer":
        echo "Welcome Viewer!";
        break;
    default:
        echo "Invalid role.";
}
?>
<br>
<!-- 15 -->
<?php
$num = 15;

if ($num == 10 || $num == 15 || $num == 20) {
    echo "Number matches one of the conditions.";
} else {
    echo "Number does not match.";
}
?>
<br>
<!-- 16 -->
<?php
$a = 60;
$b = 60;
$c = 60;

if ($a + $b + $c == 180 && $a > 0 && $b > 0 && $c > 0) {
    echo "Valid triangle";
} else {
    echo "Invalid triangle";
}
?>
<br>
<!-- 17 -->
<?php
$a = 3;
$b = 4;
$c = 5;

if ($a + $b > $c && $b + $c > $a && $a + $c > $b) {
    echo "Valid triangle";
} else {
    echo "Invalid triangle";
}
?>
<br>
<!-- 18 -->
<?php
$a = 3;
$b = 3;
$c = 3;

if ($a == $b && $b == $c) {
    echo "Equilateral triangle";
} elseif ($a == $b || $b == $c || $a == $c) {
    echo "Isosceles triangle";
} else {
    echo "Scalene triangle";
}
?>
<br>
<!-- 19 -->
<?php
$a = 1;
$b = -3;
$c = 2;

$discriminant = $b * $b - 4 * $a * $c;

if ($discriminant > 0) {
    $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
    $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
    echo "Roots are $root1 and $root2";
} elseif ($discriminant == 0) {
    $root = -$b / (2 * $a);
    echo "Root is $root";
} else {
    echo "No real roots";
}
?>
<br>
<!-- 20 -->
<?php
$costPrice = 1000;
$sellingPrice = 1200;

if ($sellingPrice > $costPrice) {
    echo "Profit: " . ($sellingPrice - $costPrice);
} elseif ($sellingPrice < $costPrice) {
    echo "Loss: " . ($costPrice - $sellingPrice);
} else {
    echo "No profit, no loss.";
}
?>
<br>
<!-- 21 -->
<?php
$physics = 85;
$chemistry = 90;
$biology = 80;
$math = 95;
$computer = 88;

$total = $physics + $chemistry + $biology + $math + $computer;
$percentage = ($total / 500) * 100;

if ($percentage >= 90) {
    echo "Grade A";
} elseif ($percentage >= 80) {
    echo "Grade B";
} elseif ($percentage >= 70) {
    echo "Grade C";
} elseif ($percentage >= 60) {
    echo "Grade D";
} elseif ($percentage >= 40) {
    echo "Grade E";
} else {
    echo "Grade F";
}
?>
<br>
<!-- 22 -->
<?php
$basicSalary = 15000;

if ($basicSalary <= 10000) {
    $hra = $basicSalary * 0.2;
    $da = $basicSalary * 0.8;
} elseif ($basicSalary <= 20000) {
    $hra = $basicSalary * 0.25;
    $da = $basicSalary * 0.9;
} else {
    $hra = $basicSalary * 0.3;
    $da = $basicSalary * 0.95;
}

$grossSalary = $basicSalary + $hra + $da;
echo "Gross Salary: $grossSalary";
?>
<br>
<!-- 23 -->
<?php
$units = 275;

if ($units <= 50) {
    $bill = $units * 0.50;
} elseif ($units <= 150) {
    $bill = 50 * 0.50 + ($units - 50) * 0.75;
} elseif ($units <= 250) {
    $bill = 50 * 0.50 + 100 * 0.75 + ($units - 150) * 1.20;
} else {
    $bill = 50 * 0.50 + 100 * 0.75 + 100 * 1.20 + ($units - 250) * 1.50;
}

$bill += $bill * 0.20; // Add 20% surcharge
echo "Total Electricity Bill: Rs. $bill";
?>


