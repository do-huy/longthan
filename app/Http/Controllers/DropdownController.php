<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DropdownController extends Controller
{
    public function regis()
    {
        $province_list = DB::table("tbl_province")
        		// ->groupBy('province_name')
        		->get();
        return view('admincp.register')->with('province_list',$province_list);
    }
    public function getStateList($proviceId)
    {
        $district_list = DB::table("tbl_district")
        ->where("district_province_id",$proviceId)
        ->select(["district_name","district_id"])
        ->get()->toArray();

        return response()->json($district_list);
    }
     public function getWardList($districtId)
    {
        $ward_list = DB::table("tbl_ward")
        ->where("ward_district_id",$districtId)
        ->select(["ward_name","ward_id"])
        ->get()->toArray();

        return response()->json($ward_list);
    }

    public function customer_order()
    {
        $this->data['title'] = 'du lieu user';
        $users_data = DB::table('users')
                    ->orderBy('id', 'desc')
                    ->get();
        $this->data['users_data'] = $users_data;

        $this->data['title'] = 'du lieu tinh thanh';
        $province_data = DB::table('tbl_province')
                    ->orderBy('province_id', 'desc')
                    ->get();
        $this->data['province_data'] = $province_data;
        return view('customer.customer',[
            'users_data' => $users_data,
            'province_data' => $province_data,
        ]);
    }

    public function customer_order_add(Request $req)
    {  
        $customer_name = $req->input('customer_name');
        $customer_province = $req->input('customer_province');
        $customer_district = $req->input('customer_district');
        $customer_ward = $req->input('customer_ward');
        $customer_address = $req->input('customer_address');
        $customer_name_contact = $req->input('customer_name_contact');
        $customer_number = $req->input('customer_number');
        $customer_note = $req->input('customer_note');

        $data = array("customer_name"=>$customer_name,"customer_province"=>$customer_province,"customer_district"=>$customer_district,"customer_ward"=>$customer_ward,"customer_address"=>$customer_address,"customer_name_contact"=>$customer_name_contact,"customer_number"=>$customer_number,"customer_note"=>$customer_note);

        DB::table('customer_order')->insert($data);

        return redirect('customer/order')->with('addcustomerorder','Tạo đơn hàng thành công');
    }
     public function customer_view()
    {
       $this->data['title'] = 'Quản lý hóa đơn';
        $customer_order = DB::table('customer_order')
                    ->orderBy('customer_id', 'desc')
                    ->get();
        $this->data['customer_order'] = $customer_order;
        return view('viewcustomer.index', $this->data);
      
    }
     // public function customer_edit()
     // {
     //    return view('editcustomer.editcustomer');
     // }
    public function data_user()
    {
        $this->data['title'] = 'du lieu user';
        $users_data = DB::table('users')
                    ->orderBy('id', 'desc')
                    ->get();
        $this->data['users_data'] = $users_data;
        return view('customer.index',[
            'users_data' => $users_data,
        ]);
    }
    // thêm bill
    
   

     
  
}
