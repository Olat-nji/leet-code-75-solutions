# 151. Reverse Words in a String

**Solved:** ✅  
**Difficulty:** Medium  
**Topics:** String Manipulation  
**Companies:** [Multiple Companies]

---

## Problem Description

Given an input string `s`, reverse the order of the words.

- A **word** is defined as a sequence of non-space characters.
- Words in `s` are separated by at least one space.

### Requirements:
- Return a string of the words in reverse order, concatenated by a single space.
- The returned string should only have one space between words, with no leading or trailing spaces.
- The input string may contain:
  - Leading or trailing spaces.
  - Multiple spaces between two words.

---

## Examples

### Example 1:
**Input:**  
`s = "the sky is blue"`

**Output:**  
`"blue is sky the"`

---

### Example 2:
**Input:**  
`s = "  hello world  "`

**Output:**  
`"world hello"`

**Explanation:**  
Your reversed string should not contain leading or trailing spaces.

---

### Example 3:
**Input:**  
`s = "a good   example"`

**Output:**  
`"example good a"`

**Explanation:**  
You need to reduce multiple spaces between two words to a single space in the reversed string.

---

## Constraints:

- `1 <= s.length <= 10⁴`
- `s` contains:
  - English letters (upper-case and lower-case).
  - Digits.
  - Spaces (`' '`).
- There is at least one word in `s`.

---

## Follow-Up:

If the string data type is mutable in your programming language, can you solve it **in-place** with **O(1)** extra space?
