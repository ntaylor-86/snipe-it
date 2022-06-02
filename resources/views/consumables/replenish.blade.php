@extends('layouts/default')

{{-- Page title --}}
@section('title')
     Replenish Consumable
@parent
@stop

{{-- Page content --}}
@section('content')

<div class="row">
  <div class="col-md-6">

    <form class="form-horizontal" method="post" action="" autocomplete="off">
      <!-- CSRF Token -->
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />

      <div class="box box-default">

        @if ($consumable->id)
          <div class="box-header with-border">
            <div class="box-heading">
              <h2 class="box-title">{{ $consumable->name }} </h2>
            </div>
          </div><!-- /.box-header -->
        @endif

        <div class="box-body">
          @if ($consumable->name)
          <!-- consumable name -->
          <div class="form-group">
            <label class="col-sm-3 control-label">{{ trans('admin/consumables/general.consumable_name') }}</label>
            <div class="col-md-6">
              <p class="form-control-static">{{ $consumable->name }}</p>
            </div>
          </div>
          @endif

          @if ($consumable->qty)
          <!-- consumable current qty -->
          <div class="form-group">
            <label class="col-sm-3 control-label">Current Qty</label>
            <div class="col-md-2">
              <p class="form-control-static">{{ $consumable->qty }}</p>
            </div>
          </div>
          <div class="form-group">
            <label class="col-sm-3 control-label">Remaining</label>
            <div class="col-md-2">
              <p class="form-control-static">{{ $consumable->numRemaining() }}</p>
            </div>
          </div>

          @endif

          <!-- Adding Qty -->
          <div class="form-group">
              <label for="add_qty" class="col-md-3 control-label">Add Qty</label>
              <div class="col-md-2">
                  <input class="form-control" type="text" name="add_qty" aria-label="qty" id="add_qty" value="" data-validation="required" required="">
              </div>
          </div>

        </div> <!-- .box-body -->
        <div class="box-footer">
          <a class="btn btn-link" href="{{ URL::previous() }}">{{ trans('button.cancel') }}</a>
          <button type="submit" class="btn btn-primary pull-right"><i class="fas fa-check icon-white" aria-hidden="true"></i> {{ trans('general.save') }}</button>
       </div>
      </div>
    </form>

  </div>
</div>
@stop
