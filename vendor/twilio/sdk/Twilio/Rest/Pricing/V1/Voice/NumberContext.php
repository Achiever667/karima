<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Pricing\V1\Voice;

use Twilio\InstanceContext;
use Twilio\Values;
use Twilio\Version;

class NumberContext extends InstanceContext {
    /**
     * Initialize the NumberContext
     * 
     * @param \Twilio\Version $version Version that contains the resource
     * @param string $number The number
     * @return \Twilio\Rest\Pricing\V1\Voice\NumberContext 
     */
    public function __construct(Version $version, $number) {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('number' => $number, );

        $this->uri = '/Voice/Numbers/' . rawurlencode($number) . '';
    }

    /**
     * Fetch a NumberInstance
     * 
     * @return NumberInstance Fetched NumberInstance
     */
    public function fetch() {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new NumberInstance($this->version, $payload, $this->solution['number']);
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Pricing.V1.NumberContext ' . implode(' ', $context) . ']';
    }
}