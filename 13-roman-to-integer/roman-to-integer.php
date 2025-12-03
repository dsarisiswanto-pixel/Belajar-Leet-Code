class Solution {

    /**
     * @param String 
     * @return Integer
     */
    function romanToInt($s) {
        $map = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];
        $total = 0;
        $i = 0;
        $n = strlen($s);

        while ($i <$n) {
            $current = $map[$s[$i]];

            if($i + 1 < $n && $current < $map[$s[$i+1]]) {
                $total += $map[$s[$i + 1]] - $current;
                $i += 2;
            }else {
                $total += $current;
                $i += 1;
            }
        }
        return $total;
    }
}