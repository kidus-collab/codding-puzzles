<?php

declare(strict_types=1);

final class Solution
{
    /**
     * @param list<int> $nums
     * @return list<int>
     */
    public function twoSum(array $nums, int $target): array
    {
        $seen = [];

        foreach ($nums as $index => $number) {
            $needed = $target - $number;

            if (array_key_exists($needed, $seen)) {
                return [$seen[$needed], $index];
            }

            $seen[$number] = $index;
        }

        return [];
    }
}

$result = (new Solution())->twoSum([2, 7, 11, 15], 9);
echo json_encode($result, JSON_THROW_ON_ERROR) . PHP_EOL;
