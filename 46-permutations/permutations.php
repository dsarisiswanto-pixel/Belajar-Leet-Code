class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function permute($nums) {
        $result = [];
        $used = array_fill(0, count($nums), false);

        $this->backtrack($nums, [], $used, $result);
        return $result;
    }
    private function backtrack($nums, $path, &$used, &$result) {
        if (count($path) == count($nums)){
            $result[] = $path;
            return;
        }
        for ($i = 0; $i < count($nums); $i++){
            if ($used[$i]) continue;

            $used[$i] = true;
            $path[] = $nums[$i];

            $this->backtrack($nums, $path, $used, $result);

            array_pop ($path);
            $used[$i] = false;

        }
    }
}