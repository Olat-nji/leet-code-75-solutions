# 2542. Maximum Subsequence Score

**Solved**  
**Medium**  

## Problem Statement

You are given two 0-indexed integer arrays `nums1` and `nums2` of equal length `n` and a positive integer `k`. You must choose a subsequence of indices from `nums1` of length `k`.

For chosen indices `i0, i1, ..., ik - 1`, your score is defined as:

The sum of the selected elements from `nums1` multiplied with the minimum of the selected elements from `nums2`.  
It can be defined simply as:  

\[
(\text{nums1}[i0] + \text{nums1}[i1] + ... + \text{nums1}[ik - 1]) \times \min(\text{nums2}[i0] , \text{nums2}[i1], ... ,\text{nums2}[ik - 1])
\]

Return the **maximum possible score**.

A subsequence of indices of an array is a set that can be derived from the set `{0, 1, ..., n-1}` by deleting some or no elements.

---

## Examples

### **Example 1**
**Input:**  
```plaintext
nums1 = [1,3,3,2], nums2 = [2,1,3,4], k = 3
```
**Output:**  
```plaintext
12
```
**Explanation:**  
The four possible subsequence scores are:
- We choose the indices **0, 1, and 2** with score = `(1+3+3) * min(2,1,3) = 7`.
- We choose the indices **0, 1, and 3** with score = `(1+3+2) * min(2,1,4) = 6`. 
- We choose the indices **0, 2, and 3** with score = `(1+3+2) * min(2,3,4) = 12`. 
- We choose the indices **1, 2, and 3** with score = `(3+3+2) * min(1,3,4) = 8`.

Therefore, we return the max score, which is **12**.

---

### **Example 2**
**Input:**  
```plaintext
nums1 = [4,2,3,1,1], nums2 = [7,5,10,9,6], k = 1
```
**Output:**  
```plaintext
30
```
**Explanation:**  
Choosing index **2** is optimal:  
`nums1[2] * nums2[2] = 3 * 10 = 30`, which is the maximum possible score.

---

## Constraints

- \( n == \text{nums1.length} == \text{nums2.length} \)
- \( 1 \leq n \leq 10^5 \)
- \( 0 \leq \text{nums1}[i], \text{nums2}[j] \leq 10^5 \)
- \( 1 \leq k \leq n \)
```
