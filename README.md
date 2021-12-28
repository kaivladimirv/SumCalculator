# SumCalculator

Производит суммирование двух чисел.

## Examples

```php
<?php
require __DIR__ . '/../vendor/autoload.php';

use OtusPackages\SumCalculator;

$sum = (new SumCalculator())->calc(12, 12);

echo  "Сумма: {$sum}". PHP_EOL;
```
