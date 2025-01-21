```php
function processData(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        // Assume $item is an array with at least 'id' and 'value' keys.
        if (isset($item['id'], $item['value'])) {
            $result[$item['id']] = $item['value'];
        }
    }
    return $result;
}

$data = [
    ['id' => 1, 'value' => 10],
    ['id' => 2, 'value' => 20],
    ['id' => 3, 'value' => 30],
    ['id' => 1, 'value' => 100], // Duplicate ID
];

$processedData = processData($data);
print_r($processedData); // Notice that the first id 1 is overwritten.
```