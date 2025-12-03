class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */

function twoSum($nums, $target) {
    $seen = []; 

    foreach ($nums as $i => $num) {
        $complement = $target - $num;
        if (isset($seen[$complement])) {
            return [$seen[$complement], $i];
        }
        $seen[$num] = $i;
    }
    return [];
}

}