```php
function processData(array $data): array {
  $dataCopy = $data; // Create a copy of the input array
  foreach ($dataCopy as $key => $value) {
    if (is_array($value)) {
      $dataCopy[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strpos($value, ',') !== false) {
      $dataCopy[$key] = explode(',', $value);
    }
  }
  return $dataCopy;
}

$inputData = [
  'name' => 'John Doe',
  'age' => 30,
  'address' => '123 Main St, Anytown, CA',
  'hobbies' => ['reading', 'hiking', 'coding']
];

$processedData = processData($inputData);
print_r($processedData); // The original $inputData remains unchanged
print_r($inputData); //Verify original array is unchanged
```