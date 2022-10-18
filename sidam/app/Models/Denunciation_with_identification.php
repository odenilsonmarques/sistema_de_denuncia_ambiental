<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Denunciation_with_identification;
use Illuminate\Support\Facades\Auth;


class Denunciation_with_identification extends Model
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
        'user_id',
    ];

    //metodo para relacionar uma ou mais Denunciation_with_identification com um único usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //logica para buscar os dados na filtragem
    public function search(Array $search, $totalPage)
    {
        $listDenunciationIdentification = $this->where(function($query) use ($search){
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
        return $listDenunciationIdentification;
    }

    //logica para buscar os dados na filtragem
    public function searchByUser(Array $search, $totalPage)
    {
        $listDenunciationIdentification = $this->where(function($query) use ($search){
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
        ->where('user_id', Auth()->user()->id)
        ->paginate($totalPage);
        return $listDenunciationIdentification;
    }
}
