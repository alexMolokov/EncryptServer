<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.get_ba_parameters
 */
class get_ba_parameters extends \Protobuf\AbstractMessage
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
     * domain_id optional string = 3
     *
     * @var string
     */
    protected $domain_id = null;

    /**
     * target_business_account_id optional string = 4
     *
     * @var string
     */
    protected $target_business_account_id = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->business_account_id = '';
        $this->domain_id = '';

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
     * Check if 'target_business_account_id' has a value
     *
     * @return bool
     */
    public function hasTargetBusinessAccountId()
    {
        return $this->target_business_account_id !== null;
    }

    /**
     * Get 'target_business_account_id' value
     *
     * @return string
     */
    public function getTargetBusinessAccountId()
    {
        return $this->target_business_account_id;
    }

    /**
     * Set 'target_business_account_id' value
     *
     * @param string $value
     */
    public function setTargetBusinessAccountId($value = null)
    {
        $this->target_business_account_id = $value;
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
            'business_account_id' => '',
            'domain_id' => '',
            'target_business_account_id' => null
        ], $values);

        $message->setId($values['id']);
        $message->setBusinessAccountId($values['business_account_id']);
        $message->setDomainId($values['domain_id']);
        $message->setTargetBusinessAccountId($values['target_business_account_id']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'get_ba_parameters',
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
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => ''
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'domain_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => ''
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'target_business_account_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
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
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\get_ba_parameters#id" (tag 1) is required but has no value.');
        }

        if ($this->id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->id);
        }

        if ($this->business_account_id !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->business_account_id);
        }

        if ($this->domain_id !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->domain_id);
        }

        if ($this->target_business_account_id !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->target_business_account_id);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->domain_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->target_business_account_id = $reader->readString($stream);

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

        if ($this->domain_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->domain_id);
        }

        if ($this->target_business_account_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->target_business_account_id);
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
        $this->business_account_id = '';
        $this->domain_id = '';
        $this->target_business_account_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\get_ba_parameters) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->business_account_id = ($message->business_account_id !== null) ? $message->business_account_id : $this->business_account_id;
        $this->domain_id = ($message->domain_id !== null) ? $message->domain_id : $this->domain_id;
        $this->target_business_account_id = ($message->target_business_account_id !== null) ? $message->target_business_account_id : $this->target_business_account_id;
    }


}

