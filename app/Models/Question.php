 <?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;



class Question extends Model
{
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function replies(){
        return $this->belongsTo(Reply::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
