/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

    /**
     * @param ListNode $head
     * @param Integer $k
     * @return ListNode
     */
    function rotateRight($head, $k) {
        if (!$head || !$head->next || $k == 0) return $head;
        
        $len = 1;
        $tail = $head;
        while ($tail->next) {
            $tail = $tail->next;
            $len++;
        }
        $tail->next = $head;

        $k %=$len;

        for ($i = 0; $i < $len - $k - 1; $i++){
            $head = $head->next;
        }
        $newHead = $head->next;
        $head->next = null;

        return $newHead;
    }
}