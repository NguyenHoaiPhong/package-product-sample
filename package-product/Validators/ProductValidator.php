<?php namespace Nhoma\Product\Validators;

use Foostart\Category\Library\Validators\FooValidator;
use Event;
use \LaravelAcl\Library\Validators\AbstractValidator;
use Nhoma\Product\Models\Product;

use Illuminate\Support\MessageBag as MessageBag;

class ProductValidator extends FooValidator
{

    protected $obj_product;

    public function __construct()
    {
        // add rules
        self::$rules = [
            'name' => ["required"],
            'price' => ["required"],
            'description' => ["required"],
        ];

        // set configs
        self::$configs = $this->loadConfigs();

        // model
        $this->obj_product = new Product();

        // language
        $this->lang_front = 'product-front';
        $this->lang_admin = 'product-admin';

        // event listening
        Event::listen('validating', function($input)
        {
            self::$messages = [
                'name.required'          => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.name')]),
                'price.required'      => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.price')]),
                'description.required'   => trans($this->lang_admin.'.errors.required', ['attribute' => trans($this->lang_admin.'.fields.description')]),
            ];
        });


    }

    /**
     *
     * @param ARRAY $input is form data
     * @return type
     */
    public function validate($input) {

        $flag = parent::validate($input);
        $this->errors = $this->errors ? $this->errors : new MessageBag();

        //Check length
        $_ln = self::$configs['length'];

        $params = [
            'name' => [
                'key' => 'name',
                'label' => trans($this->lang_admin.'.fields.name'),
                'min' => $_ln['name']['min'],
                'max' => $_ln['name']['max'],
            ],
            'price' => [
                'key' => 'price',
                'label' => trans($this->lang_admin.'.fields.price'),
                'min' => $_ln['price']['min'],
                'max' => $_ln['price']['max'],
            ],
            'description' => [
                'key' => 'description',
                'label' => trans($this->lang_admin.'.fields.description'),
                'min' => $_ln['description']['min'],
                'max' => $_ln['description']['max'],
            ],
        ];

        $flag = $this->isValidLength($input['name'], $params['name']) ? $flag : FALSE;
        $flag = $this->isValidLength($input['price'], $params['price']) ? $flag : FALSE;
        $flag = $this->isValidLength($input['description'], $params['description']) ? $flag : FALSE;

        return $flag;
    }


    /**
     * Load configuration
     * @return ARRAY $configs list of configurations
     */
    public function loadConfigs(){

        $configs = config('package-product');
        return $configs;
    }

}