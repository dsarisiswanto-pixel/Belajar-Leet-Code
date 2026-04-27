class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n) {
        $res = 1;
        $k = min($m - 1, $n - 1);

        for ($i = 1; $i <= $k; $i++) {
            $res = $res * ($m + $n - 2 - $k + $i) / $i;
        }
        return (int)$res;
    }
}