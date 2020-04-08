<?php

class Log
{
  public static function display()
  {
    $content = date('Y-m-d H:i:s');
    return $content;
  }
}

//Log::display();