class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $l = 0;
        $r = count($height) - 1;
        $max = 0;

        while ($l < $r) {
            $area = ($r - $l) * min($height[$l], $height[$r]);
            $max = max($max, $area);

            if ($height[$l] < $height [$r]) {
                $l++;
            }
            else {
                $r-- ;
            }
        }
        return $max;
    }
}