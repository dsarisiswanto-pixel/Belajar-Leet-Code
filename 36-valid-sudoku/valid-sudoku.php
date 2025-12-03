class Solution {

    /**
     * @param String[][] $board
     * @return Boolean
     */
    function isValidSudoku($board) {
        $rows = array_fill(0, 9, []);
        $cols = array_fill(0, 9, []);
        $boxes = array_fill(0, 9, []);

        for ($i = 0; $i < 9; $i++) {
            for ($j = 0; $j < 9; $j++){
                $val = $board[$i][$j];

                if ($val == ".") continue;


                $boxIndex = intdiv($i, 3) * 3 + intdiv($j, 3);
                
                if (isset($rows[$i][$val])) return false;
                if (isset($cols[$j][$val])) return false;
                if (isset($boxes[$boxIndex][$val])) return false;

                $rows[$i][$val] = true;
                $cols[$j][$val] = true;
                $boxes[$boxIndex][$val] = true;
            }
        }
        return true;
    }
}