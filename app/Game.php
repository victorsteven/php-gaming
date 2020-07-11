<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    function versions() {
      return $this->belongsToMany(Version::class);
    }

    function users() {
      return $this->belongsToMany(User::class)->withPivot('version_id');
    }
}
