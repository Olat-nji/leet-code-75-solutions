```markdown
# 2130. Maximum Twin Sum of a Linked List

**Medium**

## Problem Statement

In a linked list of size `n`, where `n` is even, the `i`th node (0-indexed) of the linked list is known as the twin of the `(n-1-i)`th node, if `0 <= i <= (n / 2) - 1`.

For example, if `n = 4`, then:
- Node `0` is the twin of node `3`
- Node `1` is the twin of node `2`

These are the only nodes with twins for `n = 4`.

The **twin sum** is defined as the sum of a node and its twin.

Given the `head` of a linked list with an even length, return the **maximum twin sum** of the linked list.

---

## Examples

### **Example 1:**
**Input:**  
```
head = [5,4,2,1]
```
**Output:**  
```
6
```
**Explanation:**  
- Node `0` (value `5`) is the twin of node `3` (value `1`), with a twin sum of `5 + 1 = 6`.
- Node `1` (value `4`) is the twin of node `2` (value `2`), with a twin sum of `4 + 2 = 6`.
- The maximum twin sum is `6`.

---

### **Example 2:**
**Input:**  
```
head = [4,2,2,3]
```
**Output:**  
```
7
```
**Explanation:**  
- Node `0` (value `4`) is the twin of node `3` (value `3`), with a twin sum of `4 + 3 = 7`.
- Node `1` (value `2`) is the twin of node `2` (value `2`), with a twin sum of `2 + 2 = 4`.
- The maximum twin sum is `max(7, 4) = 7`.

---

### **Example 3:**
**Input:**  
```
head = [1,100000]
```
**Output:**  
```
100001
```
**Explanation:**  
- The only twin sum is `1 + 100000 = 100001`.

---

## Constraints:
- The number of nodes in the list is an **even integer** in the range `[2, 10^5]`.
- `1 <= Node.val <= 10^5`
```