<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $fillable = ['title', 'author', 'description'];
    public static function findOrFail($id)
    {
        $book = self::find($id);

        if (!$book) {
            throw new ModelNotFoundException("Book not found with ID: $id");
        }

        return $book;
    }

    private static function find($id)
    {
        return self::where('id', $id)->get();
    }

    public static function create(array $array)
    {
    }

    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('books');
    }
}
