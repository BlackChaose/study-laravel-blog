<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Rating extends Controller
{
    public function index()
    {
        $arr = \App\Article::all()->sortByDesc('likes')->values();
        $result = $arr->filter(function ($el) {
            if ($el->isPublished()) {
                return $el;
            }
        });
        //dd($result);
        return view('rating', ['dataset' => $result]);
    }

    public function getmail()
    {
        $addres_mail = 'mailto:nikita.s.kalitin@gmail.com';
        $addres_mail2 = 'nikita.s.kalitin@gmail.com';
        //$address = ['mail' => strip_tags($this->protectMail($addres_mail))];
        $address = ['mail' => \Html::mailto($addres_mail2)];

        return view('contacts', ['adr' => $address]);
    }

    /**
     * Converts email addresses characters to HTML entities to block spam bots.
     *
     * @since 0.71
     *
     * @param string $email_address Email address.
     * @param int    $hex_encoding  Optional. Set to 1 to enable hex encoding.
     *
     * @return string Converted email address.
     */
    private function antispambot($email_address, $hex_encoding = 0)
    {
        $email_no_spam_address = '';
        for ($i = 0, $len = strlen($email_address); $i < $len; $i++) {
            $j = rand(0, 1 + $hex_encoding);
            if ($j == 0) {
                $email_no_spam_address .= '&#' . ord($email_address[$i]) . ';';
            } elseif ($j == 1) {
                $email_no_spam_address .= $email_address[$i];
            } elseif ($j == 2) {
                $email_no_spam_address .= '%' . zeroise(dechex(ord($email_address[$i])), 2);
            }
        }
        return str_replace('@', '&#64;', $email_no_spam_address);
    }

    private function protectMail($s)
    {
        $result = '';
        $s = '&#109;&#x61;i&#108;t&#111;:' . $s;
        for ($i = 0; $i < strlen($s); $i++) {
            $result .= '&#' . ord(substr($s, $i, 1)) .
                ';';
        }
        return $result;
    }
}
