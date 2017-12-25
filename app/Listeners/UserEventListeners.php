<?php
/**
 * User: amitavroy
 * Date: 06/02/17
 * Time: 9:11 PM
 */

namespace App\Listeners;

use App\Events\User\Activate;
use App\Events\User\Deleted;
use App\Events\User\LoggedIn;
use App\Events\User\LoggedOut;
use App\Events\User\PermissionCreated;
use App\Events\User\PermissionDeleted;
use App\Events\User\ProfileEdited;
use App\Events\User\Registered;
use App\Events\User\RoleCreated;
use App\Events\User\RoleDeleted;
use App\Events\User\ChuyenMucCreated;
use App\Events\User\ChuyenMucDeleted;
use App\Events\User\LoaiTinCreated;
use App\Events\User\LoaiTinDeleted;
use App\Events\User\TinTucCreated;
use App\Events\User\TinTucDeleted;
use App\Events\User\TinTucCounter;
use App\Services\Logger;
use Illuminate\Support\Facades\Auth;

class UserEventListeners
{
    private $logger;

    function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
    
    public function userLoggedIn(LoggedIn $event)
    {
        $name = Auth::user()->name;
        $this->logger->log("User {$name} đã đăng nhập");
    }

    public function userLoggedOut(LoggedOut $event)
    {
        $name = Auth::user()->name;
        $this->logger->log("User {$name} đã đăng xuất");
    }

    public function userProfileEdited(ProfileEdited $event)
    {
        $name = Auth::user()->name;
        $this->logger->log("User {$name} thay đổi thông tin cá nhân");
    }

    public function userRegistered(Registered $event)
    {
        $event->handleUserRegistration(); // handling activities on user register
        $name = $event->getUserName();
        $this->logger->log("User {$name} đã đăng kí mới. Đang chờ kích hoạt.");
    }

    public function userActivated(Activate $event)
    {
        $name = $event->getName();
        $this->logger->log("User {$name} đã được kích hoạt.");
    }

    public function userDeleted(Deleted $event)
    {
        $name = $event->getName();
        $this->logger->log("User {$name} đã bị xoá.");
    }

    public function roleCreated(RoleCreated $event)
    {
        $name = $event->getName();
        $this->logger->log("Role {$name} đã được tạo.");
    }

    public function roleDeleted(RoleDeleted $event)
    {
        $name = $event->getName();
        $this->logger->log("Role {$name} đã bị xoá.");
    }

    public function permissionCreated(PermissionCreated $event)
    {
        $name = $event->getName();
        $this->logger->log("Permission {$name} đã được tạo.");
    }

    public function permissionDeleted(PermissionDeleted $event)
    {
        $name = $event->getName();
        $this->logger->log("Permission {$name} đã bị xoá.");
    }

    public function chuyenMucCreated(ChuyenMucCreated $event)
    {
        
        $name = $event->getName();
        $this->logger->log("Chuyên mục {$name} đã được tạo.");
    }

    public function chuyenMucDeleted(ChuyenMucDeleted $event)
    {
        $name = $event->getName();
        $this->logger->log("Chuyên mục {$name} đã bị xoá.");
    }

    //Loai Tin

    public function loaiTinCreated(LoaiTinCreated $event)
    {
        
        $name = $event->getName();

        $this->logger->log("Loại tin {$name} đã được tạo.");
    }

    public function loaiTinDeleted(LoaiTinDeleted $event)
    {
        $name = $event->getName();

        $this->logger->log("Loại tin {$name} đã bị xoá.");
    }

    public function tinTucCreated(TinTucCreated $event)
    {
        
        $name = $event->getName();

        $this->logger->log("Bản tin {$name} đã được tạo.");
    }

    public function tinTucDeleted(TinTucDeleted $event)
    {
        $name = $event->getName();

        $this->logger->log("Bản tin {$name} đã bị xoá.");
    }

    public function tinTucCounter(TinTucCounter $event)
    {
        $event->increCounter();

//        $this->logger->log("Bản tin {$name} đã bị xoá.");
    }

    //Event

    public function subscribe($events)
    {
        $class = 'App\Listeners\UserEventListeners';

        $events->listen(LoggedIn::class, "{$class}@userLoggedIn");
        $events->listen(LoggedOut::class, "{$class}@userLoggedOut");

        $events->listen(ProfileEdited::class, "{$class}@userProfileEdited");
        $events->listen(Registered::class, "{$class}@userRegistered");

        $events->listen(Activate::class, "{$class}@userActivated");
        $events->listen(Deleted::class, "{$class}@userDeleted");
        $events->listen(RoleCreated::class, "{$class}@roleCreated");
        $events->listen(RoleDeleted::class, "{$class}@roleDeleted");
        $events->listen(PermissionCreated::class, "{$class}@permissionCreated");
        $events->listen(PermissionDeleted::class, "{$class}@permissionDeleted");

        $events->listen(ChuyenMucCreated::class, "{$class}@chuyenMucCreated");
        $events->listen(ChuyenMucDeleted::class, "{$class}@chuyenMucDeleted");

        $events->listen(LoaiTinCreated::class, "{$class}@loaiTinCreated");
        $events->listen(LoaiTinDeleted::class, "{$class}@loaiTinDeleted");

        $events->listen(TinTucCreated::class, "{$class}@tinTucCreated");
        $events->listen(TinTucDeleted::class, "{$class}@tinTucDeleted");

        $events->listen(TinTucCounter::class, "{$class}@tinTucCounter");
    }
}