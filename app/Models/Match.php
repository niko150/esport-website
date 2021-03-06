<?php
namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Sofa\Eloquence\Eloquence;

class Match extends Model
{
    use Eloquence;
    use AppModel;

    protected $searchableColumns = ['tournament.name' => 20, 'tournament.short' => 5, 'opponent.name' => 25, 'opponent.short' => 10,];

    protected $appends = ['date', 'time', 'is_past', 'formatted_schedule', 'diff', 'is_today'];

    public function opponent()
    {
        return $this->belongsTo(Opponent::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function getDateAttribute()
    {
        return (new Carbon($this->getAttribute('schedule')))->formatLocalized(config('settings.match_date_localized'));
    }

    public function getTimeAttribute()
    {
        return (new Carbon($this->getAttribute('schedule')))->formatLocalized(config('settings.match_time_localized'));
    }

    public function getFormattedScheduleAttribute()
    {
        return (new Carbon($this->getAttribute('schedule')))->formatLocalized(config('settings.match_localized'));
    }

    public function getIsPastAttribute()
    {
        $schedule = new Carbon($this->getAttribute('schedule'), config('settings.default_timezone'));

        return $schedule->lt(Carbon::now());
    }

    public function getIsTodayAttribute()
    {
        $schedule = new Carbon($this->getAttribute('schedule'), config('settings.default_timezone'));

        return $schedule->dayOfYear == Carbon::today(config('settings.default_timezone'))->dayOfYear;
    }

    public function getDiffAttribute()
    {
        return (new Carbon($this->getAttribute('schedule'), config('settings.default_timezone')))->tz(config('app.timezone'))
                                                                                                 ->diffForHumans(Carbon::now());
    }

    public function getScheduleAttribute($value)
    {
        return $this->convertToUserTimezone($value);
    }

    public function getCreatedAtAttribute($value)
    {
        return $this->convertToUserTimezone($value);
    }

    public function getUpdatedAtAttribute($value)
    {
        return $this->convertToUserTimezone($value);
    }
}
