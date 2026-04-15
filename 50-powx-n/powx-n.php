class Solution {

    /**
     * @param Float $x
     * @param Integer $n
     * @return Float
     */
    function myPow($x, $n) {
        if ($n < 0) {
            $x = 1 / $x;
            $n = -$n;
        }
        return $this->fastPow($x, $n);
    }
    private function fastPow($x, $n){

    if ($n == 0) return 1;

    $half = $this->fastPow($x, intdiv($n, 2));

    if($n % 2 == 0){
        return $half * $half;
    } else {
        return $half * $half * $x;
    }
    }
}