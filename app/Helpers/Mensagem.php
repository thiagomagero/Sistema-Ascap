<?php

namespace App\Helpers;
use App\Mensagem as MensagemModel;

class Mensagem
{
    public static function get($id)
    {
      $MSG = MensagemModel::where('id', $id)->first();
        return $MSG->msg;
    }
}
