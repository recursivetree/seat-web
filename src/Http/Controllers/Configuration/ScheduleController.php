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

namespace Seat\Web\Http\Controllers\Configuration;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Seat\Services\Models\Schedule;
use Seat\Web\Http\Controllers\Controller;
use Seat\Web\Http\Validation\NewSchedule;
use Seat\Web\Models\Acl\Role;
use Seat\Web\Models\CharacterSchedulingRule;

/**
 * Class ScheduleController.
 *
 * @package Seat\Web\Http\Controllers\Configuration
 */
class ScheduleController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listSchedule()
    {

        $schedule = Schedule::all();
        $commands = Artisan::all();
        $expressions = [
            'hourly' => '0 * * * *',
            'daily' => '0 0 * * *',
            'weekly' => '0 0 * * 0',
            'monthly' => '0 0 1 * *',
            'yearly' => '0 0 1 1 *',
            'every minute' => '* * * * *',
            'every five minutes' => '*/5 * * * *',
            'every ten minutes' => '*/10 * * * *',
            'every thirty minutes' => '*/30 * * * *',

        ];

        $character_scheduling_rules = CharacterSchedulingRule::with('role')->get();
        $roles = Role::all();

        return view('web::configuration.schedule.view',
            compact('schedule', 'commands', 'expressions', 'character_scheduling_rules', 'roles'));
    }

    /**
     * @param  \Seat\Web\Http\Validation\NewSchedule  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function newSchedule(NewSchedule $request)
    {

        Schedule::create($request->all());

        return redirect()->back()
            ->with('success', 'New Schedule has been added!');

    }

    /**
     * @param  int  $schedule_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteSchedule(int $schedule_id)
    {

        Schedule::findOrFail($schedule_id)->delete();

        return redirect()->back()
            ->with('success', 'Schedule entry deleted!');
    }

    public function newCharacterSchedulingRule(Request $request)
    {
        $request->validate([
            'role_id' => 'required|integer',
            'time' => 'required|decimal:0,2|min:1',
            'timeunit' => 'required|string|in:hour,day,week',
        ]);

        $role = Role::find($request->role_id);
        if($role === null) {
            return redirect()->back()->with('error', trans('web::seat.role_not_found'));
        }

        $rule = $role->character_scheduling_rule;
        if($rule === null) {
            $rule = new CharacterSchedulingRule();
            $rule->role_id = $role->id;
        }

        if($request->timeunit === 'hour') {
            $time_modifier = 60 * 60;
        } elseif ($request->timeunit === 'day') {
            $time_modifier = 60 * 60 * 24;
        } elseif ($request->timeunit === 'week') {
            $time_modifier = 60 * 60 * 24 * 7;
        }

        $rule->update_interval = $request->time * $time_modifier;
        $rule->save();

        return redirect()->back()->with('success', trans('web::seat.character_scheduling_rule_creation_success'));
    }

    public function deleteCharacterSchedulingRule(Request $request): \Illuminate\Http\RedirectResponse
    {
        $request->validate([
            'role_id' => 'required|integer',
        ]);

        CharacterSchedulingRule::destroy($request->role_id);

        return redirect()->back()
            ->with('success', trans('web::seat.character_scheduling_rule_deleted'));
    }
}
