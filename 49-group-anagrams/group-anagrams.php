class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $map = [];
        foreach ($strs as $str) {

        $chars = str_split($str);
        sort($chars);
        $key = implode('', $chars);

        if (!isset($map[$key])) {
            $map[$key] = [];
        }
        $map[$key][] = $str;
 
        }
           return array_values($map);
    }
}