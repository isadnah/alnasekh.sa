<x-app-layout>

    <form action="{{ route('packages.update', $package) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <x-dashboard.cards.sample column="col-12">

            <div class="row align-items-end">

                <div class="col-md-6 col-12 mb-3">

                    <div class="mb-3">
                        <img src="{{ asset($package->thumbnail) }}" alt="image" width="60" height="60"
                            class="img-thumbnail">
                    </div>

                    <x-dashboard.input-group type="file" name="image" :title="trans('table.columns.image')" />
                </div>

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="text" :value="$package->title" name="title" :title="trans('table.columns.title')" />
                </div>

                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="number" :value="$package->monthly_price" name="monthly_price" :title="trans('table.columns.monthly price')" />
                </div>
                <div class="col-md-6 col-12 mb-3">
                    <x-dashboard.input-group type="number" :value="$package->yearly_price" name="yearly_price" :title="trans('table.columns.yearly price')" />
                </div>

                <div class="col-12 mb-3">
                    <x-dashboard.input-group type="text" :value="implode('-', $package->properties)" name="properties" :title="trans('table.columns.properties')" />
                    <span class="mt-2 d-block text-info" style="font-size: 12px">
                        اضف مميزات اكثر عن طريق التفريق بينها ب '-'
                    </span>
                </div>

                <div class="col-12">
                    <x-dashboard.button type="submit" name="Save" class="btn-primary mt-3" />
                </div>
            </div>

        </x-dashboard.cards.sample>

    </form>

</x-app-layout>
