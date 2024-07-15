<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //

public function showstudent(){

    //Select commands

    //$students=DB::select("select name,age from students where age > ? and name like ?",[30,'r%']);
    //    return $students;

    //foreach ($students as $student){

      //  echo $student->name;


    //$students=DB::insert("insert into students(name, email,  age, city)
    //                values (?,?,?,?)",["boys", "boys@gmail.com", 28, "lahore"]);
    //return $students;


    //$students=DB::update('update students set email="test@gmail.com" where id = ?',[7]);

    //return $students;

    //$students=DB::delete('delete from students where id = ?',[1]);
    //return $students;

    //$students=DB::statement("drop table students");

    //$students=DB::unprepared('delete from students where id = 2');
    //return $students;

    //Query Builder
    //$students=DB::table('students')->where('name','henry')->where('age', 26)->get();

   //$students=DB::table('students')->select('name','age')->get();

    //$students=DB::table('students')->selectRaw('name,age')->get();

    //$students=DB::table('students')->whereRaw('age > 30')->get();

    //$students=DB::table('students')
    //       ->selectRaw('name, age')
           //->whereRaw('age > ? and name like ?',[20,'h%']);
    //       ->orderByRaw('age, name')
    //            ->get();


    //$students=DB::update('update students set name=?, age = ?,city =? where id = ?',['chris',35,'Quetta',7]);



    $students=DB::table('students')
           //->selectRaw('count(*) as student_count, age')
           //->whereRaw('age > ? and name like ?',[20,'h%']);
           ->select(DB::raw('count(*) as student_count,'),'age')
           //->where(DB::raw('age > ? and name like ?',[20,'h%']))
           //->groupBy('age')
           ->groupByRaw('age')
           //->havingRaw('age <  ?',[30])
           //->tosql();
            ->get();

       return $students;


}


}
