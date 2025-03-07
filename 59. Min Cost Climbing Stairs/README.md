```markdown
# 746. Min Cost Climbing Stairs

### Difficulty: Easy  
**Topics:** Dynamic Programming  

## Problem Statement  
You are given an integer array `cost` where `cost[i]` is the cost of the `i`-th step on a staircase. Once you pay the cost, you can either climb **one** or **two** steps.  

You can start from either **index 0** or **index 1**.  

Return the **minimum cost** to reach the top of the floor.

---

## Example 1  

**Input:**  
```plaintext
cost = [10,15,20]
```
**Output:**  
```plaintext
15
```
**Explanation:**  
- Start at **index 1**.  
- Pay **15** and climb **two** steps to reach the top.  
- Total cost = **15**.

---

## Example 2  

**Input:**  
```plaintext
cost = [1,100,1,1,1,100,1,1,100,1]
```
**Output:**  
```plaintext
6
```
**Explanation:**  
- Start at **index 0**.  
- Pay **1** and climb **two** steps to reach index `2`.  
- Pay **1** and climb **two** steps to reach index `4`.  
- Pay **1** and climb **two** steps to reach index `6`.  
- Pay **1** and climb **one** step to reach index `7`.  
- Pay **1** and climb **two** steps to reach index `9`.  
- Pay **1** and climb **one** step to reach the top.  
- **Total cost = 6**.

---

## Constraints  

- `2 <= cost.length <= 1000`  
- `0 <= cost[i] <= 999`  
```