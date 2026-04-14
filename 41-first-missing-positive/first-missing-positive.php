class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function firstMissingPositive($nums) {
        $n = count($nums);

        for ($i = 0; $i < $n; $i++) {
            while (
                $nums[$i] > 0 &&
                $nums[$i] <= $n &&
                $nums[$nums[$i] - 1] != $nums[$i]
            ) {
                $correctIndex = $nums[$i] - 1;

    
                $temp = $nums[$i];
                $nums[$i] = $nums[$correctIndex];
                $nums[$correctIndex] = $temp;
            }
        }

        for ($i = 0; $i < $n; $i++) {
            if ($nums[$i] != $i + 1) {
                return $i + 1;
            }
        }

        return $n + 1;
    }
}