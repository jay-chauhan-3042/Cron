<?php
namespace chronos;

/**
 * Autogenerated by Thrift Compiler (0.18.0)
 *
 * DO NOT EDIT UNLESS YOU ARE SURE THAT YOU KNOW WHAT YOU ARE DOING
 *  @generated
 */
use Thrift\Base\TBase;
use Thrift\Type\TType;
use Thrift\Type\TMessageType;
use Thrift\Exception\TException;
use Thrift\Exception\TProtocolException;
use Thrift\Protocol\TProtocol;
use Thrift\Protocol\TBinaryProtocolAccelerated;
use Thrift\Exception\TApplicationException;

class Job
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'identifier',
            'isRequired' => true,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobIdentifier',
        ),
        2 => array(
            'var' => 'metaData',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobMetadata',
        ),
        3 => array(
            'var' => 'executionInfo',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobExecutionInfo',
        ),
        4 => array(
            'var' => 'authentication',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobAuthentication',
        ),
        5 => array(
            'var' => 'notification',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobNotification',
        ),
        6 => array(
            'var' => 'schedule',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobSchedule',
        ),
        7 => array(
            'var' => 'data',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobData',
        ),
        8 => array(
            'var' => 'extendedData',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\JobExtendedData',
        ),
    );

    /**
     * @var \chronos\JobIdentifier
     */
    public $identifier = null;
    /**
     * @var \chronos\JobMetadata
     */
    public $metaData = null;
    /**
     * @var \chronos\JobExecutionInfo
     */
    public $executionInfo = null;
    /**
     * @var \chronos\JobAuthentication
     */
    public $authentication = null;
    /**
     * @var \chronos\JobNotification
     */
    public $notification = null;
    /**
     * @var \chronos\JobSchedule
     */
    public $schedule = null;
    /**
     * @var \chronos\JobData
     */
    public $data = null;
    /**
     * @var \chronos\JobExtendedData
     */
    public $extendedData = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['identifier'])) {
                $this->identifier = $vals['identifier'];
            }
            if (isset($vals['metaData'])) {
                $this->metaData = $vals['metaData'];
            }
            if (isset($vals['executionInfo'])) {
                $this->executionInfo = $vals['executionInfo'];
            }
            if (isset($vals['authentication'])) {
                $this->authentication = $vals['authentication'];
            }
            if (isset($vals['notification'])) {
                $this->notification = $vals['notification'];
            }
            if (isset($vals['schedule'])) {
                $this->schedule = $vals['schedule'];
            }
            if (isset($vals['data'])) {
                $this->data = $vals['data'];
            }
            if (isset($vals['extendedData'])) {
                $this->extendedData = $vals['extendedData'];
            }
        }
    }

    public function getName()
    {
        return 'Job';
    }


    public function read($input)
    {
        $xfer = 0;
        $fname = null;
        $ftype = 0;
        $fid = 0;
        $xfer += $input->readStructBegin($fname);
        while (true) {
            $xfer += $input->readFieldBegin($fname, $ftype, $fid);
            if ($ftype == TType::STOP) {
                break;
            }
            switch ($fid) {
                case 1:
                    if ($ftype == TType::STRUCT) {
                        $this->identifier = new \chronos\JobIdentifier();
                        $xfer += $this->identifier->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 2:
                    if ($ftype == TType::STRUCT) {
                        $this->metaData = new \chronos\JobMetadata();
                        $xfer += $this->metaData->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 3:
                    if ($ftype == TType::STRUCT) {
                        $this->executionInfo = new \chronos\JobExecutionInfo();
                        $xfer += $this->executionInfo->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 4:
                    if ($ftype == TType::STRUCT) {
                        $this->authentication = new \chronos\JobAuthentication();
                        $xfer += $this->authentication->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 5:
                    if ($ftype == TType::STRUCT) {
                        $this->notification = new \chronos\JobNotification();
                        $xfer += $this->notification->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 6:
                    if ($ftype == TType::STRUCT) {
                        $this->schedule = new \chronos\JobSchedule();
                        $xfer += $this->schedule->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 7:
                    if ($ftype == TType::STRUCT) {
                        $this->data = new \chronos\JobData();
                        $xfer += $this->data->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                case 8:
                    if ($ftype == TType::STRUCT) {
                        $this->extendedData = new \chronos\JobExtendedData();
                        $xfer += $this->extendedData->read($input);
                    } else {
                        $xfer += $input->skip($ftype);
                    }
                    break;
                default:
                    $xfer += $input->skip($ftype);
                    break;
            }
            $xfer += $input->readFieldEnd();
        }
        $xfer += $input->readStructEnd();
        return $xfer;
    }

    public function write($output)
    {
        $xfer = 0;
        $xfer += $output->writeStructBegin('Job');
        if ($this->identifier !== null) {
            if (!is_object($this->identifier)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('identifier', TType::STRUCT, 1);
            $xfer += $this->identifier->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->metaData !== null) {
            if (!is_object($this->metaData)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('metaData', TType::STRUCT, 2);
            $xfer += $this->metaData->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->executionInfo !== null) {
            if (!is_object($this->executionInfo)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('executionInfo', TType::STRUCT, 3);
            $xfer += $this->executionInfo->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->authentication !== null) {
            if (!is_object($this->authentication)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('authentication', TType::STRUCT, 4);
            $xfer += $this->authentication->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->notification !== null) {
            if (!is_object($this->notification)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('notification', TType::STRUCT, 5);
            $xfer += $this->notification->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->schedule !== null) {
            if (!is_object($this->schedule)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('schedule', TType::STRUCT, 6);
            $xfer += $this->schedule->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->data !== null) {
            if (!is_object($this->data)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('data', TType::STRUCT, 7);
            $xfer += $this->data->write($output);
            $xfer += $output->writeFieldEnd();
        }
        if ($this->extendedData !== null) {
            if (!is_object($this->extendedData)) {
                throw new TProtocolException('Bad type in structure.', TProtocolException::INVALID_DATA);
            }
            $xfer += $output->writeFieldBegin('extendedData', TType::STRUCT, 8);
            $xfer += $this->extendedData->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}