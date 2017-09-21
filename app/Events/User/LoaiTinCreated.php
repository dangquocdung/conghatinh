<?php
/**
 * Created by PhpStorm.
 * User: amitavroy
 * Date: 03/03/17
 * Time: 8:20 AM
 */

namespace App\Events\User;

use App\LoaiTin;


class LoaiTinCreated {

    private $loaitin;

    /**
     * RoleCreated constructor.
     */
    public function __construct(LoaiTin $loaitin)
    {
        $this->loaitin = $loaitin;
    }

    public function getName()
    {
        return $this->loaitin->name;
    }

}