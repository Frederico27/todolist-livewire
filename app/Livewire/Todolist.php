<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Todolist extends Component
{
    use WithPagination, WithoutUrlPagination;

    public $editForm = false;
    public $buttonTitle = 'Save';

    #[Rule('required|min:3|max:50')]
    public $name;
    public $importance;
    public $todo;
    public $search;
    public function create()
    {
        $validated = $this->validateOnly('name');
        $user_id = auth()->user()->user_id;
        $valueImportance = $this->importance == null ? 1 : $this->importance;
        Todo::create([
            'name' => $validated['name'],
            'user_id' => $user_id,
            'importance' => $valueImportance
        ]);

        $this->reset();
        $this->resetPage();
    }

    public function delete($id)
    {
        Todo::destroy($id);
    }

    public function toggle($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();
    }

    #[On('edit-mode')]
    public function edit($id)
    {
        $this->editForm = true;
        $this->buttonTitle = 'Update';
        $this->todo = Todo::findOrFail($id);
        $this->name = $this->todo->name;
        $this->importance = $this->todo->importance;
    }

    public function update()
    {
        $todoEdit = Todo::findOrFail($this->todo->id);
        $todoEdit->fill([
            'name' => $this->name,
            'importance' => $this->importance,
        ]);

        $todoEdit->save();
        $this->reset();
    }

    protected $queryString = ['search'];

    public function render()
    {
        $searchValue = '%' . $this->search . '%';

        $todo = Todo::latest()
            ->where('user_id', auth()->user()->user_id)
            ->where(function ($query) use ($searchValue) {
                $query->where('name', 'LIKE', '%' . $searchValue . '%');
            })
            ->paginate(3);


        return view('livewire.todolist', [
            'todos' =>  $todo
        ]);
    }
}
