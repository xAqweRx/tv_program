<?php

namespace Database\Factories\Program;

use App\Models\Program\ProgramItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgramItemFactory extends Factory {
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProgramItem::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {

        $from = ProgramItem::select('datetime_to')->first()->datetime_to ?? $this->faker->dateTime();
        $to = $from->add( new \DateInterval( 'PT10M' ) );
        return [
                'name' => $this->faker->word,
                'type' => $this->faker->randomElement( ProgramItem::TYPES ),
                'datetime_from' => $from,
                'datetime_to' => $to,

        ];

    }
}
