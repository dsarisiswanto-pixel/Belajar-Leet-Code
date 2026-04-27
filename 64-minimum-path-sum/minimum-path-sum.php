class Solution {

    /**
     * @param Integer[][] $grid
     * @return Integer
     */
    function minPathSum($grid) {
        $m = count($grid);
        $n = count($grid[0]);

        $dp = array_fill(0, $n, 0);

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($i == 0 && $j == 0) {
                    $dp[$j] = $grid[$i][$j];
                } else if ($i == 0) {
                    $dp[$j] = $dp[$j - 1 ] + $grid[$i][$j];
                } else if ($j == 0) {
                    $dp[$j] = $dp[$j] + $grid[$i][$j];
                } else {
                    $dp[$j] = min ($dp[$j], $dp[$j - 1]) +$grid[$i][$j];
                }
            }
        }

        return $dp[$n - 1];
    }
}