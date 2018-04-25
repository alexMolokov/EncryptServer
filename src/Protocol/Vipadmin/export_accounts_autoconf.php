<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.export_accounts_autoconf
 */
class export_accounts_autoconf extends \Protobuf\AbstractMessage
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
     * business_account_id required string = 2
     *
     * @var string
     */
    protected $business_account_id = null;

    /**
     * login_from optional string = 3
     *
     * @var string
     */
    protected $login_from = null;

    /**
     * login_to optional string = 4
     *
     * @var string
     */
    protected $login_to = null;

    /**
     * continue_from optional string = 5
     *
     * @var string
     */
    protected $continue_from = null;

    /**
     * with_keys optional bool = 6
     *
     * @var bool
     */
    protected $with_keys = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->with_keys = false;

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
    public function setBusinessAccountId($value)
    {
        $this->business_account_id = $value;
    }

    /**
     * Check if 'login_from' has a value
     *
     * @return bool
     */
    public function hasLoginFrom()
    {
        return $this->login_from !== null;
    }

    /**
     * Get 'login_from' value
     *
     * @return string
     */
    public function getLoginFrom()
    {
        return $this->login_from;
    }

    /**
     * Set 'login_from' value
     *
     * @param string $value
     */
    public function setLoginFrom($value = null)
    {
        $this->login_from = $value;
    }

    /**
     * Check if 'login_to' has a value
     *
     * @return bool
     */
    public function hasLoginTo()
    {
        return $this->login_to !== null;
    }

    /**
     * Get 'login_to' value
     *
     * @return string
     */
    public function getLoginTo()
    {
        return $this->login_to;
    }

    /**
     * Set 'login_to' value
     *
     * @param string $value
     */
    public function setLoginTo($value = null)
    {
        $this->login_to = $value;
    }

    /**
     * Check if 'continue_from' has a value
     *
     * @return bool
     */
    public function hasContinueFrom()
    {
        return $this->continue_from !== null;
    }

    /**
     * Get 'continue_from' value
     *
     * @return string
     */
    public function getContinueFrom()
    {
        return $this->continue_from;
    }

    /**
     * Set 'continue_from' value
     *
     * @param string $value
     */
    public function setContinueFrom($value = null)
    {
        $this->continue_from = $value;
    }

    /**
     * Check if 'with_keys' has a value
     *
     * @return bool
     */
    public function hasWithKeys()
    {
        return $this->with_keys !== null;
    }

    /**
     * Get 'with_keys' value
     *
     * @return bool
     */
    public function getWithKeys()
    {
        return $this->with_keys;
    }

    /**
     * Set 'with_keys' value
     *
     * @param bool $value
     */
    public function setWithKeys($value = null)
    {
        $this->with_keys = $value;
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

        if ( ! isset($values['business_account_id'])) {
            throw new \InvalidArgumentException('Field "business_account_id" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'login_from' => null,
            'login_to' => null,
            'continue_from' => null,
            'with_keys' => false
        ], $values);

        $message->setId($values['id']);
        $message->setBusinessAccountId($values['business_account_id']);
        $message->setLoginFrom($values['login_from']);
        $message->setLoginTo($values['login_to']);
        $message->setContinueFrom($values['continue_from']);
        $message->setWithKeys($values['with_keys']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'export_accounts_autoconf',
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
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'login_from',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'login_to',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'continue_from',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'with_keys',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
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
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\export_accounts_autoconf#id" (tag 1) is required but has no value.');
        }

        if ($this->business_account_id === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\export_accounts_autoconf#business_account_id" (tag 2) is required but has no value.');
        }

        if ($this->id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->id);
        }

        if ($this->business_account_id !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->business_account_id);
        }

        if ($this->login_from !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->login_from);
        }

        if ($this->login_to !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->login_to);
        }

        if ($this->continue_from !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->continue_from);
        }

        if ($this->with_keys !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->with_keys);
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

                $this->login_from = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->login_to = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->continue_from = $reader->readString($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->with_keys = $reader->readBool($stream);

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

        if ($this->login_from !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->login_from);
        }

        if ($this->login_to !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->login_to);
        }

        if ($this->continue_from !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->continue_from);
        }

        if ($this->with_keys !== null) {
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
        $this->login_from = null;
        $this->login_to = null;
        $this->continue_from = null;
        $this->with_keys = false;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\export_accounts_autoconf) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->business_account_id = ($message->business_account_id !== null) ? $message->business_account_id : $this->business_account_id;
        $this->login_from = ($message->login_from !== null) ? $message->login_from : $this->login_from;
        $this->login_to = ($message->login_to !== null) ? $message->login_to : $this->login_to;
        $this->continue_from = ($message->continue_from !== null) ? $message->continue_from : $this->continue_from;
        $this->with_keys = ($message->with_keys !== null) ? $message->with_keys : $this->with_keys;
    }


}
