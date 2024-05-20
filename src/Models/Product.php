<?php

namespace Jsonlie\ChainantPreTransform\Models;

class Product extends Maps
{
    /*
     * 商户社会信用代码
     */
    protected $merchantId = 'companyIdNo';
    /*
     * 商品编码，长度小于等于32位
     */
    protected $productId = 'sku';
    /*
     * 商品版本，每个商品的编码+版本 唯一确认一个产品信息，必须为自然数，如"0","1","10"等
     */
    protected $productVersion = 'goodsVersion';
    /*
     * 商品名称，长度小于64位
     */
    protected $productName = 'goodsName';
    /*
     * 商品指导价格，单位分
     */
    protected $productPrice = 'goodsPrice';
    /*
     * 一级行业
     */
    protected $mainClass = 'mainClass';
    /*
     * 二级行业
     */
    protected $subClass = 'subClass';
    /*
     * 商品详情，长度小于256位
     */
    protected $productDetailInfo = 'detail';
    /*
     * 商品链接，长度小于256位
     */
    protected $productUrl = 'url';
    /*
     * 商品品牌，长度小于64位
     */
    protected $productBrand = 'goodsBrand';
    /*
     * 商品规格，长度小于256位
     */
    protected $productModel = 'goodsModel';

}