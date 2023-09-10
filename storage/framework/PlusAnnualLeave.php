<?php

namespace App\Console\Commands;

use App\Models\AnnualLeave;
use Illuminate\Console\Command;

class PlusAnnualLeave extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'plus:annualLeave';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Plus Annual Leave';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        try {
            $furloughType = getCurrentFurloughType();
            if (checkDayPlusWithCurrentDate($furloughType->day_plus)) {
                $annualLeaves = AnnualLeave::get(['id', 'employee_id', 'from_date', 'current_annual_leave_balance']);
                $currentDate = date("Y-m-d");
                foreach ($annualLeaves as $annualLeave) {
                    if (compareTwoDate($annualLeave->from_date, $currentDate)) {
                        $numberFurloughs = getNumberFurloughByEmployeeId($annualLeave->from_date, $furloughType->working_years);
                        AnnualLeave::find($annualLeave->id)->update([
                            'current_annual_leave_balance' => $annualLeave->current_annual_leave_balance + $numberFurloughs,
                        ]);
                    }
                }
                $this->info('Success message');
            } else {
                $this->info('Today is not day plus');
            }
        } catch (Exception $e) {

            // send output on failure
            $this->error($e->getMessage());
        }
    }
}
