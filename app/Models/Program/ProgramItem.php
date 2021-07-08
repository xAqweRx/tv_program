<?php

namespace App\Models\Program;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Program\ProgramItem
 *
 * @property int                             $id
 * @property Carbon                          $datetime_from
 * @property Carbon                          $datetime_to
 * @property string                          $name
 * @property string                          $type
 * @property string|null                     $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int                             $program_id
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem whereCreatedAt( $value )
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem whereDatetimeFrom( $value )
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem whereDatetimeTo( $value )
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem whereDeletedAt( $value )
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem whereId( $value )
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem whereName( $value )
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem whereProgramId( $value )
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem whereType( $value )
 * @method static \Illuminate\Database\Eloquent\Builder|ProgramItem whereUpdatedAt( $value )
 * @mixin \Eloquent
 */
class ProgramItem extends Model {
    use HasFactory;

    const TYPE_FILM   = 'FILM';
    const TYPE_SERIAL = 'SERIAL';
    const TYPE_SHOW   = 'SHOW';

    const TYPES = [
        self::TYPE_FILM,
        self::TYPE_SERIAL,
        self::TYPE_SHOW,
    ];
    protected $table = 'program_item';

    protected $casts = [
        'datetime_from',
        'datetime_to',
    ];
}
