<?php

namespace App\Http\Controllers\Admin\Concerns;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;

trait HandlesFeaturedImageUploads
{
    protected function storeFeaturedImage(UploadedFile $file): string
    {
        $directory = public_path('uploads/featured');

        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }

        $name = now()->format('YmdHis').'-'.Str::lower(Str::random(12)).'.'.$file->getClientOriginalExtension();

        $file->move($directory, $name);

        return 'uploads/featured/'.$name;
    }

    protected function removeFeaturedImage(?string $path): void
    {
        if (!is_string($path) || !str_starts_with($path, 'uploads/featured/')) {
            return;
        }

        $fullPath = public_path($path);
        if (is_file($fullPath)) {
            @unlink($fullPath);
        }
    }
}
