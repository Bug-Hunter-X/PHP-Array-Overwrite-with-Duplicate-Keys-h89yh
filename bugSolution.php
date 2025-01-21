```php
function processDataImproved(array $data): array
{
    $result = [];
    foreach ($data as $item) {
        if (isset($item['id'], $item['value'])) {
            $id = $item['id'];
            if (!isset($result[$id])) {
                $result[$id] = [];
            }
            $result[$id][] = $item['value']; // Append values for duplicate IDs
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

$processedData = processDataImproved($data);
print_r($processedData); // Now handles duplicates by appending values
```