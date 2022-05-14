<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $table = 'menu_items';

    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'url',
        'parent_id'
    ];

    public function allChildren()
    {
        return $this->hasMany(MenuItem::class, 'parent_id', 'id');
    }

    public function children()
    {
        return $this->allChildren()->with('children');
    }
}
