# 1207. Unique Number of Occurrences

**Difficulty:** Easy  
**Topics:** Array, Hash Table  

---

## Problem Statement

Given an array of integers `arr`, return `true` if the **number of occurrences** of each value in the array is unique. Otherwise, return `false`.

---

### Examples

#### Example 1:

**Input:**  
`arr = [1,2,2,1,1,3]`  

**Output:**  
`true`  

**Explanation:**  
- The value `1` occurs 3 times, `2` occurs 2 times, and `3` occurs 1 time.  
- No two values have the same number of occurrences.

---

#### Example 2:

**Input:**  
`arr = [1,2]`  

**Output:**  
`false`

---

#### Example 3:

**Input:**  
`arr = [-3,0,1,-3,1,1,1,-3,10,0]`  

**Output:**  
`true`  

**Explanation:**  
- The value `-3` occurs 3 times, `0` occurs 2 times, `1` occurs 4 times, and `10` occurs 1 time.  
- All occurrences are unique.

---

### Constraints

- `1 <= arr.length <= 1000`
- `-1000 <= arr[i] <= 1000`

---

### Notes:
- Use a hash table or dictionary to count occurrences of each number.
- Check if the counts are unique by storing them in a set.
