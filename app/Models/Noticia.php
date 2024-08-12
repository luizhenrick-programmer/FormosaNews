<?php

namespace App\Models;

use Illuminate\Contracts\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Laravel\Scout\Searchable;

class Noticia extends Model
{
    use Searchable;
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descricao',
        'url',
    ];

    //Query Scopes

    public function scopeFilter(Builder $query, array $filters)
    {
        if($title = $filters['title'] ?? null) {
            $query->where('titulo', 'like', '%' . $title . '%');
        }

        if($description = $filters['description'] ?? false) {
            $query->where('descricao', 'like', '%' . $description . '%');
        }
    }

    public function storeArquivo($arquivo)
{
    if ($arquivo) {
        $path = $arquivo->store('arquivos', 'public'); // Armazena o arquivo
        $this->url = $path; // Armazena o caminho relativo
        $this->save(); // Salva o caminho no banco de dados
    }
}


    public function toSearchchableArray(){
        return [
            'id'=> $this->id,
            'titulo'=> $this->titulo,
            'descricao'=> $this->descricao,
        ];
    }
}

