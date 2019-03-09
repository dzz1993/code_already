<?php
/**
 * Created by PhpStorm.
 * User: dongzhenzhen
 * Date: 2019-03-08
 * Time: 23:57
 */

namespace app\api\validate;

class IDMustBePositiveInt extends BaseValidate
{
    protected $rule = [
        'id'=>'required|isPositiveInt'
    ];
    /*自定义校验函数的四个参数：
    field->data是参数名->具体传入参数
    data是数组，rule先不管
     * */
    protected function isPositiveInt($value,$rule="",$data="",$field="")
    {
            if(is_numeric($value) && is_int($value+0) && ($value+0)>0){
                return true;
            }
            else{
                return $field."必须是正整数";
            }
    }
}