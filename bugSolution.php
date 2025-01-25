The solution involves using strict comparison (===) instead of loose comparison (==) to avoid PHP's type juggling. Strict comparison checks both the value and the type of the operands. 

```php
<?php
$a = '10';
$b = 10;

if ($a === $b) {
  echo "Equal!\n";
} else {
  echo "Not equal!\n";
}

$c = '10apples';
$d = 10;

if ($c === $d) {
  echo "Equal!\n";
} else {
  echo "Not equal!\n";
}

$e = 'true';
$f = true;

if ($e === $f) {
  echo "Equal!\n";
} else {
  echo "Not equal!\n";
}
?>
```
By using strict comparison, the code will now correctly identify the differences in type and value, providing more predictable and reliable results.