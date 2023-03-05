<?php
/*
 * This file is part of the yaldash  package.
 *
 * (c) Yasser Ameur El Idrissi <getspookydev@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace yal\laraveldash\Models;

use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
  protected $fillable = [
    'description',
    'last_name',
    'address',
    'city',
    'country_id',
    'zip'
  ];

  protected $guarded = ['id'];

  public $table = "user_informations";

  public function users()
  {
    return $this->belongsTo(config('auth.providers.users.model', App\Models\User::class));
  }

  public function resolveChildRouteBinding($childType, $value, $field)
  {
    // TODO: Implement resolveChildRouteBinding() method.
  }

  public function country()
  {
    return $this->belongsTo(Country::class);
  }
}
