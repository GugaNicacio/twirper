<?php

namespace App\Models;
//  o Eloquent pelo visto ja conecta automaticamente as paradas de um model na tabela principal que a twirps//
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;//adicionar essa linha em models com o belong

class Twirp extends Model
{
    protected $fillable = [
        'message',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::Class);
    }
    //ta associando um twirp a usuario//
}
