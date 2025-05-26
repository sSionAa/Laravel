<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    protected $employeesData = [
        [
            'name' => 'John',
            'surname' => 'Doe',
            'email' => 'john.doe@example.com',
        ],
        [
            'name' => 'Jane',
            'surname' => 'Smith',
            'email' => 'jane.smith@example.com',
        ],
    ];

    public function __invoke()
    { {
            // Проверка, существуют ли уже сотрудники в базе данных
            if (Employee::count() === 0) {
                // Создаем сотрудников, если их еще нет
                foreach ($this->employeesData as $data) {
                    $employee = new Employee();
                    $employee->name = $data['name'];
                    $employee->surname = $data['surname'];
                    $employee->email = $data['email'];
                    $employee->save();
                }
            }

            // Получение всех сотрудников из базы данных
            $employees = Employee::all();

            // Возврат представления с передачей всех сотрудников
            return view('employees', compact('employees'));
        }
    }
}
