<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'contacts';

    public function save_contact_details($requestData){
        $objContact = new Contact();
        $objContact->name  = $requestData['name'];
        $objContact->email = $requestData['email'];
        $objContact->phone = $requestData['phone'];
        $objContact->subject = $requestData['subject'];
        $objContact->message = $requestData['message'];
        $objContact->created_at = date('Y-m-d H:i:s');
        $objContact->updated_at = date('Y-m-d H:i:s');
        return $objContact->save();
    }

    public function getdatatable($employee_list = "")
    {
        // ccd($employee_list);
        $requestData = $_REQUEST;
        $columns = array(
            0 => 'contacts.id',
            1 => 'contacts.name',
            2 => 'contacts.email',
            3 => 'contacts.phone',
            4 => 'contacts.subject',
            5 => 'contacts.message',
            6 => 'contacts.created_at',

        );
        $query = Contact ::from('contacts');

        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                $flag = 0;
                foreach ($columns as $key => $value) {
                    $searchVal = $requestData['search']['value'];
                    if ($requestData['columns'][$key]['searchable'] == 'true') {
                        if ($flag == 0) {
                            $query->where($value, 'like', '%' . $searchVal . '%');
                            $flag = $flag + 1;
                        } else {
                            $query->orWhere($value, 'like', '%' . $searchVal . '%');
                        }
                    }
                }
            });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                    ->take($requestData['length'])
                    ->select('contacts.id', 'contacts.name', 'contacts.email', 'contacts.phone', 'contacts.subject', 'contacts.message', 'contacts.created_at')
                    ->get();

        $data = array();
        $i = 0;

        foreach ($resultArr as $row) {
            $actionhtml  = '';
            $actionhtml =  $actionhtml. '<a href="javscript:;" data-toggle="modal" data-target="#deleteModel" data-id="'.$row['id'].'" class="btn btn-icon delete-contact"><i class="fa fa-trash text-danger"> </i></a>';

            $i++;
            $nestedData = array();
            $nestedData[] = $i;
            $nestedData[] = $row['name'];
            $nestedData[] = $row['email'];
            $nestedData[] = $row['phone'];
            $nestedData[] = $row['subject'];
            $nestedData[] = $row['message'];
            $nestedData[] = date("d-M-Y ", strtotime($row['created_at']));
            $nestedData[] = $actionhtml;
            $data[] = $nestedData;
        }
        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw.
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );
        return $json_data;
    }

    public function  deleteContact($data){
        return Contact::find($data['id'])->delete();
    }

}
