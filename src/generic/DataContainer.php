<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 11/7/2015
 * Time: 1:50 PM
 */

namespace hotelbeds\hotel_api_sdk\generic;

/**
 * Class FieldNotValid. No valid field exception.
 * @package hotelbeds\hotel_api_sdk\generic
 */
class FieldNotValid extends \Exception{}

/**
 * Class DataContainer This is a generic data container. Used for messages and model data classes, can contains set of
 * keys. Can get and set magically with magic methods.
 * @package hotelbeds\hotel_api_sdk\generic
 */
abstract class DataContainer
{
    /**
     * @var array Array of valid fields of container and its types
     */
    protected $validFields = [];

    /**
     * @var array Array of data of all valid fields.
     */
    protected $sdkFields = [];

    /**
     * @var bool True if you want DataContainter to create an object for fields with a class type.
     * It will call the constructor of the target class with the value from $sdkFields
     */
    protected $createObjectsOnGetter = false;

    /**
     * Setter magical method
     * @param $field string Name of field
     * @param $value mixed Value of field
     * @throws FieldNotValid Rise if field is not defined into validFields.
     * @throws \Exception Rise of general exception same as defined field type is incorrect.
     */
    public function __set($field, $value)
    {
        if (!empty($this->validFields) && !array_key_exists($field, $this->validFields))
            throw new FieldNotValid("$field not valid for this model");

        $type = $this->validFields[$field];

        if (empty($type))
            $this->sdkFields[$field] = $value;

        if (is_object($value)) {
            if (get_class($value) !== $type)
                throw new \Exception("Type error: Field $field needs $type class type: ".get_class($value));

            if (!is_a($value, $type))
                throw new \Exception("Type error: Field $field needs $type class type!");
        } else if (gettype($value) !== $type)
            throw new \Exception("Type error: Field $field needs $type type!");

        $this->sdkFields[$field] = $value;
    }

    /**
     * Getter magical method
     * @param $field string Field name
     * @return mixed Return a value of field
     * @throws FieldNotValid If field does exists
     */
    public function __get($field)
    {
        if (!empty($this->validFields) && !array_key_exists($field, $this->validFields))
            throw new FieldNotValid("$field not valid for this model");

        if (array_key_exists($field, $this->sdkFields)) {

            $value = $this->sdkFields[$field];
            $targetClass = $this->validFields[$field];

            // try to cast the object if specified
            if ($this->createObjectsOnGetter && class_exists($targetClass)
                // check if it is already created
                && (is_array($value) || get_class($value) != $targetClass)) {

                // if not we're gonna create it
                $newValue = new $targetClass($value);
                // and cache it for later access
                $this->__set($field, $newValue);

                return $newValue;
            }

            return $this->sdkFields[$field];
        }
        return null;
    }

    /**
     * Transform data fields into PHP-array structure
     *
     * @return array Data fields array structure
     */
    public function toArray()
    {
        return array_map(function($item) {
            if (is_object($item) && get_class($item) === "DateTime") {
                return $item->format("Y-m-d");
            } else {
                if ($item instanceof DataContainer) {
                    return $item->toArray();
                }
            }

            if (is_array($item))
            {
                return array_map(function($subItem) {
                    if ($subItem instanceof DataContainer) {
                        return $subItem->toArray();
                    }
                    return $subItem;
                }, $item);
            }

            return $item;
        }, $this->sdkFields);
    }

}