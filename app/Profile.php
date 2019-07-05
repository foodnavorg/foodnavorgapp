<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];
    
    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/1qXjQctvYA3XkVMZLWZUvsqImCV1hqGpbNrK2nyY.jpeg';
        
        return '/storage/' . $imagePath;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

http://127.0.0.1:8000/storage/profile/1qXjQctvYA3XkVMZLWZUvsqImCV1hqGpbNrK2nyY.jpeg