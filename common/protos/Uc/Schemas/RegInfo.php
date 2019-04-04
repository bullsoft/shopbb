<?php
namespace LightCloud\Com\Protos\Uc\Schemas;
use \PhalconPlus\Com\Protos\ProtoBase;

/**
 * @Title("regInfo")
 * @Required({"username", "passwd"})
 */
class RegInfo extends ProtoBase
{
    /**
     * @Key("username")
     * @Type("string")
     * @MinLength(5)
     */
    protected $username;
    /**
     * @Key("mobile")
     * @Type("string")
     * @MaxLength(11)
     * @MinLength(11)
     */
    protected $mobile;
    /**
     * @Key("passwd")
     * @Type("string")
     * @MinLength(6)
     */
    protected $passwd;
    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
    }
    public function getMobile()
    {
        return $this->mobile;
    }
    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }
    public function getPasswd()
    {
        return $this->passwd;
    }
}