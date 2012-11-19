<?php
class Auth_Controller extends Base_Controller {

    public $restful = true;

    public function get_login()
    {
//        $password = Hash::make('admin');
//        DB::table('users')->insert(array('password' => $password));
        return View::make('login.index')
            ->with('login_error', true);
    }

    public function post_login()
    {
        // Get POST data
        $input = Input::get();

        // Get $email and $password from $input
        $email = $input['email'];
        $password = $input['password'];

        // Validation rules
        $rules = array(
            'email'     => 'required|email',
            'password'  => 'required'
        );

        $validation = Validator::make($input, $rules);

        // If input fails
        if ($validation->fails()) {
            return Redirect::to_action('auth@login')->with_errors($validation);
        }

        // Now we try to authenticate the user
        if (Auth::attempt(array(
            'username'  => $email,
            'password'  => $password)))
        {
            // We are now logged in
            Organization::set_current( Organization::get_current()->slug );
            return Redirect::to_action('organizations@index');
        }
        else
        {
            // Auth failure
            return Redirect::to('login')->with('login_errors', true);
        }
    }

    public function get_logout()
    {
        if (Auth::check())
        {
            Auth::logout();
            return Redirect::to('login')->with('logout', true);
        }
        else
        {
            // User is not logged in, so we don't need to log them out
            return Redirect::to('login');
        }
    }
}