<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message :
 * EncryptServer.Protocol.Vipadmin.create_business_account_response
 */
class create_business_account_response extends \Protobuf\AbstractMessage
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
     * domain_id required string = 2
     *
     * @var string
     */
    protected $domain_id = null;

    /**
     * status required int32 = 3
     *
     * @var int
     */
    protected $status = null;

    /**
     * account optional message = 4
     *
     * @var \EncryptServer\Protocol\Vipadmin\business_account
     */
    protected $account = null;

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
    public function setDomainId($value)
    {
        $this->domain_id = $value;
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
    public function hasAccount()
    {
        return $this->account !== null;
    }

    /**
     * Get 'account' value
     *
     * @return \EncryptServer\Protocol\Vipadmin\business_account
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Set 'account' value
     *
     * @param \EncryptServer\Protocol\Vipadmin\business_account $value
     */
    public function setAccount(\EncryptServer\Protocol\Vipadmin\business_account $value = null)
    {
        $this->account = $value;
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

        if ( ! isset($values['domain_id'])) {
            throw new \InvalidArgumentException('Field "domain_id" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['status'])) {
            throw new \InvalidArgumentException('Field "status" (tag 3) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
            'account' => null
        ], $values);

        $message->setId($values['id']);
        $message->setDomainId($values['domain_id']);
        $message->setStatus($values['status']);
        $message->setAccount($values['account']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'create_business_account_response',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'domain_id',
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
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.business_account'
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
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\create_business_account_response#id" (tag 1) is required but has no value.');
        }

        if ($this->domain_id === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\create_business_account_response#domain_id" (tag 2) is required but has no value.');
        }

        if ($this->status === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\create_business_account_response#status" (tag 3) is required but has no value.');
        }

        if ($this->id !== null) {
            $writer->writeVarint($stream, 8);
            $writer->writeVarint($stream, $this->id);
        }

        if ($this->domain_id !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeString($stream, $this->domain_id);
        }

        if ($this->status !== null) {
            $writer->writeVarint($stream, 24);
            $writer->writeVarint($stream, $this->status);
        }

        if ($this->account !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeVarint($stream, $this->account->serializedSize($sizeContext));
            $this->account->writeTo($context);
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

                $this->domain_id = $reader->readString($stream);

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
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\business_account();

                $this->account = $innerMessage;

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
            $size += $calculator->computeVarintSize($this->id);
        }

        if ($this->domain_id !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->domain_id);
        }

        if ($this->status !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status);
        }

        if ($this->account !== null) {
            $innerSize = $this->account->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
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
        $this->domain_id = null;
        $this->status = null;
        $this->account = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\create_business_account_response) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->domain_id = ($message->domain_id !== null) ? $message->domain_id : $this->domain_id;
        $this->status = ($message->status !== null) ? $message->status : $this->status;
        $this->account = ($message->account !== null) ? $message->account : $this->account;
    }


}

