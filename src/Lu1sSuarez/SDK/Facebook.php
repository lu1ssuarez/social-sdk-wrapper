<?php
    
    namespace Lu1sSuarez\SDK;
    
    use Lu1sSuarez\Exceptions\SDKException;
    
    class Facebook implements HelperSDK {
        
        public function check_config(array $config) {
            $config = array_merge([
                'app_id'     => null,
                'app_secret' => null,
            ], $config);
            
            if (!$config['app_id']) {
                throw new SDKException('Facebook Required "app_id" key not supplied in config and could not find fallback environment variable "' . \Facebook\Facebook::APP_ID_ENV_NAME . '"');
            }
            
            if (!$config['app_secret']) {
                throw new SDKException('Facebook Required "app_secret" key not supplied in config and could not find fallback environment variable "' . \Facebook\Facebook::APP_SECRET_ENV_NAME . '"');
            }
            
            return $config;
        }
    }