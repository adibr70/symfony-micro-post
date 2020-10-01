<?php


namespace App\Security;


class TokenGenerator
{
    private const ALPHABET = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmopqrstuvwxyz0123456789';

    public function getRandomSecureToken(int $lenght) : string
    {
        $maxNumber = strlen(self::ALPHABET);
        $token = '';

        for($i=0; $i<$lenght; $i++){
            $token .= self::ALPHABET[random_int(0, $maxNumber-1)];
        }
        return $token;
    }

}