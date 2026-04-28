class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $max = $nums[0];
        $cur = 0;

        foreach ($nums as $n ) {
            $cur = max($n, $cur + $n);
            $max = max($max, $cur);
        }
        return $max;
    }
}