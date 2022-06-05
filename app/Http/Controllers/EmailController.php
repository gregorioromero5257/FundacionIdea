<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    //
    // public function send(Request $request)
    // {
    //   try {
    //     $data = [
    //  'correo_electronico' => $request->correo,
    //  'nombre' => $request->nombre
    //  ];
    //     Mail::send('emails.solicitud', $data, function($message) use ($data) {
    //
    //     $core= 'romerovelascogregorio@gmail.com';
    //
    //     $message->to($core, 'solicitud')
    //             ->subject('solicitud política');
    //     $message->from('romerovelascogregorio@gmail.com','C-230');
    //   });
    //
    //   return redirect('/');
    //
    //   } catch (\Exception $e) {
    //     dd($e);
    //     return view('errors.409');
    //   }
    //
    //
    //   // dd($request);
    // }
//
//     MAIL_DRIVER=smtp
// MAIL_HOST=smtp.googlemail.com
// MAIL_PORT=465
// MAIL_USERNAME=omorales@c-230.com
// MAIL_PASSWORD=B4j4-OM0r4l35
// MAIL_ENCRYPTION=ssl
// MAIL_FROM_ADDRESS=omorales@c-230.com
// MAIL_FROM_NAME='PGC2.0'

    public function send(Request $request)
    {
      $espacios = array(" ", "  ", "   ", "    ", "     ", "     ", "      ", "      ",PHP_EOL,"\r\n", "\r", "\n", "\t");
      $sinespacios = str_replace($espacios, "|", $request->motivo);
      $tipo = 'idea';
      // return $sinespacios;
      try {
        // $url =
        $data = json_decode( file_get_contents('https://pgc.c-230.com/send_email/'.$request->nombre.'&'.$request->correo.'&'.$sinespacios.'&'.$tipo), true );
        // $data = json_decode( file_get_contents('https://pgg.c-230.com/send_email/'.$request->nombre.'&'.$request->correo.'&'.$request->motivo), true );
        // dd($data);
        return redirect('/');
      } catch (\Exception $e) {
        dd($e);
        // return view('errors.409');
      }
    }
}
