<?php
/**
 * @User: Guillermo Boquizo Sánchez, Rafael García Zurita
 * @File: SmsMessage.php
 * @Date: 2019
 * @Description: Archivo de configuración del mensaje sms.
 * @license http://opensource.org/licenses/gpl-license.php  GNU Public License
 */
namespace AppBundle\Config;

/**
 * Class SmsMessage.
 */
class SmsMessage
{
    const SMS = '';
    const SMS2 = ' ha recibido un parte disciplinario por conducta inadecuada. Rogamos devuelva copia firmada. Saludos. IES GRAN CAPITAN';

    /**
     * Función que se encarga de devolver la parte del mensaje previa al nombre del alumno.
     * @return string una cadena de caracteres
     */
    public static function getMessagePre()
    {
        return self::SMS;
    }

    /**
     * Función que se encarga de devolver la parte del mensaje posterior al nombre del alumno.
     * @return string una cadena de caracteres
     */
    public static function getMessagePost()
    {
        return self::SMS2;
    }
}
