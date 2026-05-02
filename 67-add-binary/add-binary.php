class Solution {

    function addBinary($a, $b) {
        $carry = 0;
        $res = "";

        $i = strlen($a) - 1;
        $j = strlen($b) - 1;

        while ($i >= 0 || $j >= 0 || $carry) {
            $sum = $carry;

            if ($i >= 0) $sum += $a[$i--];
            if ($j >= 0) $sum += $b[$j--];

            $res = ($sum % 2) . $res;
            $carry = $sum > 1 ? 1 : 0;
        }

        return $res;
    }
}