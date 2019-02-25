<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Validator, DB, Illuminate\Support\Facades\Hash, Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Mail\Message;
use JWTAuth;
use Tymon\JWTAuth\JWT;


class AuthController extends Controller
{
    public function login(Request $request,JWT $jwt)
    {
        $credentials = $request->only('email', 'password');

        $rules = [
            'email' => 'required|email',
            'password' => 'required',
        ];
        $validator = Validator::make($credentials, $rules);

        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()], 401);
        }

        try {
            // attempt to verify the credentials and create a token for the user
            if (! $token = JWTAuth::attempt($credentials)) {
                return response()->json(['success' => false, 'error' => 'We cant find an account with this credentials. Please make sure you entered the right information and you have verified your email address.'], 404);
            }
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['success' => false, 'error' => 'Failed to login, please try again.'], 500);
        }
        $jwt->setToken($token);
        $payload = $jwt->getPayload();

        JWTAuth::setToken($token);
        $user =JWTAuth::toUser();
        // all good so return the token
        return response()->json(['success' => true,
            'data'=> [ 'token' => $token,
                'usuario' => $user,
                'expira' => $payload->get('exp')]], 200);
    }

    /**
     * Log out
     * Invalidate the token, so user cannot use it anymore
     * They have to relogin to get a new token
     *
     * @param Request $request
     */
    public function logout(Request $request) {
        $this->validate($request, ['token' => 'required']);
        try {
            JWTAuth::invalidate($request->input('token'));
            return response()->json(['success' => true, 'message'=> "You have successfully logged out."]);
        } catch (JWTException $e) {
            return response()->json(['success' => false, 'error' => 'Failed to logout, please try again.'], 500);
        }
    }

    public function register(Request $request,JWT $jwt)
    {
        $credentials = $request->only(
            'name',
            'email',
            'password'
        );
        $rules = [
            'name' => 'required|max:50',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:8|max:20'
        ];
        $validator = Validator::make($credentials, $rules);
        if($validator->fails()) {
            return response()->json(['success'=> false, 'error'=> $validator->messages()]);
        }
        else{
            $name = $request->name;
            $email = $request->email;
            $password =  $request->password;
            $array_user =[
                'name' => $name,
                'email' => $email,
                'password' => Hash::make($password)
            ];
            $user = User::create($array_user);
            $verification_code = str_random(30);
            $credentials = $request->only('email', 'password');
            $rules = [
                'email' => 'required|email',
                'password' => 'required',
            ];
            $validator = Validator::make($credentials, $rules);
            if($validator->fails()) {
                return response()->json(['success'=> false, 'error'=> $validator->messages()], 401);
            }
            try {
                if (! $token = JWTAuth::attempt($credentials)) {
                    return response()->json(['success' => false, 'error' => 'We cant find an account with this credentials. Please make sure you entered the right information and you have verified your email address.'], 404);
                }
                $jwt->setToken($token);
                $payload = $jwt->getPayload();

                JWTAuth::setToken($token);
                $user =JWTAuth::toUser();
                return response()->json(['success' => true,
                    'data'=> [ 'token' => $token,
                        'usuario' => $user,
                        'expira' => $payload->get('exp')]], 200);
            } catch (JWTException $e) {
                return response()->json(['success' => false, 'error' => 'Failed to login, please try again.'], 500);
            }
        }

    }

    public function verifyUser($verification_code)
    {
        $check = DB::table('user_verifications')->where('token',$verification_code)->first();
        if(!is_null($check)){
            $user = User::find($check->user_id);
            if($user->is_verified == 1){
                return response()->json([
                    'success'=> true,
                    'message'=> 'Account already verified..'
                ]);
            }
            $user->update(['is_verified' => 1]);
            DB::table('user_verifications')->where('token',$verification_code)->delete();
            return response()->json([
                'success'=> true,
                'message'=> 'You have successfully verified your email address.'
            ]);
        }
        return response()->json(['success'=> false, 'error'=> "Verification code is invalid."]);
    }
    public function recover(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            $error_message = "Your email address was not found.";
            return response()->json(['success' => false, 'error' => ['email'=> $error_message]], 401);
        }
        try {
            Password::sendResetLink($request->only('email'), function (Message $message) {
                $message->subject('Your Password Reset Link');
            });
        } catch (\Exception $e) {
            $error_message = $e->getMessage();
            return response()->json(['success' => false, 'error' => $error_message], 401);
        }
        return response()->json([
            'success' => true, 'data'=> ['message'=> 'A reset email has been sent! Please check your email.']
        ]);
    }
}
