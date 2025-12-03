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
     * @param ListNode
     * @return ListNode
     */
    function swapPairs($head) {
        $dummy = new ListNode(0, $head);
        $current = $dummy;

        while($current->next !== null && $current->next->next !== null) {
            $first = $current->next;
            $second = $current->next->next;

            $first->next = $second->next;
            $second->next = $first;
            $current->next = $second;

            $current = $first;
        }
        return $dummy->next;
    }
}