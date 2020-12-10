<?php

namespace App\Exports;

use App\movies;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\DB;


class MoviesExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $movies = DB::table('movies')->select(
            'Id',
            'name',
            'synopsis',
            'category',
            'director',
            'duracion',
            'actors',
            'genre'
        )->get();
        return $movies;
    }
    public function headings(): array
    {
        return [
            'Id',
            'Nombre',
            'Sinopsis',
            'Categoria',
            'Director',
            'Duracion',
            'Actores',
            'Genero'
        ];
    }
}
