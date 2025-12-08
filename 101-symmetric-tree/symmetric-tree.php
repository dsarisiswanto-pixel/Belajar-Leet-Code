class Solution {
    function isSymmetric($root) {
        return $this->mirror($root->left, $root->right);
    }

    private function mirror($a, $b) {
        if ($a === null && $b === null) return true;
        if ($a === null || $b === null) return false;
        if ($a->val !== $b->val) return false;

        return $this->mirror($a->left, $b->right)
            && $this->mirror($a->right, $b->left);
    }
}