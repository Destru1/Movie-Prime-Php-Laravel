<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //Seed for Genres table

        if(DB::table('genres')->get()->count() == 0)
        {
            DB::table('genres')->insert(
            [
              [
                'name'=>'Action',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
              ],
              [
                'name'=>'Drama',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
              ],
              [
                'name'=>'Comedy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
              ],
              [
                'name'=>'Fantasy',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
              ],
          ]);
        }
        else
        {
        echo("\r\n\e[31m Genres table is not empty, therefore NOT \r\n]");
        }

        //Seed for Producers table

        if(DB::table('producers')->get()->count() == 0)
        {
        DB::table('producers')->insert(
         [
            [
               'first_name' =>'Jon',
               'last_name' =>'Watts',
               'age' => 40,
               'image' =>'https://upload.wikimedia.org/wikipedia/commons/2/26/Jon_Watts_by_Gage_Skidmore_2.jpg',
               'nationality' =>'American',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
               'first_name' =>'James',
               'last_name' =>'Cameron',
               'age' => 67,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/f/fe/James_Cameron_by_Gage_Skidmore.jpg',
               'nationality' =>'Canadian',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
               'first_name' =>'Martin',
               'last_name' =>'Scorsese',
               'age' =>79,
               'image' => 'https://upload.wikimedia.org/wikipedia/commons/1/1c/Martin_Scorsese_Berlinale_2010_%28cropped2%29.jpg',
               'nationality' =>'American',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
               'first_name' =>'Paolo',
               'last_name' =>'Genovese',
               'age' =>55,
               'image' => 'https://m.media-amazon.com/images/M/MV5BMDMyMWU4YjEtMzc3Zi00MDY1LWE0NjgtMWQ0YWJlMGMyN2NjL2ltYWdlXkEyXkFqcGdeQXVyMTc4MzI2NQ@@._V1_UY264_CR109,0,178,264_AL_.jpg',
               'nationality' =>'Italian',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
               'first_name' =>'Bong',
               'last_name' =>'Joon Ho',
               'age' =>52,
               'image' =>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fb/Bong_Joon-ho_2017.jpg/1200px-Bong_Joon-ho_2017.jpg',
               'nationality' =>'Korean',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
         ]);
        }
        else
        {
        echo("\r\n\e[31m Producers table is not empty, therefore NOT \r\n]");
        }

        //Seed for Movies table
        if (DB::table('movies')->get()->count() == 0)
        {
         DB::table('movies')->insert(
          [
            [
               'movie_name'=> 'Spider-Man: No Way Home',
               'release_year' => 2021,
               'language' => 'English',
               'is_age_restricted'=> 0,
               'image' => 'https://terrigen-cdn-dev.marvel.com/content/prod/1x/spider-mannowayhome_lob_crd_03.jpg',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
               'movie_name'=> 'Avatar',
               'release_year' => 2009,
               'language' => 'English',
               'is_age_restricted'=> 0,
               'image' =>'https://m.media-amazon.com/images/M/MV5BMTYwOTEwNjAzMl5BMl5BanBnXkFtZTcwODc5MTUwMw@@._V1_FMjpg_UX1000_.jpg',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
               'movie_name'=> 'The Wolf of Wall Street',
               'release_year' => 2013,
               'language' => 'English',
               'is_age_restricted'=> 1,
               'image' =>'https://flxt.tmsimg.com/assets/p9991602_p_v13_ah.jpg',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
             [
               'movie_name'=> 'Perfect Strangers',
               'release_year' => 2016,
               'language' => 'Italian',
               'is_age_restricted'=> 1,
               'image' => 'https://m.media-amazon.com/images/M/MV5BNzNmYjY4ZTAtNDI0MC00ODAzLTk5NzctNWNlZDViYmExYjYyXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
               'movie_name'=> 'Parasite',
               'release_year' => 2019,
               'language' => 'Korean',
               'is_age_restricted'=> 1,
               'image' => 'https://upload.wikimedia.org/wikipedia/en/5/53/Parasite_%282019_film%29.png',
               'created_at' => date('Y-m-d H:i:s'),
               'updated_at' => date('Y-m-d H:i:s'),
            ],
          ]);
        }
         else
            {
             echo("\r\n\e[31m Movies table is not empty, therefore NOT \r\n]");
            }

           //Seed for Movie-Genres

           if(DB::table('movie_genres')->get()->count() == 0)
           {
           DB::table('movie_genres')->insert(
            [
                [
                    'movie_id'=>1,
                    'genre_id'=>1,

                ],
                [
                    'movie_id'=>2,
                    'genre_id'=>4,

                ],
                [
                    'movie_id'=>3,
                    'genre_id'=>2,

                ],
                [
                    'movie_id'=>4,
                    'genre_id'=>2,

                ],
            
                [
                    'movie_id'=>5,
                    'genre_id'=>2,

                ],
            ]);
           }
            else
               {
                 echo("\r\n\e[31m Movie-Genres table is not empty, therefore NOT \r\n]");
               }

            //Seed for Movie-Producers
            if(DB::table('movie_producers')->get()->count() == 0)
            {
            DB::table('movie_producers')->insert(
              [
                [
                'movie_id' => 1,
                'producer_id' => 1,

                ],
                [
                'movie_id' => 2,
                'producer_id' => 2,

                ],
                [
                'movie_id' => 3,
                'producer_id' => 3,

                ],
                [
                'movie_id' => 4,
                'producer_id' => 4,

                ],
                [
                'movie_id' => 5,
                'producer_id' => 5,

                ],
              ]);
            }
          else
             {
               echo("\r\n\e[31m Movie-Producers table is not empty, therefore NOT \r\n]");
             }


                if (DB::table('users')->get()->count() === 0) {
                 DB::table('users')->insert(
                     [
                         [
                             'name' => Str::random(10),
                             'email' => 'admin@admin.admin',
                             'password' => Hash::make('admin'),
                             'created_at' => date('Y-m-d H:i:s'),
                             'updated_at' => date('Y-m-d H:i:s'),
                         ]
                     ]
                 );
             }
             else
              {
                 echo "\r\n\e[31m Users table is not empty. \r\n";
             }

    }
}
