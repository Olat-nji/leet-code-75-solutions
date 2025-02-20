**399. Evaluate Division**  

You are given an array of variable pairs `equations` and an array of real numbers `values`, where `equations[i] = [Ai, Bi]` and `values[i]` represent the equation `Ai / Bi = values[i]`. Each `Ai` or `Bi` is a string representing a single variable.  

You are also given some queries, where `queries[j] = [Cj, Dj]` represents the `j`th query where you must find the answer for `Cj / Dj = ?`.  

Return the answers to all queries. If a single answer cannot be determined, return `-1.0`.  

**Note:**  
- The input is always valid.  
- Evaluating the queries will not result in division by zero.  
- There is no contradiction in the input.  
- Variables not present in `equations` are considered undefined.  

### **Example 1:**  
**Input:**  
```php
$equations = [["a","b"],["b","c"]];
$values = [2.0,3.0];
$queries = [["a","c"],["b","a"],["a","e"],["a","a"],["x","x"]];
```
**Output:**  
```php
[6.00000,0.50000,-1.00000,1.00000,-1.00000]
```
**Explanation:**  
Given:  
- `a / b = 2.0`  
- `b / c = 3.0`  
Queries:  
- `a / c = ?` → `6.0` (`a / b * b / c = 2.0 * 3.0`)  
- `b / a = ?` → `0.5` (`1 / 2.0`)  
- `a / e = ?` → `-1.0` (undefined)  
- `a / a = ?` → `1.0` (self-division)  
- `x / x = ?` → `-1.0` (undefined)  

### **Example 2:**  
**Input:**  
```php
$equations = [["a","b"],["b","c"],["bc","cd"]];
$values = [1.5,2.5,5.0];
$queries = [["a","c"],["c","b"],["bc","cd"],["cd","bc"]];
```
**Output:**  
```php
[3.75000,0.40000,5.00000,0.20000]
```

### **Example 3:**  
**Input:**  
```php
$equations = [["a","b"]];
$values = [0.5];
$queries = [["a","b"],["b","a"],["a","c"],["x","y"]];
```
**Output:**  
```php
[0.50000,2.00000,-1.00000,-1.00000]
```

### **Constraints:**  
- `1 <= equations.length <= 20`  
- `equations[i].length == 2`  
- `1 <= Ai.length, Bi.length <= 5`  
- `values.length == equations.length`  
- `0.0 < values[i] <= 20.0`  
- `1 <= queries.length <= 20`  
- `queries[i].length == 2`  
- `1 <= Cj.length, Dj.length <= 5`  
- `Ai, Bi, Cj, Dj` consist of lowercase English letters and digits.