<?php

use App\Package;
use Illuminate\Database\Seeder;

class PackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $package = new Package([
            'name' => 'culture & heritage'
        ]);
        $package->save();

        $package = new Package([
            'name' => 'beaches'
        ]);
        $package->save();

        $package = new Package([
            'name' => 'nature & wild life'
        ]);
        $package->save();

        $package = new Package([
            'name' => 'tea trails & scenic beauty'
        ]);
        $package->save();

        $package = new Package([
            'name' => 'ayurvedha & reflexology'
        ]);
        $package->save();

        $package = new Package([
            'name' => 'adventure & sports'
        ]);
        $package->save();


    }
}
