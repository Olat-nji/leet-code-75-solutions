## 2095. Delete the Middle Node of a Linked List

### Problem Statement
You are given the head of a linked list. Delete the middle node, and return the head of the modified linked list.

The middle node of a linked list of size `n` is the `⌊n / 2⌋`th node from the start using **0-based indexing**, where `⌊x⌋` denotes the largest integer less than or equal to `x`.

For `n = 1, 2, 3, 4, 5`, the middle nodes are at indices `0, 1, 1, 2, 2`, respectively.

### Examples

#### Example 1:
**Input:**  
`head = [1,3,4,7,1,2,6]`  

**Output:**  
`[1,3,4,1,2,6]`  

**Explanation:**  
The indices of the nodes are written below.  
Since `n = 7`, the node at index `3` with value `7` is the middle node, which is removed.

---

#### Example 2:
**Input:**  
`head = [1,2,3,4]`  

**Output:**  
`[1,2,4]`  

**Explanation:**  
For `n = 4`, the node at index `2` with value `3` is removed.

---

#### Example 3:
**Input:**  
`head = [2,1]`  

**Output:**  
`[2]`  

**Explanation:**  
For `n = 2`, the node at index `1` with value `1` is removed, leaving only the node with value `2`.

---

### Constraints:
- The number of nodes in the list is in the range `[1, 10^5]`.
- `1 <= Node.val <= 10^5`.
