<?php

namespace Api\Models;

use Illuminate\Database\Eloquent\Model;

class PermissionGroupPermission extends Model
{

    public $timestamps = false;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table;

    /**
     * Creates a new instance of the model.
     *
     * @param  array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = config('prionapi.tables.permission_group_permissions');
    }

}