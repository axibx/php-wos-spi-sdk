<?php

namespace Com\Weimob\Cloud\Spi\WeimobCrm;

use Com\Weimob\Cloud\Spi\Common\PaasResponseCode;

/**
 * @id 507
 * @author weimobcloud
 * @create 2022年11月16日
 */
interface PaasWeimobCrmGoodsQuerySimpleBaseGoodsInfoListService
{
    const specType = 'wos';

    public function execute(WeimobCrmGoodsQuerySimpleBaseGoodsInfoListRequest $request) : WeimobCrmGoodsQuerySimpleBaseGoodsInfoListResponse;
}

class WeimobCrmGoodsQuerySimpleBaseGoodsInfoListRequest implements \JsonSerializable
{
    /**
    * 商业操作系统ID
    * @var int
    */
    private $bosId;

    /**
    * 全局唯一的扩展点
    * @var string
    */
    private $actionKey;

    /**
    * 功能集ID
    * @var int
    */
    private $functionId;

    /**
    * 组织结构节点ID
    * @var int
    */
    private $vid;

    /**
    * 	组织结构节点类型
    * @var int
    */
    private $vType;

    /**
    * @var WeimobCrmGoodsQuerySimpleBaseGoodsInfoListParam
    */
    private $params;

    /**
    * @param int $bosId
    */
    public function setBosId(?int $bosId): void
    {
        $this->bosId = $bosId;
    }

    /**
    * @return int
    */
    public function getBosId(): ?int
    {
        return $this->bosId;
    }

    /**
    * @param string $actionKey
    */
    public function setActionKey(?string $actionKey): void
    {
        $this->actionKey = $actionKey;
    }

    /**
    * @return string
    */
    public function getActionKey(): ?string
    {
        return $this->actionKey;
    }

    /**
    * @param int $functionId
    */
    public function setFunctionId(?int $functionId): void
    {
        $this->functionId = $functionId;
    }

    /**
    * @return int
    */
    public function getFunctionId(): ?int
    {
        return $this->functionId;
    }

    /**
    * @param int $vid
    */
    public function setVid(?int $vid): void
    {
        $this->vid = $vid;
    }

    /**
    * @return int
    */
    public function getVid(): ?int
    {
        return $this->vid;
    }

    /**
    * @param int $vType
    */
    public function setVType(?int $vType): void
    {
        $this->vType = $vType;
    }

    /**
    * @return int
    */
    public function getVType(): ?int
    {
        return $this->vType;
    }

    /**
    * @param WeimobCrmGoodsQuerySimpleBaseGoodsInfoListParam $param
    */
    public function setParam(?WeimobCrmGoodsQuerySimpleBaseGoodsInfoListParam $param): void
    {
        $this->param = $param;
    }

    /**
    * @return WeimobCrmGoodsQuerySimpleBaseGoodsInfoListParam
    */
    public function getParam(): ?WeimobCrmGoodsQuerySimpleBaseGoodsInfoListParam
    {
        return $this->param;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCrmGoodsQuerySimpleBaseGoodsInfoListParam implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}


class WeimobCrmGoodsQuerySimpleBaseGoodsInfoListResponse implements \JsonSerializable
{
    /**
    * 请求返回的对象
    * @var PaasResponseCode
    */
    private $code;

    /**
    * 请求返回的数据
    * @var WeimobCrmGoodsQuerySimpleBaseGoodsInfoListData
    */
    private $data;

    /**
    * @return int
    */
    public function getCode(): ?PaasResponseCode
    {
        return $this->code;
    }

    /**
    * @param PaasResponseCode $code
    */
    public function setCode(?PaasResponseCode $code): void
    {
        $this->code = $code;
    }

    /**
    * @return WeimobCrmGoodsQuerySimpleBaseGoodsInfoListData
    */
    public function getData(): ?WeimobCrmGoodsQuerySimpleBaseGoodsInfoListData
    {
        return $this->data;
    }

    /**
    * @param WeimobCrmGoodsQuerySimpleBaseGoodsInfoListData $data
    */
    public function setData(?WeimobCrmGoodsQuerySimpleBaseGoodsInfoListData $data): void
    {
        $this->data = $data;
    }

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

class WeimobCrmGoodsQuerySimpleBaseGoodsInfoListData implements \JsonSerializable
{

    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}

