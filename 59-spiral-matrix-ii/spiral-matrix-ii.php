class Solution {

    /**
     * @param Integer $n
     * @return Integer[][]
     */
    function generateMatrix($n) {
        $matrix = array_fill(0, $n, array_fill(0, $n, 0));

        $top = 0;
        $bottom = $n - 1;
        $left = 0;
        $right = $n - 1;

        $num = 1;
        $target = $n * $n;

        while ($num <= $target) {

            for ($i = $left; $i <= $right && $num <= $target; $i++) {
                $matrix[$top][$i] = $num++;
            }
            $top++;

            for ($i = $top; $i <= $bottom && $num <= $target; $i++) {
                $matrix[$i][$right] = $num++;
            }
            $right--;

            for ($i = $right; $i >= $left && $num <= $target; $i--) {
                $matrix[$bottom][$i] = $num++;
            }
            $bottom--;

            for ($i = $bottom; $i >= $top && $num <= $target; $i--) {
                $matrix[$i][$left] = $num++;
            }
            $left++;
        }

        return $matrix;
    }
}
