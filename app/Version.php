<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Version extends Model
{
  function games() {
    return $this->belongsToMany(Game::class);
  }
}
