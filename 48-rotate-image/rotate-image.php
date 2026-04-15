class Solution {

    /**
     * @param Integer[][] $matrix
     * @return NULL
     */
    function rotate(&$matrix) {
        $n = count($matrix);

        for ($i = 0; $i < $n; $i++) {
            for ($j = $i; $j < $n; $j++) {
                $temp = $matrix[$i][$j];
                $matrix[$i][$j] = $matrix[$j][$i];
                $matrix[$j][$i] = $temp;
            }
        }
        for ($i = 0; $i < $n; $i++){
            $left = 0;
            $right = $n - 1;

            while ($left < $right) {
                $temp = $matrix[$i][$left];
                $matrix[$i][$left] = $matrix[$i][$right];
                $matrix[$i][$right] = $temp;

                $left++;
                $right--;
            }
        }
    }
}