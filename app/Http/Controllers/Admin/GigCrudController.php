<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GigRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class GigCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GigCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Gig::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/gig');
        CRUD::setEntityNameStrings('gig', 'gigs');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('id');
        CRUD::column('user_id');
        CRUD::column('user_name');
        CRUD::column('title');
        CRUD::column('feature_image');
        CRUD::column('review');
        CRUD::column('review_amount');
        CRUD::column('description');
        CRUD::column('features');
        CRUD::column('speciality');
        CRUD::column('category_id');
        CRUD::column('duration');
        CRUD::column('price');
        CRUD::column('posting_cost');
        CRUD::column('time_started');
        CRUD::column('created_at');
        CRUD::column('updated_at');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(GigRequest::class);

        CRUD::field('id');
        CRUD::field('user_id');
        CRUD::field('user_name');
        CRUD::field('title');
        CRUD::field('feature_image');
        CRUD::field('review');
        CRUD::field('review_amount');
        CRUD::field('description');
        CRUD::field('features');
        CRUD::field('speciality');
        CRUD::field('category_id');
        CRUD::field('duration');
        CRUD::field('price');
        CRUD::field('posting_cost');
        CRUD::field('time_started');
        CRUD::field('created_at');
        CRUD::field('updated_at');

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
