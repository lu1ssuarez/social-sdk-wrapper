<?php
    
    namespace Lu1sSuarez;
    
    use Lu1sSuarez\Exceptions\SDKException;
    use Symfony\Component\VarDumper\VarDumper;

    /**
     * Class Social
     *
     * @package Lu1sSuarez
     */
    class Social {
        /**
         * @const string Version number of the Social SDK Wrapper.
         */
        const VERSION = '1.1.0';
        
        /**
         * @var object List of permitted SDK
         */
        protected $sdk;

        /**
         * @var string Selected SDK
         */
        public $sdk_current;

        /**
         * @var array Config SDK interface
         */
        public $config;
        
        /**
         * Social constructor.
         *
         * @param string $sdk
         * @param array  $config
         *
         * @throws SDKException
         */
        public function __construct($sdk, array $config = []) {
            $this->sdk           = new \stdClass;
            $this->sdk->Facebook = 'Facebook';

            $this->sdk_current = ucfirst($sdk);

            if (!isset($this->sdk->{$this->sdk_current})) {
                throw new SDKException('The chosen sdk is currently not available, if you want to collaborate in the incorporation of ' . $this->sdk_current . ' we invite you to join our partnership. Available SDKs (' . implode(",", (array)$this->sdk) . ').');
            }

            $classNameSDK = 'Lu1sSuarez\\SDK\\' . $this->sdk_current;
            $this->config = (new $classNameSDK)->check_config($config);
            
        }
        
    }
