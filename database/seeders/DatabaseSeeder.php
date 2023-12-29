<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Database\Seeder;
// use Illuminate\Foundation\Auth\User;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Ahmad Triandi',
        //     'email' => '3andiahmad@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        // User::create([
        //     'name' => 'Siti Romaidah',
        //     'email' => 'maylaura186@gmail.com',
        //     'password' => bcrypt('12345')

        // ]);

        User::factory(3)->create();
    

        Category::create([
            
                'name' => 'Programming',
                'slug' => 'programming'
            
        ]);

        Category::create([
            
            'name' => 'Web Design',
            'slug' => 'web-design'
        
    ]);
        
        Category::create([
            
            'name' => 'Personal',
            'slug' => 'personal'
        
    ]);

    
    Post::factory(20)->create();

        // Post::create(
        //     [
        //         'title'=>$this->faker->sentences(),
        //         'category_id'=>1,
        //         'user_id' => 1,
        //         'slug'=> $this->faker->unique()->paragraph(),
        //         'excerpt'=>$this->faker->paragraph(),
        //         'body'=>$this->faker->paragraph(4,5)
        // Post::create(
        //     [
        //         'title'=>'Judul Kedua',
        //         'category_id'=>1,
        //         'user_id' => 1,
        //         'slug'=> 'judul-ke-dua',
        //         'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi beatae tempore',
        //         'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, pariatur perferendis voluptatum totam natus, quasi dolorem beatae exercitationem omnis quas eveniet sequi maiores amet assumenda cupid itate alias adipisci autem voluptatem saepe? Aut explicabo nemo saepe asperiores necessitatibus.</p> <p>maiores nisi perferendis unde atque? Deserunt perspiciatis veritatis architecto fugit explicabo omnis corpor is, aut ad. Eveniet aliquid illo, ratione impedit cum fuga dolore error, cumque, est pariatur ex. Repellat vel expedita at nam, nihil inventore ipsam necessitatibus aliquid molestias! Esse corporis excepturi, eve niet veniam earum unde, fugiat fugit dicta quibusdam sunt eos quos sapiente sint? Quis id officiis aperiam similique ratione, molestiae explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mo di beatae tempore, recusandae iure autem, iusto, nemo quidem atque quod sunt distinctio esse temporibus. Veritatis cupiditate nihil, nemo odio quaerat quibusdam ab quas est, quisquam veniam exercitationem sapiente enim alias cum incidunt eius vero hic magni, aut et aspernatur adipisci consequuntur. Vero non tenetur quos? Deserunt ad laudantium error asperiores neque.</p>'
        //     ]);
        // Post::create(
        //     [
        //         'title'=>'Judul Ketiga',
        //         'category_id'=>2,
        //         'user_id' => 2,
        //         'slug'=> 'judul-ke-tiga',
        //         'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi beatae tempore',
        //         'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, pariatur perferendis voluptatum totam natus, quasi dolorem beatae exercitationem omnis quas eveniet sequi maiores amet assumenda cupid itate alias adipisci autem voluptatem saepe? Aut explicabo nemo saepe asperiores necessitatibus.</p> <p>maiores nisi perferendis unde atque? Deserunt perspiciatis veritatis architecto fugit explicabo omnis corpor is, aut ad. Eveniet aliquid illo, ratione impedit cum fuga dolore error, cumque, est pariatur ex. Repellat vel expedita at nam, nihil inventore ipsam necessitatibus aliquid molestias! Esse corporis excepturi, eve niet veniam earum unde, fugiat fugit dicta quibusdam sunt eos quos sapiente sint? Quis id officiis aperiam similique ratione, molestiae explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mo di beatae tempore, recusandae iure autem, iusto, nemo quidem atque quod sunt distinctio esse temporibus. Veritatis cupiditate nihil, nemo odio quaerat quibusdam ab quas est, quisquam veniam exercitationem sapiente enim alias cum incidunt eius vero hic magni, aut et aspernatur adipisci consequuntur. Vero non tenetur quos? Deserunt ad laudantium error asperiores neque.</p>'
        //     ]);
        // Post::create(
        //     [
        //         'title'=>'Judul Keempat',
        //         'category_id'=>2,
        //         'user_id' => 2,
        //         'slug'=> 'judul-ke-empat',
        //         'excerpt'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi beatae tempore',
        //         'body'=>'<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nisi, pariatur perferendis voluptatum totam natus, quasi dolorem beatae exercitationem omnis quas eveniet sequi maiores amet assumenda cupid itate alias adipisci autem voluptatem saepe? Aut explicabo nemo saepe asperiores necessitatibus.</p> <p>maiores nisi perferendis unde atque? Deserunt perspiciatis veritatis architecto fugit explicabo omnis corpor is, aut ad. Eveniet aliquid illo, ratione impedit cum fuga dolore error, cumque, est pariatur ex. Repellat vel expedita at nam, nihil inventore ipsam necessitatibus aliquid molestias! Esse corporis excepturi, eve niet veniam earum unde, fugiat fugit dicta quibusdam sunt eos quos sapiente sint? Quis id officiis aperiam similique ratione, molestiae explicabo.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Mo di beatae tempore, recusandae iure autem, iusto, nemo quidem atque quod sunt distinctio esse temporibus. Veritatis cupiditate nihil, nemo odio quaerat quibusdam ab quas est, quisquam veniam exercitationem sapiente enim alias cum incidunt eius vero hic magni, aut et aspernatur adipisci consequuntur. Vero non tenetur quos? Deserunt ad laudantium error asperiores neque.</p>'
        //     ]);
    }
}
