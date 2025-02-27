# 2462. Total Cost to Hire K Workers

## Problem Statement

You are given a **0-indexed** integer array `costs` where `costs[i]` is the cost of hiring the `i`-th worker.

You are also given two integers `k` and `candidates`. We want to hire exactly `k` workers according to the following rules:

- You will run `k` sessions and hire exactly **one worker in each session**.
- In each hiring session, choose the worker with the **lowest cost** from either the **first `candidates` workers** or the **last `candidates` workers**.  
  - Break ties by choosing the worker with the **smallest index**.
- If there are **fewer than `candidates` workers remaining**, choose the worker with the lowest cost among them.  
  - Break ties by the **smallest index**.
- A worker can only be chosen **once**.

Return the **total cost** to hire exactly `k` workers.

---

## Examples

### Example 1
**Input:**
```plaintext
costs = [17,12,10,2,7,2,11,20,8], k = 3, candidates = 4
```
**Output:**
```plaintext
11
```
**Explanation:**
- We hire 3 workers in total. The total cost is initially `0`.
- **First round:** Choose the worker with the lowest cost (`2` at index `3`).  
  - Total cost = `0 + 2 = 2`
- **Second round:** Choose the worker with the lowest cost (`2` at index `4`).  
  - Total cost = `2 + 2 = 4`
- **Third round:** Choose the worker with the lowest cost (`7` at index `3`).  
  - Total cost = `4 + 7 = 11`
  
Total hiring cost = **`11`**.

---

### Example 2
**Input:**
```plaintext
costs = [1,2,4,1], k = 3, candidates = 3
```
**Output:**
```plaintext
4
```
**Explanation:**
- We hire 3 workers in total. The total cost is initially `0`.
- **First round:** Choose the worker with the lowest cost (`1` at index `0`).  
  - Total cost = `0 + 1 = 1`
- **Second round:** Choose the worker with the lowest cost (`1` at index `2`).  
  - Total cost = `1 + 1 = 2`
- **Third round:** Choose the lowest-cost worker from the remaining `[2,4]` (`2` at index `0`).  
  - Total cost = `2 + 2 = 4`
  
Total hiring cost = **`4`**.

---

## Constraints

- \(1 \leq \text{costs.length} \leq 10^5\)  
- \(1 \leq \text{costs}[i] \leq 10^5\)  
- \(1 \leq k, \text{candidates} \leq \text{costs.length}\)  
```