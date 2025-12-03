class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s) {
        $s = trim($s);
        $words = explode(" ", $s);
        $lastWord = end($words);

        return  strlen($lastWord);
    }
}