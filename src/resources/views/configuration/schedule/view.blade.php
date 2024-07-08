@extends('web::layouts.app')

@section('title', trans('web::seat.schedule'))
@section('page_header', trans('web::seat.schedule'))

@section('content')
  <div class="row">
    <div class="col-md-3">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ trans('web::seat.new_schedule') }}</h3>
        </div>
        <div class="card-body">

          <form role="form" action="{{ route('seatcore::configuration.schedule.new') }}" method="post">
            {{ csrf_field() }}

            <div class="box-body">

              <div class="form-group">
                <label for="command">{{ trans('web::seat.available_commands') }}</label>
                <select name="command" id="available_commands" class="form-control"
                        style="width: 100%;">

                  @foreach($commands as $name => $data)

                    <option value="{{ $name }}"
                            @if($name == old('command'))
                              selected
                            @endif
                    >
                      {{ $name }}
                    </option>

                  @endforeach

                </select>
              </div>

              <div class="form-group">
                <label for="expression">{{ trans('web::seat.cron_expression') }}</label>
                <select name="expression" id="available_expressions" class="form-control"
                        style="width: 100%;">

                  @foreach($expressions as $name => $expression)

                    <option value="{{ $expression }}"
                            @if($expression == old('expression'))
                              selected
                            @endif
                    >
                      {{ $name }}
                    </option>

                  @endforeach

                </select>
                <p class="form-text text-muted mb-0">
                  <span id="expression"></span><br>
                  {{ trans('web::seat.choose_prepop') }}
                </p>
              </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">
              <button type="submit" class="btn btn-success float-right">
                <i class="fas fa-plus-square"></i>
                {{ trans('web::seat.add_scheduled') }}
              </button>
            </div>
          </form>

        </div>
      </div>

    </div>
    <div class="col-md-9">

      <div class="card">
        <div class="card-header">
          <h3 class="card-title">{{ trans('web::seat.current_schedule') }}</h3>
        </div>
        <div class="card-body">

          <table class="table table-sm table-condensed table-hover table-striped">
            <thead>
            <tr>
              <th>{{ trans('web::seat.command') }}</th>
              <th>{{ trans('web::seat.cron') }}</th>
              <th>{{ trans('web::seat.allow_overlap') }}</th>
              <th>{{ trans('web::seat.allow_maintenance') }}</th>
              <th></th>
            </tr>
            </thead>
            <tbody>

            @foreach($schedule as $job)

              <tr>
                <td>{{ $job->command }}</td>
                <td>{{ $job->expression }}</td>
                <td>{{ $job->allow_overlap }}</td>
                <td>{{ $job->allow_maintenance }}</td>
                <td class="float-right">
                  <a href="{{ route('seatcore::configuration.schedule.delete', ['schedule_id' => $job->id]) }}"
                     type="button"
                     class="btn btn-danger btn-sm confirmlink">
                    <i class="fas fa-trash-alt"></i>
                    {{ trans('web::seat.delete') }}
                  </a>
                </td>
              </tr>

            @endforeach

            </tbody>
          </table>

        </div>
        <div class="card-footer">
          <i class="text-muted float-right">{{ count($schedule) }} {{ trans('web::seat.scheduled_commands') }}</i>
        </div>
      </div>

    </div>
  </div>

  <hr>

  <div class="row">
      <div class="col-md-3">
          <div class="card">
              <div class="card-header">
                  <h3 class="card-title">{{ trans('web::seat.new_esi_character_scheduling_rules') }}</h3>
              </div>
              <div class="card-body">
                <form action="{{ route('seatcore::configuration.schedule.rule.create') }}" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="role">{{ trans_choice('web::seat.role',1) }}</label>
                    <select id="role" class="form-control" name="role_id">
                      @foreach($roles as $role)
                        <option value="{{$role->id}}">{{$role->title}}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="form-group">
                    <label for="time">{{ trans('web::seat.character_scheduling_rules_interval_input_label') }}</label>
                    <div class="row mx-0">
                      <input class="form-control col-md-9" type="number" name="time" value="1" min="1" step="0.01" id="time">
                      <select name="timeunit" class="form-control col-md-3">
                        <option selected value="hour">{{trans('web::seat.hour')}}</option>
                        <option value="day">{{trans('web::seat.day')}}</option>
                        <option value="week">{{trans('web::seat.week')}}</option>
                      </select>
                    </div>
                  </div>

                  <p class="form-text text-muted">
                    Edit and create roles on the <a href="{{ route('seatcore::configuration.access.roles') }}">access management</a> page and automate role assignment using
                    <a href="{{ route('seatcore::squads.index') }}">squads</a>.
                  </p>

                  <button type="submit" class="btn btn-success float-right">
                    <i class="fas fa-plus-square"></i>
                    {{trans('web::seat.add_character_scheduling_rule')}}
                  </button>
                </form>
              </div>
          </div>
      </div>

      <div class="col-md-9">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">{{ trans('web::seat.esi_character_scheduling_rules') }}</h3>
          </div>
          <div class="card-body">

            <table class="table table-sm table-condensed table-hover table-striped">
              <thead>
              <tr>
                <th>{{ trans_choice('web::seat.role',1) }}</th>
                <th>{{ trans('web::seat.update_interval') }}</th>
                <th></th>
              </tr>
              </thead>
              <tbody>

                @foreach($character_scheduling_rules as $rule)
                  <tr>
                    <td>
                      {{ $rule->role->title }}
                    </td>
                    <td>
                      {{ \Carbon\CarbonInterval::seconds($rule->update_interval)->cascade() }}
                    </td>
                    <td>
                      <form action="{{ route('seatcore::configuration.schedule.rule.delete') }}" method="POST" class="float-right">
                        @csrf
                        <input type="hidden" name="role_id" value="{{ $rule->role_id }}">
                        <button type="submit" class="btn btn-danger btn-sm confirmlink">
                          <i class="fas fa-trash-alt"></i>
                          {{ trans('web::seat.delete') }}
                        </button>
                      </form>
                    </td>
                  </tr>
                @endforeach

                <tr>
                  @if($character_scheduling_rules->isEmpty())
                    <td colspan="3" class="text-center text-muted">{{ trans('web::seat.character_scheduling_rules_empty') }}</td>
                  @else
                    <td colspan="3" class="text-center text-muted">{{ trans('web::seat.character_scheduling_rules_default') }}</td>
                  @endif
                </tr>

              </tbody>
            </table>

          </div>
          <div class="card-footer">
            <i class="text-muted float-right">{{ count($character_scheduling_rules) }} {{ trans_choice('web::seat.esi_character_scheduling_rules',count($character_scheduling_rules)) }}</i>
          </div>
        </div>
      </div>
  </div>
@stop

@push('javascript')

<script>
  $("#available_commands, #available_expressions").select2({
    tags: true
  });
</script>

<script>
  $("#available_expressions").on("change", function () {
    $("span#expression").html(
        "Cron: <b>" + this.value.replace("<", "") + "</b>");
  });
</script>

@endpush
