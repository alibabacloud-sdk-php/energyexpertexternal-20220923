<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Tea\Model;

class GetReductionProposalRequest extends Model
{
    /**
     * @description The enterprise code.
     *
     * This parameter is required.
     * @example C-20080808-1
     *
     * @var string
     */
    public $code;

    /**
     * @description The type of the data quality evaluation. 1 is DQI and 2 is DQR.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $dataQualityEvaluationType;

    /**
     * @description The product id.
     *
     * This parameter is required.
     * @example 1024
     *
     * @var int
     */
    public $productId;

    /**
     * @description Product type: 1 indicates that the carbon footprint of the product is requested, and 5 indicates that the carbon footprint of the supply chain is requested.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $productType;
    protected $_name = [
        'code'                      => 'code',
        'dataQualityEvaluationType' => 'dataQualityEvaluationType',
        'productId'                 => 'productId',
        'productType'               => 'productType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['code'] = $this->code;
        }
        if (null !== $this->dataQualityEvaluationType) {
            $res['dataQualityEvaluationType'] = $this->dataQualityEvaluationType;
        }
        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }
        if (null !== $this->productType) {
            $res['productType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetReductionProposalRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['code'])) {
            $model->code = $map['code'];
        }
        if (isset($map['dataQualityEvaluationType'])) {
            $model->dataQualityEvaluationType = $map['dataQualityEvaluationType'];
        }
        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }
        if (isset($map['productType'])) {
            $model->productType = $map['productType'];
        }

        return $model;
    }
}
