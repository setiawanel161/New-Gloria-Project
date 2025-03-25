<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $table = 'portfolio_images'; // Nama tabel yang benar
    protected $fillable = ['title', 'description', 'image_path'];
}
