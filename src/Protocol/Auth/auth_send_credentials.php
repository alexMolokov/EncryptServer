<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : auth.proto
 */


namespace EncryptServer\Protocol\Auth;

/**
 * Protobuf message : encryptserver.auth_send_credentials
 */
class auth_send_credentials extends \Protobuf\AbstractMessage
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
     * resource required string = 3
     *
     * @var string
     */
    protected $resource = null;

    /**
     * client_seed required int32 = 4
     *
     * @var int
     */
    protected $client_seed = null;

    /**
     * digest required bytes = 5
     *
     * @var \Protobuf\Stream
     */
    protected $digest = null;

    /**
     * client_version_from_ini optional uint32 = 6
     *
     * @var int
     */
    protected $client_version_from_ini = null;

    /**
     * client_version_from_def optional uint32 = 7
     *
     * @var int
     */
    protected $client_version_from_def = null;

    /**
     * system_info optional string = 8
     *
     * @var string
     */
    protected $system_info = null;

    /**
     * resource_file_version optional int32 = 9
     *
     * @var int
     */
    protected $resource_file_version = null;

    /**
     * data_channel optional bool = 10
     *
     * @var bool
     */
    protected $data_channel = null;

    /**
     * plaintext_password optional bytes = 11
     *
     * @var \Protobuf\Stream
     */
    protected $plaintext_password = null;

    /**
     * online_mode_key_version optional int32 = 12
     *
     * @var int
     */
    protected $online_mode_key_version = null;

    /**
     * {@inheritdoc}
     */
    public function __construct($stream = null, \Protobuf\Configuration $configuration = null)
    {
        $this->online_mode_key_version = '1';

        parent::__construct($stream, $configuration);
    }

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
     * Check if 'resource' has a value
     *
     * @return bool
     */
    public function hasResource()
    {
        return $this->resource !== null;
    }

    /**
     * Get 'resource' value
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set 'resource' value
     *
     * @param string $value
     */
    public function setResource($value)
    {
        $this->resource = $value;
    }

    /**
     * Check if 'client_seed' has a value
     *
     * @return bool
     */
    public function hasClientSeed()
    {
        return $this->client_seed !== null;
    }

    /**
     * Get 'client_seed' value
     *
     * @return int
     */
    public function getClientSeed()
    {
        return $this->client_seed;
    }

    /**
     * Set 'client_seed' value
     *
     * @param int $value
     */
    public function setClientSeed($value)
    {
        $this->client_seed = $value;
    }

    /**
     * Check if 'digest' has a value
     *
     * @return bool
     */
    public function hasDigest()
    {
        return $this->digest !== null;
    }

    /**
     * Get 'digest' value
     *
     * @return \Protobuf\Stream
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * Set 'digest' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setDigest($value)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->digest = $value;
    }

    /**
     * Check if 'client_version_from_ini' has a value
     *
     * @return bool
     */
    public function hasClientVersionFromIni()
    {
        return $this->client_version_from_ini !== null;
    }

    /**
     * Get 'client_version_from_ini' value
     *
     * @return int
     */
    public function getClientVersionFromIni()
    {
        return $this->client_version_from_ini;
    }

    /**
     * Set 'client_version_from_ini' value
     *
     * @param int $value
     */
    public function setClientVersionFromIni($value = null)
    {
        $this->client_version_from_ini = $value;
    }

    /**
     * Check if 'client_version_from_def' has a value
     *
     * @return bool
     */
    public function hasClientVersionFromDef()
    {
        return $this->client_version_from_def !== null;
    }

    /**
     * Get 'client_version_from_def' value
     *
     * @return int
     */
    public function getClientVersionFromDef()
    {
        return $this->client_version_from_def;
    }

    /**
     * Set 'client_version_from_def' value
     *
     * @param int $value
     */
    public function setClientVersionFromDef($value = null)
    {
        $this->client_version_from_def = $value;
    }

    /**
     * Check if 'system_info' has a value
     *
     * @return bool
     */
    public function hasSystemInfo()
    {
        return $this->system_info !== null;
    }

    /**
     * Get 'system_info' value
     *
     * @return string
     */
    public function getSystemInfo()
    {
        return $this->system_info;
    }

    /**
     * Set 'system_info' value
     *
     * @param string $value
     */
    public function setSystemInfo($value = null)
    {
        $this->system_info = $value;
    }

    /**
     * Check if 'resource_file_version' has a value
     *
     * @return bool
     */
    public function hasResourceFileVersion()
    {
        return $this->resource_file_version !== null;
    }

    /**
     * Get 'resource_file_version' value
     *
     * @return int
     */
    public function getResourceFileVersion()
    {
        return $this->resource_file_version;
    }

    /**
     * Set 'resource_file_version' value
     *
     * @param int $value
     */
    public function setResourceFileVersion($value = null)
    {
        $this->resource_file_version = $value;
    }

    /**
     * Check if 'data_channel' has a value
     *
     * @return bool
     */
    public function hasDataChannel()
    {
        return $this->data_channel !== null;
    }

    /**
     * Get 'data_channel' value
     *
     * @return bool
     */
    public function getDataChannel()
    {
        return $this->data_channel;
    }

    /**
     * Set 'data_channel' value
     *
     * @param bool $value
     */
    public function setDataChannel($value = null)
    {
        $this->data_channel = $value;
    }

    /**
     * Check if 'plaintext_password' has a value
     *
     * @return bool
     */
    public function hasPlaintextPassword()
    {
        return $this->plaintext_password !== null;
    }

    /**
     * Get 'plaintext_password' value
     *
     * @return \Protobuf\Stream
     */
    public function getPlaintextPassword()
    {
        return $this->plaintext_password;
    }

    /**
     * Set 'plaintext_password' value
     *
     * @param \Protobuf\Stream $value
     */
    public function setPlaintextPassword($value = null)
    {
        if ($value !== null && ! $value instanceof \Protobuf\Stream) {
            $value = \Protobuf\Stream::wrap($value);
        }

        $this->plaintext_password = $value;
    }

    /**
     * Check if 'online_mode_key_version' has a value
     *
     * @return bool
     */
    public function hasOnlineModeKeyVersion()
    {
        return $this->online_mode_key_version !== null;
    }

    /**
     * Get 'online_mode_key_version' value
     *
     * @return int
     */
    public function getOnlineModeKeyVersion()
    {
        return $this->online_mode_key_version;
    }

    /**
     * Set 'online_mode_key_version' value
     *
     * @param int $value
     */
    public function setOnlineModeKeyVersion($value = null)
    {
        $this->online_mode_key_version = $value;
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

        if ( ! isset($values['resource'])) {
            throw new \InvalidArgumentException('Field "resource" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['client_seed'])) {
            throw new \InvalidArgumentException('Field "client_seed" (tag 4) is required but has no value.');
        }

        if ( ! isset($values['digest'])) {
            throw new \InvalidArgumentException('Field "digest" (tag 5) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'client_version_from_ini' => null,
            'client_version_from_def' => null,
            'system_info' => null,
            'resource_file_version' => null,
            'data_channel' => null,
            'plaintext_password' => null,
            'online_mode_key_version' => '1'
        ], $values);

        $message->setLogin($values['login']);
        $message->setDomain($values['domain']);
        $message->setResource($values['resource']);
        $message->setClientSeed($values['client_seed']);
        $message->setDigest($values['digest']);
        $message->setClientVersionFromIni($values['client_version_from_ini']);
        $message->setClientVersionFromDef($values['client_version_from_def']);
        $message->setSystemInfo($values['system_info']);
        $message->setResourceFileVersion($values['resource_file_version']);
        $message->setDataChannel($values['data_channel']);
        $message->setPlaintextPassword($values['plaintext_password']);
        $message->setOnlineModeKeyVersion($values['online_mode_key_version']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'auth_send_credentials',
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
                    'name' => 'resource',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'client_seed',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'digest',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'client_version_from_ini',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'client_version_from_def',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_UINT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'system_info',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'resource_file_version',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'data_channel',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BOOL(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 11,
                    'name' => 'plaintext_password',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_BYTES(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 12,
                    'name' => 'online_mode_key_version',
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

        if ($this->login === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Auth\\auth_send_credentials#login" (tag 1) is required but has no value.');
        }

        if ($this->domain === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Auth\\auth_send_credentials#domain" (tag 2) is required but has no value.');
        }

        if ($this->resource === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Auth\\auth_send_credentials#resource" (tag 3) is required but has no value.');
        }

        if ($this->client_seed === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Auth\\auth_send_credentials#client_seed" (tag 4) is required but has no value.');
        }

        if ($this->digest === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Auth\\auth_send_credentials#digest" (tag 5) is required but has no value.');
        }

        if ($this->login !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->login);
        }

        if ($this->domain !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->domain);
        }

        if ($this->resource !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->resource);
        }

        if ($this->client_seed !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->client_seed);
        }

        if ($this->digest !== null) {
            $writer->writeVarint($stream, 42);
            $writer->writeByteStream($stream, $this->digest);
        }

        if ($this->client_version_from_ini !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->client_version_from_ini);
        }

        if ($this->client_version_from_def !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->client_version_from_def);
        }

        if ($this->system_info !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->system_info);
        }

        if ($this->resource_file_version !== null) {
            $writer->writeVarint($stream, 72);
            $writer->writeVarint($stream, $this->resource_file_version);
        }

        if ($this->data_channel !== null) {
            $writer->writeVarint($stream, 80);
            $writer->writeBool($stream, $this->data_channel);
        }

        if ($this->plaintext_password !== null) {
            $writer->writeVarint($stream, 90);
            $writer->writeByteStream($stream, $this->plaintext_password);
        }

        if ($this->online_mode_key_version !== null) {
            $writer->writeVarint($stream, 96);
            $writer->writeVarint($stream, $this->online_mode_key_version);
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->resource = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->client_seed = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->digest = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->client_version_from_ini = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 13);

                $this->client_version_from_def = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->system_info = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->resource_file_version = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->data_channel = $reader->readBool($stream);

                continue;
            }

            if ($tag === 11) {
                \Protobuf\WireFormat::assertWireType($wire, 12);

                $this->plaintext_password = $reader->readByteStream($stream);

                continue;
            }

            if ($tag === 12) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->online_mode_key_version = $reader->readVarint($stream);

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

        if ($this->resource !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->resource);
        }

        if ($this->client_seed !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->client_seed);
        }

        if ($this->digest !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->digest);
        }

        if ($this->client_version_from_ini !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->client_version_from_ini);
        }

        if ($this->client_version_from_def !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->client_version_from_def);
        }

        if ($this->system_info !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->system_info);
        }

        if ($this->resource_file_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->resource_file_version);
        }

        if ($this->data_channel !== null) {
            $size += 1;
            $size += 1;
        }

        if ($this->plaintext_password !== null) {
            $size += 1;
            $size += $calculator->computeByteStreamSize($this->plaintext_password);
        }

        if ($this->online_mode_key_version !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->online_mode_key_version);
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
        $this->resource = null;
        $this->client_seed = null;
        $this->digest = null;
        $this->client_version_from_ini = null;
        $this->client_version_from_def = null;
        $this->system_info = null;
        $this->resource_file_version = null;
        $this->data_channel = null;
        $this->plaintext_password = null;
        $this->online_mode_key_version = '1';
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Auth\auth_send_credentials) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->login = ($message->login !== null) ? $message->login : $this->login;
        $this->domain = ($message->domain !== null) ? $message->domain : $this->domain;
        $this->resource = ($message->resource !== null) ? $message->resource : $this->resource;
        $this->client_seed = ($message->client_seed !== null) ? $message->client_seed : $this->client_seed;
        $this->digest = ($message->digest !== null) ? $message->digest : $this->digest;
        $this->client_version_from_ini = ($message->client_version_from_ini !== null) ? $message->client_version_from_ini : $this->client_version_from_ini;
        $this->client_version_from_def = ($message->client_version_from_def !== null) ? $message->client_version_from_def : $this->client_version_from_def;
        $this->system_info = ($message->system_info !== null) ? $message->system_info : $this->system_info;
        $this->resource_file_version = ($message->resource_file_version !== null) ? $message->resource_file_version : $this->resource_file_version;
        $this->data_channel = ($message->data_channel !== null) ? $message->data_channel : $this->data_channel;
        $this->plaintext_password = ($message->plaintext_password !== null) ? $message->plaintext_password : $this->plaintext_password;
        $this->online_mode_key_version = ($message->online_mode_key_version !== null) ? $message->online_mode_key_version : $this->online_mode_key_version;
    }


}

