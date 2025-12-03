class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $n = strlen($s);
        if ($n < 2) return $s;

        $start = 0;
        $maxLen = 1;

        $expand = function($left, $right) use ($s, $n, &$start, &$maxLen){
            while($left >= 0 && $right < $n && $s[$left] === $s[$right]){
                $left--;
                $right++;
            }
            $len = $right - $left - 1;

            if ($len > $maxLen) {
                $maxLen = $len;
                $start = $left + 1;
            }
        };

        for ($i = 0; $i < $n; $i++){
            $expand($i, $i);

            $expand($i, $i + 1);
        }
        return substr($s, $start, $maxLen);
    }
}