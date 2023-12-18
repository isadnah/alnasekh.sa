<div class="row">
    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="number" wire:model.defer="form.permit" name="form.permit" :title="trans('table.columns.permit')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="text" wire:model.defer="form.ministry_of_interior_number"
            name="form.ministry_of_interior_number" :title="trans('table.columns.ministry of interior number')" />
    </div>

    {{-- <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="number" wire:model.defer="form.status" name="form.status" :title="trans('table.columns.status')" />
    </div> --}}

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="date" wire:model.defer="form.start_date" name="form.start_date"
            :title="trans('table.columns.start date')" />
    </div>

    <div class="col-md-6 col-12 mb-3">
        <x-dashboard.input-group type="date" wire:model.defer="form.end_date" name="form.end_date"
            :title="trans('table.columns.end date')" />
    </div>

    <div class="col-12">
        <x-dashboard.button wire:click="update" name="{{ trans('common.update') }}" class="btn-primary mt-4" />
    </div>
</div>
