<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : auth.proto
 */


namespace EncryptServer\Protocol\Auth;

/**
 * Protobuf message : encryptserver.auth_set_online_mode
 */
class auth_set_online_mode extends \Protobuf\AbstractMessage
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
     * online_mode required bool = 1
     *
     * @var bool
     */
    protected $online_mode = null;

    /**
     * business_account optional string = 2
     *
     * @var string
     */
    protected $business_account = null;

    /**
     * change_keys_forbidden optional bool = 3
     *
     * @var bool
     */
    protected $change_keys_forbidden = null;

    /**
     * Check if 'online_mode' has a value
     *
     * @return bool
     */
    public function hasOnlineMode()
    {
        return $this->online_mode !== null;
    }

    /**
     * Get 'online_mode' value
     *
     * @return bool
     */
    public function getOnlineMode()
    {
        return $this->online_mode;
    }

    /**
     * Set 'online_mode' value
     *
     * @param bool $value
     */
    public function setOnlineMode($value)
    {
        $this->online_mode = $value;
    }

    /**
     * Check if 'business_account' has a value
     *
     * @return bool
     */
    public function hasBusinessAccount()
    {
        return $this->business_account !== null;
    }

    /**
     * Get 'business_account' value
     *
     * @return string
     */
    public function getBusinessAccount()
    {
        return $this->business_account;
    }

    /**
     * Set 'business_account' value
     *
     * @param string $value
     */
    public function setBusinessAccount($value = null)
    {
        $this->business_account = $value;
    }

    /**
     * Check if 'change_keys_forbidden' has a value
     *
     * @return bool
     */
    public function hasChangeKeysForbidden()
    {
        return $this->change_keys_forbidden !== null;
    }

    /**
     * Get 'change_keys_forbidden' value
     *
     * @return bool
     */
    public function getChangeKeysForbidden()
    {
        return $this->change_keys_forbidden;
    }

    /**
     * Set 'change_keys_forbidden' value
     *
     * @param bool $value
     */
    public function setChangeKeysForbidden($value = null)
    {
        $this->change_keys_forbidden = $value;
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
        if ( ! isset($values['online_mode'])) {
            throw new \InvalidArgumentException('Field "online_mode" (tag 1) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'business_account' => null,
            'change_keys_forbidden' => null
        ], $values);

        $message->setOnlineMode($values['online_mode']);
        $message->setBusinessAccount($values['business_account']);
        $message->setChangeKeysForbidden($values['change_keys_forbidden']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'auth_set_online_mode',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'online_mode',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'business_account',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'change_keys_forbidden',
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

        if ($this->online_mode === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Auth\\auth_set_online_mode#online_mode" (tag 1) is required but has no value.');
        }

        if ($this->online_mode !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeBool($stream, $this->online_mode);
        }

        if ($this->business_account !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->business_account);
        }

        if ($this->change_keys_forbidden !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeBool($stream, $this->change_keys_forbidden);
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
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->online_mode = $reader->readBool($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->business_account = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->change_keys_forbidden = $reader->readBool($stream);

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

        if ($this->online_mode !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->business_account !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->business_account);
        }

        if ($this->change_keys_forbidden !== null) {
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
        $this->online_mode = null;
        $this->business_account = null;
        $this->change_keys_forbidden = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Auth\auth_set_online_mode) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->online_mode = ($message->online_mode !== null) ? $message->online_mode : $this->online_mode;
        $this->business_account = ($message->business_account !== null) ? $message->business_account : $this->business_account;
        $this->change_keys_forbidden = ($message->change_keys_forbidden !== null) ? $message->change_keys_forbidden : $this->change_keys_forbidden;
    }


}

