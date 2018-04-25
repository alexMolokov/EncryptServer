<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.Filter
 */
class Filter extends \Protobuf\AbstractMessage
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
     * field optional int32 = 1
     *
     * @var int
     */
    protected $field = null;

    /**
     * filter_str optional string = 2
     *
     * @var string
     */
    protected $filter_str = null;

    /**
     * filter_from_int optional int32 = 3
     *
     * @var int
     */
    protected $filter_from_int = null;

    /**
     * filter_from_float optional float = 4
     *
     * @var float
     */
    protected $filter_from_float = null;

    /**
     * filter_to_int optional int32 = 5
     *
     * @var int
     */
    protected $filter_to_int = null;

    /**
     * filter_to_float optional float = 6
     *
     * @var float
     */
    protected $filter_to_float = null;

    /**
     * filter_date_from optional message = 7
     *
     * @var \EncryptServer\Protocol\Vipadmin\Date
     */
    protected $filter_date_from = null;

    /**
     * filter_date_to optional message = 8
     *
     * @var \EncryptServer\Protocol\Vipadmin\Date
     */
    protected $filter_date_to = null;

    /**
     * filter_checked optional bool = 9
     *
     * @var bool
     */
    protected $filter_checked = null;

    /**
     * filter_from_int64 optional int64 = 10
     *
     * @var int
     */
    protected $filter_from_int64 = null;

    /**
     * filter_to_int64 optional int64 = 11
     *
     * @var int
     */
    protected $filter_to_int64 = null;

    /**
     * Check if 'field' has a value
     *
     * @return bool
     */
    public function hasField()
    {
        return $this->field !== null;
    }

    /**
     * Get 'field' value
     *
     * @return int
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set 'field' value
     *
     * @param int $value
     */
    public function setField($value = null)
    {
        $this->field = $value;
    }

    /**
     * Check if 'filter_str' has a value
     *
     * @return bool
     */
    public function hasFilterStr()
    {
        return $this->filter_str !== null;
    }

    /**
     * Get 'filter_str' value
     *
     * @return string
     */
    public function getFilterStr()
    {
        return $this->filter_str;
    }

    /**
     * Set 'filter_str' value
     *
     * @param string $value
     */
    public function setFilterStr($value = null)
    {
        $this->filter_str = $value;
    }

    /**
     * Check if 'filter_from_int' has a value
     *
     * @return bool
     */
    public function hasFilterFromInt()
    {
        return $this->filter_from_int !== null;
    }

    /**
     * Get 'filter_from_int' value
     *
     * @return int
     */
    public function getFilterFromInt()
    {
        return $this->filter_from_int;
    }

    /**
     * Set 'filter_from_int' value
     *
     * @param int $value
     */
    public function setFilterFromInt($value = null)
    {
        $this->filter_from_int = $value;
    }

    /**
     * Check if 'filter_from_float' has a value
     *
     * @return bool
     */
    public function hasFilterFromFloat()
    {
        return $this->filter_from_float !== null;
    }

    /**
     * Get 'filter_from_float' value
     *
     * @return float
     */
    public function getFilterFromFloat()
    {
        return $this->filter_from_float;
    }

    /**
     * Set 'filter_from_float' value
     *
     * @param float $value
     */
    public function setFilterFromFloat($value = null)
    {
        $this->filter_from_float = $value;
    }

    /**
     * Check if 'filter_to_int' has a value
     *
     * @return bool
     */
    public function hasFilterToInt()
    {
        return $this->filter_to_int !== null;
    }

    /**
     * Get 'filter_to_int' value
     *
     * @return int
     */
    public function getFilterToInt()
    {
        return $this->filter_to_int;
    }

    /**
     * Set 'filter_to_int' value
     *
     * @param int $value
     */
    public function setFilterToInt($value = null)
    {
        $this->filter_to_int = $value;
    }

    /**
     * Check if 'filter_to_float' has a value
     *
     * @return bool
     */
    public function hasFilterToFloat()
    {
        return $this->filter_to_float !== null;
    }

    /**
     * Get 'filter_to_float' value
     *
     * @return float
     */
    public function getFilterToFloat()
    {
        return $this->filter_to_float;
    }

    /**
     * Set 'filter_to_float' value
     *
     * @param float $value
     */
    public function setFilterToFloat($value = null)
    {
        $this->filter_to_float = $value;
    }

    /**
     * Check if 'filter_date_from' has a value
     *
     * @return bool
     */
    public function hasFilterDateFrom()
    {
        return $this->filter_date_from !== null;
    }

    /**
     * Get 'filter_date_from' value
     *
     * @return \EncryptServer\Protocol\Vipadmin\Date
     */
    public function getFilterDateFrom()
    {
        return $this->filter_date_from;
    }

    /**
     * Set 'filter_date_from' value
     *
     * @param \EncryptServer\Protocol\Vipadmin\Date $value
     */
    public function setFilterDateFrom(\EncryptServer\Protocol\Vipadmin\Date $value = null)
    {
        $this->filter_date_from = $value;
    }

    /**
     * Check if 'filter_date_to' has a value
     *
     * @return bool
     */
    public function hasFilterDateTo()
    {
        return $this->filter_date_to !== null;
    }

    /**
     * Get 'filter_date_to' value
     *
     * @return \EncryptServer\Protocol\Vipadmin\Date
     */
    public function getFilterDateTo()
    {
        return $this->filter_date_to;
    }

    /**
     * Set 'filter_date_to' value
     *
     * @param \EncryptServer\Protocol\Vipadmin\Date $value
     */
    public function setFilterDateTo(\EncryptServer\Protocol\Vipadmin\Date $value = null)
    {
        $this->filter_date_to = $value;
    }

    /**
     * Check if 'filter_checked' has a value
     *
     * @return bool
     */
    public function hasFilterChecked()
    {
        return $this->filter_checked !== null;
    }

    /**
     * Get 'filter_checked' value
     *
     * @return bool
     */
    public function getFilterChecked()
    {
        return $this->filter_checked;
    }

    /**
     * Set 'filter_checked' value
     *
     * @param bool $value
     */
    public function setFilterChecked($value = null)
    {
        $this->filter_checked = $value;
    }

    /**
     * Check if 'filter_from_int64' has a value
     *
     * @return bool
     */
    public function hasFilterFromInt64()
    {
        return $this->filter_from_int64 !== null;
    }

    /**
     * Get 'filter_from_int64' value
     *
     * @return int
     */
    public function getFilterFromInt64()
    {
        return $this->filter_from_int64;
    }

    /**
     * Set 'filter_from_int64' value
     *
     * @param int $value
     */
    public function setFilterFromInt64($value = null)
    {
        $this->filter_from_int64 = $value;
    }

    /**
     * Check if 'filter_to_int64' has a value
     *
     * @return bool
     */
    public function hasFilterToInt64()
    {
        return $this->filter_to_int64 !== null;
    }

    /**
     * Get 'filter_to_int64' value
     *
     * @return int
     */
    public function getFilterToInt64()
    {
        return $this->filter_to_int64;
    }

    /**
     * Set 'filter_to_int64' value
     *
     * @param int $value
     */
    public function setFilterToInt64($value = null)
    {
        $this->filter_to_int64 = $value;
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
        $message = new self();
        $values  = array_merge([
            'field' => null,
            'filter_str' => null,
            'filter_from_int' => null,
            'filter_from_float' => null,
            'filter_to_int' => null,
            'filter_to_float' => null,
            'filter_date_from' => null,
            'filter_date_to' => null,
            'filter_checked' => null,
            'filter_from_int64' => null,
            'filter_to_int64' => null
        ], $values);

        $message->setField($values['field']);
        $message->setFilterStr($values['filter_str']);
        $message->setFilterFromInt($values['filter_from_int']);
        $message->setFilterFromFloat($values['filter_from_float']);
        $message->setFilterToInt($values['filter_to_int']);
        $message->setFilterToFloat($values['filter_to_float']);
        $message->setFilterDateFrom($values['filter_date_from']);
        $message->setFilterDateTo($values['filter_date_to']);
        $message->setFilterChecked($values['filter_checked']);
        $message->setFilterFromInt64($values['filter_from_int64']);
        $message->setFilterToInt64($values['filter_to_int64']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'Filter',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'field',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'filter_str',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'filter_from_int',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'filter_from_float',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'filter_to_int',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'filter_to_float',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_FLOAT(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'filter_date_from',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.Date'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'filter_date_to',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.Date'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'filter_checked',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'filter_from_int64',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'filter_to_int64',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
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

        if ($this->field !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->field);
        }

        if ($this->filter_str !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->filter_str);
        }

        if ($this->filter_from_int !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->filter_from_int);
        }

        if ($this->filter_from_float !== null) {
            $writer->writeVarint($stream, 37);
            $writer->writeFloat($stream, $this->filter_from_float);
        }

        if ($this->filter_to_int !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->filter_to_int);
        }

        if ($this->filter_to_float !== null) {
            $writer->writeVarint($stream, 53);
            $writer->writeFloat($stream, $this->filter_to_float);
        }

        if ($this->filter_date_from !== null) {
            $writer->writeVarint($stream, 58);
            $writer->writeVarint($stream, $this->filter_date_from->serializedSize($sizeContext));
            $this->filter_date_from->writeTo($context);
        }

        if ($this->filter_date_to !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeVarint($stream, $this->filter_date_to->serializedSize($sizeContext));
            $this->filter_date_to->writeTo($context);
        }

        if ($this->filter_checked !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeBool($stream, $this->filter_checked);
        }

        if ($this->filter_from_int64 !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeVarint($stream, $this->filter_from_int64);
        }

        if ($this->filter_to_int64 !== null) {
            $writer->writeVarint($stream, 88);
            $writer->writeVarint($stream, $this->filter_to_int64);
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

                $this->field = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->filter_str = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->filter_from_int = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->filter_from_float = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->filter_to_int = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 2);

                $this->filter_to_float = $reader->readFloat($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\Date();

                $this->filter_date_from = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\Date();

                $this->filter_date_to = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->filter_checked = $reader->readBool($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->filter_from_int64 = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->filter_to_int64 = $reader->readVarint($stream);

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

        if ($this->field !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->field);
        }

        if ($this->filter_str !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->filter_str);
        }

        if ($this->filter_from_int !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->filter_from_int);
        }

        if ($this->filter_from_float !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->filter_to_int !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->filter_to_int);
        }

        if ($this->filter_to_float !== null) {
            $size += 1;
            $size += 4;
        }

        if ($this->filter_date_from !== null) {
            $innerSize = $this->filter_date_from->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->filter_date_to !== null) {
            $innerSize = $this->filter_date_to->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->filter_checked !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->filter_from_int64 !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->filter_from_int64);
        }

        if ($this->filter_to_int64 !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->filter_to_int64);
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
        $this->field = null;
        $this->filter_str = null;
        $this->filter_from_int = null;
        $this->filter_from_float = null;
        $this->filter_to_int = null;
        $this->filter_to_float = null;
        $this->filter_date_from = null;
        $this->filter_date_to = null;
        $this->filter_checked = null;
        $this->filter_from_int64 = null;
        $this->filter_to_int64 = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\Filter) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->field = ($message->field !== null) ? $message->field : $this->field;
        $this->filter_str = ($message->filter_str !== null) ? $message->filter_str : $this->filter_str;
        $this->filter_from_int = ($message->filter_from_int !== null) ? $message->filter_from_int : $this->filter_from_int;
        $this->filter_from_float = ($message->filter_from_float !== null) ? $message->filter_from_float : $this->filter_from_float;
        $this->filter_to_int = ($message->filter_to_int !== null) ? $message->filter_to_int : $this->filter_to_int;
        $this->filter_to_float = ($message->filter_to_float !== null) ? $message->filter_to_float : $this->filter_to_float;
        $this->filter_date_from = ($message->filter_date_from !== null) ? $message->filter_date_from : $this->filter_date_from;
        $this->filter_date_to = ($message->filter_date_to !== null) ? $message->filter_date_to : $this->filter_date_to;
        $this->filter_checked = ($message->filter_checked !== null) ? $message->filter_checked : $this->filter_checked;
        $this->filter_from_int64 = ($message->filter_from_int64 !== null) ? $message->filter_from_int64 : $this->filter_from_int64;
        $this->filter_to_int64 = ($message->filter_to_int64 !== null) ? $message->filter_to_int64 : $this->filter_to_int64;
    }


}
