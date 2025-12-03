class Solution {

    /**
     * @param String 
     * @return Boolean
     */
    function isValid($s) {
        $stack = [];
        $map = [
            ')' => '(',
            '}' => '{',
            ']' => '['
        ];

        for ($i = 0; $i < strlen($s); $i++) {
            $c = $s[$i];
            if (in_array($c, ['(', '{', '['])) {
                array_push($stack, $c);
            } else {
                
                if (empty($stack)) return false;
                $top = array_pop($stack);

                if ($top !== $map[$c]) return false;
            }
        }

        return empty($stack);
    }
}