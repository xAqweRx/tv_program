<?php


namespace App\Services\Program;


use App\Models\Program\ProgramItem;
use Carbon\Carbon;


class ProgramService {

    public function getProgramsForDay( $channel,  Carbon $now ) {
        return ProgramItem::where([
            ['program_id', $channel],
            ['datetime_from', '>', $now->format('Y-m-d 00:00:00')],
            ['datetime_from', '<=', $now->addHours('28')->format('Y-m-d H:i:s')],
        ])->orderBy('datetime_from')->get();
    }
}
