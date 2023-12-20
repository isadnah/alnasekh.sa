<?php

namespace App\Livewire\Dashboard;

use App\Models\Corp;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class CorpsContainer extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public ?Corp $corpModel = null;

    public array $numberOfRowsArray = [5, 10, 20, 50, 100];
    public int $numberOfRows = 10;

    public $search = '';

    public function mount($title = null) {
        $this->corpModel = Corp::first();
    }

    public function export(Corp $corp) {
        $target = '#ExportHasBranchesBranchModal';

        if($corp->doesnt_has_branches) {
            $target = '#ExportDoesntHasBanchesModal';
        }

        $this->dispatch('open-modal', target: $target);
        $this->corpModel = $corp;
        $this->dispatch('set-corp', corp: $corp);
    }

    public function render()
    {
        return view('livewire.dashboard.corps-container', [
            'corps' => Corp::search($this->search)
            ->query(fn (Builder $query) => $query->with(['user', 'branch' => fn ($q) => $q->with(['record', 'certificate', 'civilDefenseCertificate', 'subscriptions', 'monthlyQuarterlyUpdates', 'registries', 'employees'])]))
            ->paginate($this->numberOfRows)
        ]);
    }
}