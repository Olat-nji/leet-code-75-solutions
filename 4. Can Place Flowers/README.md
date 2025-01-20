# 605. Can Place Flowers

**Solved**  
**Difficulty**: Easy  
**Topics**: Arrays, Greedy Algorithms  

## Problem Description
You have a long flowerbed where some plots are planted (denoted as `1`), and some are not (denoted as `0`). Flowers cannot be planted in adjacent plots.

Given an integer array `flowerbed` and an integer `n`, return `true` if it is possible to plant `n` new flowers in the flowerbed without violating the no-adjacent-flowers rule. Otherwise, return `false`.

---

### Example 1
**Input**:  
`flowerbed = [1,0,0,0,1], n = 1`  
**Output**:  
`true`

**Explanation**:  
- The flowerbed looks like `[1, 0, 0, 0, 1]`.
- One flower can be planted in the middle without violating the rule.

---

### Example 2
**Input**:  
`flowerbed = [1,0,0,0,1], n = 2`  
**Output**:  
`false`

**Explanation**:  
- The flowerbed looks like `[1, 0, 0, 0, 1]`.
- It is not possible to plant two flowers without violating the rule.

---

### Constraints
- `1 <= flowerbed.length <= 2 * 10^4`
- `flowerbed[i]` is either `0` or `1`.
- There are no two adjacent flowers in the flowerbed.
- `0 <= n <= flowerbed.length`


  
