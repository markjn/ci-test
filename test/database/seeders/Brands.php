<?php

    namespace Database\Seeders;

    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\DB;
    use App\Models\Brand;

    class Brands extends Seeder {
        /**
         * Run the database seeds.
         *
         * @return void
         */
        public function run() {
            Brand::factory()->count(50)->create();

        }
    }
