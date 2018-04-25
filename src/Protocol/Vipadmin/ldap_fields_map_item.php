<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.ldap_fields_map_item
 */
class ldap_fields_map_item extends \Protobuf\AbstractMessage
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
     * internal_field optional string = 1
     *
     * @var string
     */
    protected $internal_field = null;

    /**
     * ldap_element_names repeated string = 2
     *
     * @var \Protobuf\Collection
     */
    protected $ldap_element_names = null;

    /**
     * Check if 'internal_field' has a value
     *
     * @return bool
     */
    public function hasInternalField()
    {
        return $this->internal_field !== null;
    }

    /**
     * Get 'internal_field' value
     *
     * @return string
     */
    public function getInternalField()
    {
        return $this->internal_field;
    }

    /**
     * Set 'internal_field' value
     *
     * @param string $value
     */
    public function setInternalField($value = null)
    {
        $this->internal_field = $value;
    }

    /**
     * Check if 'ldap_element_names' has a value
     *
     * @return bool
     */
    public function hasLdapElementNamesList()
    {
        return $this->ldap_element_names !== null;
    }

    /**
     * Get 'ldap_element_names' value
     *
     * @return \Protobuf\Collection
     */
    public function getLdapElementNamesList()
    {
        return $this->ldap_element_names;
    }

    /**
     * Set 'ldap_element_names' value
     *
     * @param \Protobuf\Collection $value
     */
    public function setLdapElementNamesList(\Protobuf\Collection $value = null)
    {
        $this->ldap_element_names = $value;
    }

    /**
     * Add a new element to 'ldap_element_names'
     *
     * @param string $value
     */
    public function addLdapElementNames($value)
    {
        if ($this->ldap_element_names === null) {
            $this->ldap_element_names = new \Protobuf\ScalarCollection();
        }

        $this->ldap_element_names->add($value);
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
            'internal_field' => null,
            'ldap_element_names' => []
        ], $values);

        $message->setInternalField($values['internal_field']);

        foreach ($values['ldap_element_names'] as $item) {
            $message->addLdapElementNames($item);
        }

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'ldap_fields_map_item',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'internal_field',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_STRING(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL()
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'ldap_element_names',
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

        if ($this->internal_field !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeString($stream, $this->internal_field);
        }

        if ($this->ldap_element_names !== null) {
            foreach ($this->ldap_element_names as $val) {
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
                \Protobuf\WireFormat::assertWireType($wire, 9);

                $this->internal_field = $reader->readString($stream);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 9);

                if ($this->ldap_element_names === null) {
                    $this->ldap_element_names = new \Protobuf\ScalarCollection();
                }

                $this->ldap_element_names->add($reader->readString($stream));

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

        if ($this->internal_field !== null) {
            $size += 1;
            $size += $calculator->computeStringSize($this->internal_field);
        }

        if ($this->ldap_element_names !== null) {
            foreach ($this->ldap_element_names as $val) {
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
        $this->internal_field = null;
        $this->ldap_element_names = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\ldap_fields_map_item) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->internal_field = ($message->internal_field !== null) ? $message->internal_field : $this->internal_field;
        $this->ldap_element_names = ($message->ldap_element_names !== null) ? $message->ldap_element_names : $this->ldap_element_names;
    }


}

