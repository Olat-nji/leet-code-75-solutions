# 875. Koko Eating Bananas

**Solved**  
**Medium**  

## Topics
- Binary Search  
- Array  
- Greedy  

## Companies
- (Applicable companies, if any)

---

Koko loves to eat bananas. There are `n` piles of bananas, where the `i`th pile contains `piles[i]` bananas. The guards have gone and will return in `h` hours.

Koko can choose her eating speed, `k` (bananas per hour). Each hour, she picks a pile and eats `k` bananas from it. If a pile has fewer than `k` bananas, she eats all remaining bananas from that pile and does not eat more during that hour.

Koko prefers to eat slowly but must finish all the bananas before the guards return.

Return the minimum integer `k` such that she can eat all the bananas within `h` hours.

---

## Example 1:
**Input:**  
```plaintext
piles = [3,6,7,11], h = 8
```
**Output:**  
```plaintext
4
```

## Example 2:
**Input:**  
```plaintext
piles = [30,11,23,4,20], h = 5
```
**Output:**  
```plaintext
30
```

## Example 3:
**Input:**  
```plaintext
piles = [30,11,23,4,20], h = 6
```
**Output:**  
```plaintext
23
```

---

## Constraints:
- `1 <= piles.length <= 10^4`
- `piles.length <= h <= 10^9`
- `1 <= piles[i] <= 10^9`
```