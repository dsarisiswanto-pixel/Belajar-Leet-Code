class Solution {

    /**
     * @param Integer
     * @return String[]
     */
    function generateParenthesis($n) {
        $result = [];

        $backtrack = function($current, $open, $close) use ($n, &$result, &$backtrack) {
            if (strlen($current) == $n * 2) {
                $result[] = $current;
                return;
            }

            if ($open < $n) {
                $backtrack($current . "(", $open + 1, $close);
            }

            if ($close < $open) {
                $backtrack($current . ")", $open, $close + 1);
            }
        };  


        $backtrack("", 0, 0);
        return $result;
        
    }
}