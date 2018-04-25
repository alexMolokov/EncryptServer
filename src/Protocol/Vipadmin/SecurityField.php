<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.SecurityField
 */
class SecurityField extends \Protobuf\AbstractMessage
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
     * id required string = 1
     *
     * @var string
     */
    protected $id = null;

    /**
     * value_str optional string = 2
     *
     * @var string
     */
    protected $value_str = null;

    /**
     * value_bool optional bool = 3
     *
     * @var bool
     */
    protected $value_bool = null;

    /**
     * value_int optional int32 = 4
     *
     * @var int
     */
    protected $value_int = null;

    /**
     * value_field repeated message = 5
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    protected $value_field = null;

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
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set 'id' value
     *
     * @param string $value
     */
    public function setId($value)
    {
        $this->id = $value;
    }

    /**
     * Check if 'value_str' has a value
     *
     * @return bool
     */
    public function hasValueStr()
    {
        return $this->value_str !== null;
    }

    /**
     * Get 'value_str' value
     *
     * @return string
     */
    public function getValueStr()
    {
        return $this->value_str;
    }

    /**
     * Set 'value_str' value
     *
     * @param string $value
     */
    public function setValueStr($value = null)
    {
        $this->value_str = $value;
    }

    /**
     * Check if 'value_bool' has a value
     *
     * @return bool
     */
    public function hasValueBool()
    {
        return $this->value_bool !== null;
    }

    /**
     * Get 'value_bool' value
     *
     * @return bool
     */
    public function getValueBool()
    {
        return $this->value_bool;
    }

    /**
     * Set 'value_bool' value
     *
     * @param bool $value
     */
    public function setValueBool($value = null)
    {
        $this->value_bool = $value;
    }

    /**
     * Check if 'value_int' has a value
     *
     * @return bool
     */
    public function hasValueInt()
    {
        return $this->value_int !== null;
    }

    /**
     * Get 'value_int' value
     *
     * @return int
     */
    public function getValueInt()
    {
        return $this->value_int;
    }

    /**
     * Set 'value_int' value
     *
     * @param int $value
     */
    public function setValueInt($value = null)
    {
        $this->value_int = $value;
    }

    /**
     * Check if 'value_field' has a value
     *
     * @return bool
     */
    public function hasValueFieldList()
    {
        return $this->value_field !== null;
    }

    /**
     * Get 'value_field' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    public function getValueFieldList()
    {
        return $this->value_field;
    }

    /**
     * Set 'value_field' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField> $value
     */
    public function setValueFieldList(\Protobuf\Collection $value = null)
    {
        $this->value_field = $value;
    }

    /**
     * Add a new element to 'value_field'
     *
     * @param \EncryptServer\Protocol\Vipadmin\SecurityField $value
     */
    public function addValueField(\EncryptServer\Protocol\Vipadmin\SecurityField $value)
    {
        if ($this->value_field === null) {
            $this->value_field = new \Protobuf\MessageCollection();
        }

        $this->value_field->add($value);
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
            'value_str' => null,
            'value_bool' => null,
            'value_int' => null,
            'value_field' => []
        ], $values);

        $message->setId($values['id']);
        $message->setValueStr($values['value_str']);
        $message->setValueBool($values['value_bool']);
        $message->setValueInt($values['value_int']);

        foreach ($values['value_field'] as $item) {
            $message->addValueField($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SecurityField',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'value_str',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'value_bool',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'value_int',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'value_field',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.SecurityField'
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
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\SecurityField#id" (tag 1) is required but has no value.');
        }

        if ($this->id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->id);
        }

        if ($this->value_str !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->value_str);
        }

        if ($this->value_bool !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->value_bool);
        }

        if ($this->value_int !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->value_int);
        }

        if ($this->value_field !== null) {
            foreach ($this->value_field as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->id = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->value_str = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->value_bool = $reader->readBool($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->value_int = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\SecurityField();

                if ($this->value_field === null) {
                    $this->value_field = new \Protobuf\MessageCollection();
                }

                $this->value_field->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

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
            $size += $calculator->computeStringSize($this->id);
        }

        if ($this->value_str !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->value_str);
        }

        if ($this->value_bool !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->value_int !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->value_int);
        }

        if ($this->value_field !== null) {
            foreach ($this->value_field as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
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
        $this->value_str = null;
        $this->value_bool = null;
        $this->value_int = null;
        $this->value_field = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\SecurityField) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->value_str = ($message->value_str !== null) ? $message->value_str : $this->value_str;
        $this->value_bool = ($message->value_bool !== null) ? $message->value_bool : $this->value_bool;
        $this->value_int = ($message->value_int !== null) ? $message->value_int : $this->value_int;
        $this->value_field = ($message->value_field !== null) ? $message->value_field : $this->value_field;
    }


}
