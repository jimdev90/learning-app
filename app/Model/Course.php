<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Model\Course
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string $picture
 * @property string $description
 * @property float $price
 * @property int $featured
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Course newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Course query()
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Course whereUserId($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Category[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Review[] $reviews
 * @property-read int|null $reviews_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\User[] $students
 * @property-read int|null $students_count
 * @property-read \App\Model\User $teacher
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Model\Unit[] $units
 * @property-read int|null $units_count
 */
class Course extends Model
{


    const PUBLISHED = 1;
    const PENDING = 2;
    const REJECTED = 3;


    public function imagePath() {
        return sprintf('%s/%s', '/storage/courses', $this->picture);
    }

    public function categories () {
        return $this->belongsToMany(Category::class);
    }

    public function students() {
        return $this->belongsToMany(User::class, "course_student");
    }

    public function teacher() {
        return $this->belongsTo(User::class, "user_id");
    }

    public function reviews() {
        return $this->hasMany(Review::class);
    }

    public function units() {
        return $this->hasMany(Unit::class)->orderBy("order", "asc");
    }


}
