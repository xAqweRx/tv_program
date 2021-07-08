<?php

namespace Database\Seeders;

use App\Models\Program\Program;
use App\Models\Program\ProgramItem;
use Illuminate\Database\Seeder;

class Programs extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        /**
         * @var Program $program
         */
        $program = Program::factory()->create( [
            'channel_name' => "TV Markiza"
        ] );


        ProgramItem::factory()->create( [
            'program_id' => $program->id,
        ] );

    }
}
