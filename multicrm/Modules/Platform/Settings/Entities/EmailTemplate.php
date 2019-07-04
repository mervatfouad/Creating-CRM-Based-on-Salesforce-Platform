<?php

namespace Modules\Platform\Settings\Entities;

use Illuminate\Database\Eloquent\SoftDeletes;
use Modules\Platform\Core\Entities\CachableModel;

/**
 * Class EmailTemplate
 * @package Modules\Platform\Settings\Entities
 */
class EmailTemplate extends CachableModel
{
    use SoftDeletes;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    public $table = 'bap_email_template';
    public $fillable = [
        'name',
        'subject',
        'message',
    ];

    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

}
