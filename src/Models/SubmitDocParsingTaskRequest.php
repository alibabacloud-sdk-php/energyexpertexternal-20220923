<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;

class SubmitDocParsingTaskRequest extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var bool
     */
    public $needAnalyzeImg;
    protected $_name = [
        'fileName' => 'fileName',
        'fileUrl' => 'fileUrl',
        'folderId' => 'folderId',
        'needAnalyzeImg' => 'needAnalyzeImg',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileUrl) {
            $res['fileUrl'] = $this->fileUrl;
        }

        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }

        if (null !== $this->needAnalyzeImg) {
            $res['needAnalyzeImg'] = $this->needAnalyzeImg;
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileUrl'])) {
            $model->fileUrl = $map['fileUrl'];
        }

        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }

        if (isset($map['needAnalyzeImg'])) {
            $model->needAnalyzeImg = $map['needAnalyzeImg'];
        }

        return $model;
    }
}
