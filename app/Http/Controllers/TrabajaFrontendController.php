<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centre;

use Artesaos\SEOTools\Facades\SEOTools;

class TrabajaFrontendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEOTools::setTitle('Trabaja con nosotros Alacer Mas');
        
        return view('frontend.treballaAmbNosaltres.index');
    }

    public function sendTrabaja(Request $request)
    {
        $captcha = $request->g-recaptcha-response;
        if($captcha != ''){
            // your secret key
            $secret = env('GOOGLE_SECRET_RECHAPTA');
            $ip = $_SERVER['REMOTE_ADDR'];
            $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha");
            $array = json_decode($var, true);
            if($array['success']){

                $data=[
                    'nom-cognoms' => $request->nom-cognoms,
                    'mail' => $request->mail,
                    'phone' => $request->phone,
                    'localidad' => $request->localidad,
                    'pais' => $request->pais,
                    'msg' => $request->msg
                ];

                $AdminMessage  = "CV contacte WEB\n\n";
                $AdminMessage .= "Nom i cogmons: ".utf8_decode($data['nom-cognoms'])."\n";
                $AdminMessage .= "Correu: ".utf8_decode($data['mail'])."\n";
                $AdminMessage .= "Telf.: ".utf8_decode($data['phone'])."\n";
                $AdminMessage .= "Localidad: ".utf8_decode($data['localidad'])."\n";
                $AdminMessage .= "Pais: ".utf8_decode($data['pais'])."\n";
                $AdminMessage .= "Comentaris: ".utf8_decode($data['msg'])."\n";

                if(isset($_FILES) && (bool) $_FILES) {
        
                    $allowedExtensions = array("pdf","doc","docx");
                    $maxsize = 10240;
                    
                    $files = array();
                    foreach($_FILES as $name=>$file) {
                        $file_name = $file['name']; 
                        $temp_name = $file['tmp_name'];
                        $file_type = $file['type'];
                        $path_parts = pathinfo($file_name);
                        $ext = $path_parts['extension'];
                        if(!in_array($ext,$allowedExtensions)) {
                            return back()->with(['error_message_mail' => trans('ERROR! El fichero adjunto no es correcto.')]);
                        }
                        array_push($files,$file);
                    }

                    if(($_FILES['archivo']['size'] >= $maxsize) || ($_FILES["archivo"]["size"] == 0)) {
                        return back()->with(['error_message_mail' => trans('ERROR! El fichero es demasiado grande. Tamaño máximo 10 MB.')]);
                    }
                    
                    $to = "phxhollow13@hotmail.com";
                    $from = $_POST['mail']; 
                    $subject ="CV contacte WEB"; 
                    $message = "CV contacte WEB";
                    $headers = "From: $from";
                    
                    // boundary 
                    $semi_rand = md5(time()); 
                    $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                    
                    // headers for attachment 
                    $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                    
                    // multipart boundary 
                    $AdminMessage = "This is a multi-part message in MIME format.\n\n" . "--{$mime_boundary}\n" . "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . "Content-Transfer-Encoding: 7bit\n\n" . $AdminMessage . "\n\n"; 
                    $AdminMessage .= "--{$mime_boundary}\n";
                    
                    // preparing attachments
                    for($x=0;$x<count($files);$x++){
                        $file = fopen($files[$x]['tmp_name'],"rb");
                        $data = fread($file,filesize($files[$x]['tmp_name']));
                        fclose($file);
                        $data = chunk_split(base64_encode($data));
                        $name = $files[$x]['name'];
                        $AdminMessage .= "Content-Type: {\"application/octet-stream\"};\n" . " name=\"$name\"\n" . 
                        "Content-Disposition: attachment;\n" . " filename=\"$name\"\n" . 
                        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                        $AdminMessage .= "--{$mime_boundary}\n";
                    }

                    // send
                    $ok = mail($to, $subject, $AdminMessage, $headers); 
                    if ($ok) { 
                        return back()->with(['message_mail' => trans('Mensaje enviado correctamente! En breve nos pondremos en contacto con usted. Gracias.')]);
                    } else {
                        return back()->with(['error_message_mail' => trans('ERROR! El fichero adjunto no es correcto.')]);
                    } 
                }
            }else{
                // bot pasar
                return back()->with(['error_message_mail' => trans('ERROR! Seleccionar la opción no soy un robot.')]);
            }
        }else{
            // Es un bot
            return back()->with(['error_message_mail' => trans('ERROR! Seleccionar la opción no soy un robot.')]);
        }
    }
}
