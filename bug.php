```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strpos($value, ',') !== false) {
      $data[$key] = explode(',', $value); // Explode strings with comma
    }
  }
  return $data;
}

$inputData = [
  'name' => 'John Doe',
  'age' => 30,
  'address' => '123 Main St, Anytown, CA',
  'hobbies' => ['reading', 'hiking', 'coding']
];

$processedData = processData($inputData);
print_r($processedData); 
```