<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.server_parameters_user_search
 */
class server_parameters_user_search extends \Protobuf\AbstractMessage
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
     * fields repeated message = 1
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\search_field>
     */
    protected $fields = null;

    /**
     * enable_wildcard optional bool = 2
     *
     * @var bool
     */
    protected $enable_wildcard = null;

    /**
     * wildcard_min_length optional int32 = 3
     *
     * @var int
     */
    protected $wildcard_min_length = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->wildcard_min_length = '1';

        parent::__construct($stream, $configuration);
    }

    /**
     * Check if 'fields' has a value
     *
     * @return bool
     */
    public function hasFieldsList()
    {
        return $this->fields !== null;
    }

    /**
     * Get 'fields' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\search_field>
     */
    public function getFieldsList()
    {
        return $this->fields;
    }

    /**
     * Set 'fields' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\search_field> $value
     */
    public function setFieldsList(\Protobuf\Collection $value = null)
    {
        $this->fields = $value;
    }

    /**
     * Add a new element to 'fields'
     *
     * @param \EncryptServer\Protocol\Vipadmin\search_field $value
     */
    public function addFields(\EncryptServer\Protocol\Vipadmin\search_field $value)
    {
        if ($this->fields === null) {
            $this->fields = new \Protobuf\MessageCollection();
        }

        $this->fields->add($value);
    }

    /**
     * Check if 'enable_wildcard' has a value
     *
     * @return bool
     */
    public function hasEnableWildcard()
    {
        return $this->enable_wildcard !== null;
    }

    /**
     * Get 'enable_wildcard' value
     *
     * @return bool
     */
    public function getEnableWildcard()
    {
        return $this->enable_wildcard;
    }

    /**
     * Set 'enable_wildcard' value
     *
     * @param bool $value
     */
    public function setEnableWildcard($value = null)
    {
        $this->enable_wildcard = $value;
    }

    /**
     * Check if 'wildcard_min_length' has a value
     *
     * @return bool
     */
    public function hasWildcardMinLength()
    {
        return $this->wildcard_min_length !== null;
    }

    /**
     * Get 'wildcard_min_length' value
     *
     * @return int
     */
    public function getWildcardMinLength()
    {
        return $this->wildcard_min_length;
    }

    /**
     * Set 'wildcard_min_length' value
     *
     * @param int $value
     */
    public function setWildcardMinLength($value = null)
    {
        $this->wildcard_min_length = $value;
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
            'fields' => [],
            'enable_wildcard' => null,
            'wildcard_min_length' => '1'
        ], $values);

        $message->setEnableWildcard($values['enable_wildcard']);
        $message->setWildcardMinLength($values['wildcard_min_length']);

        foreach ($values['fields'] as $item) {
            $message->addFields($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'server_parameters_user_search',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'fields',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.search_field'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'enable_wildcard',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'wildcard_min_length',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => '1'
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

        if ($this->fields !== null) {
            foreach ($this->fields as $val) {
                $writer->writeVarint($stream, 10);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->enable_wildcard !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeBool($stream, $this->enable_wildcard);
        }

        if ($this->wildcard_min_length !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->wildcard_min_length);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\search_field();

                if ($this->fields === null) {
                    $this->fields = new \Protobuf\MessageCollection();
                }

                $this->fields->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->enable_wildcard = $reader->readBool($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->wildcard_min_length = $reader->readVarint($stream);

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

        if ($this->fields !== null) {
            foreach ($this->fields as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->enable_wildcard !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->wildcard_min_length !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->wildcard_min_length);
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
        $this->fields = null;
        $this->enable_wildcard = null;
        $this->wildcard_min_length = '1';
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\server_parameters_user_search) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->fields = ($message->fields !== null) ? $message->fields : $this->fields;
        $this->enable_wildcard = ($message->enable_wildcard !== null) ? $message->enable_wildcard : $this->enable_wildcard;
        $this->wildcard_min_length = ($message->wildcard_min_length !== null) ? $message->wildcard_min_length : $this->wildcard_min_length;
    }


}
