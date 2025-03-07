```markdown
# 162. Find Peak Element

**Solved**  
**Medium**  

## Problem Statement

A peak element is an element that is strictly greater than its neighbors.

Given a 0-indexed integer array `nums`, find a peak element and return its index. If the array contains multiple peaks, return the index of any peak.

You may imagine that `nums[-1] = nums[n] = -∞`. In other words, an element is always considered to be strictly greater than a neighbor that is outside the array.

You must write an algorithm that runs in **O(log n)** time.

---

## Examples

### Example 1:

**Input:**  
```plaintext
nums = [1,2,3,1]
```
**Output:**  
```plaintext
2
```
**Explanation:**  
`3` is a peak element, and its index is `2`.

---

### Example 2:

**Input:**  
```plaintext
nums = [1,2,1,3,5,6,4]
```
**Output:**  
```plaintext
5
```
**Explanation:**  
Your function can return either index `1` where the peak element is `2`, or index `5` where the peak element is `6`.

---

## Constraints

- `1 <= nums.length <= 1000`
- `-2^31 <= nums[i] <= 2^31 - 1`
- `nums[i] != nums[i + 1]` for all valid `i`.

---
```