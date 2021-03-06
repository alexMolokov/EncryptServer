<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : auth.proto
 */


namespace EncryptServer\Protocol\Auth;

/**
 * Protobuf message : encryptserver.features_response
 */
class features_response extends \Protobuf\AbstractMessage
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
     * server_features repeated enum = 1
     *
     * @var \Protobuf\Collection<\EncryptServer\Protocol\Auth\features_response\ServerFeature>
     */
    protected $server_features = null;

    /**
     * allowed_user_search_fields repeated string = 2
     *
     * @var \Protobuf\Collection
     */
    protected $allowed_user_search_fields = null;

    /**
     * Check if 'server_features' has a value
     *
     * @return bool
     */
    public function hasServerFeaturesList()
    {
        return $this->server_features !== null;
    }

    /**
     * Get 'server_features' value
     *
     * @return \Protobuf\Collection<\EncryptServer\Protocol\Auth\features_response\ServerFeature>
     */
    public function getServerFeaturesList()
    {
        return $this->server_features;
    }

    /**
     * Set 'server_features' value
     *
     * @param \Protobuf\Collection<\EncryptServer\Protocol\Auth\features_response\ServerFeature> $value
     */
    public function setServerFeaturesList(\Protobuf\Collection $value = null)
    {
        $this->server_features = $value;
    }

    /**
     * Add a new element to 'server_features'
     *
     * @param \EncryptServer\Protocol\Auth\features_response\ServerFeature $value
     */
    public function addServerFeatures(\EncryptServer\Protocol\Auth\features_response\ServerFeature $value)
    {
        if ($this->server_features === null) {
            $this->server_features = new \Protobuf\EnumCollection();
        }

        $this->server_features->add($value);
    }

    /**
     * Check if 'allowed_user_search_fields' has a value
     *
     * @return bool
     */
    public function hasAllowedUserSearchFieldsList()
    {
        return $this->allowed_user_search_fields !== null;
    }

    /**
     * Get 'allowed_user_search_fields' value
     *
     * @return \Protobuf\Collection
     */
    public function getAllowedUserSearchFieldsList()
    {
        return $this->allowed_user_search_fields;
    }

    /**
     * Set 'allowed_user_search_fields' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setAllowedUserSearchFieldsList(\Protobuf\Collection $value = null)
    {
        $this->allowed_user_search_fields = $value;
    }

    /**
     * Add a new element to 'allowed_user_search_fields'
     *
     * @param string $value
     */
    public function addAllowedUserSearchFields($value)
    {
        if ($this->allowed_user_search_fields === null) {
            $this->allowed_user_search_fields = new \Protobuf\ScalarCollection();
        }

        $this->allowed_user_search_fields->add($value);
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
            'server_features' => [],
            'allowed_user_search_fields' => []
        ], $values);

        foreach ($values['server_features'] as $item) {
            $message->addServerFeatures($item);
        }

        foreach ($values['allowed_user_search_fields'] as $item) {
            $message->addAllowedUserSearchFields($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'features_response',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'server_features',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_ENUM(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED(),
                    'type_name' => '.encryptserver.features_response.ServerFeature'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'allowed_user_search_fields',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_REPEATED()
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

        if ($this->server_features !== null) {
            foreach ($this->server_features as $val) {
                $writer->writeVarint($stream, 8);
                $writer->writeVarint($stream, $val->value());
            }
        }

        if ($this->allowed_user_search_fields !== null) {
            foreach ($this->allowed_user_search_fields as $val) {
                $writer->writeVarint($stream, 18);
                $writer->writeString($stream, $val);
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
                \Protobuf\WireFormat::assertWireType($wire, 14);

                if ($this->server_features === null) {
                    $this->server_features = new \Protobuf\EnumCollection();
                }

                $this->server_features->add(\EncryptServer\Protocol\Auth\features_response\ServerFeature::valueOf($reader->readVarint($stream)));

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->allowed_user_search_fields === null) {
                    $this->allowed_user_search_fields = new \Protobuf\ScalarCollection();
                }

                $this->allowed_user_search_fields->add($reader->readString($stream));

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

        if ($this->server_features !== null) {
            foreach ($this->server_features as $val) {
                $size += 1;
                $size += $calculator->computeVarintSize($val->value());
            }
        }

        if ($this->allowed_user_search_fields !== null) {
            foreach ($this->allowed_user_search_fields as $val) {
                $size += 1;
                $size += $calculator->computeStringSize($val);
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
        $this->server_features = null;
        $this->allowed_user_search_fields = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Auth\features_response) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->server_features = ($message->server_features !== null) ? $message->server_features : $this->server_features;
        $this->allowed_user_search_fields = ($message->allowed_user_search_fields !== null) ? $message->allowed_user_search_fields : $this->allowed_user_search_fields;
    }


}

