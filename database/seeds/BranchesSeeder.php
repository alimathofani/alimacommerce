<?php

use Illuminate\Database\Seeder;
use App\Branch;
use Carbon\Carbon;

class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	Branch::create([
            'name' => 'Head Office',
            'ptname' => 'PT. Sukses Mekar Abadi',
            'since' => Carbon::create('2000', '01', '01'),
            'slug' => str_slug('head-office'),  
        ]);

        Branch::create([
            'name' => 'Samarinda',
            'ptname' => 'PT. Sukses Mapan Abadi',
            'since' => Carbon::create('1998', '01', '01'),
            'slug' => str_slug('samarinda'),    
        ]);
        
        Branch::create([
            'name' => 'Kupang',
            'ptname' => 'PT. Sukses Mekar Abadi',
            'since' => Carbon::create('2003', '01', '01'),
            'slug' => str_slug('kupang'),    
        ]);
        
        Branch::create([
            'name' => 'Manado',
            'ptname' => 'PT. Sukses Mekar Abadi',
            'since' => Carbon::create('2001', '01', '01'),
            'slug' => str_slug('manado'),    
        ]);
        
        Branch::create([
            'name' => 'Gorontalo',
            'ptname' => 'PT. Sukses Mekar Abadi',
            'since' => Carbon::create('2005', '01', '01'),
            'slug' => str_slug('gorontalo'),    
        ]);
        
        Branch::create([
            'name' => 'Kendari',
            'ptname' => 'PT. Sukses Mekar Abadi',
            'since' => Carbon::create('2006', '01', '01'),
            'slug' => str_slug('kendari'),    
        ]);
        
        Branch::create([
            'name' => 'Ternate',
            'ptname' => 'PT. Sukses Mekar Abadi',
            'since' => Carbon::create('2007', '01', '01'),
            'slug' => str_slug('ternate'),    
        ]);
        
        Branch::create([
            'name' => 'Tobelo',
            'ptname' => 'PT. Sukses Makmur Abadi',
            'since' => Carbon::create('2009', '01', '01'),
            'slug' => str_slug('tobelo'),    
        ]);
        
        Branch::create([
            'name' => 'Jayapura',
            'ptname' => 'PT. Sukses Mekar Abadi',
            'since' => Carbon::create('2009', '08', '05'),
            'slug' => str_slug('jayapura'),    
        ]);
        
        Branch::create([
            'name' => 'Manokwari',
            'ptname' => 'UD. Sukses Mekar Abadi',
            'since' => Carbon::create('2010', '01', '01'),
            'slug' => str_slug('manokwari'),    
        ]);
        
        Branch::create([
            'name' => 'Sorong',
            'ptname' => 'PT. Sukses Mekar Abadi',
            'since' => Carbon::create('2011', '01', '01'),
            'slug' => str_slug('sorong'),    
        ]);

        Branch::create([
            'name' => 'Kaimana',
            'ptname' => 'PT. Sukses Mekar Abadi',
            'since' => Carbon::create('2013', '01', '01'),
            'slug' => str_slug('kaimana'),    
        ]);

        Branch::create([
            'name' => 'Bintuni',
            'ptname' => 'UD. Sukses Mekar Abadi',
            'since' => Carbon::create('2014', '01', '01'),
            'slug' => str_slug('bintuni'),    
        ]);

        Branch::create([
            'name' => 'Ambon',
        	'ptname' => 'PT. Sukses Mekar Abadi',
        	'since' => Carbon::create('2016', '01', '01'),
        	'slug' => str_slug('2016'),	
        ]);


    }
}
