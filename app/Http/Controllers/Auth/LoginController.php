<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    protected $redirectTo = RouteServiceProvider::ADMIN_DASH;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        //  return 'email';

        // return 'username';   //match with three column(databasename, loginform-name, return column )

        // return 'phone_number';

        // We need multifeature to login(email/username/phone_number)

        $login_data = request() -> input('login_data');

        $cell = substr($login_data, 0,4);

        if (filter_var($login_data, FILTER_VALIDATE_EMAIL)){
           $type = 'email';  //check with email column
        }

        elseif ($cell=='8801'){
          $type = 'phone_number';
        }

        else{
            $type = 'username'; //check with username column
        }

        //for login database column name, form input tag column and function column will be same

        request() ->merge([$type => $login_data]);

        return $type;

    }




    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        if ($response = $this->loggedOut($request)) {
            return $response;
        }

        return $request->wantsJson()
            ? new JsonResponse([], 204)
            : redirect('/admin/login'); //url
    }





}
