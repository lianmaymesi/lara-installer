<?php

namespace Lianmaymesi\LaraInstaller;

use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Access\Authorizable;

class User extends Model implements AuthorizableContract, AuthenticatableContract
{
    use Authorizable;
    use Authenticatable;
    use HasFactory;

    protected $guarded = [];

    protected $table = 'users';

    protected function newFactory()
    {
        return UserFactory::new();
    }
}
