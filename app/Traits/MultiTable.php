<?php

/** @noinspection PhpUndefinedClassInspection */

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

trait MultiTable
{
    protected static function boot()
    {
        parent::boot();
        self::created(function ($model) {
            Schema::connection('mysql')->create($model->table_name, function ($table) {
                $table->increments('id');
                $table->string('full_name');
                $table->string('department');
                $table->string('level');
                $table->string('position');
                $table->foreignId('user_id')->constrained();
                $table->timestamps();
            });
        });
    }
}
