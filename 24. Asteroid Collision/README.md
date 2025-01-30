# 735. Asteroid Collision

**Difficulty:** Medium  
**Status:** Attempted  
**Topics:** Arrays, Stack  
**Companies:** (Mentioned in problem statement)  
**Hint:** (Refer to problem statement)

## Problem Statement

We are given an array `asteroids` of integers representing asteroids in a row. The indices of the asteroids in the array represent their relative position in space.

- For each asteroid, the **absolute value** represents its **size**.
- The **sign** represents its **direction**:
  - **Positive (`>0`)**: Moving **right**.
  - **Negative (`<0`)**: Moving **left**.
- Each asteroid moves at the same speed.

### Collision Rules:
1. If two asteroids meet, the **smaller one explodes**.
2. If both are of **equal size**, both explode.
3. If two asteroids are moving in the **same direction**, they will never meet.

---

## Examples

### Example 1:
**Input:**  
```plaintext
asteroids = [5,10,-5]
