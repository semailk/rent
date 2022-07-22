<?php

namespace App\Console\Commands;

use App\Models\Rent;
use Illuminate\Console\Command;

class RendParseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rend:parse';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = [
            ['The Victoria', 374662, 4, 2, 2, 2],
            ['The Xavier', 513268, 4, 2, 1, 2],
            ['The Como', 454990, 4, 3, 2, 3],
            ['The Aspen', 384356, 4, 2, 2, 2],
            ['The Lucretia', 572002, 4, 3, 2, 2],
            ['The Toorak', 521951, 5, 2, 1, 2],
            ['The Skyscape', 263604, 3, 2, 2, 2],
            ['The Clifton', 386103, 3, 2, 1, 1],
            ['The Geneva', 390600, 4, 3, 2, 2],
        ];

       foreach ($data as $arr){
           $rend = new Rent();
           $rend->name = $arr[0];
           $rend->price = (int)$arr[1];
           $rend->bedrooms = $arr[2];
           $rend->bathrooms = $arr[3];
           $rend->storeys = $arr[4];
           $rend->garages = $arr[5];
           $rend->save();
       }
        $this->info('seed create success!');
    }
}
