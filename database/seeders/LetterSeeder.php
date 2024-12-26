<?php

namespace Database\Seeders;

use App\Models\Letter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LetterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $letter = new Letter();
        $letter->letter = 'T';
        $letter->save();
        
        $letter = new Letter();
        $letter->letter = 'R';
        $letter->save();
        
        $letter = new Letter();
        $letter->letter = 'W';
        $letter->save();
        
        $letter = new Letter();
        $letter->letter = 'A';
        $letter->save();
        
        $letter = new Letter();
        $letter->letter = 'G';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'M';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'Y';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'F';
        $letter->save();
        
        $letter = new Letter();
        $letter->letter = 'P';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'D';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'X';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'B';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'N';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'J';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'Z';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'S';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'Q';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'V';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'H';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'L';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'C';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'K';
        $letter->save();

        $letter = new Letter();
        $letter->letter = 'E';
        $letter->save();
    }
}
