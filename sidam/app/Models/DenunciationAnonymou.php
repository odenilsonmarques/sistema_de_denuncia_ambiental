<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenunciationAnonymou extends Model
{
    use HasFactory;

    protected $fillable = [

        'category',
        'distric',
        'road',
        'number',
        'reference_point',
        'violator',
        'annex_one',
        'annex_two',
        'annex_three',
        'description',
        'received',
        'description_status',
    ];

    //logica para buscar os dados na filtragem
    public function search(Array $search, $totalPage)
    {
        $listAnonymou = $this->where(function($query) use ($search){
            if(isset($search['category'])){
                $query->where('category', $search['category']);
            }
            if(isset($search['distric'])){
                $query->where('distric', $search['distric']);
            }
            if(isset($search['received'])){
                $query->where('received', $search['received']);
            }
        })
        ->paginate($totalPage);
        return $listAnonymou;
    }
}
