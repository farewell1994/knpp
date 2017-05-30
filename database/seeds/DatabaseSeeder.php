<?php

use Illuminate\Database\Seeder;
use App\Article;// прописали модель, щоб її викорситовувати

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
	$this->call(ArticlesSeeder::class); // добавляємо наш клас
    }
}

class ArticlesSeeder extends Seeder{ //наш клас
	
	public function run(){ //запит
	
	DB::table('articles')->insert([
	'url'=>'index',
	'title'=>'Title',
	'text'=>'content',
	'links'=>'image',
	]);
	}
}
