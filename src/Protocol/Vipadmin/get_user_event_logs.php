<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.get_user_event_logs
 */
class get_user_event_logs extends \Protobuf\AbstractMessage
{

    /**
     * @var \Protobuf\UnknownFieldSet
     */
    protected $unknownFieldSet = null;

    /**
     * @var \Protobuf\Extension\ExtensionFieldMap
     */
    protected $extensions = null;

    /**
     * id required int32 = 1
     *
     * @var int
     */
    protected $id = null;

    /**
     * domain_id optional string = 2
     *
     * @var string
     */
    protected $domain_id = null;

    /**
     * business_account_id optional string = 3
     *
     * @var string
     */
    protected $business_account_id = null;

    /**
     * filter repeated message = 4
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\Filter>
     */
    protected $filter = null;

    /**
     * items_limit optional int32 = 5
     *
     * @var int
     */
    protected $items_limit = null;

    /**
     * time_sort_order_inc optional bool = 6
     *
     * @var bool
     */
    protected $time_sort_order_inc = null;

    /**
     * offset optional int32 = 7
     *
     * @var int
     */
    protected $offset = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->time_sort_order_inc = true;

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'id' has a value
     *
     * @return bool
     */
    public function hasId()
    {
        return $this->id !== null;
    }

    /**
     * Get 'id' value
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set 'id' value
     *
     * @param int $value
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * Check if 'domain_id' has a value
     *
     * @return bool
     */
    public function hasDomainId()
    {
        return $this->domain_id !== null;
    }

    /**
     * Get 'domain_id' value
     *
     * @return string
     */
    public function getDomainId()
    {
        return $this->domain_id;
    }

    /**
     * Set 'domain_id' value
     *
     * @param string $value
     */
    public function setDomainId($value = null)
    {
        $this->domain_id = $value;
    }

    /**
     * Check if 'business_account_id' has a value
     *
     * @return bool
     */
    public function hasBusinessAccountId()
    {
        return $this->business_account_id !== null;
    }

    /**
     * Get 'business_account_id' value
     *
     * @return string
     */
    public function getBusinessAccountId()
    {
        return $this->business_account_id;
    }

    /**
     * Set 'business_account_id' value
     *
     * @param string $value
     */
    public function setBusinessAccountId($value = null)
    {
        $this->business_account_id = $value;
    }

    /**
     * Check if 'filter' has a value
     *
     * @return bool
     */
    public function hasFilterList()
    {
        return $this->filter !== null;
    }

    /**
     * Get 'filter' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\Filter>
     */
    public function getFilterList()
    {
        return $this->filter;
    }

    /**
     * Set 'filter' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\Filter> $value
     */
    public function setFilterList(\Protobuf\Collection $value = null)
    {
        $this->filter = $value;
    }

    /**
     * Add a new element to 'filter'
     *
     * @param \EncryptServer\Protocol\Vipadmin\Filter $value
     */
    public function addFilter(\EncryptServer\Protocol\Vipadmin\Filter $value)
    {
        if ($this->filter === null) {
            $this->filter = new \Protobuf\MessageCollection();
        }

        $this->filter->add($value);
    }

    /**
     * Check if 'items_limit' has a value
     *
     * @return bool
     */
    public function hasItemsLimit()
    {
        return $this->items_limit !== null;
    }

    /**
     * Get 'items_limit' value
     *
     * @return int
     */
    public function getItemsLimit()
    {
        return $this->items_limit;
    }

    /**
     * Set 'items_limit' value
     *
     * @param int $value
     */
    public function setItemsLimit($value = null)
    {
        $this->items_limit = $value;
    }

    /**
     * Check if 'time_sort_order_inc' has a value
     *
     * @return bool
     */
    public function hasTimeSortOrderInc()
    {
        return $this->time_sort_order_inc !== null;
    }

    /**
     * Get 'time_sort_order_inc' value
     *
     * @return bool
     */
    public function getTimeSortOrderInc()
    {
        return $this->time_sort_order_inc;
    }

    /**
     * Set 'time_sort_order_inc' value
     *
     * @param bool $value
     */
    public function setTimeSortOrderInc($value = null)
    {
        $this->time_sort_order_inc = $value;
    }

    /**
     * Check if 'offset' has a value
     *
     * @return bool
     */
    public function hasOffset()
    {
        return $this->offset !== null;
    }

    /**
     * Get 'offset' value
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set 'offset' value
     *
     * @param int $value
     */
    public function setOffset($value = null)
    {
        $this->offset = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function extensions()
    {
        if ( $this->extensions !== null) {
            return $this->extensions;
        }

        return $this->extensions = new \Protobuf\Extension\ExtensionFieldMap(__CLASS__);
    }

    /**
     * {@inheritdoc}
     */
    public function unknownFieldSet()
    {
        return $this->unknownFieldSet;
    }

    /**
     * {@inheritdoc}
     */
    public static function fromStream($stream, \Protobuf\Configuration $configuration = null)
    {
        return new self($stream, $configuration);
    }

    /**
     * {@inheritdoc}
     */
    public static function fromArray(array $values)
    {
        if ( ! isset($values['id'])) {
            throw new \InvalidArgumentException('Field "id" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'domain_id' => null,
            'business_account_id' => null,
            'filter' => [],
            'items_limit' => null,
            'time_sort_order_inc' => true,
            'offset' => null
        ], $values);

        $message->setId($values['id']);
        $message->setDomainId($values['domain_id']);
        $message->setBusinessAccountId($values['business_account_id']);
        $message->setItemsLimit($values['items_limit']);
        $message->setTimeSortOrderInc($values['time_sort_order_inc']);
        $message->setOffset($values['offset']);

        foreach ($values['filter'] as $item) {
            $message->addFilter($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'get_user_event_logs',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'domain_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'business_account_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'filter',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.Filter'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'items_limit',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'time_sort_order_inc',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => true
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'offset',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
            ],
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function toStream(\Protobuf\Configuration $configuration = null)
    {
        $config  = $configuration ?: \Protobuf\Configuration::getInstance();
        $context = $config->createWriteContext();
        $stream  = $context->getStream();

        $this->writeTo($context);
        $stream->seek(0);

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function writeTo(\Protobuf\WriteContext $context)
    {
        $stream      = $context->getStream();
        $writer      = $context->getWriter();
        $sizeContext = $context->getComputeSizeContext();

        if ($this->id === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\get_user_event_logs#id" (tag 1) is required but has no value.');
        }

        if ($this->id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->id);
        }

        if ($this->domain_id !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->domain_id);
        }

        if ($this->business_account_id !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->business_account_id);
        }

        if ($this->filter !== null) {
            foreach ($this->filter as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->items_limit !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->items_limit);
        }

        if ($this->time_sort_order_inc !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->time_sort_order_inc);
        }

        if ($this->offset !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->offset);
        }

        if ($this->extensions !== null) {
            $this->extensions->writeTo($context);
        }

        return $stream;
    }

    /**
     * {@inheritdoc}
     */
    public function readFrom(\Protobuf\ReadContext $context)
    {
        $reader = $context->getReader();
        $length = $context->getLength();
        $stream = $context->getStream();

        $limit = ($length !== null)
            ? ($stream->tell() + $length)
            : null;

        while ($limit === null || $stream->tell() < $limit) {

            if ($stream->eof()) {
                break;
            }

            $key  = $reader->readVarint($stream);
            $wire = \Protobuf\WireFormat::getTagWireType($key);
            $tag  = \Protobuf\WireFormat::getTagFieldNumber($key);

            if ($stream->eof()) {
                break;
            }

            if ($tag === 1) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->id = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->domain_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->business_account_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\Filter();

                if ($this->filter === null) {
                    $this->filter = new \Protobuf\MessageCollection();
                }

                $this->filter->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->items_limit = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->time_sort_order_inc = $reader->readBool($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->offset = $reader->readVarint($stream);

                continue;
            }

            $extensions = $context->getExtensionRegistry();
            $extension  = $extensions ? $extensions->findByNumber(__CLASS__, $tag) : null;

            if ($extension !== null) {
                $this->extensions()->add($extension, $extension->readFrom($context, $wire));

                continue;
            }

            if ($this->unknownFieldSet === null) {
                $this->unknownFieldSet = new \Protobuf\UnknownFieldSet();
            }

            $data    = $reader->readUnknown($stream, $wire);
            $unknown = new \Protobuf\Unknown($tag, $wire, $data);

            $this->unknownFieldSet->add($unknown);

        }
    }

    /**
     * {@inheritdoc}
     */
    public function serializedSize(\Protobuf\ComputeSizeContext $context)
    {
        $calculator = $context->getSizeCalculator();
        $size       = 0;

        if ($this->id !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->id);
        }

        if ($this->domain_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->domain_id);
        }

        if ($this->business_account_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->business_account_id);
        }

        if ($this->filter !== null) {
            foreach ($this->filter as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->items_limit !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->items_limit);
        }

        if ($this->time_sort_order_inc !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->offset !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->offset);
        }

        if ($this->extensions !== null) {
            $size += $this->extensions->serializedSize($context);
        }

        return $size;
    }

    /**
     * {@inheritdoc}
     */
    public function clear()
    {
        $this->id = null;
        $this->domain_id = null;
        $this->business_account_id = null;
        $this->filter = null;
        $this->items_limit = null;
        $this->time_sort_order_inc = true;
        $this->offset = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\get_user_event_logs) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->domain_id = ($message->domain_id !== null) ? $message->domain_id : $this->domain_id;
        $this->business_account_id = ($message->business_account_id !== null) ? $message->business_account_id : $this->business_account_id;
        $this->filter = ($message->filter !== null) ? $message->filter : $this->filter;
        $this->items_limit = ($message->items_limit !== null) ? $message->items_limit : $this->items_limit;
        $this->time_sort_order_inc = ($message->time_sort_order_inc !== null) ? $message->time_sort_order_inc : $this->time_sort_order_inc;
        $this->offset = ($message->offset !== null) ? $message->offset : $this->offset;
    }


}

