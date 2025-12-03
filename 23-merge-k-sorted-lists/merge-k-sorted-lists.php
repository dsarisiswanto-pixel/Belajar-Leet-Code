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
     * @param ListNode[] $lists
     * @return ListNode
     */
    function mergeKLists($lists) {
        $pq = new SplPriorityQueue();
        $pq->setExtractFlags(SplPriorityQueue::EXTR_DATA);

        foreach($lists as $node){
            if ($node !== null){
                $pq->insert($node, -$node->val);
            }
        }
        $dummy = new ListNode();
        $tail = $dummy;

        while (!$pq->isEmpty()){
         
            $minNode = $pq->extract();
            $tail->next = $minNode;
            $tail = $tail->next;

       
            if ($minNode->next !== null) {
                $pq->insert($minNode->next, -$minNode->next->val);
            }
        }
        return $dummy->next;
    }
}