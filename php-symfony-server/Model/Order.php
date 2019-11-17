<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Server\Model
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Produkt Katalog
 *
 * This API will be used by e-commerce users who wish to perform better.
 *
 * OpenAPI spec version: 1.0.1
 * Contact: apiteam@infoenter.com.br
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Server\Model;

use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class representing the Order model.
 *
 * @package Swagger\Server\Model
 * @author  Swagger Codegen team
 */
class Order 
{
        /**
     * @var int|null
     * @SerializedName("id")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $id;

    /**
     * @var int|null
     * @SerializedName("productId")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $productId;

    /**
     * @var int|null
     * @SerializedName("quantity")
     * @Assert\Type("int")
     * @Type("int")
     */
    protected $quantity;

    /**
     * @var \DateTime|null
     * @SerializedName("shipDate")
     * @Assert\DateTime()
     * @Type("DateTime")
     */
    protected $shipDate;

    /**
     * Order Status
     *
     * @var string|null
     * @SerializedName("status")
     * @Assert\Choice({ "placed", "approved", "delivered" })
     * @Assert\Type("string")
     * @Type("string")
     */
    protected $status;

    /**
     * @var bool|null
     * @SerializedName("complete")
     * @Assert\Type("bool")
     * @Type("bool")
     */
    protected $complete;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->productId = isset($data['productId']) ? $data['productId'] : null;
        $this->quantity = isset($data['quantity']) ? $data['quantity'] : null;
        $this->shipDate = isset($data['shipDate']) ? $data['shipDate'] : null;
        $this->status = isset($data['status']) ? $data['status'] : null;
        $this->complete = isset($data['complete']) ? $data['complete'] : false;
    }

    /**
     * Gets id.
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets id.
     *
     * @param int|null $id
     *
     * @return $this
     */
    public function setId($id = null)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Gets productId.
     *
     * @return int|null
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Sets productId.
     *
     * @param int|null $productId
     *
     * @return $this
     */
    public function setProductId($productId = null)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Sets quantity.
     *
     * @param int|null $quantity
     *
     * @return $this
     */
    public function setQuantity($quantity = null)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Gets shipDate.
     *
     * @return \DateTime|null
     */
    public function getShipDate()
    {
        return $this->shipDate;
    }

    /**
     * Sets shipDate.
     *
     * @param \DateTime|null $shipDate
     *
     * @return $this
     */
    public function setShipDate(\DateTime $shipDate = null)
    {
        $this->shipDate = $shipDate;

        return $this;
    }

    /**
     * Gets status.
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status.
     *
     * @param string|null $status  Order Status
     *
     * @return $this
     */
    public function setStatus($status = null)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Gets complete.
     *
     * @return bool|null
     */
    public function isComplete()
    {
        return $this->complete;
    }

    /**
     * Sets complete.
     *
     * @param bool|null $complete
     *
     * @return $this
     */
    public function setComplete($complete = null)
    {
        $this->complete = $complete;

        return $this;
    }
}


