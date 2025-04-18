<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;
use GuzzleHttp\Psr7\Stream;

class SubmitDocExtractionTaskAdvanceRequest extends Model
{
    /**
     * @var string
     */
    public $extractType;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var Stream
     */
    public $fileUrlObject;

    /**
     * @var string
     */
    public $folderId;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'extractType' => 'extractType',
        'fileName' => 'fileName',
        'fileUrlObject' => 'fileUrl',
        'folderId' => 'folderId',
        'templateId' => 'templateId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extractType) {
            $res['extractType'] = $this->extractType;
        }

        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }

        if (null !== $this->fileUrlObject) {
            $res['fileUrl'] = $this->fileUrlObject;
        }

        if (null !== $this->folderId) {
            $res['folderId'] = $this->folderId;
        }

        if (null !== $this->templateId) {
            $res['templateId'] = $this->templateId;
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
        if (isset($map['extractType'])) {
            $model->extractType = $map['extractType'];
        }

        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }

        if (isset($map['fileUrl'])) {
            $model->fileUrlObject = $map['fileUrl'];
        }

        if (isset($map['folderId'])) {
            $model->folderId = $map['folderId'];
        }

        if (isset($map['templateId'])) {
            $model->templateId = $map['templateId'];
        }

        return $model;
    }
}
