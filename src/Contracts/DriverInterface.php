<?php

namespace Prgayman\Sms\Contracts;

use Prgayman\Sms\SmsDriverResponse;

interface DriverInterface
{
    /**
     * Set mobile number's
     *
     * @param array|string $to
     * @return $this
     */
    public function to(array|string $to);

    /**
     * Set sender Name
     *
     * @param string $senderName
     * @return $this
     */
    public function from(string|null $senderName);

    /**
     * Set text message
     *
     * @param string $message
     * @return $this
     */
    public function message(string $message);

    /**
     * Set type message
     *
     * @param string $type
     * @return $this
     */
    public function type(string $type);

    /**
     * Set sms options
     *
     * @param array $options
     * @return $this
     */
    public function options(array $options);

    /**
     * Get to
     *
     * @return array|string|null
     */
    public function getTo(): array|string|null;

    /**
     * Get sender name
     *
     * @return string|null
     */
    public function getFrom(): string|null;

    /**
     * Get text message
     *
     * @return string|null
     */
    public function getMessage(): string|null;

    /**
     * Get type
     *
     * @return string
     */
    public function getType(): string;

    /**
     * get sms options
     *
     * @return array
     */
    public function getOptions(): array;

    /**
     * Send Message
     *
     * @return \Prgayman\Sms\SmsDriverResponse
     */
    public function send(): SmsDriverResponse;
}
