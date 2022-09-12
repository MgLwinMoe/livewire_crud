<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Student;
use Illuminate\Support\Facades\Log;
use Livewire\WithPagination;

class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;
    public $ids;
    public $searchTerm;

    public function resetInput()
    {
        $this->firstname ='';
        $this->lastname ='';
        $this->email ='';
        $this->phone ='';
    }

    public function store(){
        $validated = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        Student::create($validated);
        $this->resetInput();
        session()->flash('message', 'Student has been added successfully!');
        $this->dispatchBrowserEvent('closeModal');
        $this->emit('StudentAdded');
    }

    public function edit($id)
    {
        $student = Student::where('id', $id)->first();
        $this->ids       = $student->id;
        $this->firstname = $student->firstname;
        $this->lastname  = $student->lastname;
        $this->email     = $student->email;
        $this->phone     = $student->phone;
    }

    public function update()
{
    $validated = $this->validate([
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'firstname' => 'required',
    ]);

    if($this->ids)
    {
        $student = Student::find($this->ids);
        $student->update(
            [
                'firstname' => $this->firstname,
                'lastname'  => $this->lastname,
                'email'     => $this->email,
                'phone'     => $this->phone,

            ]);
        session()->flash('message', 'Student has been updated successfully!');
        $this->resetInput();
        $this->emit('studentupdated');
    }
}

    public function delete($id)
    {
        if($id)
        {
            Student::where('id', $id)->delete();
            session()->flash('message', 'Student has been deleted successfully!');
        }
    }
    use WithPagination;

    public function render()
    {
        // Log::info("Hey I was here!");
        $searchTerm = '%'. $this->searchTerm . '%';
        if($searchTerm){
            $students = Student::where('firstname', 'LIKE', $searchTerm)
                    ->orWhere('lastname', 'LIKE', $searchTerm)
                    ->orWhere('email', 'LIKE', $searchTerm)
                    ->orWhere('phone', 'LIKE', $searchTerm)
                    ->orderBy('id', 'DESC')->paginate(5);
        }else {
            $students = Student::all();
        }
        return view('livewire.students',['students' => $students]);
    }
}
