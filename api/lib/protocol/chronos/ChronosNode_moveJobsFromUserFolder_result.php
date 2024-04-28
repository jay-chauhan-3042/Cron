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

class ChronosNode_moveJobsFromUserFolder_result
{
    static public $isValidate = false;

    static public $_TSPEC = array(
        1 => array(
            'var' => 'ie',
            'isRequired' => false,
            'type' => TType::STRUCT,
            'class' => '\chronos\InternalError',
        ),
    );

    /**
     * @var \chronos\InternalError
     */
    public $ie = null;

    public function __construct($vals = null)
    {
        if (is_array($vals)) {
            if (isset($vals['ie'])) {
                $this->ie = $vals['ie'];
            }
        }
    }

    public function getName()
    {
        return 'ChronosNode_moveJobsFromUserFolder_result';
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
                        $this->ie = new \chronos\InternalError();
                        $xfer += $this->ie->read($input);
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
        $xfer += $output->writeStructBegin('ChronosNode_moveJobsFromUserFolder_result');
        if ($this->ie !== null) {
            $xfer += $output->writeFieldBegin('ie', TType::STRUCT, 1);
            $xfer += $this->ie->write($output);
            $xfer += $output->writeFieldEnd();
        }
        $xfer += $output->writeFieldStop();
        $xfer += $output->writeStructEnd();
        return $xfer;
    }
}
