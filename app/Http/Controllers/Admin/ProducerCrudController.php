<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProducerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProducerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProducerCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;


 private function getFieldsData($show = FALSE) {
             return [
             [
                'name'=> 'first_name',
                'label' => 'First name',
                'type'=> 'text'
                 ],
                    [
                    'name'=> 'last_name',
                    'label' => 'Last name',
                    'type'=> 'text'
                    ],
                [
                    'name'=> 'age',
                    'label' => 'Age',
                    'type'=> 'number'
                ],
                [
                  'name'=> 'nationality',
                   'label' => 'Nationality',
                    'type'=> 'text'
                    ],
             [
               'label' => "Producer picture",
               'name' => "image",
               'type' => 'image',
               'crop' => true, // set to true to allow cropping, false to disable
               'aspect_ratio' => 1, // omit or set to 0 to allow any aspect ratio
                     ]
             ];
             }


    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */


    public function setup()
    {
        CRUD::setModel(\App\Models\Producer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/producer');
        CRUD::setEntityNameStrings('producer', 'producers');

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
        CRUD::setValidation(ProducerRequest::class);

       // CRUD::field('id');
        CRUD::field('first_name');
        CRUD::field('last_name');
        CRUD::field('age');
        CRUD::field('nationality');
        //CRUD::field('created_at');
//        CRUD::field('updated_at');

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

}
