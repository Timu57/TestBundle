<?php
/**
 * Created by PhpStorm.
 * User: timucinunal
 * Date: 04.04.18
 * Time: 11:29
 */

namespace Timu57\TestBundle\Service;


use Symfony\Component\HttpFoundation\RequestStack;

class TestService
{
    private $message1 = '';
    private $message2 = '';
    private $uri = '';

    public function __construct($message1, $message2, RequestStack $requestStack)
    {
        $this->message1 = $message1;
        $this->message2 = $message2;
        $request = $requestStack->getCurrentRequest();
        $this->uri = $request->getUriForPath('');
    }

    /**
     * @return string
     */
    public function getMessage1()
    {
        return $this->message1;
    }

    /**
     * @return string
     */
    public function getMessage2()
    {
        return $this->message2;
    }

    /**
     * @return string
     */
    public function getHallo(){
        return $this->getMessage1() . " " . $this->getMessage2() . " von: " . $this->uri;
    }

}