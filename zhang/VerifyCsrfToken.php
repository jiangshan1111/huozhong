<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        'wechat/wx_user_save',
        'wechat/wx_headimage_save',
        'wechat/wx_chat_record_save',
        'wechat/wx_contact_save',
        'wechat/wx_group_save',
        'wechat/video_download'
    ];
}