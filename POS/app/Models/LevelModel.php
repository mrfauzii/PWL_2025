<?php
 
 namespace App\Models;
 
 use Illuminate\Database\Eloquent\Factories\HasFactory;
 use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\Relations\HasMany;
 
 class LevelModel extends Model
 {
     use HasFactory;
     protected $table = 'm_level';
     protected $primaryKey = 'level_id';
     /**
      * The attributes that are mass assignable.
      *
      * @var array
      */
      
     protected $fillable = ['level_nama', 'level_kode'];
     
     public function user(): HasMany
     {
         return $this->hasMany(UserModel::class, 'level_id', 'level_id');
     }
 }