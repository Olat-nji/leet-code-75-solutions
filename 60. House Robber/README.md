```markdown
# 198. House Robber

**Difficulty:** Medium  

## Problem Statement  
You are a professional robber planning to rob houses along a street. Each house has a certain amount of money stashed, but the constraint is that adjacent houses have security systems connected. If two adjacent houses are broken into on the same night, the police will be alerted.  

Given an integer array `nums` representing the amount of money in each house, return the **maximum amount of money** you can rob tonight without alerting the police.  

---

### Example 1:  
**Input:**  
```plaintext
nums = [1,2,3,1]
```
**Output:**  
```plaintext
4
```
**Explanation:**  
- Rob house 1 (money = 1)  
- Skip house 2  
- Rob house 3 (money = 3)  
- Total amount stolen = **1 + 3 = 4**  

---

### Example 2:  
**Input:**  
```plaintext
nums = [2,7,9,3,1]
```
**Output:**  
```plaintext
12
```
**Explanation:**  
- Rob house 1 (money = 2)  
- Skip house 2  
- Rob house 3 (money = 9)  
- Skip house 4  
- Rob house 5 (money = 1)  
- Total amount stolen = **2 + 9 + 1 = 12**  

---

### Constraints:
- `1 <= nums.length <= 100`
- `0 <= nums[i] <= 400`
```