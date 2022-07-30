<?php


namespace GrapheneICT\NovaPermissions;

use Illuminate\Http\Request;
use GrapheneICT\NovaPermissions\Nova\Permission;
use GrapheneICT\NovaPermissions\Nova\Role;
use Laravel\Nova\Tool;
use Laravel\Nova\Nova;
use Laravel\Nova\Menu\Menu;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Http\Requests\NovaRequest;

class NovaPermissions extends Tool
{
	/**
	 * @var mixed
	 */
	public $permissionResource = Permission::class;
	
	/**
	 * @var mixed
	 */
	public $roleResource = Role::class;
	
	/**
	 * Perform any tasks that need to happen when the tool is booted.
	 *
	 * @return void
	 */
	public function boot()
	{
		Nova::resources([
			$this->roleResource,
			$this->permissionResource,
		]);
	}
	
	/**
	 * Get the displayable name of the resource tool.
	 *
	 * @return string
	 */
	public function name()
	{
		return 'Roles & Permissions';
	}
	
	/**
	 * @param  string  $permissionResource
	 * @return mixed
	 */
	public function permissionResource(string $permissionResource)
	{
		$this->permissionResource = $permissionResource;
		
		return $this;
	}
	
	/**
	 * Build the view that renders the navigation links for the tool.
	 *
	 * @return \Illuminate\View\View
	 */
	public function renderNavigation()
	{
		return view('nova-permissions::navigation');
	}
	
    /**
     * Build the menu that renders the navigation links for the tool.
     *
     * @param  \Illuminate\Http\Request $request
     * @return mixed
     */
    public function menu(NovaRequest $request)
    {
    	
        return [
        	
            MenuSection::make(__('Roles & Permissions'), [
            		MenuItem::link(__('Roles'), 'resources/roles'),
            		MenuItem::link(__('Permissions'), 'resources/permissions'),
                ])->icon('key')->collapsable(),
                
                ];
    }
	/**
	 * @param  string  $roleResource
	 * @return mixed
	 */
	public function roleResource(string $roleResource)
	{
		$this->roleResource = $roleResource;
		
		return $this;
	}
}
