<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\MovieRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class MovieCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class MovieCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

private function getFieldsData($show = FALSE) {
        return [
[
                'name'=> 'movie_name',
                'label' => 'Movie name',
                'type'=> 'text'
            ],
            [
                'name' => 'release_year',
                'label' => 'Release year',
                'type' => 'number'
            ],
            [
                'name' =>'language',
                'label' =>'Language',
                'type' => 'text'
            ],
            [
                 'name' =>'is_age_restricted',
                 'label' =>'Age restricted',
                 'type' => 'boolean'
            ],

            [    // Select2Multiple = n-n relationship (with pivot table)
                'label'     => "Genres",
                'type'      => ($show ? "select": 'select2_multiple'),
                'name'      => 'genres', // the method that defines the relationship in your Model
// optional
                'entity'    => 'genres', // the method that defines the relationship in your Model
                'model'     => "App\Models\Genre", // foreign key model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
            ],
            [    // Select2Multiple = n-n relationship (with pivot table)
                            'label'     => "Producers",
                            'type'      => ($show ? "select": 'select2_multiple'),
                            'name'      => 'producers', // the method that defines the relationship in your Model
            // optional
                            'entity'    => 'producers', // the method that defines the relationship in your Model
                            'model'     => "App\Models\Producer", // foreign key model
                            'attribute' => 'last_name', // foreign key attribute that is shown to user
                            'pivot'     => true, // on create&update, do you need to add/delete pivot table entries?
                        ],
                        [
                                         'label' => "Movie Poster",
                                         'name' => "image",
                                         'type' => 'image',
                                         'crop' => true, // set to true to allow cropping, false to disable
                                         'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
                                     ],
        ];
    }
    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Movie::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/movie');
        CRUD::setEntityNameStrings('movie', 'movies');

        $this->crud->addFields($this->getFieldsData());
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(MovieRequest::class);

        //CRUD::field('id');
        CRUD::field('movie_name');
        CRUD::field('release_year');
        CRUD::field('language');
        CRUD::field('is_age_restricted');
        //CRUD::field('created_at');
        //CRUD::field('updated_at');

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
    protected function setupShowOperation()
    {
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData(TRUE));
    }
}
