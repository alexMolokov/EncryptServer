<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message :
 * EncryptServer.Protocol.Vipadmin.export_accounts_autoconf_response
 */
class export_accounts_autoconf_response extends \Protobuf\AbstractMessage
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
     * status required int32 = 3
     *
     * @var int
     */
    protected $status = null;

    /**
     * account repeated message = 4
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\ExportAccountAutoconf>
     */
    protected $account = null;

    /**
     * total optional int32 = 5
     *
     * @var int
     */
    protected $total = null;

    /**
     * finished optional bool = 6
     *
     * @var bool
     */
    protected $finished = null;

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
    public function setStatus($value)
    {
        $this->status = $value;
    }

    /**
     * Check if 'account' has a value
     *
     * @return bool
     */
    public function hasAccountList()
    {
        return $this->account !== null;
    }

    /**
     * Get 'account' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\ExportAccountAutoconf>
     */
    public function getAccountList()
    {
        return $this->account;
    }

    /**
     * Set 'account' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Vipadmin\ExportAccountAutoconf> $value
     */
    public function setAccountList(\Protobuf\Collection $value = null)
    {
        $this->account = $value;
    }

    /**
     * Add a new element to 'account'
     *
     * @param \EncryptServer\Protocol\Vipadmin\ExportAccountAutoconf $value
     */
    public function addAccount(\EncryptServer\Protocol\Vipadmin\ExportAccountAutoconf $value)
    {
        if ($this->account === null) {
            $this->account = new \Protobuf\MessageCollection();
        }

        $this->account->add($value);
    }

    /**
     * Check if 'total' has a value
     *
     * @return bool
     */
    public function hasTotal()
    {
        return $this->total !== null;
    }

    /**
     * Get 'total' value
     *
     * @return int
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set 'total' value
     *
     * @param int $value
     */
    public function setTotal($value = null)
    {
        $this->total = $value;
    }

    /**
     * Check if 'finished' has a value
     *
     * @return bool
     */
    public function hasFinished()
    {
        return $this->finished !== null;
    }

    /**
     * Get 'finished' value
     *
     * @return bool
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Set 'finished' value
     *
     * @param bool $value
     */
    public function setFinished($value = null)
    {
        $this->finished = $value;
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

        if ( ! isset($values['status'])) {
            throw new \InvalidArgumentException('Field "status" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'account' => [],
            'total' => null,
            'finished' => null
        ], $values);

        $message->setId($values['id']);
        $message->setBusinessAccountId($values['business_account_id']);
        $message->setStatus($values['status']);
        $message->setTotal($values['total']);
        $message->setFinished($values['finished']);

        foreach ($values['account'] as $item) {
            $message->addAccount($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'export_accounts_autoconf_response',
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
                    'name' => 'status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'account',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.ExportAccountAutoconf'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'total',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'finished',
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

        if ($this->id === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\export_accounts_autoconf_response#id" (tag 1) is required but has no value.');
        }

        if ($this->business_account_id === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\export_accounts_autoconf_response#business_account_id" (tag 2) is required but has no value.');
        }

        if ($this->status === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\export_accounts_autoconf_response#status" (tag 3) is required but has no value.');
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

        if ($this->account !== null) {
            foreach ($this->account as $val) {
                $writer->writeVarint($stream, 34);
                $writer->writeVarint($stream, $val->serializedSize($sizeContext));
                $val->writeTo($context);
            }
        }

        if ($this->total !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->total);
        }

        if ($this->finished !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeBool($stream, $this->finished);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\ExportAccountAutoconf();

                if ($this->account === null) {
                    $this->account = new \Protobuf\MessageCollection();
                }

                $this->account->add($innerMessage);

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->total = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 8);

                $this->finished = $reader->readBool($stream);

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

        if ($this->account !== null) {
            foreach ($this->account as $val) {
                $innerSize = $val->serializedSize($context);

                $size += 1;
                $size += $innerSize;
                $size += $calculator->computeVarintSize($innerSize);
            }
        }

        if ($this->total !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->total);
        }

        if ($this->finished !== null) {
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
        $this->status = null;
        $this->account = null;
        $this->total = null;
        $this->finished = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\export_accounts_autoconf_response) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->business_account_id = ($message->business_account_id !== null) ? $message->business_account_id : $this->business_account_id;
        $this->status = ($message->status !== null) ? $message->status : $this->status;
        $this->account = ($message->account !== null) ? $message->account : $this->account;
        $this->total = ($message->total !== null) ? $message->total : $this->total;
        $this->finished = ($message->finished !== null) ? $message->finished : $this->finished;
    }


}
