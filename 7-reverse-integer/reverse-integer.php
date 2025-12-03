class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        $rev = 0;
        $sign = $x < 0 ? -1 : 1;
        $x = abs($x);

        while ($x > 0) {
            $pop = $x % 10;
             $x = intdiv($x, 10);

            if ($rev > (2147483647 - $pop) / 10){
                return 0;
            }
            $rev = $rev * 10 + $pop;
        }

        return $rev * $sign;
    }
}