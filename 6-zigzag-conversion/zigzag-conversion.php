class Solution {

    /**
     * @param String $s
     * @param Integer $numRows
     * @return String
     */
    function convert($s, $numRows) {
        if ($numRows == 1 || $numRows >= strlen($s)){
            return $s;
        }
        $rows = array_fill(0, $numRows, "");
        $cur = 0;
        $down = false;

        for ($i = 0; $i < strlen($s); $i++){
            $rows[$cur] .=$s[$i];

            if ($cur == 0 || $cur == $numRows - 1){
                $down = !$down;
            }
            $cur += $down ? 1 : -1;
        }

        return implode("",$rows);
    }
}