<?php
/**
 * Created by PhpStorm.
 * User: amitavroy
 * Date: 03/03/17
 * Time: 8:20 AM
 */

namespace App\Events\User;

use App\TinTuc;


class TinTucView {

    private $tintuc;

    /**
     * RoleCreated constructor.
     */
    public function handle(TinTuc $tin)
    {
        $tin->increment('counter');
    }

}