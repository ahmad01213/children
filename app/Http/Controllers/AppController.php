<?php

namespace App\Http\Controllers;

use App\Child;
use App\Contact;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function users()
    {
        $rows = Child::paginate(10);
        return view('admin.users', compact('rows'));
    }

    public function editeuser($id)
    {
        $row = Child::find($id);
        return view('admin.editeuser', compact('row'));
    }

    public function storeUser(Request $request)
    {
        $requestArray = $request->all();
        Child::create($requestArray);
        return redirect('front/home')->with('message', 'تم تسجبل البيانات بنجاح و سيتم التواصل معكم قريبا');

    }

    public function updateUser(Request $request, $id)
    {
        $row = Child::FindOrFail($id);
        $requestArray = $request->all();
        $row->update($requestArray);
        return redirect('admin/users')->with('message', 'تم تعديل البيانات بنجاح');

    }

    public function deleteUser($id)
    {
        Child::FindOrFail($id)->delete();
        return redirect('admin/users');
    }

    public function messages()
    {
        $rows = Contact::paginate(10);
        return view('admin.contacts.index', compact('rows'));
    }

    public function deleteMessage($id)
    {

        Contact::FindOrFail($id)->delete();
        return redirect('admin/messages');
    }

    public function storeMessage(Request $request)
    {
        $requestArray = $request->all();
        Contact::create($requestArray);
        return redirect('front/home')->with('message', "تم إرسال الرسالة بنجاح وسيتم التواصل معكم قريبا ");
    }


}
