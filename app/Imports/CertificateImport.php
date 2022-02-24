<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class CertificateImport implements ToModel, WithHeadingRow
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
    $data['phone']=$row->phone;
    $data['influencer_name']=$row->influencer_name;
	$data['category']=$row->category;
	$data['event_name']=$row->event_name;
	return $data;
    
}


}