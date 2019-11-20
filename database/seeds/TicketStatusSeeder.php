<?php

use App\TicketStatus;
use Illuminate\Database\Seeder;

class TicketStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new TicketStatus();
        $status->name = 'Open';
        $status->save();

        $status = new TicketStatus();
        $status->name = 'Pending';
        $status->save();

        $status = new TicketStatus();
        $status->name = 'Closed';
        $status->save();
    }
}
