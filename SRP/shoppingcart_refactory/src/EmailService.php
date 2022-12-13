<?php

namespace App;

class EmailService { 

    public function __construct(
        private string $to = '',
        private string $from = 'site@gmail.com',
        private string $title = '',
        private string $content = ''
    ){
        $this->to = $to;
        $this->from = $from;
        $this->title = $title;
        $this->content = $content;
    }

    public static function sendEmail(){
        return "--- send email ---";
    }
}