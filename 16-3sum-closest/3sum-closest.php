class Solution {

    /**
     * @param Integer[] 
     * @param Integer 
     * @return Integer
     */
    function threeSumClosest($nums, $target) {
        sort($nums);
        $n = count($nums);
        $closest = $nums[0] + $nums[1] + $nums[2];

        for($i = 0; $i < $n - 2; $i++){
            $left = $i + 1;
            $right = $n - 1;

            while($left < $right) {
                $sum = $nums[$i] + $nums[$left] + $nums[$right];

                if(abs($sum - $target) < abs($closest - $target)) {
                    $closest = $sum;
                }
                if($sum < $target){
                    $left++;
                } elseif ($sum > $target) {
                    $right--;
                }else {
                    return $sum;
                }
            }
        }
        return $closest;
    }
}