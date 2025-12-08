class Solution {
    function isPalindrome($s) {
        $clean = "";
        for ($i = 0; $i < strlen($s); $i++) {
            if (ctype_alnum($s[$i])) {
                $clean .= strtolower($s[$i]);
            }
        }
        return $clean === strrev($clean);
    }
}