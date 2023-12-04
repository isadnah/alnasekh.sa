<x-app-layout>
    @if ($branch->corp->doesnt_has_branches)
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-widget-separator-wrapper">
                    <div class="card-body card-widget-separator">
                        <div class="row gy-4 gy-sm-1">
                            <div class="col-sm-6 col-lg-6">
                                <x-dashboard.cards.card-widget :name="trans('common.branches')" total="1" icon="bx bx-git-branch"
                                    color="primary" />
                                <hr class="d-none d-sm-block d-lg-none me-4">
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <x-dashboard.cards.card-widget :name="trans('common.employees')" :total="$branch->employees_count" icon="bx bx-user-pin"
                                    color="info" :last="true" />
                                <hr class="d-none d-sm-block d-lg-none">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <livewire:dashboard.container.dashboard-container :branch="$branch" />

    @if (!$branch->corp->doesnt_has_branches)
        <x-dashboard.modals.modal1 id="updateRecordForm" :title="trans('common.update record')">
            <livewire:dashboard.branch.update-record :record="$branch->record" />
        </x-dashboard.modals.modal1>

        <x-dashboard.modals.modal1 id="updateCertificateForm" :title="trans('common.update certificate')">
            <livewire:dashboard.branch.update-certificate :certificate="$branch->certificate" />
        </x-dashboard.modals.modal1>
    @else
        <x-dashboard.modals.modal1 id="branchRegistryFormModal" :title="trans('common.update certificate')">
            <livewire:dashboard.branch.store-registry :branch="$branch" />
        </x-dashboard.modals.modal1>
    @endif

    <x-dashboard.modals.modal1 id="updateMonthlyQuarterlyForm" :title="trans('common.update monthly update')">
        <livewire:dashboard.branch.update-monthly-quarterly-update :branch="$branch" />
    </x-dashboard.modals.modal1>

    <x-dashboard.modals.modal1 id="updateSubscriptoinModal" :title="trans('common.update subscription')">
        <livewire:dashboard.branch.update-subscription />
    </x-dashboard.modals.modal1>

    <x-dashboard.modals.modal1 id="branchEmployeeFormModal" :title="trans('common.new employee')">
        <livewire:dashboard.branch.store-employee :branch="$branch" />
    </x-dashboard.modals.modal1>

    <x-dashboard.modals.modal1 id="branchEmployeeMedicalInsuranceFormModal" :title="trans('common.new medical insurance')">
        <livewire:dashboard.branch.store-medical-insurance />
    </x-dashboard.modals.modal1>

    <x-dashboard.modals.modal1 id="branchEmployeeHealthCardFormModal" :title="trans('common.new health card')">
        <livewire:dashboard.branch.store-health-card />
    </x-dashboard.modals.modal1>
</x-app-layout>
