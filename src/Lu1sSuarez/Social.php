<?php
    
    namespace Lu1sSuarez;
    
    use Lu1sSuarez\Exceptions\SDKException;
    
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
         * @var array List of permitted SDK
         */
        protected $sdk;
        
        /**
         * Social constructor.
         *
         * @param string $sdk
         * @param array  $config
         *
         * @throws SDKException
         */
        public function __construct($sdk, array $config) {
            $this->sdk = ['facebook'];
            
            if (!$this->sdk[$sdk]) {
                throw new SDKException('The chosen sdk is currently not available, if you want to collaborate in the incorporation of ' . $sdk . ' we invite you to join our partnership. Available SDKs ' . implode(",", $this->sdk) . '.');
            }
            
        }
        
    }
