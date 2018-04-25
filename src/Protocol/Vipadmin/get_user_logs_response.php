<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.get_user_logs_response
 */
class get_user_logs_response extends \Protobuf\AbstractMessage
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
     * status optional int32 = 3
     *
     * @var int
     */
    protected $status = null;

    /**
     * offset optional int32 = 4
     *
     * @var int
     */
    protected $offset = null;

    /**
     * total_count optional int32 = 5
     *
     * @var int
     */
    protected $total_count = null;

    /**
     * page_size optional int32 = 6
     *
     * @var int
     */
    protected $page_size = null;

    /**
     * records repeated message = 7
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\UserLogRecord>
     */
    protected $records = null;

    /**
     * login optional string = 8
     *
     * @var string
     */
    protected $login = null;

    /**
     * domain_id optional string = 9
     *
     * @var string
     */
    protected $domain_id = null;

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
     * Check if 'offset' has a value
     *
     * @return bool
     */
    public function hasOffset()
    {
        return $this->offset !== null;
    }

    /**
     * Get 'offset' value
     *
     * @return int
     */
    public function getOffset()
    {
        return $this->offset;
    }

    /**
     * Set 'offset' value
     *
     * @param int $value
     */
    public function setOffset($value = null)
    {
        $this->offset = $value;
    }

    /**
     * Check if 'total_count' has a value
     *
     * @return bool
     */
    public function hasTotalCount()
    {
        return $this->total_count !== null;
    }

    /**
     * Get 'total_count' value
     *
     * @return int
     */
    public function getTotalCount()
    {
        return $this->total_count;
    }

    /**
     * Set 'total_count' value
     *
     * @param int $value
     */
    public function setTotalCount($value = null)
    {
        $this->total_count = $value;
    }

    /**
     * Check if 'page_size' has a value
     *
     * @return bool
     */
    public function hasPageSize()
    {
        return $this->page_size !== null;
    }

    /**
     * Get 'page_size' value
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * Set 'page_size' value
     *
     * @param int $value
     */
    public function setPageSize($value = null)
    {
        $this->page_size = $value;
    }

    /**
     * Check if 'records' has a value
     *
     * @return bool
     */
    public function hasRecordsList()
    {
        return $this->records !== null;
    }

    /**
     * Get 'records' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\UserLogRecord>
     */
    public function getRecordsList()
    {
        return $this->records;
    }

    /**
     * Set 'records' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\UserLogRecord> $value
     */
    public function setRecordsList(\Protobuf\Collection $value = null)
    {
        $this->records = $value;
    }

    /**
     * Add a new element to 'records'
     *
     * @param \EncryptServer\Protocol\Vipadmin\UserLogRecord $value
     */
    public function addRecords(\EncryptServer\Protocol\Vipadmin\UserLogRecord $value)
    {
        if ($this->records === null) {
            $this->records = new \Protobuf\MessageCollection();
        }

        $this->records->add($value);
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
    public function setLogin($value = null)
    {
        $this->login = $value;
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
            'business_account_id' => null,
            'status' => null,
            'offset' => null,
            'total_count' => null,
            'page_size' => null,
            'records' => [],
            'login' => null,
            'domain_id' => null
        ], $values);

        $message->setId($values['id']);
        $message->setBusinessAccountId($values['business_account_id']);
        $message->setStatus($values['status']);
        $message->setOffset($values['offset']);
        $message->setTotalCount($values['total_count']);
        $message->setPageSize($values['page_size']);
        $message->setLogin($values['login']);
        $message->setDomainId($values['domain_id']);

        foreach ($values['records'] as $item) {
            $message->addRecords($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'get_user_logs_response',
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
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'offset',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'total_count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'page_size',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'records',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.UserLogRecord'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'login',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'domain_id',
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
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\get_user_logs_response#id" (tag 1) is required but has no value.');
        }

        if ($this->id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->id);
        }

        if ($this->business_account_id !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->business_account_id);
        }

        if ($this->status !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->status);
        }

        if ($this->offset !== null) {
            $writer->writeVarint($stream, 32);
            $writer->writeVarint($stream, $this->offset);
        }

        if ($this->total_count !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->total_count);
        }

        if ($this->page_size !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->page_size);
        }

        if ($this->records !== null) {
            foreach ($this->records as $val) {
                $writer->writeVarint($stream, 58);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->login !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->login);
        }

        if ($this->domain_id !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->domain_id);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->status = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->offset = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->total_count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->page_size = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\UserLogRecord();

                if ($this->records === null) {
                    $this->records = new \Protobuf\MessageCollection();
                }

                $this->records->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->login = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->domain_id = $reader->readString($stream);

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

        if ($this->status !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status);
        }

        if ($this->offset !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->offset);
        }

        if ($this->total_count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->total_count);
        }

        if ($this->page_size !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->page_size);
        }

        if ($this->records !== null) {
            foreach ($this->records as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->login !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->login);
        }

        if ($this->domain_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->domain_id);
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
        $this->status = null;
        $this->offset = null;
        $this->total_count = null;
        $this->page_size = null;
        $this->records = null;
        $this->login = null;
        $this->domain_id = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\get_user_logs_response) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->business_account_id = ($message->business_account_id !== null) ? $message->business_account_id : $this->business_account_id;
        $this->status = ($message->status !== null) ? $message->status : $this->status;
        $this->offset = ($message->offset !== null) ? $message->offset : $this->offset;
        $this->total_count = ($message->total_count !== null) ? $message->total_count : $this->total_count;
        $this->page_size = ($message->page_size !== null) ? $message->page_size : $this->page_size;
        $this->records = ($message->records !== null) ? $message->records : $this->records;
        $this->login = ($message->login !== null) ? $message->login : $this->login;
        $this->domain_id = ($message->domain_id !== null) ? $message->domain_id : $this->domain_id;
    }


}
