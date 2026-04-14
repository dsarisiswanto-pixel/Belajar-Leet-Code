class Solution {

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch($s, $p) {
        $i = 0; 
        $j = 0; 
        $starIdx = -1;
        $match = 0;

        $sLen = strlen($s);
        $pLen = strlen($p);

        while ($i < $sLen) {

            if ($j < $pLen && ($p[$j] == '?' || $p[$j] == $s[$i])) {
                $i++;
                $j++;
            }

  
            else if ($j < $pLen && $p[$j] == '*') {
                $starIdx = $j;
                $match = $i;
                $j++;
            }

           
            else if ($starIdx != -1) {
                $j = $starIdx + 1;
                $match++;
                $i = $match;
            }

           
            else {
                return false;
            }
        }

   
        while ($j < $pLen && $p[$j] == '*') {
            $j++;
        }

        return $j == $pLen;
    }
}