<?php

namespace App\Exports;

use App\Models\Post;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithCustomStartCell;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PostsExport implements FromCollection, WithCustomStartCell, WithMapping, WithHeadings, ShouldAutoSize
{
    use Exportable;

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Post::all();
    }

    public function startCell(): string
    {
        return 'B2';
    }
    public function headings(): array
    {
        return [
            '#',
            'Name',
            'Email',
            'Status',
            'Amount',
            'Date',
        ];
    }
    public function map($post): array
    {
        return [
            $post->id,
            $post->name,
            $post->email,
            $post->status->value,
            $post->amount,
            $post->created_at->format('jS F, Y'),
        ];
    }
}
