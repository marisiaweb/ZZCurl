<?php namespace Utility;

use Exception;

class Post
{
    private $url, $data;

    public function __construct($url)
    {
        $this->url = $url;
    }

    public function setData(Data $data)
    {
        $this->data = $data->getData();
    }

    public function send()
    {
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_NOBODY, 0);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_MAXCONNECTS, true);
        curl_exec($ch);

        $this->checkAgainstInvalidCurlRequest($ch);

        $info = curl_getinfo($ch);

        if ($this->isNotValidResponseCode($info))
            throw new Exception('Invalid curl response. Response code: ' . $info['http_code']);

        return true;
    }

    private function isNotValidResponseCode($info)
    {
        return $this->isValidResponseCode($info) == false;
    }

    private function isValidResponseCode($sResp)
    {
        return $sResp['http_code'] == 200;
    }

    private function checkAgainstInvalidCurlRequest($ch)
    {
        if (curl_errno($ch)) {
            throw new Exception('Problem with curl request.');
        }
    }

}
