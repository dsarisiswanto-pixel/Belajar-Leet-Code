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
     * @param Integer 
     * @return ListNode
     */
    function reverseKGroup($head, $k) {
        if ($head == null || $k == 1) return $head;

        $dummy = new ListNode(0, $head);
        $prevGroupEnd = $dummy;

        while (true) {
            $kth = $this->getKthNode($prevGroupEnd, $k);
            if ($kth === null) break;

           
            $groupStart = $prevGroupEnd->next;

            $nextGroupStart = $kth->next;

            $prev = $nextGroupStart;
            $curr = $groupStart;

            while ($curr !== $nextGroupStart) {
                $temp = $curr->next;
                $curr->next = $prev;
                $prev = $curr;
                $curr = $temp;
            }

            $prevGroupEnd->next = $kth;
            $prevGroupEnd = $groupStart;
        }

        return $dummy->next;
    }

    function getKthNode($node, $k) {
        while ($node !== null && $k > 0) {
            $node = $node->next;
            $k--;
        }
        
        return $node;
    }
}