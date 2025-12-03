class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function myAtoi($s) {
     $s = ltrim($s);

     if($s === "") return 0;
     

     $i = 0;
     $sign = 1;
     $result = 0;

     if($s[$i] == '-' || $s[$i] == '+'){
        $sign = ($s[$i] == '-') ? -1 : 1;
        $i++;
     } 

     while ($i < strlen($s) && ctype_digit($s[$i])) {
            $digit = intval($s[$i]);

            // Check overflow before adding
            if ($result > (2147483647 - $digit) / 10) {
                return $sign == 1 ? 2147483647 : -2147483648;  
            }
            $result = $result * 10 + $digit;
            $i++;
     }
     return $result * $sign;
    }
}
