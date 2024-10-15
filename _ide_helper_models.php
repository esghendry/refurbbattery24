<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $vacancy_id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $location
 * @property string|null $languages
 * @property string|null $link
 * @property string|null $how_did_you_find_us
 * @property string|null $source
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StorageObject> $storageObjects
 * @property-read int|null $storage_objects_count
 * @property-read \App\Models\Vacancy|null $vacancy
 * @method static \Illuminate\Database\Eloquent\Builder|Application newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Application query()
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereHowDidYouFindUs($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereLanguages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Application whereVacancyId($value)
 */
	class Application extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $slug
 * @property string $title
 * @property string|null $body
 * @property string|null $image
 * @property string|null $author
 * @property \App\Enums\ArticleStatus $status
 * @property \Illuminate\Support\Carbon|null $published_at
 * @property bool $is_listed
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StorageObject> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereBody($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereIsListed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 */
	class Article extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ContactMessage whereUpdatedAt($value)
 */
	class ContactMessage extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $image
 * @property string|null $building_name
 * @property string|null $address
 * @property string|null $number
 * @property string|null $postal_code
 * @property string|null $city
 * @property string|null $province
 * @property string|null $country
 * @property string|null $latitude
 * @property string|null $longitude
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StorageObject> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereBuildingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLatitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereLongitude($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereProvince($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereUpdatedAt($value)
 */
	class Location extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $model_type
 * @property int $model_id
 * @property string $path
 * @property string $filename
 * @property string $disk
 * @property int|null $size
 * @property string|null $type
 * @property string|null $hash
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $model
 * @property-read \Illuminate\Database\Eloquent\Model|\Eloquent $storageObjectable
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject query()
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereModelType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StorageObject whereUpdatedAt($value)
 */
	class StorageObject extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $image
 * @property string|null $title
 * @property array|null $socials
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed|null $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StorageObject> $images
 * @property-read int|null $images_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Permission> $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Spatie\Permission\Models\Role> $roles
 * @property-read int|null $roles_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null, $without = false)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereSocials($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutPermission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutRole($roles, $guard = null)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $location_id
 * @property string $title
 * @property string $slug
 * @property string|null $image
 * @property string|null $subtitle
 * @property string|null $info_heading
 * @property string|null $quote
 * @property array|null $blocks
 * @property \App\Enums\ArticleStatus $status
 * @property string|null $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\StorageObject> $images
 * @property-read int|null $images_count
 * @property-read \App\Models\Location|null $location
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereBlocks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereInfoHeading($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereLocationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereQuote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereSubtitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vacancy whereUserId($value)
 */
	class Vacancy extends \Eloquent {}
}

