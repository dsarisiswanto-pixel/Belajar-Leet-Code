class Solution {

    /**
     * @param Integer 
     * @param Integer 
     * @return Integer
     */
    function divide($dividend, $divisor) {
       $INT_MAX = 2147483647;
       $INT_MIN = -2147483648;

       if ($dividend == $INT_MIN && $divisor == -1) {
        return $INT_MAX;
       } 
       $negative = ($dividend < 0) ^ ($divisor < 0);

       $a = abs($dividend);
       $b = abs($divisor);

       $result = 0;

       while($a >= $b){
        $shift = 0;
        while ($a >= ($b << ($shift +  1))){
            $shift++;
        }
        $a -= $b << $shift;
        $result += 1 << $shift;
       }
       return $negative ? -$result : $result;
    }
}