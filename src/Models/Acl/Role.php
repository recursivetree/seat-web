<?php

/*
 * This file is part of SeAT
 *
 * Copyright (C) 2015 to present Leon Jacobs
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
 */

namespace Seat\Web\Models\Acl;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;
use OpenApi\Attributes as OA;
use Seat\Tests\Web\Database\Factories\RoleFactory;
use Seat\Web\Models\CharacterSchedulingRule;
use Seat\Web\Models\Squads\Squad;
use Seat\Web\Models\Squads\SquadRole;
use Seat\Web\Models\User;

/**
 * @property CharacterSchedulingRule character_scheduling_rule
 */
#[OA\Schema(
    title: 'Role',
    description: 'Role',
    properties: [
        new OA\Property(property: 'id', description: 'Role unique identifier', type: 'integer'),
        new OA\Property(property: 'title', description: 'Role name', type: 'string'),
        new OA\Property(property: 'description', description: 'Role description', type: 'string'),
        new OA\Property(property: 'logo', description: 'Role logo', type: 'string', format: 'byte'),
    ],
    type: 'object'
)]
class Role extends Model
{
    use HasFactory;

    /**
     * @var bool
     */
    public $timestamps = false;

    /**
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    protected static function newFactory(): Factory
    {
        return RoleFactory::new();
    }

    /**
     * Make sure we cleanup on delete.
     *
     * @return bool|null
     *
     * @throws \Exception
     */
    public function delete()
    {

        // Remove the Role from users, permissions
        // and affiliations that it had
        $this->permissions()->detach();

        return parent::delete();
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function permissions()
    {

        return $this->belongsToMany(Permission::class)
            ->withPivot(['not', 'filters']);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function squads()
    {

        return $this->belongsToMany(Squad::class, 'squad_role')
            ->using(SquadRole::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character_scheduling_rule(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(CharacterSchedulingRule::class);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * Return the logo url-encoded.
     *
     * @param  mixed  $value
     * @return string
     */
    public function getLogoAttribute($value): string
    {

        if (is_null($value) || empty($value))
            $picture = $this->generateEmptyImage();
        else
            $picture = Image::make($value);

        return (string) $picture->encode('data-url');
    }

    /**
     * Store the file into blob attribute using url-encoding.
     *
     * @param  mixed  $value
     */
    public function setLogoAttribute($value)
    {
        if (is_null($value) || empty($value)) {
            $this->attributes['logo'] = null;

            return;
        }

        $picture = Image::make($value)->encode('data-url');
        $this->attributes['logo'] = $picture;
    }

    /**
     * Generating an empty image canvas.
     *
     * @return \Intervention\Image\Image
     */
    private function generateEmptyImage()
    {

        $picture = Image::canvas(128, 128, '#eee');

        $picture->line(1, 1, 128, 128, function ($draw) {
            $draw->color('#e7e7e7');
        });

        $picture->line(1, 128, 128, 1, function ($draw) {
            $draw->color('#e7e7e7');
        });

        $picture->text('128 x 128', 64, 64, function ($font) {
            $font->file(3);
            $font->color('#bbb');
            $font->align('center');
            $font->valign('middle');
        });

        return $picture;
    }
}
