<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/filestore/v1/cloud_filestore_service.proto

namespace Google\Cloud\Filestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * UpdateSnapshotRequest updates description and/or labels for a snapshot.
 *
 * Generated from protobuf message <code>google.cloud.filestore.v1.UpdateSnapshotRequest</code>
 */
class UpdateSnapshotRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $update_mask = null;
    /**
     * Required. A snapshot resource.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Snapshot snapshot = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $snapshot = null;

    /**
     * @param \Google\Cloud\Filestore\V1\Snapshot $snapshot   Required. A snapshot resource.
     * @param \Google\Protobuf\FieldMask          $updateMask Required. Mask of fields to update. At least one path must be supplied in
     *                                                        this field.
     *
     * @return \Google\Cloud\Filestore\V1\UpdateSnapshotRequest
     *
     * @experimental
     */
    public static function build(\Google\Cloud\Filestore\V1\Snapshot $snapshot, \Google\Protobuf\FieldMask $updateMask): self
    {
        return (new self())
            ->setSnapshot($snapshot)
            ->setUpdateMask($updateMask);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. Mask of fields to update. At least one path must be supplied in
     *           this field.
     *     @type \Google\Cloud\Filestore\V1\Snapshot $snapshot
     *           Required. A snapshot resource.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Filestore\V1\CloudFilestoreService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. Mask of fields to update. At least one path must be supplied in
     * this field.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * Required. A snapshot resource.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Snapshot snapshot = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Filestore\V1\Snapshot|null
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    public function hasSnapshot()
    {
        return isset($this->snapshot);
    }

    public function clearSnapshot()
    {
        unset($this->snapshot);
    }

    /**
     * Required. A snapshot resource.
     *
     * Generated from protobuf field <code>.google.cloud.filestore.v1.Snapshot snapshot = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Filestore\V1\Snapshot $var
     * @return $this
     */
    public function setSnapshot($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Filestore\V1\Snapshot::class);
        $this->snapshot = $var;

        return $this;
    }

}

