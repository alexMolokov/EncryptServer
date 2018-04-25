<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : vipadmin.proto
 */


namespace EncryptServer\Protocol\Vipadmin;

/**
 * Protobuf message : EncryptServer.Protocol.Vipadmin.server_parameters
 */
class server_parameters extends \Protobuf\AbstractMessage
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
     * ldap optional message = 1
     *
     * @var \EncryptServer\Protocol\Vipadmin\server_parameters_ldap
     */
    protected $ldap = null;

    /**
     * user_search optional message = 2
     *
     * @var \EncryptServer\Protocol\Vipadmin\server_parameters_user_search
     */
    protected $user_search = null;

    /**
     * Check if 'ldap' has a value
     *
     * @return bool
     */
    public function hasLdap()
    {
        return $this->ldap !== null;
    }

    /**
     * Get 'ldap' value
     *
     * @return \EncryptServer\Protocol\Vipadmin\server_parameters_ldap
     */
    public function getLdap()
    {
        return $this->ldap;
    }

    /**
     * Set 'ldap' value
     *
     * @param \EncryptServer\Protocol\Vipadmin\server_parameters_ldap $value
     */
    public function setLdap(\EncryptServer\Protocol\Vipadmin\server_parameters_ldap $value = null)
    {
        $this->ldap = $value;
    }

    /**
     * Check if 'user_search' has a value
     *
     * @return bool
     */
    public function hasUserSearch()
    {
        return $this->user_search !== null;
    }

    /**
     * Get 'user_search' value
     *
     * @return \EncryptServer\Protocol\Vipadmin\server_parameters_user_search
     */
    public function getUserSearch()
    {
        return $this->user_search;
    }

    /**
     * Set 'user_search' value
     *
     * @param \EncryptServer\Protocol\Vipadmin\server_parameters_user_search $value
     */
    public function setUserSearch(\EncryptServer\Protocol\Vipadmin\server_parameters_user_search $value = null)
    {
        $this->user_search = $value;
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
            'ldap' => null,
            'user_search' => null
        ], $values);

        $message->setLdap($values['ldap']);
        $message->setUserSearch($values['user_search']);

        return $message;
    }

    /**
     * {@inheritdoc}
     */
    public static function descriptor()
    {
        return \google\protobuf\DescriptorProto::fromArray([
            'name'      => 'server_parameters',
            'field'     => [
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 1,
                    'name' => 'ldap',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.server_parameters_ldap'
                ]),
                \google\protobuf\FieldDescriptorProto::fromArray([
                    'number' => 2,
                    'name' => 'user_search',
                    'type' => \google\protobuf\FieldDescriptorProto\Type::TYPE_MESSAGE(),
                    'label' => \google\protobuf\FieldDescriptorProto\Label::LABEL_OPTIONAL(),
                    'type_name' => '.EncryptServer.Protocol.Vipadmin.server_parameters_user_search'
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

        if ($this->ldap !== null) {
            $writer->writeVarint($stream, 10);
            $writer->writeVarint($stream, $this->ldap->serializedSize($sizeContext));
            $this->ldap->writeTo($context);
        }

        if ($this->user_search !== null) {
            $writer->writeVarint($stream, 18);
            $writer->writeVarint($stream, $this->user_search->serializedSize($sizeContext));
            $this->user_search->writeTo($context);
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
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\server_parameters_ldap();

                $this->ldap = $innerMessage;

                $context->setLength($innerSize);
                $innerMessage->readFrom($context);
                $context->setLength($length);

                continue;
            }

            if ($tag === 2) {
                \Protobuf\WireFormat::assertWireType($wire, 11);

                $innerSize    = $reader->readVarint($stream);
                $innerMessage = new \EncryptServer\Protocol\Vipadmin\server_parameters_user_search();

                $this->user_search = $innerMessage;

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

        if ($this->ldap !== null) {
            $innerSize = $this->ldap->serializedSize($context);

            $size += 1;
            $size += $innerSize;
            $size += $calculator->computeVarintSize($innerSize);
        }

        if ($this->user_search !== null) {
            $innerSize = $this->user_search->serializedSize($context);

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
        $this->ldap = null;
        $this->user_search = null;
    }

    /**
     * {@inheritdoc}
     */
    public function merge(\Protobuf\Message $message)
    {
        if ( ! $message instanceof \EncryptServer\Protocol\Vipadmin\server_parameters) {
            throw new \InvalidArgumentException(sprintf('Argument 1 passed to %s must be a %s, %s given', __METHOD__, __CLASS__, get_class($message)));
        }

        $this->ldap = ($message->ldap !== null) ? $message->ldap : $this->ldap;
        $this->user_search = ($message->user_search !== null) ? $message->user_search : $this->user_search;
    }


}

