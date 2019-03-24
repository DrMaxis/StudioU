<?php
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\Menu;
use TCG\Voyager\Models\MenuItem;

class CustomMenuItemsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (file_exists(base_path('routes/web.php'))) {
            require base_path('routes/web.php');
            /*
            |--------------------------------------------------------------------------
            | Admin Menu
            |--------------------------------------------------------------------------
             */
            $menu = Menu::where('name', 'admin')->firstOrFail();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Dashboard',
                'url' => '',
                'route' => 'voyager.dashboard',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => null,
                'parent_id' => null,
                'order' => 1,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Projects',
                'url' => '/admin/projects',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-documentation',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 2,
                ])->save();
            }
            
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'About Us',
                'url' => '/admin/about',
                'route' => null,
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => 'voyager-medal-rank-star',
                    'color' => null,
                    'parent_id' => null,
                    'order' => 3,
                ])->save();
            }
           
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Roles',
                'url' => '',
                'route' => 'voyager.roles.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => null,
                'parent_id' => null,
                'order' => 12,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Users',
                'url' => '',
                'route' => 'voyager.users.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => null,
                'parent_id' => null,
                'order' => 13,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Media',
                'url' => '',
                'route' => 'voyager.media.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => null,
                'parent_id' => null,
                'order' => 14,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Posts',
                'url' => '',
                'route' => 'voyager.posts.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-news',
                'color' => null,
                'parent_id' => null,
                'order' => 15,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Pages',
                'url' => '',
                'route' => 'voyager.pages.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-file-text',
                'color' => null,
                'parent_id' => null,
                'order' => 16,
            ])->save();
            $toolsMenuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Tools',
                'url' => '',
            ]);
            $toolsMenuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => null,
                'parent_id' => null,
                'order' => 17,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Settings',
                'url' => '',
                'route' => 'voyager.settings.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => null,
                'parent_id' => null,
                'order' => 18,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Categories',
                'url' => '',
                'route' => 'voyager.categories.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-categories',
                'color' => null,
                'parent_id' => null,
                'order' => 19,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Menu Builder',
                'url' => '',
                'route' => 'voyager.menus.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => null,
                'parent_id' => $toolsMenuItem->id,
                'order' => 1,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Database',
                'url' => '',
                'route' => 'voyager.database.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => null,
                'parent_id' => $toolsMenuItem->id,
                'order' => 2,
            ])->save();
            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Compass',
                'url' => '',
                'route' => 'voyager.compass.index',
            ]);
            $menuItem->fill([
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => null,
                'parent_id' => $toolsMenuItem->id,
                'order' => 3,
            ])->save();
            /*
            |--------------------------------------------------------------------------
            | Main Menu
            |--------------------------------------------------------------------------
             */
            $menu = Menu::where('name', 'main')->firstOrFail();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Current Projects',
                'url' => '',
                'route' => 'projects',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 15,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'GitHub',
                'url' => '',
                'route' => '',
            ]);
            
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 16,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'Resume',
                'url' => '',
                'route' => '',
            ]);
            
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 17,
                ])->save();
            }
           

        

            
            /*
            |--------------------------------------------------------------------------
            | Social
            |--------------------------------------------------------------------------
             */
            $menu = Menu::where('name', 'social')->firstOrFail();

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'fa fa-github',
                'url' => '#',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 25,
                ])->save();
            }

            $menuItem = MenuItem::firstOrNew([
                'menu_id' => $menu->id,
                'title' => 'fa fa-linkedin',
                'url' => '',
                'route' => '#',
            ]);
            if (!$menuItem->exists) {
                $menuItem->fill([
                    'target' => '_self',
                    'icon_class' => null,
                    'color' => null,
                    'parent_id' => null,
                    'order' => 24,
                ])->save();
            }

            

            
            
        }
    }
}