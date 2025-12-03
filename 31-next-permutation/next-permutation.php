class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */


    function nextPermutation(&$nums) {
        $n = count($nums);

        $i = $n - 2;
        while ($i >= 0 && $nums[$i] >= $nums[$i + 1]) {
            $i--;
        }

        if ($i >= 0){
            
            $j = $n - 1;
            while ($nums[$j] <= $nums[$i]){
                $j--;
            }
            $temp = $nums[$i];
            $nums[$i] = $nums[$j];
            $nums[$j] = $temp;
        }
        $left = $i + 1;
        $right = $n - 1;
        while ($left < $right) {
            $temp = $nums[$left];
            $nums[$left] = $nums[$right];
            $nums[$right] = $temp;
            $left++;
            $right--;
        }
    }
}