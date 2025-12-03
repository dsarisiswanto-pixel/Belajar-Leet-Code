class Solution {

    /**
     * @param Integer[] 
     * @return Integer
     */
    function removeDuplicates(&$nums) {
        $n = count($nums);
        if ($n == 0) return 0;
        $i = 0;

        for($j = 1; $j < $n; $j++) {
            if ($nums[$j] != $nums[$i]){
                $i++;
                $nums[$i] = $nums[$j];
            }
        }
        return $i + 1;
    }
}