<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Smpn\V20190822\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 终端骚扰保护请求内容
 *
 * @method string getPhoneNumber() 获取电话号码
 * @method void setPhoneNumber(string $PhoneNumber) 设置电话号码
 */
class CHPRequest extends AbstractModel
{
    /**
     * @var string 电话号码
     */
    public $PhoneNumber;

    /**
     * @param string $PhoneNumber 电话号码
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }
    }
}
