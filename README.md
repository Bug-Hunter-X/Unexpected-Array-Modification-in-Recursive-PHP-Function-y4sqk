# PHP Recursive Function Bug

This repository demonstrates a subtle bug related to pass-by-reference and array modification within a recursive PHP function. The `processData` function processes an array recursively, splitting strings containing commas and recursively processing nested arrays.  However, due to the way PHP handles array references, the original input array might be unexpectedly modified.

## Bug Description
The issue stems from the recursive call to `processData` within the loop. Since PHP uses pass-by-reference for arrays, modifications within the recursive function affect the original array. This can lead to unpredictable results, especially in complex scenarios.

## Bug Solution
The solution involves creating a copy of the array before performing modifications to avoid altering the original input. The corrected function uses `array_map` or creates a deep copy before processing.