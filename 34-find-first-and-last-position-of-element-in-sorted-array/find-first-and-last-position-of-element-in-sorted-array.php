class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function searchRange($nums, $target) {
        $first = $this ->binarySearch($nums, $target, true);
        $last = $this->binarySearch($nums, $target,false);

        return [$first, $last];

    }
    private function binarySearch($nums, $target, $findLeft) {
        $left = 0;
        $right = count($nums) - 1;
        $pos = -1;

        while ($left <= $right) {
            $mid = intval(($left + $right) / 2);

            if($nums[$mid] == $target) {
                $pos = $mid;
                if ($findLeft) {
                    $right = $mid - 1;
                } else {
                    $left = $mid + 1;
                }
            } elseif ($nums[$mid] < $target) {
                $left = $mid + 1;
            } else {
                $right =  $mid - 1;
            }
        }
    return $pos;
    }
}