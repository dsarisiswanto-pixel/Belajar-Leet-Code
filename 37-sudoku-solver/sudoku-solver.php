class Solution {

    private $rows = [];
    private $cols = [];
    private $boxes = [];

    function solveSudoku(&$board) {

       
        for ($i = 0; $i < 9; $i++) {
            $this->rows[$i] = [];
            $this->cols[$i] = [];
            $this->boxes[$i] = [];
        }
        

     
        for ($r = 0; $r < 9; $r++) {
            for ($c = 0; $c < 9; $c++) {
                if ($board[$r][$c] != '.') {
                    $num = $board[$r][$c];
                    $box = intval($r / 3) * 3 + intval($c / 3);
                    $this->rows[$r][$num] = true;
                    $this->cols[$c][$num] = true;
                    $this->boxes[$box][$num] = true;
                }
            }
        }

        $this->backtrack($board, 0, 0);
    }

    private function backtrack(&$board, $row, $col) {

        if ($row == 9) return true;

        if ($col == 9) return $this->backtrack($board, $row + 1, 0);

        if ($board[$row][$col] != '.') {
            return $this->backtrack($board, $row, $col + 1);
        }

        $box = intval($row / 3) * 3 + intval($col / 3);

        for ($num = 1; $num <= 9; $num++) {
            $char = strval($num);

            if (!isset($this->rows[$row][$char]) &&
                !isset($this->cols[$col][$char]) &&
                !isset($this->boxes[$box][$char])) {

                $board[$row][$col] = $char;
                $this->rows[$row][$char] = true;
                $this->cols[$col][$char] = true;
                $this->boxes[$box][$char] = true;

                if ($this->backtrack($board, $row, $col + 1)) return true;

                unset($this->rows[$row][$char]);
                unset($this->cols[$col][$char]);
                unset($this->boxes[$box][$char]);
                $board[$row][$col] = '.';
            }
        }

        return false;
    }
}