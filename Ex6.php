<?php
//โปรแกรมคำนวณหาเกรดเฉลี่ย
 $num = 4.0; //เกรด
 $credit = 3.0; //หน่วยกิต
 $num2 = 4.0; //เกรด
 $credit2 = 3.0; //หน่วยกิต
 $num3 = 4.0; //เกรด
 $credit3 = 3.0; //หน่วยกิต
 $num4 = 4.0; //เกรด
 $credit4 = 3.0; //หน่วยกิต
 $total = $num * $credit; // ราคารวมคิดโดยนำ เกรด x หน่วยกิต
 $total2 = $num2 * $credit2; // ราคารวมคิดโดยนำ เกรด x หน่วยกิต
 $total3 = $num3 * $credit3; // ราคารวมคิดโดยนำ เกรด x หน่วยกิต
 $total4 = $num4 * $credit4; // ราคารวมคิดโดยนำ เกรด x หน่วยกิต
 $sum = $total + $total2 + $total3 + $total4; // นำผลรวมที่ได้มาบวกกัน

 //หารจำนวนหน่วยกิตทั้งหมด 
 $average = $sum /12;
 

 echo ("ภาษาไทย ได้เกรด " . $num . " จำนวน " .$credit. " หน่วยกิต" );
 echo (" <br>");
 echo ("ภาษาอังกฤษ ได้เกรด " . $num2 . " จำนวน " .$credit2. " หน่วยกิต" );
 echo (" <br>");
 echo ("วิทยาศาสตร์ ได้เกรด " . $num3 . " จำนวน " .$credit3. " หน่วยกิต" );
 echo (" <br>");
 echo ("คณิตศาสตร์ ได้เกรด " . $num4 . " จำนวน " .$credit4. " หน่วยกิต" );
 echo (" <br>");
 echo ("เกรดเฉลี่ย  = " .$average );
 echo (" <br>");
 


?>