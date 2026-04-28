class Solution {

    /**
     * @param Integer[][] $matrix
     * @return Integer[]
     */
    function spiralOrder($matrix) {
        $res = [];

        while (!empty($matrix)){
            $res = array_merge($res, array_shift($matrix));
            foreach ($matrix as $i => $row) {
                if (!empty($row)) $res[] = array_pop($matrix[$i]);
            }

            if (!empty($matrix)) {
                $last = array_pop($matrix);
                if ($last) {
                $res = array_merge($res, array_reverse($last));
                }
            }
            foreach (array_reverse(array_keys($matrix)) as $i) {
                if (!empty($matrix[$i])) $res[] = array_shift($matrix[$i]);
            }
        }
        return $res;
    }
}