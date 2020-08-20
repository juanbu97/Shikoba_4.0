<?php
/**
 * @User: Guillermo Boquizo Sánchez (GUBS), Rafael García Zurita (RAGZ).
 * @File: smsHelper.php
 * @Updated: 2019
 * @Description: Servicio para la gestión de los sms.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */
namespace AppBundle\Services;

/**
 * Class SmsHelper.
 */
class SmsHelper
{
    /**
     * Función que realiza una peticion post a la pasarela para enviar sms.
     * @param $telefonos []
     * @param $mensaje
     */
    public function sendSms($telefonos, $mensaje)
    {
//borrar estas lineas para volver a activar Sms
//CUIDADO HAY MUCHOS COMENTARIOS DETNRO
//SE QUITAN LAS COLUMNA 1,2		
//		
//        if (null != !empty($telefonos) && $mensaje) {
//            $smsLimit = 1000;
//
//            //Limite longitud de caracteres del sms
//            // if( strlen($mensaje) >= $smsLimit ){
//            //   $mensaje = substr( $mensaje, 0, $smsLimit) . '..';
//            // }
//
//            // Account details
//
//            //apikey antigua, agotada.
//            /*$apiKey = urlencode('iUwvbUxoPqQ-rlROmafgB9yaSoRqSVzP6xSubBnIbF');*/
//
//            // apikey para proyectoiesgrancapitan.org 
//            $apiKey = urlencode('2kLViuSJxsA-kUviVhrm54fSHt9POyeNAexa2oROoR');
//
//            //apikey para la cuenta shikobatres
//            //$apiKey = urlencode('koHSNImupAg-v4OpRw4w4r0OvmJl9CTbhgy5qlQglh');
//
//            // Message details
//            // $numbers = array(447123456789, 447987654321);
//            $sender = urlencode('IES G.Capitan');
//
//            $message = rawurlencode($mensaje);
//
//            $numbers = implode(',', $telefonos);
//
//            // Prepare data for POST request
//            $data = array(
//                'apikey' => $apiKey,
//                'numbers' => $numbers,
//                'sender' => $sender,
//                'message' => $message,
//                'test' => false,
//            );
//           
//           // Send the POST request with cURL
//
//            $ch = curl_init('https://api.txtlocal.com/send/');
//            curl_setopt($ch, CURLOPT_POST, true);
//            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
//            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//            $response = curl_exec($ch);
//            curl_close($ch);
//
//            // Process your response here
//            // print_r( $response );
//
//            // Si fuera necesario segun la pasarela recorrer el array de telefonos
//            // for ($i=0; $i < count( $telefonos ); $i++)
//            // {
//            //
//            //   $ch = curl_init();
//            //
//            //   curl_setopt($ch, CURLOPT_URL,"http://url");
//            //   curl_setopt($ch, CURLOPT_POST, 1);
//            //
//            //   curl_setopt($ch, CURLOPT_POSTFIELDS,
//            //   http_build_query( array('telefono' => $telefonos[$i], 'message' => $mensaje ) ) );
//            //
//            //   // Respuesta del servidor
//            //   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//            //
//            //   $server_output = curl_exec($ch);
//            //
//            //   curl_close ($ch);
//            //
//            //   // para comprobar el resultado
//            //   //if ($server_output == "OK") { echo 'bien'; } else { echo $server_output; }
//            // }
//         
//        }
    }
}
