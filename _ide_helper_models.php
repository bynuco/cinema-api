<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Cinema
 *
 * @property int $id
 * @property string $name
 * @property int $city_id
 * @method static \Database\Factories\CinemaFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Cinema newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cinema newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cinema query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cinema whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cinema whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cinema whereName($value)
 */
	class Cinema extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\CinemaMovie
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $cinema_id
 * @property int $movie_id
 * @method static \Illuminate\Database\Eloquent\Builder|CinemaMovie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CinemaMovie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CinemaMovie query()
 * @method static \Illuminate\Database\Eloquent\Builder|CinemaMovie whereCinemaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CinemaMovie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CinemaMovie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CinemaMovie whereMovieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CinemaMovie whereUpdatedAt($value)
 */
	class CinemaMovie extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cinema[] $cinemas
 * @property-read int|null $cinemas_count
 * @method static \Illuminate\Database\Eloquent\Builder|City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|City query()
 * @method static \Illuminate\Database\Eloquent\Builder|City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|City whereName($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Movie
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string $year
 * @property string $director
 * @property string $genre
 * @method static \Illuminate\Database\Eloquent\Builder|Movie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie query()
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereDirector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereGenre($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Movie whereYear($value)
 */
	class Movie extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

