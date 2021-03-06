<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.business_account_short
 */
class business_account_short extends \Protobuf\AbstractMessage
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
     * name optional string = 2
     *
     * @var string
     */
    protected $name = null;

    /**
     * owner optional string = 3
     *
     * @var string
     */
    protected $owner = null;

    /**
     * blocked optional bool = 4
     *
     * @var bool
     */
    protected $blocked = null;

    /**
     * ldap_base_dn optional string = 6
     *
     * @var string
     */
    protected $ldap_base_dn = null;

    /**
     * user_limit optional int32 = 7
     *
     * @var int
     */
    protected $user_limit = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->blocked = false;

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
     * Check if 'name' has a value
     *
     * @return bool
     */
    public function hasName()
    {
        return $this->name !== null;
    }

    /**
     * Get 'name' value
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set 'name' value
     *
     * @param string $value
     */
    public function setName($value = null)
    {
        $this->name = $value;
    }

    /**
     * Check if 'owner' has a value
     *
     * @return bool
     */
    public function hasOwner()
    {
        return $this->owner !== null;
    }

    /**
     * Get 'owner' value
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set 'owner' value
     *
     * @param string $value
     */
    public function setOwner($value = null)
    {
        $this->owner = $value;
    }

    /**
     * Check if 'blocked' has a value
     *
     * @return bool
     */
    public function hasBlocked()
    {
        return $this->blocked !== null;
    }

    /**
     * Get 'blocked' value
     *
     * @return bool
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * Set 'blocked' value
     *
     * @param bool $value
     */
    public function setBlocked($value = null)
    {
        $this->blocked = $value;
    }

    /**
     * Check if 'ldap_base_dn' has a value
     *
     * @return bool
     */
    public function hasLdapBaseDn()
    {
        return $this->ldap_base_dn !== null;
    }

    /**
     * Get 'ldap_base_dn' value
     *
     * @return string
     */
    public function getLdapBaseDn()
    {
        return $this->ldap_base_dn;
    }

    /**
     * Set 'ldap_base_dn' value
     *
     * @param string $value
     */
    public function setLdapBaseDn($value = null)
    {
        $this->ldap_base_dn = $value;
    }

    /**
     * Check if 'user_limit' has a value
     *
     * @return bool
     */
    public function hasUserLimit()
    {
        return $this->user_limit !== null;
    }

    /**
     * Get 'user_limit' value
     *
     * @return int
     */
    public function getUserLimit()
    {
        return $this->user_limit;
    }

    /**
     * Set 'user_limit' value
     *
     * @param int $value
     */
    public function setUserLimit($value = null)
    {
        $this->user_limit = $value;
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
            'name' => null,
            'owner' => null,
            'blocked' => false,
            'ldap_base_dn' => null,
            'user_limit' => null
        ], $values);

        $message->setId($values['id']);
        $message->setName($values['name']);
        $message->setOwner($values['owner']);
        $message->setBlocked($values['blocked']);
        $message->setLdapBaseDn($values['ldap_base_dn']);
        $message->setUserLimit($values['user_limit']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'business_account_short',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'owner',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'blocked',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'default_value' => false
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'ldap_base_dn',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'user_limit',
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
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\business_account_short#id" (tag 1) is required but has no value.');
        }

        if ($this->id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->id);
        }

        if ($this->name !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->name);
        }

        if ($this->owner !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->owner);
        }

        if ($this->blocked !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeBool($stream, $this->blocked);
        }

        if ($this->ldap_base_dn !== null) {
            $writer->writeVarint($stream, 50);
            $writer->writeString($stream, $this->ldap_base_dn);
        }

        if ($this->user_limit !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->user_limit);
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

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->owner = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->blocked = $reader->readBool($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ldap_base_dn = $reader->readString($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->user_limit = $reader->readVarint($stream);

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

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->owner !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->owner);
        }

        if ($this->blocked !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->ldap_base_dn !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ldap_base_dn);
        }

        if ($this->user_limit !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->user_limit);
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
        $this->name = null;
        $this->owner = null;
        $this->blocked = false;
        $this->ldap_base_dn = null;
        $this->user_limit = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\business_account_short) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->name = ($message->name !== null) ? $message->name : $this->name;
        $this->owner = ($message->owner !== null) ? $message->owner : $this->owner;
        $this->blocked = ($message->blocked !== null) ? $message->blocked : $this->blocked;
        $this->ldap_base_dn = ($message->ldap_base_dn !== null) ? $message->ldap_base_dn : $this->ldap_base_dn;
        $this->user_limit = ($message->user_limit !== null) ? $message->user_limit : $this->user_limit;
    }


}

