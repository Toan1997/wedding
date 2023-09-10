<?php

namespace App\Providers;

use App\Models\Candidate;
use App\Models\Employee;
use App\Models\ExternalParty;
use App\Models\Furlough;
use App\Models\FurloughType;
use App\Models\InsurancePay;
use App\Models\InternalOrganization;
use App\Models\PayrollCycle;
use App\Models\PerformanceReview;
use App\Models\PublicHoliday;
use App\Models\Recruitment;
use App\Models\ReviewForm;
use App\Observers\CandidateObserver;
use App\Observers\EmployeeObserver;
use App\Observers\ExternalPartyObserver;
use App\Observers\FurloughObserver;
use App\Observers\FurloughTypeObserver;
use App\Observers\InsurancePayObserver;
use App\Observers\InternalOrganizationObserver;
use App\Observers\PayrollCycleObserver;
use App\Observers\PerformanceReviewObserver;
use App\Observers\PublicHoliDayObserver;
use App\Observers\RecruitmentObserver;
use App\Observers\ReviewFormObserver;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
