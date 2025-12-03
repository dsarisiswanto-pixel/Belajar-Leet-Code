class Solution {

    /**
     * @param Integer 
     * @return Boolean
     */
    function isPalindrome($x) {
        if ($x < 0) return false;
        if ($x % 10 == 0 && $x !=0) return false;

        $rev = 0 ;

        while($x > $rev) {
            $rev = $rev * 10 + ($x % 10);
            $x = intdiv($x, 10);
        }
        return ($x == $rev || $x == intdiv($rev, 10));
    }
}