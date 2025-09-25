<?php

namespace App\Http\Controllers\Frontend\user;

use App\Models\Home;
use App\Models\User;
use App\Models\Service;
use App\Models\userService;
use Illuminate\Http\Request;
use App\Models\ServiceComment;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Notification;
use App\Notifications\UserServiceNotification;


class FrontUserController extends Controller
{


    public function showLogin()
    {


                $home = Home::latest()->get();



        return view('frontend.pages.user.login',compact('home'));
    }







        public function showRegister()
    {


                $home = Home::latest()->get();



        return view('frontend.pages.user.register',compact('home'));
    }


         public function showUserDashboard()
    {


                $home = Home::latest()->get();



        // return view('frontend.pages.user.user_dashboard',compact('home'));


                return view('frontend.pages.user.index_dashboard',compact('home'));

    }


       public function showUserDashboardOrder()
    {


                $home = Home::latest()->get();


            $user = Auth::user(); // the logged-in user object
            $userId = $user->id;  // user's ID


   $getUserService =  userService::latest()->where('user_id',$userId)->get();

                return view('frontend.pages.user.order_dashboard',compact('home','getUserService'));

    }




          public function showAddNewOrder()
    {

        $services = Service::all();

                $home = Home::latest()->get();



        return view('frontend.pages.user.new_order_dashboard',compact('home','services'));
    }





   public function showUserMessages($id)
    {



                $home = Home::latest()->get();

                $service_id = $id;
                $user = Auth::user(); // the logged-in user object
                $user_id = $user->id;


                   $service =  userService::find($service_id);




            $serviceComments = ServiceComment::where('service_id', $service_id)->get();

            // return  $serviceComments;


        return view('frontend.pages.user.chat_dashboard',compact('home','service_id','serviceComments','service'));
    }



public function addUserMessagesStore(Request $request)
{

// return $request;
$user = Auth::user(); // the logged-in user object
$userId = $user->id;  // user's ID
    $request->validate([


        'comment' => 'required|string',


    ], [


        'comment.required' => 'الرجاء كتابة الرسالة.',
        'comment.string' => 'الرجاء كتابة الرسالة.',

    ]);

     $fileNamePath = "non";

    ServiceComment::create([

        'comment'=>$request->comment,
        'user_id' => $userId,
        'service_id' => $request->service_id,
         'attach_file' => $fileNamePath,



    ]);

       return redirect()->back()
                     ->with('success', 'تم ارسال رسالتك بنجاح شكرا لك');


}


/// chat using ajax //

// public function fetchUserMessages($service_id)
// {
//     $serviceComments = ServiceComment::where('service_id', $service_id)
//                         ->with('user') // eager load user
//                         ->latest()
//                         ->get();

//     return response()->json($serviceComments);
// }


public function fetchUserMessages($service_id)
{
    $messages = ServiceComment::with('user')
        ->where('service_id', $service_id)
        ->orderBy('id', 'ASC')  // oldest first
        ->get();

    return response()->json($messages);
}


public function addUserMessagesAjax(Request $request)
{
    $user = Auth::user();

    $request->validate([
        'comment' => 'required|string',
        'service_id' => 'required|integer',
    ]);

    $message = ServiceComment::create([
        'comment' => $request->comment,
        'user_id' => $user->id,
        'service_id' => $request->service_id,
        'attach_file' => 'non',
    ]);

    // Make sure user relationship is loaded
    $message->load('user');

    return response()->json($message);
}


/// End chat using ajax //

public function addNewOrderStore(Request $request)
{



$user = Auth::user(); // the logged-in user object
$userId = $user->id;  // user's ID
    $request->validate([

        'service_id' => 'required|not_in:non',

        'description' => 'required|string',


    ], [

        'service_id.required' => 'الرجاء اختيار الخدمة.',
        'service_id.not_in' => 'الرجاء اختيار الخدمة.',

        'description.required' => 'الرجاء اضافة وصف عن الخدمة المرادة.',
        'description.string' => 'الرجاء اضافة وصف عن الخدمة المرادة.',

    ]);



    $fileNamePath = "";
     if ($request->hasFile('file')) {
            $file = $request->file('file');
            $filename = time().'_'.$file->getClientOriginalName();
            $file->move(public_path('user_services'), $filename);
            $fileNamePath = 'user_services/'.$filename;
        }



     userService::create([
        'user_id' => $userId,
        'service_id' => $request->service_id,
        'des' => $request->description,
         'attach' => $fileNamePath,



    ]);

                $userAdmin = User::where('role','admin')->get();


    Notification::send($userAdmin,new UserServiceNotification($user->fname));





    // Redirect to dashboard with success message
    return redirect()->route('show.user.dashboard.order')
                     ->with('success', 'تم اضافة طلبك بنجاح شكرا لك');


                    //    return redirect()->back()
                    //  ->with('success', 'تم اضافة طلبك بنجاح شكرا لك');
}









public function addUserFrontStore(Request $request)
{
// $request->validate([
//     'name' => 'required|string|max:255',
//     'email' => 'required|email|unique:users,email',
//     'password' => 'required|min:6',
//     'phone' => [
//         'required',
//         'regex:/^\+?[1-9]\d{7,14}$/'
//     ],
// ], [
//     'name.required' => 'حقل الاسم مطلوب.',
//     'name.string' => 'يجب أن يكون الاسم نصًا.',
//     'name.max' => 'يجب ألا يزيد الاسم عن 255 حرفًا.',
//     'email.required' => 'حقل البريد الإلكتروني مطلوب.',
//     'email.email' => 'يجب إدخال بريد إلكتروني صالح.',
//     'email.unique' => 'هذا البريد الإلكتروني مستخدم بالفعل.',
//     'password.required' => 'حقل كلمة المرور مطلوب.',
//     'password.min' => 'يجب أن تكون كلمة المرور على الأقل 6 أحرف.',
//     'phone.required' => 'يرجى إدخال رقم الهاتف.',
//     'phone.regex' => 'الرجاء إدخال رقم هاتف صحيح مع كود الدولة (مثال: 965+).',
// ]);


// $request->validate([
//     'name' => 'required|string|max:255',
//     'email' => 'required|email|unique:users,email',
//     'password' => 'required|min:6',
//     'phone' => [
//         'required',
//         'regex:/^\+[1-9]\d{7,14}$/'
//     ],
// ], [
//     'name.required' => 'حقل الاسم مطلوب.',
//     'name.string' => 'يجب أن يكون الاسم نصًا.',
//     'name.max' => 'يجب ألا يزيد الاسم عن 255 حرفًا.',
//     'email.required' => 'حقل البريد الإلكتروني مطلوب.',
//     'email.email' => 'يجب إدخال بريد إلكتروني صالح.',
//     'email.unique' => 'هذا البريد الإلكتروني مستخدم بالفعل.',
//     'password.required' => 'حقل كلمة المرور مطلوب.',
//     'password.min' => 'يجب أن تكون كلمة المرور على الأقل 6 أحرف.',
//     'phone.required' => 'يرجى إدخال رقم الهاتف.',
//     'phone.regex' => 'الرجاء إدخال رقم هاتف صحيح مع كود الدولة ويبدأ بعلامة + (مثال: 965+).',
// ]);



$request->validate([
    'name' => 'required|string|max:255',
    'email' => 'required|email|unique:users,email',
    'password' => [
        'required',
        'string',
        'min:6',
        'regex:/^(?=.*[a-zA-Z])(?=.*\d).{6,}$/'
    ],
    'phone' => [
        'required',
        'regex:/^\+[1-9][0-9]{7,14}$/'
    ],
], [
    'name.required' => 'حقل الاسم مطلوب.',
    'email.required' => 'حقل البريد الإلكتروني مطلوب.',
    'email.email' => 'يجب إدخال بريد إلكتروني صالح.',
    'email.unique' => 'هذا البريد الإلكتروني مستخدم بالفعل.',
    'password.required' => 'حقل كلمة المرور مطلوب.',
    'password.min' => ' يجب أن تكون كلمة المرور على الأقل 6 أحرف وأرقام',
    'password.regex' => 'كلمة المرور يجب أن تحتوي على حروف وأرقام على الأقل.',
    'phone.required' => 'يرجى إدخال رقم الهاتف.',
    'phone.regex' => 'الرجاء إدخال رقم هاتف صحيح بالأرقام الإنجليزية ويبدأ بعلامة + (مثال: 96550000000+).',
]);


    // Create user
    $user = User::create([
        'fname' => $request->name,
        'role' => 'user',
        'email' => $request->email,
        'phone' => $request->phone,
        'password' => Hash::make($request->password),
    ]);

    // Log in the user
    Auth::login($user);

    // Regenerate session
    $request->session()->regenerate();

    // Redirect to dashboard with success message
    return redirect()->route('show.user.dashboard')
                     ->with('success', 'تم تسجيلك بنجاح! مرحبًا بك في لوحة التحكم.');
}



public function showLoginStore(LoginRequest $request)
{
    $request->validate([

        'email' => 'required|email',
        'password' => 'required',
    ], [
        'email.required' => 'حقل البريد الإلكتروني مطلوب.',
        'email.email' => 'يجب إدخال بريد إلكتروني صالح.',
        'password.required' => 'حقل كلمة المرور مطلوب.',
    ]);


    $credentials = $request->only('email', 'password');

    if (!Auth::attempt($credentials)) {

        // return "error";

        return redirect()->back()
                     ->with('error', 'خطأ في تسجيل الدخول الرجاء المحاولة مرة أخرى');
    }

    // Create user

    // Log in the user
    // Auth::login($user);

    // Regenerate session
    $request->session()->regenerate();

    // Redirect to dashboard with success message
    return redirect()->route('show.user.dashboard')
                     ->with('success', 'تم تسجيلك بنجاح! مرحبًا بك في لوحة التحكم.');
}





  public function destroyLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();


          return redirect()->route('show.user.login')->with('success', 'تم تسجيل الخروج');


    }


}
