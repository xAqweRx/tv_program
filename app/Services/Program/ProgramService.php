<?php


namespace App\Services\Program;


use App\Models\Program\ProgramItem;
use Carbon\Carbon;


class ProgramService {

    public function getProgramsForDay( $channel,  Carbon $now ) {
        return ProgramItem::where([
            ['program_id', $channel],
            ['datetime_from', '>', $now->format('Y-m-d 00:00:00')],
            ['datetime_to', '<=', $now->addHours('28')->format('Y-m-d 00:00:00')],
        ])->get();
    }
}
