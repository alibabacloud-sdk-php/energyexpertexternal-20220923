<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\GetGwpInventorySummaryResponseBody\data\items;

class data extends Model
{
    /**
     * @var items[]
     */
    public $items;

    /**
     * @var float
     */
    public $quantity;

    /**
     * @var int
     */
    public $resultGenerateTime;

    /**
     * @var string
     */
    public $unit;
    protected $_name = [
        'items' => 'items',
        'quantity' => 'quantity',
        'resultGenerateTime' => 'resultGenerateTime',
        'unit' => 'unit',
    ];

    public function validate()
    {
        if (\is_array($this->items)) {
            Model::validateArray($this->items);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->items) {
            if (\is_array($this->items)) {
                $res['items'] = [];
                $n1 = 0;
                foreach ($this->items as $item1) {
                    $res['items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->quantity) {
            $res['quantity'] = $this->quantity;
        }

        if (null !== $this->resultGenerateTime) {
            $res['resultGenerateTime'] = $this->resultGenerateTime;
        }

        if (null !== $this->unit) {
            $res['unit'] = $this->unit;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['items'])) {
            if (!empty($map['items'])) {
                $model->items = [];
                $n1 = 0;
                foreach ($map['items'] as $item1) {
                    $model->items[$n1++] = items::fromMap($item1);
                }
            }
        }

        if (isset($map['quantity'])) {
            $model->quantity = $map['quantity'];
        }

        if (isset($map['resultGenerateTime'])) {
            $model->resultGenerateTime = $map['resultGenerateTime'];
        }

        if (isset($map['unit'])) {
            $model->unit = $map['unit'];
        }

        return $model;
    }
}
