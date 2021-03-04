<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Student;

class Students extends Component
{
    public $firstname;
    public $lastname;
    public $email;
    public $phone;

    public function resetInputField( )
    {
        $this->firstname = "";
        $this->lastname = "";
        $this->email = "";
        $this->phone = "";
    }

    public function store( )
    { 
        $validatedData = $this -> validate([
            "firstname" => "required",
            "lastname"  => "required",
            "email"     => "required|email",
            "phone"     => "required"
        ]);

            Student::create($validatedData);
            session()->flash("message","Student Created Successfully");
            $this ->  resetInputField ();
            $this -> emit('StudentAdded');


    }
    public function render()
    {
        $students= Student:: orderBy('id', 'DESC')->get();
        return view('livewire.students', ['students'=> $students]);
    }
}
