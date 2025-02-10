# 1372. Longest ZigZag Path in a Binary Tree

**Solved**  
**Medium**  
**Topics:** Binary Tree, Dynamic Programming, Depth-First Search  
**Companies:** [List of companies that ask this question]  

---

## **Problem Statement**
You are given the root of a binary tree.

A **ZigZag path** for a binary tree is defined as follows:

1. Choose any node in the binary tree and a direction (**right or left**).
2. If the current direction is **right**, move to the **right child** of the current node; otherwise, move to the **left child**.
3. Change the direction from **right to left** or from **left to right**.
4. Repeat steps 2 and 3 until you **can't move** in the tree.

The **Zigzag length** is defined as **the number of nodes visited - 1**. (A single node has a length of `0`).

Return the **longest ZigZag path** contained in that tree.

---

## **Examples**

### **Example 1**
**Input:**  
```
root = [1,null,1,1,1,null,null,1,1,null,1,null,null,null,1]
```
**Output:**  
```
3
```
**Explanation:**  
The longest ZigZag path is formed using the **blue nodes**:  
`right → left → right`

---

### **Example 2**
**Input:**  
```
root = [1,1,1,null,1,null,null,1,1,null,1]
```
**Output:**  
```
4
```
**Explanation:**  
The longest ZigZag path is formed using the **blue nodes**:  
`left → right → left → right`

---

### **Example 3**
**Input:**  
```
root = [1]
```
**Output:**  
```
0
```

---

## **Constraints**
- The number of nodes in the tree is in the range **[1, 5 × 10⁴]**.
- `1 ≤ Node.val ≤ 100`
```