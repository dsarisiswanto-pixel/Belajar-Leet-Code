class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestValidParentheses($s) {
        $stack = [];
        array_push($stack, -1);
        $maxLen = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == '(') {
                array_push($stack, $i);
            } else {
                array_pop($stack);
                
                if (empty($stack)){
                    array_push($stack, $i);
                } else {
                    $maxLen = max($maxLen, $i - end($stack));
                }
            }
        }
        return $maxLen;
    }
}