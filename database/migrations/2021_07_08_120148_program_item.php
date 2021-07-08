<?php

use App\Models\Program\Program as ProgramModel;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProgramItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'program_item', function ( Blueprint $table ) {
            $table->id();
            $table->dateTime("datetime_from");
            $table->dateTime("datetime_to");
            $table->string("name");
            $table->enum("type", [
                'FILM',
                'SERIAL',
                'SHOW',
                ]);
            $table->softDeletes();
            $table->timestamps();
            $table->foreignIdFor( ProgramModel::class);
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'program_item' );

    }
}
