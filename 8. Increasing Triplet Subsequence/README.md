```markdown
# 334. Increasing Triplet Subsequence

**Status:** Solved  
**Difficulty:** Medium  
**Topics:** Greedy, Array  
**Companies:** [Insert relevant companies here if applicable]

---

## Problem Description
Given an integer array `nums`, return `true` if there exists a triple of indices `(i, j, k)` such that:  
- \( i < j < k \)
- \( nums[i] < nums[j] < nums[k] \)  

If no such indices exist, return `false`.

---

## Examples

### Example 1:
**Input:**  
```plaintext
nums = [1, 2, 3, 4, 5]
```  
**Output:**  
```plaintext
true
```  
**Explanation:**  
Any triplet where \( i < j < k \) is valid.

---

### Example 2:
**Input:**  
```plaintext
nums = [5, 4, 3, 2, 1]
```  
**Output:**  
```plaintext
false
```  
**Explanation:**  
No triplet exists.

---

### Example 3:
**Input:**  
```plaintext
nums = [2, 1, 5, 0, 4, 6]
```  
**Output:**  
```plaintext
true
```  
**Explanation:**  
The triplet \((3, 4, 5)\) is valid because:
- \( nums[3] == 0 \)
- \( nums[4] == 4 \)
- \( nums[5] == 6 \)

---

## Constraints
- \( 1 \leq \text{nums.length} \leq 5 \times 10^5 \)
- \( -2^{31} \leq \text{nums[i]} \leq 2^{31} - 1 \)
```