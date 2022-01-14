<?php

namespace Prgayman\Sms\Contracts;

interface DriverInterface
{
    /**
     * Set mobile number
     * 
     * @param string $mobile
     * @return $this
     */
    public function to(string $mobile);

    /**
     * Set sender Name
     * 
     * @param string $senderName
     * @return $this
     */
    public function from(string $senderName);

    /**
     * Set text message
     * 
     * @param string $message
     * @return $this
     */
    public function message(string $message);

    /** 
     * Get recipient
     * 
     * @return string|null 
     */
    public function getTo();

    /**
     * Get sender name
     * 
     * @return string|null
     */
    public function getFrom();

    /** 
     * Get text message
     * 
     * @return string|null 
     */
    public function getMessage();

    /**
     * Send Message
     * @throws Prgayman\Sms\Exceptions\DriverException
     */
    public function send();
}
