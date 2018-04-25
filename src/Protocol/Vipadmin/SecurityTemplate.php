<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.SecurityTemplate
 */
class SecurityTemplate extends \Protobuf\AbstractMessage
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
     * id optional string = 1
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
     * permissions repeated message = 3
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    protected $permissions = null;

    /**
     * lock repeated message = 4
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    protected $lock = null;

    /**
     * autologout repeated message = 5
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    protected $autologout = null;

    /**
     * fake_secret_phrase repeated message = 6
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    protected $fake_secret_phrase = null;

    /**
     * security_fields repeated message = 7
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    protected $security_fields = null;

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
    public function setId($value = null)
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
     * Check if 'permissions' has a value
     *
     * @return bool
     */
    public function hasPermissionsList()
    {
        return $this->permissions !== null;
    }

    /**
     * Get 'permissions' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    public function getPermissionsList()
    {
        return $this->permissions;
    }

    /**
     * Set 'permissions' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField> $value
     */
    public function setPermissionsList(\Protobuf\Collection $value = null)
    {
        $this->permissions = $value;
    }

    /**
     * Add a new element to 'permissions'
     *
     * @param \EncryptServer\Protocol\Vipadmin\SecurityField $value
     */
    public function addPermissions(\EncryptServer\Protocol\Vipadmin\SecurityField $value)
    {
        if ($this->permissions === null) {
            $this->permissions = new \Protobuf\MessageCollection();
        }

        $this->permissions->add($value);
    }

    /**
     * Check if 'lock' has a value
     *
     * @return bool
     */
    public function hasLockList()
    {
        return $this->lock !== null;
    }

    /**
     * Get 'lock' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    public function getLockList()
    {
        return $this->lock;
    }

    /**
     * Set 'lock' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField> $value
     */
    public function setLockList(\Protobuf\Collection $value = null)
    {
        $this->lock = $value;
    }

    /**
     * Add a new element to 'lock'
     *
     * @param \EncryptServer\Protocol\Vipadmin\SecurityField $value
     */
    public function addLock(\EncryptServer\Protocol\Vipadmin\SecurityField $value)
    {
        if ($this->lock === null) {
            $this->lock = new \Protobuf\MessageCollection();
        }

        $this->lock->add($value);
    }

    /**
     * Check if 'autologout' has a value
     *
     * @return bool
     */
    public function hasAutologoutList()
    {
        return $this->autologout !== null;
    }

    /**
     * Get 'autologout' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    public function getAutologoutList()
    {
        return $this->autologout;
    }

    /**
     * Set 'autologout' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField> $value
     */
    public function setAutologoutList(\Protobuf\Collection $value = null)
    {
        $this->autologout = $value;
    }

    /**
     * Add a new element to 'autologout'
     *
     * @param \EncryptServer\Protocol\Vipadmin\SecurityField $value
     */
    public function addAutologout(\EncryptServer\Protocol\Vipadmin\SecurityField $value)
    {
        if ($this->autologout === null) {
            $this->autologout = new \Protobuf\MessageCollection();
        }

        $this->autologout->add($value);
    }

    /**
     * Check if 'fake_secret_phrase' has a value
     *
     * @return bool
     */
    public function hasFakeSecretPhraseList()
    {
        return $this->fake_secret_phrase !== null;
    }

    /**
     * Get 'fake_secret_phrase' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    public function getFakeSecretPhraseList()
    {
        return $this->fake_secret_phrase;
    }

    /**
     * Set 'fake_secret_phrase' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField> $value
     */
    public function setFakeSecretPhraseList(\Protobuf\Collection $value = null)
    {
        $this->fake_secret_phrase = $value;
    }

    /**
     * Add a new element to 'fake_secret_phrase'
     *
     * @param \EncryptServer\Protocol\Vipadmin\SecurityField $value
     */
    public function addFakeSecretPhrase(\EncryptServer\Protocol\Vipadmin\SecurityField $value)
    {
        if ($this->fake_secret_phrase === null) {
            $this->fake_secret_phrase = new \Protobuf\MessageCollection();
        }

        $this->fake_secret_phrase->add($value);
    }

    /**
     * Check if 'security_fields' has a value
     *
     * @return bool
     */
    public function hasSecurityFieldsList()
    {
        return $this->security_fields !== null;
    }

    /**
     * Get 'security_fields' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField>
     */
    public function getSecurityFieldsList()
    {
        return $this->security_fields;
    }

    /**
     * Set 'security_fields' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\SecurityField> $value
     */
    public function setSecurityFieldsList(\Protobuf\Collection $value = null)
    {
        $this->security_fields = $value;
    }

    /**
     * Add a new element to 'security_fields'
     *
     * @param \EncryptServer\Protocol\Vipadmin\SecurityField $value
     */
    public function addSecurityFields(\EncryptServer\Protocol\Vipadmin\SecurityField $value)
    {
        if ($this->security_fields === null) {
            $this->security_fields = new \Protobuf\MessageCollection();
        }

        $this->security_fields->add($value);
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
            'id' => null,
            'name' => null,
            'permissions' => [],
            'lock' => [],
            'autologout' => [],
            'fake_secret_phrase' => [],
            'security_fields' => []
        ], $values);

        $message->setId($values['id']);
        $message->setName($values['name']);

        foreach ($values['permissions'] as $item) {
            $message->addPermissions($item);
        }

        foreach ($values['lock'] as $item) {
            $message->addLock($item);
        }

        foreach ($values['autologout'] as $item) {
            $message->addAutologout($item);
        }

        foreach ($values['fake_secret_phrase'] as $item) {
            $message->addFakeSecretPhrase($item);
        }

        foreach ($values['security_fields'] as $item) {
            $message->addSecurityFields($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'SecurityTemplate',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'permissions',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.SecurityField'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'lock',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.SecurityField'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'autologout',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.SecurityField'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'fake_secret_phrase',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.SecurityField'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'security_fields',
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

        if ($this->id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->id);
        }

        if ($this->name !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->name);
        }

        if ($this->permissions !== null) {
            foreach ($this->permissions as $val) {
                $writer->writeVarint($stream, 26);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->lock !== null) {
            foreach ($this->lock as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->autologout !== null) {
            foreach ($this->autologout as $val) {
                $writer->writeVarint($stream, 42);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->fake_secret_phrase !== null) {
            foreach ($this->fake_secret_phrase as $val) {
                $writer->writeVarint($stream, 50);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->security_fields !== null) {
            foreach ($this->security_fields as $val) {
                $writer->writeVarint($stream, 58);
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

                $this->name = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\SecurityField();

                if ($this->permissions === null) {
                    $this->permissions = new \Protobuf\MessageCollection();
                }

                $this->permissions->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\SecurityField();

                if ($this->lock === null) {
                    $this->lock = new \Protobuf\MessageCollection();
                }

                $this->lock->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\SecurityField();

                if ($this->autologout === null) {
                    $this->autologout = new \Protobuf\MessageCollection();
                }

                $this->autologout->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\SecurityField();

                if ($this->fake_secret_phrase === null) {
                    $this->fake_secret_phrase = new \Protobuf\MessageCollection();
                }

                $this->fake_secret_phrase->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\SecurityField();

                if ($this->security_fields === null) {
                    $this->security_fields = new \Protobuf\MessageCollection();
                }

                $this->security_fields->add($innerMessage);

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

        if ($this->name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->name);
        }

        if ($this->permissions !== null) {
            foreach ($this->permissions as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->lock !== null) {
            foreach ($this->lock as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->autologout !== null) {
            foreach ($this->autologout as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->fake_secret_phrase !== null) {
            foreach ($this->fake_secret_phrase as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->security_fields !== null) {
            foreach ($this->security_fields as $val) {
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
        $this->name = null;
        $this->permissions = null;
        $this->lock = null;
        $this->autologout = null;
        $this->fake_secret_phrase = null;
        $this->security_fields = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\SecurityTemplate) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->name = ($message->name !== null) ? $message->name : $this->name;
        $this->permissions = ($message->permissions !== null) ? $message->permissions : $this->permissions;
        $this->lock = ($message->lock !== null) ? $message->lock : $this->lock;
        $this->autologout = ($message->autologout !== null) ? $message->autologout : $this->autologout;
        $this->fake_secret_phrase = ($message->fake_secret_phrase !== null) ? $message->fake_secret_phrase : $this->fake_secret_phrase;
        $this->security_fields = ($message->security_fields !== null) ? $message->security_fields : $this->security_fields;
    }


}

