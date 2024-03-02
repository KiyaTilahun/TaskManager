<?php

namespace App\Models;

use App\Enums\PriorityType;
use App\Enums\StatusType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=[
        'title','slug','description','status','priority','deadline'
    ];
    protected $casts = [
        'deadline' => 'date',
        'priority' => PriorityType::class,
        'status' => StatusType::class,
    ];

public function user(){

    return $this->belongsTo(User::class);
}


}
