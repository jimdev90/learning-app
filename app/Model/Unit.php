<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Unit
 *
 * @property int $id
 * @property int $user_id
 * @property int $course_id
 * @property int $order
 * @property string $unit_type
 * @property string $title
 * @property string|null $content
 * @property string|null $file
 * @property int $free
 * @property int|null $unit_time Total minutes if apply
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereFree($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereOrder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUnitTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUnitType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unit whereUserId($value)
 * @mixin \Eloquent
 * @property-read \App\Model\Course $course
 */
class Unit extends Model
{


    const ZIP = 'ZIP';
    const VIDEO = 'VIDEO';
    const SECTION = 'SECTION';


    public function course() {
        return $this->belongsTo(Course::class);
    }


}
