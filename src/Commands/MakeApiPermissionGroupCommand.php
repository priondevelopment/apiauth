<?php

namespace Api\Commands;

/**
 * This file is part of Setting,
 * a setting management solution for Laravel.
 *
 * @license MIT
 * @company Prion Development
 * @package Setting
 */

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;

class MakeApiPermissionGroupCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'prionapi:api_permission_group_command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Api Permission Group Command Model';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Api Permission Group Command Model';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__.'/stubs/api_permission_group.stub';
    }

    /**
     * Get the desired class name from the input.
     *
     * @return string
     */
    protected function getNameInput()
    {
        return config('api.models.api_permission_group', 'PermissionGroup');
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Models\Api';
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }
}