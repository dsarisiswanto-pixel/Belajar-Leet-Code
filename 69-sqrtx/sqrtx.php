class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function mySqrt($x) {
        if ($x < 2) return $x;

        $left = 1;
        $right = $x;

        while ($left <= $right ) {
            $mid = intdiv($left + $right, 2);

            if ($mid * $mid == $x) return $mid;
            if ($mid * $mid < $x) {
                $left = $mid + 1;
            } else {
                $right = $mid - 1;
            }
        }
        return $right;
    }
}