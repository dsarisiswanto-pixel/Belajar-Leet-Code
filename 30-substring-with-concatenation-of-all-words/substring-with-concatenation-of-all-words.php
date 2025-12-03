class Solution {

    /**
     * @param String $s
     * @param String[] $words
     * @return Integer[]
     */
    function findSubstring($s, $words) {
        $result = [];
        $wordCount = count($words);
        $wordLen = strlen($words[0]);
        $sLen = strlen ($s);

        $freq = [];
        foreach ($words as $w) {
            if (!isset ($freq[$w])) $freq[$w] = 0;
            $freq[$w]++;
        }
        for ($i = 0; $i < $wordLen; $i++) {
            $left = $i;
            $count = 0;
            $window = [];

            for($j = $i; $j + $wordLen <= $sLen; $j += $wordLen){
                $word = substr($s, $j, $wordLen);

                if (isset($freq[$word])) {
                    if (!isset($window[$word])) $window[$word] = 0;
                    $window[$word]++;
                    $count++;

                    while ($window[$word] > $freq[$word]) {
                        $leftWord = substr($s, $left, $wordLen);
                        $window[$leftWord]--;
                        $left += $wordLen;
                        $count --;
                    }
                    

                    if ($count == $wordCount) {
                        $result[] = $left;
                    }
                } else {
                    $window = [];
                    $count = 0;
                    $left = $j + $wordLen;
                }
            }
        }
        return $result;
    }
}