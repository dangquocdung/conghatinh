<?php
/**
 * Created by PhpStorm.
 * User: amitavroy
 * Date: 03/03/17
 * Time: 8:20 AM
 */

namespace App\Events\User;


use App\ChuyenMuc;


class ChuyenMucDeleted {

    private $chuyenmuc;

    /**
     * RoleCreated constructor.
     */
    public function __construct(ChuyenMuc $chuyenmuc)
    {
        $this->chuyenmuc = $chuyenmuc;
    }

    public function getName()
    {
        return $this->chuyenmuc->name;
    }

}