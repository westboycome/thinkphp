<?php
class UserModel extends CommonModel{
    
    protected $_scope = array(
        /* 
         * ‘命名范围的标识符’=>array(
         * '属性'=>'值'
         * 支持的方法有 where limit field order table having group distinct
         * )
         *  */
        'jige'=>array(
            'where'=>array(
                'score'=>array('egt',60),
            ),
            'order'=>'id sec',
            'limit'=>10
        ),
        'zidingyi'=>array(
            'field'=>'user_name,score',
            'limit'=>5
        )
    );
}