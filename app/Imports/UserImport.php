<?php

namespace App\Imports;

use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class UserImport implements ToModel, WithHeadingRow
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
    $data['countrycode']=$row->countrycode;
	$data['country']=$row->country;
	$data['address']=$row->address;
	$data['profession']=$row->profession;
	$data['companyname']=$row->companyname;
	$data['designation']=$row->designation;
	$data['industrytype']=$row->industrytype;
	$data['highestqualification']=$row->highestqualification;
	$data['facebook']=$row->facebook;
	$data['instagram']=$row->instagram;
	$data['twitter']=$row->twitter;
	$data['linkedin']=$row->linkedin;
	$data['website']=$row->website;
	$data['reference']=$row->reference;
	$data['influencername']=$row->influencername;
	$data['experience']=$row->experience;
	$data['position']=$row->reference;
	$data['innovativebusiness']=$row->influencername;
	$data['businesscategory']=$row->businesscategory;
	$data['picture']=$row->picture;
	$data['businesstype']=$row->businesstype;
	$data['businessstage']=$row->businessstage;
	$data['employees']=$row->employees;
	$data['businessidea']=$row->businessidea;
	$data['fundingdetails']=$row->fundingdetails;
	$data['category']=$row->category;
	$data['smartcity']=$row->smartcity;
	$data['sector']=$row->sector;
	$data['journey']=$row->journey;
	$data['areuincorporated']=$row->areuincorporated;
	$data['aboutbusiness']=$row->aboutbusiness;
	$data['anythingelsetomention']=$row->anythingelsetomention;
	$data['referencenetwork']=$row->referencenetwork;
	$data['usercategory']=$row->usercategory;
	$data['youtubelink']=$row->youtubelink;
	return $data;
    
}


}
