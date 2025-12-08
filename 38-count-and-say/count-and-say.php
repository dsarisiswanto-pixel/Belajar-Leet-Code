class Solution {

    /**
     * @param Integer $n
     * @return String
     */
    function countAndSay($n) {
        $result = "1";

        for($i = 2; $i <= $n; $i++) {
            $result = $this->encode($result);
        }
        return $result;
    }
    private function encode($s) {
        $len =strlen ($s);
        $count = 1;
        $res = "";

        for ($i = 1; $i < $len; $i++){
            if ($s[$i] == $s[$i - 1]){
                $count++;
            } else {
                $res .= $count . $s[$i - 1];
                $count = 1;
            }
        }

        $res .= $count . $s[$len - 1];

        return $res;
    }
}