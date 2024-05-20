<?php

namespace Jsonlie\ChainantPreTransform\Models;

abstract class Maps
{

    public function transform($data){
        $form = [];
        $properties = get_class_vars(self::class);
        foreach($properties as $property => $property_val){
            if(!isset($data[$property_val])){
                throw new \Exception($property_val.' 属性不能为空');
            }
            $form[$property] = $data[$property_val];
        }

        return $form;
    }

}