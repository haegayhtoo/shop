<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $student=new Student;

        // //mgmg
        // $student->name="mgmg";
        // $student->email="mgmg@gmail.com";
        // $student->address="Yangon";
        // $student->save();

        // $s1=new Student;
        // //su su
        // $s1->name="mgmg";
        // $s1->email="susu@gmail.com";
        // $s1->address="Bago";
        // $s1->save();

        factory(App\Student::class,10)->create();
    }
}
