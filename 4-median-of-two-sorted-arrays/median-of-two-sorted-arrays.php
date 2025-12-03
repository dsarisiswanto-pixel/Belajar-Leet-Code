class Solution {

    /**
     * @param Integer[] $nums1
     * @param Integer[] $nums2
     * @return Float
     */
    function findMedianSortedArrays($nums1, $nums2) {
        $merged = array_merge($nums1, $nums2);

        sort($merged);
        $n = count($merged);
        
        if ($n % 2 == 1){
            return $merged[intval($n/2)];
        }
        return ( $merged[$n/2 -1] + $merged[$n/2])/2;
    }
}