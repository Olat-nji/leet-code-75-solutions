# 2215. Find the Difference of Two Arrays

**Difficulty:** Easy  
**Topics:** Array, Hash Table, Set Operations  

---

## Problem Statement

You are given two 0-indexed integer arrays, `nums1` and `nums2`. Your task is to return a list `answer` of size 2 where:

1. `answer[0]` is a list of all distinct integers in `nums1` that are **not present** in `nums2`.
2. `answer[1]` is a list of all distinct integers in `nums2` that are **not present** in `nums1`.

- The integers in the lists can be returned in **any order**.

---

### Example 1:

**Input:**  
`nums1 = [1,2,3]`  
`nums2 = [2,4,6]`  

**Output:**  
`[[1,3],[4,6]]`  

**Explanation:**  
- For `nums1`, the integer `2` is present in `nums2`, but `1` and `3` are not. So, `answer[0] = [1,3]`.
- For `nums2`, the integer `2` is present in `nums1`, but `4` and `6` are not. So, `answer[1] = [4,6]`.

---

### Example 2:

**Input:**  
`nums1 = [1,2,3,3]`  
`nums2 = [1,1,2,2]`  

**Output:**  
`[[3],[]]`  

**Explanation:**  
- For `nums1`, the integers `3` (from both indices) are not in `nums2`. Since `3` appears multiple times, it is included only once, so `answer[0] = [3]`.
- For `nums2`, every integer is present in `nums1`. Thus, `answer[1] = []`.

---

### Constraints:

- `1 <= nums1.length, nums2.length <= 1000`
- `-1000 <= nums1[i], nums2[i] <= 1000`

---

### Notes:
- Use sets to efficiently compute the difference between the two arrays.
- Ensure the result contains distinct integers only.
