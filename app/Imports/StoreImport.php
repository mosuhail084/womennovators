<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class StoreImport implements ToModel, WithHeadingRow
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
 $data['storename']=$row->storename;
    $data['state']=$row->state;
    $data['city']=$row->city;
    $data['annualturnover']=$row->annualturnover;
    $data['yearofestablished']=$row->yearofestablished;
	$data['address']=$row->address;
	$data['email']=$row->email;
	$data['phone']=$row->phone;
	$data['website']=$row->website;
	$data['contactperson']=$row->contactperson;
	$data['postalcode']=$row->postalcode;
	$data['description']=$row->description;
	$data['natureofbusiness']=$row->natureofbusiness;
	$data['latitude']=$row->latitude;
	$data['longitude']=$row->longitude;
	return $data;
    
}


}
