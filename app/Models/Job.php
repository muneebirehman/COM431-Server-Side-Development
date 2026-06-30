<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Manager',
                'salary' => '$50000',
            ],
            [
                'id' => 2,
                'title' => 'Engineer',
                'salary' => '$40000',
            ],
            [
                'id' => 3,
                'title' => 'Technician',
                'salary' => '$32000',
            ],
        ];
    }

    public static function find(int $id): array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        if (! $job) {
            abort(404);
        }

        return $job;
    }
}
