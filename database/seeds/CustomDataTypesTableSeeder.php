
<?php
use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class CustomDataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'projects');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'projects',
                'display_name_singular' => 'Project',
                'display_name_plural' => 'Projects',
                'icon' => 'voyager-bag',
                'model_name' => 'App\Project',
                'policy_name' => null,
                'controller' => '',
                'generate_permissions' => 1,
                'description' => '',
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null}',
            ])->save();
        }
        

        $dataType = $this->dataType('slug', 'about');
        if (!$dataType->exists) {
            $dataType->fill([
                'name' => 'about',
                'slug' => 'about',
                'display_name_singular' => 'About',
                'display_name_plural' => 'About',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\About',
                'controller' => '',
                'generate_permissions' => 1,
                'server_side' => 1,
                'description' => '',
                'details' => '{"order_column":null,"order_display_column":null}',
            ])->save();
        }
       
    }
    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
