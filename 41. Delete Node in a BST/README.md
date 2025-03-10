
# 450. Delete Node in a BST

## Medium

### Given a root node reference of a BST and a key, delete the node with the given key in the BST. Return the root node reference (possibly updated) of the BST.

Basically, the deletion can be divided into two stages:
1. **Search for a node** to remove.
2. **If the node is found, delete the node.**

---

## Example 1:

**Input:**
```
root = [5,3,6,2,4,null,7], key = 3
```
**Output:**
```
[5,4,6,2,null,null,7]
```
**Explanation:**  
Given key to delete is `3`. We find the node with value `3` and delete it.  
One valid answer is `[5,4,6,2,null,null,7]`, shown in the BST diagram below:

```
      5
     / \
    3   6
   / \    \
  2   4    7
```
After deleting `3`, replacing it with `4`:
```
      5
     / \
    4   6
   /      \
  2        7
```

Another valid answer is `[5,2,6,null,4,null,7]`, which is also accepted.

---

## Example 2:

**Input:**
```
root = [5,3,6,2,4,null,7], key = 0
```
**Output:**
```
[5,3,6,2,4,null,7]
```
**Explanation:**  
The tree does not contain a node with value `0`, so it remains unchanged.

---

## Example 3:

**Input:**
```
root = [], key = 0
```
**Output:**
```
[]
```

---

## Constraints:
- The number of nodes in the tree is in the range `[0, 10⁴]`.
- `-10⁵ <= Node.val <= 10⁵`
- Each node has a **unique value**.
- `root` is a **valid binary search tree**.
- `-10⁵ <= key <= 10⁵`