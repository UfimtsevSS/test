<?php
function myPr($x, $n, $m) {
	if (0 == $n) {return $x;}
    else {return myPr($x, $n - 1, $m) * (1 + ($m / 100) / 12);}
	}
echo '12000 руб на 12 месяцев 10% ==> ' . myPr(12000, 12, 10);
