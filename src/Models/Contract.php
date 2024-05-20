<?php

namespace Jsonlie\ChainantPreTransform\Models;

class Contract extends Maps
{
    /*
     * 订单id 长度小于50
     */
    protected $orderId = 'orderId_ts';
    /*
     * 商家的社会信用代码
     */
    protected $merchantId = 'companyIdNo';
    /*
     * 物流状态  0 : 其他  1 : 已发货  2 : 运输中  3 : 已签收
     */
    protected $logisticStatus = 'logisticStatus';
    protected $logisticCompanyName = '';
}