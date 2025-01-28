```markdown
# 2390. Removing Stars From a String

**Difficulty:** Medium

**Topics:** Strings, Stack

**Companies:** Various

**Hint:** You can use a stack to efficiently remove characters and stars.

---

## Problem Statement

You are given a string `s`, which contains stars `*`.

In one operation, you can:

- Choose a star in `s`.
- Remove the closest non-star character to its left, as well as remove the star itself.

Return the string after all stars have been removed.

**Note:**

- The input will be generated such that the operation is always possible.
- It can be shown that the resulting string will always be unique.

---

## Examples

### Example 1:

**Input:** `s = "leet**cod*e"`

**Output:** `"lecoe"`

**Explanation:** 
Performing the removals from left to right:
- The closest character to the 1st star is `'t'` in `"leet**cod*e"`. `s` becomes `"lee*cod*e"`.
- The closest character to the 2nd star is `'e'` in `"lee*cod*e"`. `s` becomes `"lecod*e"`.
- The closest character to the 3rd star is `'d'` in `"lecod*e"`. `s` becomes `"lecoe"`.

There are no more stars, so we return `"lecoe"`.

### Example 2:

**Input:** `s = "erase*****"`

**Output:** `""`

**Explanation:** 
The entire string is removed, so we return an empty string.

---

## Constraints

- `1 <= s.length <= 10^5`
- `s` consists of lowercase English letters and stars `*`.
- The operation above can be performed on `s`.

---

## Solution

To solve this problem, we can use a stack to keep track of the characters as we process the string. When we encounter a star `*`, we simply pop the top character from the stack, effectively removing the closest non-star character to the left of the star. Finally, we join the characters in the stack to form the resulting string.

### Approach:

1. Initialize an empty stack.
2. Iterate through each character in the string `s`:
   - If the character is not a star, push it onto the stack.
   - If the character is a star, pop the top element from the stack.
3. After processing all characters, join the elements in the stack to form the final string.

### Code Example:

```python
def removeStars(s: str) -> str:
    stack = []
    for char in s:
        if char == '*':
            if stack:
                stack.pop()
        else:
            stack.append(char)
    return ''.join(stack)
```

### Explanation:

- We use a stack to keep track of the characters.
- For every star encountered, we remove the last character added to the stack.
- This ensures that we always remove the closest non-star character to the left of the star.
- Finally, we join the characters in the stack to get the resulting string.

---

## Complexity Analysis

- **Time Complexity:** O(n), where `n` is the length of the string `s`. We process each character once.
- **Space Complexity:** O(n), in the worst case, the stack could store all characters of the string.

---

This approach ensures that we efficiently remove the stars and their corresponding characters, resulting in the desired string.
```