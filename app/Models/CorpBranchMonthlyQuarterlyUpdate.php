<?php

namespace App\Models;

use App\Models\Interfaces\ObservationColumnsInterface;
use App\Traits\DeleteNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Support\Facades\DB;

class CorpBranchMonthlyQuarterlyUpdate extends Pivot implements ObservationColumnsInterface
{
    use HasFactory;

    protected $table = 'branch_monthly_quarterly';

    protected $guarded = [];

    public $timestamps = true;

    // public $incrementing = true;

    public function branch() : BelongsTo {
        return $this->belongsTo(CorpBranch::class, 'corp_branch_id');
    }

    public function monthlyQuarterlyUpdate() : BelongsTo {
        return $this->belongsTo(MonthlyQuarterlyUpdate::class, 'monthly_quarterly_update_id');
    }

    public function fireUpdatedEvent($date) {
        if($this instanceof ObservationColumnsInterface && $this->date !== $date) {
            DB::table('notifications')
            ->whereJsonContains("data->id", $this->id)
            ->whereJsonContains("data->date", now()->parse($date)->format('Y-m-d'))
            ->whereJsonContains('data->model', MonthlyQuarterlyUpdate::class)?->delete();
        }
    }

    public function observationColumns(): array
    {
        return ['date'];
    }
}