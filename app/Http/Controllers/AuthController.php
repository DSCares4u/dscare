<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;

class AuthController extends Controller
{
    // public function loginWithOTP(Request $request){   
    //     $validator = Validator::make($request->all(), [
    //         'mobile_no' => 'required|min:10',
    //         'otp' => 'required|string|min:6',
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(['error' => $validator->errors()], 422);
    //     }

    //     $user = User::where('mobile',$request->mobile)->first();

        // if(!user){
        //     return response
        // }
        
        // $user = User::updateOrCreate($validator->validated());
        //     return response()->json(['error' => 'Unauthorized'], 401);


        // User::updateOrCreate(
        //     ['mobile_no' => $request->mobile_no],
        //     [
        //         'email' => $request->email,
        //         'token' => $token,
        //         'created_at' => $datetime,
        //     ]);

        
        // return response()->json([
        //     'message' => 'User Login Successfully',
        //     'user' => $user
        // ], 201);
    // }


    public function login(Request $request){

        $mobile = $request->input('mobile');
        $otp = mt_rand(10000,99999);

        // $request->session()->put('mobile',$mobile);
        // $request->session()->put('otp',$otp);

        session(['mobile'=>$mobile,'otp'=>$otp]);
        session(['otp'=>$otp,'otp'=>$otp]);

        return response()->json(['success'=>true,'message'=>'Otp Sent Successssfully']);

    }

    public function verifyOtp(Request $request){

        $otp = $request->input('otp');
        $mobile = $request->session()->get('mobile');
        $user = User::where('mobile',$mobile)->first();

        if(!$user){
            $user = User::create([
                'mobile'=>$mobile
                // other data
            ]);
        }

        if($otp == $request->session()->get('otp')){
            Auth::login($user);
            return response()->json(['success'=>true,'message'=>'Logged in Successfully']);
        } else{
            return response()->json(['success'=>false,'message'=>'Invalid OTP']);
        }
    }
    
    
                // $random = Str::random(40);
                // $domain = URL::to('/');
                // $url = $domain.'/verify-mail/'.$random;

                // $random = Str::random(40);
                // $domain = URL::to('/');
                // $url = $domain.'/verify-mail/'.$random;
   
    //  public function logout(Request $request)
    //  {
    //      JWTAuth::invalidate(JWTAuth::getToken()); 
    //      return response()->json(['message' => 'User logged out successfully']);
    //  }
    // /**
    //  * Refresh a token.
    //  *
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function refresh()
    // {
    //     $token = JWTAuth::getToken();
    //     $newToken = JWTAuth::refresh($token);

    //     return response()->json(['token'=>$newToken]);
    // }
    // /**
    //  * Get the authenticated User.
    //  *
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // public function userProfile()
    // {
    //     return response()->json(auth()->user());
    // }
    // /**
    //  * Get the token array structure.
    //  *
    //  * @param  string $token
    //  *
    //  * @return \Illuminate\Http\JsonResponse
    //  */
    // protected function createNewToken($token)
    // {
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth()->factory()->getTTL() * 60,
    //         'user' => auth()->user()
    //     ]);
    // }
    // public function sendVerifyMail($email){
    //     if(auth()->user()){
    //         $user = User::where('email', $email)->first();
    //         if($user){
    
    //             $random = Str::random(40);
    //             $domain = URL::to('/');
    //             $url = $domain.'/verify-mail/'.$random;
    
    //             $data['url'] = $url;
    //             $data['email'] = $email;
    //             $data['title'] = "Email Verification";
    //             $data['body'] = "Please click here to verify your mail.";
    
    //             Mail::send('home.verifyMail', ['data' => $data], function($message) use ($data){
    //                 $message->to($data['email'])->subject($data['title']);
    //             });
    
    //             $user->remember_token = $random;
    //             $user->save();
    
    //             return response()->json(['success' => true, 'msg' => 'Mail Send Successfully, Please Check it.']);
    //         }
    //     } else {
    //         return response()->json(['success' => false, 'msg' => 'User is Not Authenticated']);
    //     }
    // }

    // public function verification($token)
    // {
    //     $user = User::where('remember_token',$token)->get();
    //     if(count($user)> 0){
    //         $datetime = Carbon::now()->format('d-m-Y H:i:s');
    //         $user = User::find($user[0]['id']);
    //         $user->remember_token = '';
    //         $user->email_verified_at = $datetime;
    //         $user->save();

    //         // return response()->json(['success'=>true,'message' => 'Verified Successfully']);
    //         return "<h1> Email Verified Successfully</h1>";
    //     }
    //     else{
    //         // return response()->json(['success'=>false,'message' => 'Page Not Found',404]);
    //         return "<h1> Page Expired</h1>";

    //     }
    // }  
    
    // // forget password

    // public function forgetPassword(Request $request){

    //         $user = User::where('email', $request->email)->first();
            
    //         if ($user !== null) {
    //             $token = Str::random(40);
    //             $domain = URL::to('/');
    //             $url = $domain.'/reset-password?token='.$token;
                
    //             $data['url'] = $url;
    //             $data['email'] = $request->email;
    //             $data['title'] = 'Password Reset';
    //             $data['body'] = "Please click on the link below to reset your password.";
                
    //             Mail::send('home.forget-Password', ['data' => $data], function ($message) use ($data) {
    //                 $message->to($data['email'])->subject($data['title']);
    //             });
                
    //             $datetime = Carbon::now()->format('Y-m-d H:i:s');
                
    //             PasswordResetToken::updateOrCreate(
    //                 ['email' => $request->email],
    //                 [
    //                     'email' => $request->email,
    //                     'token' => $token,
    //                     'created_at' => $datetime,
    //                 ]
    //             );
                
    //             return response()->json(['message' => 'Please check your email to reset the password']);
    //         } else {
    //             return response()->json(['message' => 'User not found!']);                
    //         }
    // }

    // public function resetPasswordLoad(Request $request)
    // {
    //     $resetToken = PasswordResetToken::where('token', $request->token)->first();
    //     if ($resetToken) {
    //         $user = User::where('email', $resetToken->email)->first();
            
    //         if ($user) {
    //             return view('home.resetPassword', compact('user'));
    //         }
    //     }
    
    //     return "<h1>Page Not Found</h1>";
    // }
       
    
    // public function resetPassword(Request $request)
    // {
    //     $request->validate([
    //         'email' => 'required|email', // Assuming email is required for user identification
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    
    //     $user = User::where('email', $request->email)->first();
    
    //     if (!$user) {
    //         return "<h1>User not found.</h1>" . $this->redirectWithDelay('/login', 3, 'Redirecting to login page...');
    //     }
    
    //     $user->password = $request->password;
    
    //     // dd($user->password);
    //     if (!$user->save()) {
    //         return "<h1>Failed to reset password.</h1>" . $this->redirectWithDelay('/login', 3, 'Redirecting to login page...');
    //     }
    
    //     $deleted = PasswordResetToken::where('email', $user->email)->delete();
    
    //     if (!$deleted) {
    //         return "<h1>Failed to delete password reset record for email: {$user->email}.</h1>" . $this->redirectWithDelay('/login', 3, 'Redirecting to login page...');
    //     }
    
    //     return "<h1>Password has been reset successfully.</h1>";
    // }
    

    

}