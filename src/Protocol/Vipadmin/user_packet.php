<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.user_packet
 */
class user_packet extends \Protobuf\AbstractMessage
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
     * user_limit required int32 = 2
     *
     * @var int
     */
    protected $user_limit = null;

    /**
     * date_from required string = 3
     *
     * @var string
     */
    protected $date_from = null;

    /**
     * date_to required string = 4
     *
     * @var string
     */
    protected $date_to = null;

    /**
     * status required int32 = 5
     *
     * @var int
     */
    protected $status = null;

    /**
     * user_count required int32 = 6
     *
     * @var int
     */
    protected $user_count = null;

    /**
     * blocked required int32 = 7
     *
     * @var int
     */
    protected $blocked = null;

    /**
     * plan required string = 8
     *
     * @var string
     */
    protected $plan = null;

    /**
     * plan_name required string = 9
     *
     * @var string
     */
    protected $plan_name = null;

    /**
     * created required string = 10
     *
     * @var string
     */
    protected $created = null;

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
    public function setUserLimit($value)
    {
        $this->user_limit = $value;
    }

    /**
     * Check if 'date_from' has a value
     *
     * @return bool
     */
    public function hasDateFrom()
    {
        return $this->date_from !== null;
    }

    /**
     * Get 'date_from' value
     *
     * @return string
     */
    public function getDateFrom()
    {
        return $this->date_from;
    }

    /**
     * Set 'date_from' value
     *
     * @param string $value
     */
    public function setDateFrom($value)
    {
        $this->date_from = $value;
    }

    /**
     * Check if 'date_to' has a value
     *
     * @return bool
     */
    public function hasDateTo()
    {
        return $this->date_to !== null;
    }

    /**
     * Get 'date_to' value
     *
     * @return string
     */
    public function getDateTo()
    {
        return $this->date_to;
    }

    /**
     * Set 'date_to' value
     *
     * @param string $value
     */
    public function setDateTo($value)
    {
        $this->date_to = $value;
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
     * Check if 'user_count' has a value
     *
     * @return bool
     */
    public function hasUserCount()
    {
        return $this->user_count !== null;
    }

    /**
     * Get 'user_count' value
     *
     * @return int
     */
    public function getUserCount()
    {
        return $this->user_count;
    }

    /**
     * Set 'user_count' value
     *
     * @param int $value
     */
    public function setUserCount($value)
    {
        $this->user_count = $value;
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
     * @return int
     */
    public function getBlocked()
    {
        return $this->blocked;
    }

    /**
     * Set 'blocked' value
     *
     * @param int $value
     */
    public function setBlocked($value)
    {
        $this->blocked = $value;
    }

    /**
     * Check if 'plan' has a value
     *
     * @return bool
     */
    public function hasPlan()
    {
        return $this->plan !== null;
    }

    /**
     * Get 'plan' value
     *
     * @return string
     */
    public function getPlan()
    {
        return $this->plan;
    }

    /**
     * Set 'plan' value
     *
     * @param string $value
     */
    public function setPlan($value)
    {
        $this->plan = $value;
    }

    /**
     * Check if 'plan_name' has a value
     *
     * @return bool
     */
    public function hasPlanName()
    {
        return $this->plan_name !== null;
    }

    /**
     * Get 'plan_name' value
     *
     * @return string
     */
    public function getPlanName()
    {
        return $this->plan_name;
    }

    /**
     * Set 'plan_name' value
     *
     * @param string $value
     */
    public function setPlanName($value)
    {
        $this->plan_name = $value;
    }

    /**
     * Check if 'created' has a value
     *
     * @return bool
     */
    public function hasCreated()
    {
        return $this->created !== null;
    }

    /**
     * Get 'created' value
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set 'created' value
     *
     * @param string $value
     */
    public function setCreated($value)
    {
        $this->created = $value;
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

        if ( ! isset($values['user_limit'])) {
            throw new \InvalidArgumentException('Field "user_limit" (tag 2) is required but has no value.');
        }

        if ( ! isset($values['date_from'])) {
            throw new \InvalidArgumentException('Field "date_from" (tag 3) is required but has no value.');
        }

        if ( ! isset($values['date_to'])) {
            throw new \InvalidArgumentException('Field "date_to" (tag 4) is required but has no value.');
        }

        if ( ! isset($values['status'])) {
            throw new \InvalidArgumentException('Field "status" (tag 5) is required but has no value.');
        }

        if ( ! isset($values['user_count'])) {
            throw new \InvalidArgumentException('Field "user_count" (tag 6) is required but has no value.');
        }

        if ( ! isset($values['blocked'])) {
            throw new \InvalidArgumentException('Field "blocked" (tag 7) is required but has no value.');
        }

        if ( ! isset($values['plan'])) {
            throw new \InvalidArgumentException('Field "plan" (tag 8) is required but has no value.');
        }

        if ( ! isset($values['plan_name'])) {
            throw new \InvalidArgumentException('Field "plan_name" (tag 9) is required but has no value.');
        }

        if ( ! isset($values['created'])) {
            throw new \InvalidArgumentException('Field "created" (tag 10) is required but has no value.');
        }

        $message = new self();
        $values  = array_merge([
        ], $values);

        $message->setId($values['id']);
        $message->setUserLimit($values['user_limit']);
        $message->setDateFrom($values['date_from']);
        $message->setDateTo($values['date_to']);
        $message->setStatus($values['status']);
        $message->setUserCount($values['user_count']);
        $message->setBlocked($values['blocked']);
        $message->setPlan($values['plan']);
        $message->setPlanName($values['plan_name']);
        $message->setCreated($values['created']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'user_packet',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'id',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'user_limit',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 3,
                    'name' => 'date_from',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 4,
                    'name' => 'date_to',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 5,
                    'name' => 'status',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 6,
                    'name' => 'user_count',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 7,
                    'name' => 'blocked',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_INT32(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 8,
                    'name' => 'plan',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 9,
                    'name' => 'plan_name',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 10,
                    'name' => 'created',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REQUIRED()
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
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#id" (tag 1) is required but has no value.');
        }

        if ($this->user_limit === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#user_limit" (tag 2) is required but has no value.');
        }

        if ($this->date_from === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#date_from" (tag 3) is required but has no value.');
        }

        if ($this->date_to === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#date_to" (tag 4) is required but has no value.');
        }

        if ($this->status === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#status" (tag 5) is required but has no value.');
        }

        if ($this->user_count === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#user_count" (tag 6) is required but has no value.');
        }

        if ($this->blocked === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#blocked" (tag 7) is required but has no value.');
        }

        if ($this->plan === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#plan" (tag 8) is required but has no value.');
        }

        if ($this->plan_name === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#plan_name" (tag 9) is required but has no value.');
        }

        if ($this->created === null) {
            throw new \UnexpectedValueException('Field "\\EncryptServer\\Protocol\\Vipadmin\\user_packet#created" (tag 10) is required but has no value.');
        }

        if ($this->id !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->id);
        }

        if ($this->user_limit !== null) {
            $writer->writeVarint($stream, 16);
            $writer->writeVarint($stream, $this->user_limit);
        }

        if ($this->date_from !== null) {
            $writer->writeVarint($stream, 26);
            $writer->writeString($stream, $this->date_from);
        }

        if ($this->date_to !== null) {
            $writer->writeVarint($stream, 34);
            $writer->writeString($stream, $this->date_to);
        }

        if ($this->status !== null) {
            $writer->writeVarint($stream, 40);
            $writer->writeVarint($stream, $this->status);
        }

        if ($this->user_count !== null) {
            $writer->writeVarint($stream, 48);
            $writer->writeVarint($stream, $this->user_count);
        }

        if ($this->blocked !== null) {
            $writer->writeVarint($stream, 56);
            $writer->writeVarint($stream, $this->blocked);
        }

        if ($this->plan !== null) {
            $writer->writeVarint($stream, 66);
            $writer->writeString($stream, $this->plan);
        }

        if ($this->plan_name !== null) {
            $writer->writeVarint($stream, 74);
            $writer->writeString($stream, $this->plan_name);
        }

        if ($this->created !== null) {
            $writer->writeVarint($stream, 82);
            $writer->writeString($stream, $this->created);
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
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->user_limit = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 3) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->date_from = $reader->readString($stream);

                continue;
            }

            if ($tag === 4) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->date_to = $reader->readString($stream);

                continue;
            }

            if ($tag === 5) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->status = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 6) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->user_count = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 7) {
                \Protobuf\WireFormat::assertWireType($wire, 5);

                $this->blocked = $reader->readVarint($stream);

                continue;
            }

            if ($tag === 8) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->plan = $reader->readString($stream);

                continue;
            }

            if ($tag === 9) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->plan_name = $reader->readString($stream);

                continue;
            }

            if ($tag === 10) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->created = $reader->readString($stream);

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

        if ($this->user_limit !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->user_limit);
        }

        if ($this->date_from !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->date_from);
        }

        if ($this->date_to !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->date_to);
        }

        if ($this->status !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->status);
        }

        if ($this->user_count !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->user_count);
        }

        if ($this->blocked !== null) {
            $size += 1;
            $size += $calculator->computeVarintSize($this->blocked);
        }

        if ($this->plan !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->plan);
        }

        if ($this->plan_name !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->plan_name);
        }

        if ($this->created !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->created);
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
        $this->user_limit = null;
        $this->date_from = null;
        $this->date_to = null;
        $this->status = null;
        $this->user_count = null;
        $this->blocked = null;
        $this->plan = null;
        $this->plan_name = null;
        $this->created = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\user_packet) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->id = ($message->id !== null) ? $message->id : $this->id;
        $this->user_limit = ($message->user_limit !== null) ? $message->user_limit : $this->user_limit;
        $this->date_from = ($message->date_from !== null) ? $message->date_from : $this->date_from;
        $this->date_to = ($message->date_to !== null) ? $message->date_to : $this->date_to;
        $this->status = ($message->status !== null) ? $message->status : $this->status;
        $this->user_count = ($message->user_count !== null) ? $message->user_count : $this->user_count;
        $this->blocked = ($message->blocked !== null) ? $message->blocked : $this->blocked;
        $this->plan = ($message->plan !== null) ? $message->plan : $this->plan;
        $this->plan_name = ($message->plan_name !== null) ? $message->plan_name : $this->plan_name;
        $this->created = ($message->created !== null) ? $message->created : $this->created;
    }


}

