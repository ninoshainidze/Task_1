<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Building;
use DB;

class ApartmentController extends Controller
{   
  
    public function insert(){
        $username = $_POST['username'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $private_number = $_POST['private_number'];
        $birth_date = $_POST['birth_date'];
        $phone_type = $_POST['phone_type'];
        $phone = $_POST['phone'];
        $connection_type = $_POST['connection_type'];
        $person_number = $_POST['person_number'];
        
        $db_name = "posts";

        $data=array('username'=>$username,"lastname"=>$lastname,"gender"=>$gender,"private_number"=>$private_number,"birth_date"=>$birth_date,"phone_type"=>$phone_type,"phone"=>$phone,
        'connection_type'=>$connection_type,'person_number'=>$person_number);
        DB::table($db_name)->insert($data);

        return redirect()->back();
    }
    public function update(){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $lastname = $_POST['lastname'];
        $gender = $_POST['gender'];
        $private_number = $_POST['private_number'];
        $birth_date = $_POST['birth_date'];
        $phone_type = $_POST['phone_type'];
        $phone = $_POST['phone'];
        $connection_type = $_POST['connection_type'];
        $person_number = $_POST['person_number'];
        
        $db_name = "posts";

        DB::update('update '.$db_name.' set username=?,lastname=?,gender=?,private_number=?,birth_date=?, phone_type=?, 
        phone=?,connection_type =?,person_number=?
        where id = ?',[$username,$lastname,$gender,$private_number,$birth_date, $phone_type, $phone,
        $connection_type,$person_number,$id]);

        return redirect()->back();
    }
    public function delete(){
        $id = $_POST['id'];

        $db_name = "posts";

        DB::delete('delete from '.$db_name.' where id =?',[$id]);
    }
}
