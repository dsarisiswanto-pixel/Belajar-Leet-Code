class Solution {

    /**
     * @param String 
     * @return String[]
     */
    function letterCombinations($digits) {
        if (empty($digits)) return [];

        $map = [
            '2' => 'abc', 
            '3' => 'def', 
            '4' => 'ghi', 
            '5' => 'jkl', 
            '6' => 'mno', 
            '7' => 'pqrs', 
            '8' => 'tuv', 
            '9' => 'wxyz', 
        ];

        $result = [];

     
        $backtrack = function ($index, $path) use ($digits, $map, &$result, &$backtrack){
            if ($index == strlen($digits)) {
                $result[] = $path;
                return;
            }

            $letters = $map[$digits[$index]];
            for ($i = 0; $i < strlen($letters); $i++){
                $backtrack($index + 1, $path . $letters[$i]);
            }
        };

        $backtrack(0, "");


        return $result;
    }
}