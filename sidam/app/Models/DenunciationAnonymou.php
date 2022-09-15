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




        })
        ->paginate($totalPage);
        return $listAnonymou;
    }
}
