<?php

namespace App\View\Components;

use App\Models\UserQuery;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserQueryComponent extends Component
{
    public UserQuery $userQuery;

    /**
     * Create a new component instance.
     */
    public function __construct(UserQuery $userQuery)
    {
        $this->userQuery = $userQuery;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user-query-component');
    }
}
