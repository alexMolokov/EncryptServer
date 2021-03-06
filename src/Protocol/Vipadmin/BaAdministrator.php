<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.BaAdministrator
 */
class BaAdministrator extends \Protobuf\AbstractMessage
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
     * login required string = 1
     *
     * @var string
     */
    protected $login = null;

    /**
     * domain required string = 2
     *
     * @var string
     */
    protected $domain = null;

    /**
     * role optional int32 = 3
     *
     * @var int
     */
    protected $role = null;

    /**
     * certificate optional string = 4
     *
     * @var string
     */
    protected $certificate = null;

    /**
     * certificate_version optional string = 5
     *
     * @var string
     */
    protected $certificate_version = null;

    /**
     * Check if 'login' has a value
     *
     * @return bool
     */
    public function hasLogin()
    {
        return $this->login !== null;
    }

    /**
     * Get 'login' value
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set 'login' value
     *
     * @param string $value
     */
    public function setLogin($value)
    {
        $this->login = $value;
    }

    /**
     * Check if 'domain' has a value
     *
     * @return bool
     */
    public function hasDomain()
    {
        return $this->domain !== null;
    }

    /**
     * Get 'domain' value
     *
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set 'domain' value
     *
     * @param string $value
     */
    public function setDomain($value)
    {
        $this->domain = $value;
    }

    /**
     * Check if 'role' has a value
     *
     * @return bool
     */
    public function hasRole()
    {
        return $this->role !== null;
    }

    /**
     * Get 'role' value
     *
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set 'role' value
     *
     * @param int $value
     */
    public function setRole($value = null)
    {
        $this->role = $value;
    }

    /**
     * Check if 'certificate' has a value
     *
     * @return bool
     */
    public function hasCertificate()
    {
        return $this->certificate !== null;
    }

    /**
     * Get 'certificate' value
     *
     * @return string
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * Set 'certificate' value
     *
     * @param string $value
     */
    public function setCertificate($value = null)
    {
        $this->certificate = $value;
    }

    /**
     * Check if 'certificate_version' has a value
     *
     * @return bool
     */
    public function hasCertificateVersion()
    {
        return $this->certificate_version !== null;
    }

    /**
     * Get 'certificate_version' value
     *
     * @return string
     */
    public function getCertificateVersion()
    {
        return $this->certificate_version;
    }

    /**
     * Set 'certificate_version' value
     *
     * @param string $value
     */
    public function setCertificateVersion($value = null)
    {
        $this->certificate_version = $value;
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
        if ( ! isset($values['login'])) {
            throw new \InvalidArgumentException('Field "login" (tag 1) is required but has no value.');
        }

        if ( ! isset($values['domain'])) {
            throw new \InvalidArgumentException('Field "domain" (tag 2) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'role' => null,
            'certificate' => null,
            'certificate_version' => null
        ], $values);

        $message->setLogin($values['login']);
        $message->setDomain($values['domain']);
        $message->setRole($values['role']);
        $message->setCertificate($values['certificate']);
        $message->setCertificateVersion($values['certificate_version']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'BaAdministrator',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'login',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'domain',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'role',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'certificate',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'certificate_version',
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

        if ($this->login === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\BaAdministrator#login" (tag 1) is required but has no value.');
        }

        if ($this->domain === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\BaAdministrator#domain" (tag 2) is required but has no value.');
        }

        if ($this->login !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->login);
        }

        if ($this->domain !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->domain);
        }

        if ($this->role !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->role);
        }

        if ($this->certificate !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->certificate);
        }

        if ($this->certificate_version !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeString($stream, $this->certificate_version);
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

                $this->login = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->domain = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->role = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->certificate = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->certificate_version = $reader->readString($stream);

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

        if ($this->login !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->login);
        }

        if ($this->domain !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->domain);
        }

        if ($this->role !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->role);
        }

        if ($this->certificate !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->certificate);
        }

        if ($this->certificate_version !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->certificate_version);
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
        $this->login = null;
        $this->domain = null;
        $this->role = null;
        $this->certificate = null;
        $this->certificate_version = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\BaAdministrator) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->login = ($message->login !== null) ? $message->login : $this->login;
        $this->domain = ($message->domain !== null) ? $message->domain : $this->domain;
        $this->role = ($message->role !== null) ? $message->role : $this->role;
        $this->certificate = ($message->certificate !== null) ? $message->certificate : $this->certificate;
        $this->certificate_version = ($message->certificate_version !== null) ? $message->certificate_version : $this->certificate_version;
    }


}

