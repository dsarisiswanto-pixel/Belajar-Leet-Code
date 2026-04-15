class Solution {

    /**
     * @param Integer $n
     * @return String[][]
     */
    function solveNQueens($n) {
        $res = [];
        $this->dfs([], $n, $res);
        return $res;
    }
    private function dfs($board, $n, &$res){

        $row = count($board);
        if ($row == $n) {
            $res[] = $board;
            return;
        }
         for ($col = 0; $col < $n; $col++){
        if ($this->valid($board, $row, $col)) {
            $line = str_repeat('.', $n);
            $line[$col] = 'Q';

            $board[] = $line;
            $this->dfs($board, $n, $res);
            array_pop ($board);
            }
        }
    }
    private function valid($board, $row, $col) {
    for ($r = 0; $r <  $row; $r++) {
        $c = strpos($board[$r], 'Q');
        if($c == $col || abs ($c - $col) == abs ($r -$row)) {
            return false;
            }
        }
         return true;
    }
}