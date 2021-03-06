<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.ba_dynamic_group
 */
class ba_dynamic_group extends \Protobuf\AbstractMessage
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
     * business_account_id optional string = 2
     *
     * @var string
     */
    protected $business_account_id = null;

    /**
     * operation optional int32 = 3
     *
     * @var int
     */
    protected $operation = null;

    /**
     * group_id optional string = 4
     *
     * @var string
     */
    protected $group_id = null;

    /**
     * group_name optional string = 5
     *
     * @var string
     */
    protected $group_name = null;

    /**
     * remove_from_contactlists optional bool = 6
     *
     * @var bool
     */
    protected $remove_from_contactlists = null;

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
     * Check if 'operation' has a value
     *
     * @return bool
     */
    public function hasOperation()
    {
        return $this->operation !== null;
    }

    /**
     * Get 'operation' value
     *
     * @return int
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * Set 'operation' value
     *
     * @param int $value
     */
    public function setOperation($value = null)
    {
        $this->operation = $value;
    }

    /**
     * Check if 'group_id' has a value
     *
     * @return bool
     */
    public function hasGroupId()
    {
        return $this->group_id !== null;
    }

    /**
     * Get 'group_id' value
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->group_id;
    }

    /**
     * Set 'group_id' value
     *
     * @param string $value
     */
    public function setGroupId($value = null)
    {
        $this->group_id = $value;
    }

    /**
     * Check if 'group_name' has a value
     *
     * @return bool
     */
    public function hasGroupName()
    {
        return $this->group_name !== null;
    }

    /**
     * Get 'group_name' value
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Set 'group_name' value
     *
     * @param string $value
     */
    public function setGroupName($value = null)
    {
        $this->group_name = $value;
    }

    /**
     * Check if 'remove_from_contactlists' has a value
     *
     * @return bool
     */
    public function hasRemoveFromContactlists()
    {
        return $this->remove_from_contactlists !== null;
    }

    /**
     * Get 'remove_from_contactlists' value
     *
     * @return bool
     */
    public function getRemoveFromContactlists()
    {
        return $this->remove_from_contactlists;
    }

    /**
     * Set 'remove_from_contactlists' value
     *
     * @param bool $value
     */
    public function setRemoveFromContactlists($value = null)
    {
        $this->remove_from_contactlists = $value;
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
            'business_account_id' => null,
            'operation' => null,
            'group_id' => null,
            'group_name' => null,
            'remove_from_contactlists' => null
        ], $values);

        $message->setId($values['id']);
        $message->setBusinessAccountId($values['business_account_id']);
        $message->setOperation($values['operation']);
        $message->setGroupId($values['group_id']);
        $message->setGroupName($values['group_name']);
        $message->setRemoveFromContactlists($values['remove_from_contactlists']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ba_dynamic_group',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'business_account_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'operation',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'group_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'group_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'remove_from_contactlists',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
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
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\ba_dynamic_group#id" (tag 1) is required but has no value.');
        }

        if ($this->id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->id);
        }

        if ($this->business_account_id !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->business_account_id);
        }

        if ($this->operation !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->operation);
        }

        if ($this->group_id !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->group_id);
        }

        if ($this->group_name !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->group_name);
        }

        if ($this->remove_from_contactlists !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->remove_from_contactlists);
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

                $this->business_account_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->operation = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->group_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->group_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->remove_from_contactlists = $reader->readBool($stream);

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

        if ($this->business_account_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->business_account_id);
        }

        if ($this->operation !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->operation);
        }

        if ($this->group_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->group_id);
        }

        if ($this->group_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->group_name);
        }

        if ($this->remove_from_contactlists !== null) {
            $size += 1;
            $size += 1;
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
        $this->business_account_id = null;
        $this->operation = null;
        $this->group_id = null;
        $this->group_name = null;
        $this->remove_from_contactlists = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\ba_dynamic_group) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->business_account_id = ($message->business_account_id !== null) ? $message->business_account_id : $this->business_account_id;
        $this->operation = ($message->operation !== null) ? $message->operation : $this->operation;
        $this->group_id = ($message->group_id !== null) ? $message->group_id : $this->group_id;
        $this->group_name = ($message->group_name !== null) ? $message->group_name : $this->group_name;
        $this->remove_from_contactlists = ($message->remove_from_contactlists !== null) ? $message->remove_from_contactlists : $this->remove_from_contactlists;
    }


}

