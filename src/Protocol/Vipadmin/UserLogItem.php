<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.UserLogItem
 */
class UserLogItem extends \Protobuf\AbstractMessage
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
     * business_account_id optional string = 2
     *
     * @var string
     */
    protected $business_account_id = null;

    /**
     * session_id optional string = 3
     *
     * @var string
     */
    protected $session_id = null;

    /**
     * ip_address optional string = 4
     *
     * @var string
     */
    protected $ip_address = null;

    /**
     * time_microseconds optional int64 = 5
     *
     * @var int
     */
    protected $time_microseconds = null;

    /**
     * code optional int32 = 6
     *
     * @var int
     */
    protected $code = null;

    /**
     * status optional int32 = 7
     *
     * @var int
     */
    protected $status = null;

    /**
     * arguments repeated string = 8
     *
     * @var \Protobuf\Collection
     */
    protected $arguments = null;

    /**
     * object optional string = 9
     *
     * @var string
     */
    protected $object = null;

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
     * Check if 'session_id' has a value
     *
     * @return bool
     */
    public function hasSessionId()
    {
        return $this->session_id !== null;
    }

    /**
     * Get 'session_id' value
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Set 'session_id' value
     *
     * @param string $value
     */
    public function setSessionId($value = null)
    {
        $this->session_id = $value;
    }

    /**
     * Check if 'ip_address' has a value
     *
     * @return bool
     */
    public function hasIpAddress()
    {
        return $this->ip_address !== null;
    }

    /**
     * Get 'ip_address' value
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->ip_address;
    }

    /**
     * Set 'ip_address' value
     *
     * @param string $value
     */
    public function setIpAddress($value = null)
    {
        $this->ip_address = $value;
    }

    /**
     * Check if 'time_microseconds' has a value
     *
     * @return bool
     */
    public function hasTimeMicroseconds()
    {
        return $this->time_microseconds !== null;
    }

    /**
     * Get 'time_microseconds' value
     *
     * @return int
     */
    public function getTimeMicroseconds()
    {
        return $this->time_microseconds;
    }

    /**
     * Set 'time_microseconds' value
     *
     * @param int $value
     */
    public function setTimeMicroseconds($value = null)
    {
        $this->time_microseconds = $value;
    }

    /**
     * Check if 'code' has a value
     *
     * @return bool
     */
    public function hasCode()
    {
        return $this->code !== null;
    }

    /**
     * Get 'code' value
     *
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set 'code' value
     *
     * @param int $value
     */
    public function setCode($value = null)
    {
        $this->code = $value;
    }

    /**
     * Check if 'status' has a value
     *
     * @return bool
     */
    public function hasStatus()
    {
        return $this->status !== null;
    }

    /**
     * Get 'status' value
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set 'status' value
     *
     * @param int $value
     */
    public function setStatus($value = null)
    {
        $this->status = $value;
    }

    /**
     * Check if 'arguments' has a value
     *
     * @return bool
     */
    public function hasArgumentsList()
    {
        return $this->arguments !== null;
    }

    /**
     * Get 'arguments' value
     *
     * @return \Protobuf\Collection
     */
    public function getArgumentsList()
    {
        return $this->arguments;
    }

    /**
     * Set 'arguments' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setArgumentsList(\Protobuf\Collection $value = null)
    {
        $this->arguments = $value;
    }

    /**
     * Add a new element to 'arguments'
     *
     * @param string $value
     */
    public function addArguments($value)
    {
        if ($this->arguments === null) {
            $this->arguments = new \Protobuf\ScalarCollection();
        }

        $this->arguments->add($value);
    }

    /**
     * Check if 'object' has a value
     *
     * @return bool
     */
    public function hasObject()
    {
        return $this->object !== null;
    }

    /**
     * Get 'object' value
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set 'object' value
     *
     * @param string $value
     */
    public function setObject($value = null)
    {
        $this->object = $value;
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

        $message = new self();
        $values  = array_merge([
            'business_account_id' => null,
            'session_id' => null,
            'ip_address' => null,
            'time_microseconds' => null,
            'code' => null,
            'status' => null,
            'arguments' => [],
            'object' => null
        ], $values);

        $message->setLogin($values['login']);
        $message->setBusinessAccountId($values['business_account_id']);
        $message->setSessionId($values['session_id']);
        $message->setIpAddress($values['ip_address']);
        $message->setTimeMicroseconds($values['time_microseconds']);
        $message->setCode($values['code']);
        $message->setStatus($values['status']);
        $message->setObject($values['object']);

        foreach ($values['arguments'] as $item) {
            $message->addArguments($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'UserLogItem',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'login',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'business_account_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'session_id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'ip_address',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'time_microseconds',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT64(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'code',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'arguments',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'object',
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
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\UserLogItem#login" (tag 1) is required but has no value.');
        }

        if ($this->login !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->login);
        }

        if ($this->business_account_id !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->business_account_id);
        }

        if ($this->session_id !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->session_id);
        }

        if ($this->ip_address !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->ip_address);
        }

        if ($this->time_microseconds !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->time_microseconds);
        }

        if ($this->code !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->code);
        }

        if ($this->status !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->status);
        }

        if ($this->arguments !== null) {
            foreach ($this->arguments as $val) {
                $writer->writeVarint($stream, 66);
                $writer->writeString($stream, $val);
            }
        }

        if ($this->object !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->object);
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

                $this->business_account_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->session_id = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->ip_address = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 3);

                $this->time_microseconds = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->code = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->status = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->arguments === null) {
                    $this->arguments = new \Protobuf\ScalarCollection();
                }

                $this->arguments->add($reader->readString($stream));

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->object = $reader->readString($stream);

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

        if ($this->business_account_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->business_account_id);
        }

        if ($this->session_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->session_id);
        }

        if ($this->ip_address !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->ip_address);
        }

        if ($this->time_microseconds !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->time_microseconds);
        }

        if ($this->code !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->code);
        }

        if ($this->status !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status);
        }

        if ($this->arguments !== null) {
            foreach ($this->arguments as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
            }
        }

        if ($this->object !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->object);
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
        $this->business_account_id = null;
        $this->session_id = null;
        $this->ip_address = null;
        $this->time_microseconds = null;
        $this->code = null;
        $this->status = null;
        $this->arguments = null;
        $this->object = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\UserLogItem) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->login = ($message->login !== null) ? $message->login : $this->login;
        $this->business_account_id = ($message->business_account_id !== null) ? $message->business_account_id : $this->business_account_id;
        $this->session_id = ($message->session_id !== null) ? $message->session_id : $this->session_id;
        $this->ip_address = ($message->ip_address !== null) ? $message->ip_address : $this->ip_address;
        $this->time_microseconds = ($message->time_microseconds !== null) ? $message->time_microseconds : $this->time_microseconds;
        $this->code = ($message->code !== null) ? $message->code : $this->code;
        $this->status = ($message->status !== null) ? $message->status : $this->status;
        $this->arguments = ($message->arguments !== null) ? $message->arguments : $this->arguments;
        $this->object = ($message->object !== null) ? $message->object : $this->object;
    }


}
