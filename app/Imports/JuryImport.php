<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class JuryImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
public function model(array $row)
{
    $data['name']=$row->name;
    $data['email']=$row->email;
    $data['mobilenumber']=$row->mobilenumber;
    $data['designation']=$row->designation;
    $data['fblink']=$row->fblink;
    $data['linkedin']=$row->linkedin;
    $data['instagram']=$row->instagram;
    $data['twitter']=$row->twitter;
    $data['company']=$row->company;
    $data['industry']=$row->industry;
    $data['description']=$row->description;
    $data['city']=$row->city;
    $data['state']=$row->state;
    $data['sector']=$row->sector;
    $data['refby']=$row->refby;
	return $data;
    
}


}
