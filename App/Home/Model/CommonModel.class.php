<?php
use Think\Model;

class CommonModel extends Model {
    function strmark($str) {
        return md5(sha1(md5($str)));
    }
}