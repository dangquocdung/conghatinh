<?php
/**
 * Created by PhpStorm.
 * User: amitavroy
 * Date: 03/03/17
 * Time: 8:20 AM
 */

namespace App\Events\User;

use App\TinTuc;


class TinTucCreated {

    private $tintuc;

    /**
     * RoleCreated constructor.
     */
    public function __construct(TinTuc $tintuc)
    {
        $this->tintuc = $tintuc;
    }

    public function getName()
    {
        return $this->tintuc->name;
    }

}